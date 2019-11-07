/*
* Project: Bootstrap Notify = v3.1.5
* Description: Turns standard Bootstrap alerts into "Growl-like" notifications.
* Author: Mouse0270 aka Robert McIntosh
* License: MIT License
* Website: https://github.com/mouse0270/bootstrap-growl
*/

/* global define:false, require: false, jQuery:false */

(function (factory) {
	if (typeof define === 'function' && define.amd) {
		// AMD. Register as an anonymous module.
		define(['jquery'], factory);
	} else if (typeof exports === 'object') {
		// Node/CommonJS
		factory(require('jquery'));
	} else {
		// Browser globals
		factory(jQuery);
	}
}(function (jq132) {
	// Create the defaults once
	var defaults = {
		element: 'body',
		position: null,
		type: "info",
		allow_dismiss: true,
		allow_duplicates: true,
		newest_on_top: false,
		showProgressbar: false,
		placement: {
			from: "top",
			align: "right"
		},
		offset: 20,
		spacing: 10,
		z_index: 1031,
		delay: 5000,
		timer: 1000,
		url_target: '_blank',
		mouse_over: null,
		animate: {
			enter: 'animated fadeInDown',
			exit: 'animated fadeOutUp'
		},
		onShow: null,
		onShown: null,
		onClose: null,
		onClosed: null,
        onClick: null,
		icon_type: 'class',
		template: '<div data-notify="container" class="col-xs-11 col-sm-4 alert alert-{0}" role="alert"><button type="button" aria-hidden="true" class="close" data-notify="dismiss">&times;</button><span data-notify="icon"></span> <span data-notify="title">{1}</span> <span data-notify="message">{2}</span><div class="progress" data-notify="progressbar"><div class="progress-bar progress-bar-{0}" role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100" style="width: 0%;"></div></div><a href="{3}" target="{4}" data-notify="url"></a></div>'
	};

	String.format = function () {
		var args = arguments;
        var str = arguments[0];
        return str.replace(/(\{\{\d\}\}|\{\d\})/g, function (str) {
            if (str.substring(0, 2) === "{{") return str;
            var num = parseInt(str.match(/\d/)[0]);
            return args[num + 1];
        });
	};

	function isDuplicateNotification(notification) {
		var isDupe = false;

		jq132('[data-notify="container"]').each(function (i, el) {
			var jq132el = jq132(el);
			var title = jq132el.find('[data-notify="title"]').html().trim();
			var message = jq132el.find('[data-notify="message"]').html().trim();

			// The input string might be different than the actual parsed HTML string!
			// (<br> vs <br /> for example)
			// So we have to force-parse this as HTML here!
			var isSameTitle = title === jq132("<div>" + notification.settings.content.title + "</div>").html().trim();
			var isSameMsg = message === jq132("<div>" + notification.settings.content.message + "</div>").html().trim();
			var isSameType = jq132el.hasClass('alert-' + notification.settings.type);

			if (isSameTitle && isSameMsg && isSameType) {
				//we found the dupe. Set the var and stop checking.
				isDupe = true;
			}
			return !isDupe;
		});

		return isDupe;
	}

	function Notify(element, content, options) {
		// Setup Content of Notify
		var contentObj = {
			content: {
				message: typeof content === 'object' ? content.message : content,
				title: content.title ? content.title : '',
				icon: content.icon ? content.icon : '',
				url: content.url ? content.url : '#',
				target: content.target ? content.target : '-'
			}
		};

		options = jq132.extend(true, {}, contentObj, options);
		this.settings = jq132.extend(true, {}, defaults, options);
		this._defaults = defaults;
		if (this.settings.content.target === "-") {
			this.settings.content.target = this.settings.url_target;
		}
		this.animations = {
			start: 'webkitAnimationStart oanimationstart MSAnimationStart animationstart',
			end: 'webkitAnimationEnd oanimationend MSAnimationEnd animationend'
		};

		if (typeof this.settings.offset === 'number') {
			this.settings.offset = {
				x: this.settings.offset,
				y: this.settings.offset
			};
		}

		//if duplicate messages are not allowed, then only continue if this new message is not a duplicate of one that it already showing
		if (this.settings.allow_duplicates || (!this.settings.allow_duplicates && !isDuplicateNotification(this))) {
			this.init();
		}
	}

	jq132.extend(Notify.prototype, {
		init: function () {
			var self = this;

			this.buildNotify();
			if (this.settings.content.icon) {
				this.setIcon();
			}
			if (this.settings.content.url != "#") {
				this.styleURL();
			}
			this.styleDismiss();
			this.placement();
			this.bind();

			this.notify = {
				jq132ele: this.jq132ele,
				update: function (command, update) {
					var commands = {};
					if (typeof command === "string") {
						commands[command] = update;
					} else {
						commands = command;
					}
					for (var cmd in commands) {
						switch (cmd) {
							case "type":
								this.jq132ele.removeClass('alert-' + self.settings.type);
								this.jq132ele.find('[data-notify="progressbar"] > .progress-bar').removeClass('progress-bar-' + self.settings.type);
								self.settings.type = commands[cmd];
								this.jq132ele.addClass('alert-' + commands[cmd]).find('[data-notify="progressbar"] > .progress-bar').addClass('progress-bar-' + commands[cmd]);
								break;
							case "icon":
								var jq132icon = this.jq132ele.find('[data-notify="icon"]');
								if (self.settings.icon_type.toLowerCase() === 'class') {
									jq132icon.removeClass(self.settings.content.icon).addClass(commands[cmd]);
								} else {
									if (!jq132icon.is('img')) {
										jq132icon.find('img');
									}
									jq132icon.attr('src', commands[cmd]);
								}
								self.settings.content.icon = commands[command];
								break;
							case "progress":
								var newDelay = self.settings.delay - (self.settings.delay * (commands[cmd] / 100));
								this.jq132ele.data('notify-delay', newDelay);
								this.jq132ele.find('[data-notify="progressbar"] > div').attr('aria-valuenow', commands[cmd]).css('width', commands[cmd] + '%');
								break;
							case "url":
								this.jq132ele.find('[data-notify="url"]').attr('href', commands[cmd]);
								break;
							case "target":
								this.jq132ele.find('[data-notify="url"]').attr('target', commands[cmd]);
								break;
							default:
								this.jq132ele.find('[data-notify="' + cmd + '"]').html(commands[cmd]);
						}
					}
					var posX = this.jq132ele.outerHeight() + parseInt(self.settings.spacing) + parseInt(self.settings.offset.y);
					self.reposition(posX);
				},
				close: function () {
					self.close();
				}
			};

		},
		buildNotify: function () {
			var content = this.settings.content;
			this.jq132ele = jq132(String.format(this.settings.template, this.settings.type, content.title, content.message, content.url, content.target));
			this.jq132ele.attr('data-notify-position', this.settings.placement.from + '-' + this.settings.placement.align);
			if (!this.settings.allow_dismiss) {
				this.jq132ele.find('[data-notify="dismiss"]').css('display', 'none');
			}
			if ((this.settings.delay <= 0 && !this.settings.showProgressbar) || !this.settings.showProgressbar) {
				this.jq132ele.find('[data-notify="progressbar"]').remove();
			}
		},
		setIcon: function () {
			if (this.settings.icon_type.toLowerCase() === 'class') {
				this.jq132ele.find('[data-notify="icon"]').addClass(this.settings.content.icon);
			} else {
				if (this.jq132ele.find('[data-notify="icon"]').is('img')) {
					this.jq132ele.find('[data-notify="icon"]').attr('src', this.settings.content.icon);
				} else {
					this.jq132ele.find('[data-notify="icon"]').append('<img src="' + this.settings.content.icon + '" alt="Notify Icon" />');
				}
			}
		},
		styleDismiss: function () {
			this.jq132ele.find('[data-notify="dismiss"]').css({
				position: 'absolute',
				right: '10px',
				top: '5px',
				zIndex: this.settings.z_index + 2
			});
		},
		styleURL: function () {
			this.jq132ele.find('[data-notify="url"]').css({
				backgroundImage: 'url(data:image/gif;base64,R0lGODlhAQABAIAAAAAAAP///yH5BAEAAAAALAAAAAABAAEAAAIBRAA7)',
				height: '100%',
				left: 0,
				position: 'absolute',
				top: 0,
				width: '100%',
				zIndex: this.settings.z_index + 1
			});
		},
		placement: function () {
			var self = this,
				offsetAmt = this.settings.offset.y,
				css = {
					display: 'inline-block',
					margin: '0px auto',
					position: this.settings.position ? this.settings.position : (this.settings.element === 'body' ? 'fixed' : 'absolute'),
					transition: 'all .5s ease-in-out',
					zIndex: this.settings.z_index
				},
				hasAnimation = false,
				settings = this.settings;

			jq132('[data-notify-position="' + this.settings.placement.from + '-' + this.settings.placement.align + '"]:not([data-closing="true"])').each(function () {
				offsetAmt = Math.max(offsetAmt, parseInt(jq132(this).css(settings.placement.from)) + parseInt(jq132(this).outerHeight()) + parseInt(settings.spacing));
			});
			if (this.settings.newest_on_top === true) {
				offsetAmt = this.settings.offset.y;
			}
			css[this.settings.placement.from] = offsetAmt + 'px';

			switch (this.settings.placement.align) {
				case "left":
				case "right":
					css[this.settings.placement.align] = this.settings.offset.x + 'px';
					break;
				case "center":
					css.left = 0;
					css.right = 0;
					break;
			}
			this.jq132ele.css(css).addClass(this.settings.animate.enter);
			jq132.each(Array('webkit-', 'moz-', 'o-', 'ms-', ''), function (index, prefix) {
				self.jq132ele[0].style[prefix + 'AnimationIterationCount'] = 1;
			});

			jq132(this.settings.element).append(this.jq132ele);

			if (this.settings.newest_on_top === true) {
				offsetAmt = (parseInt(offsetAmt) + parseInt(this.settings.spacing)) + this.jq132ele.outerHeight();
				this.reposition(offsetAmt);
			}

			if (jq132.isFunction(self.settings.onShow)) {
				self.settings.onShow.call(this.jq132ele);
			}

			this.jq132ele.one(this.animations.start, function () {
				hasAnimation = true;
			}).one(this.animations.end, function () {
				self.jq132ele.removeClass(self.settings.animate.enter);
				if (jq132.isFunction(self.settings.onShown)) {
					self.settings.onShown.call(this);
				}
			});

			setTimeout(function () {
				if (!hasAnimation) {
					if (jq132.isFunction(self.settings.onShown)) {
						self.settings.onShown.call(this);
					}
				}
			}, 600);
		},
		bind: function () {
			var self = this;

			this.jq132ele.find('[data-notify="dismiss"]').on('click', function () {
				self.close();
			});

			if (jq132.isFunction(self.settings.onClick)) {
			    this.jq132ele.on('click', function (event) {
			        if (event.target != self.jq132ele.find('[data-notify="dismiss"]')[0]) {
			            self.settings.onClick.call(this, event);
			        }
			    });
			}

			this.jq132ele.mouseover(function () {
				jq132(this).data('data-hover', "true");
			}).mouseout(function () {
				jq132(this).data('data-hover', "false");
			});
			this.jq132ele.data('data-hover', "false");

			if (this.settings.delay > 0) {
				self.jq132ele.data('notify-delay', self.settings.delay);
				var timer = setInterval(function () {
					var delay = parseInt(self.jq132ele.data('notify-delay')) - self.settings.timer;
					if ((self.jq132ele.data('data-hover') === 'false' && self.settings.mouse_over === "pause") || self.settings.mouse_over != "pause") {
						var percent = ((self.settings.delay - delay) / self.settings.delay) * 100;
						self.jq132ele.data('notify-delay', delay);
						self.jq132ele.find('[data-notify="progressbar"] > div').attr('aria-valuenow', percent).css('width', percent + '%');
					}
					if (delay <= -(self.settings.timer)) {
						clearInterval(timer);
						self.close();
					}
				}, self.settings.timer);
			}
		},
		close: function () {
			var self = this,
				posX = parseInt(this.jq132ele.css(this.settings.placement.from)),
				hasAnimation = false;

			this.jq132ele.attr('data-closing', 'true').addClass(this.settings.animate.exit);
			self.reposition(posX);

			if (jq132.isFunction(self.settings.onClose)) {
				self.settings.onClose.call(this.jq132ele);
			}

			this.jq132ele.one(this.animations.start, function () {
				hasAnimation = true;
			}).one(this.animations.end, function () {
				jq132(this).remove();
				if (jq132.isFunction(self.settings.onClosed)) {
					self.settings.onClosed.call(this);
				}
			});

			setTimeout(function () {
				if (!hasAnimation) {
					self.jq132ele.remove();
					if (self.settings.onClosed) {
						self.settings.onClosed(self.jq132ele);
					}
				}
			}, 600);
		},
		reposition: function (posX) {
			var self = this,
				notifies = '[data-notify-position="' + this.settings.placement.from + '-' + this.settings.placement.align + '"]:not([data-closing="true"])',
				jq132elements = this.jq132ele.nextAll(notifies);
			if (this.settings.newest_on_top === true) {
				jq132elements = this.jq132ele.prevAll(notifies);
			}
			jq132elements.each(function () {
				jq132(this).css(self.settings.placement.from, posX);
				posX = (parseInt(posX) + parseInt(self.settings.spacing)) + jq132(this).outerHeight();
			});
		}
	});

	jq132.notify = function (content, options) {
		var plugin = new Notify(this, content, options);
		return plugin.notify;
	};
	jq132.notifyDefaults = function (options) {
		defaults = jq132.extend(true, {}, defaults, options);
		return defaults;
	};

	jq132.notifyClose = function (selector) {

		if (typeof selector === "undefined" || selector === "all") {
			jq132('[data-notify]').find('[data-notify="dismiss"]').trigger('click');
		}else if(selector === 'success' || selector === 'info' || selector === 'warning' || selector === 'danger'){
			jq132('.alert-' + selector + '[data-notify]').find('[data-notify="dismiss"]').trigger('click');
		} else if(selector){
			jq132(selector + '[data-notify]').find('[data-notify="dismiss"]').trigger('click');
		}
		else {
			jq132('[data-notify-position="' + selector + '"]').find('[data-notify="dismiss"]').trigger('click');
		}
	};

	jq132.notifyCloseExcept = function (selector) {

		if(selector === 'success' || selector === 'info' || selector === 'warning' || selector === 'danger'){
			jq132('[data-notify]').not('.alert-' + selector).find('[data-notify="dismiss"]').trigger('click');
		} else{
			jq132('[data-notify]').not(selector).find('[data-notify="dismiss"]').trigger('click');
		}
	};


}));


