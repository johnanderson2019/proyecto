<SCRIPT>
$(document).ready(function(event){
	$("nav.bs-fullwidth-navbar").prepend('<div id="openMenu" data-pageid="1" data-container="bc" class=" navbar-form navbar-left   "> <span class="menu-icon glyphicon glyphicon-menu-hamburger"></span></div>');
	$("#openMenu").click(function(event){		
		$("body").toggleClass( "menuColapsed" , function(addOrRemove){
				if ( $("body").hasClass( "menuColapsed") ) {
				   window.sessionStorage.menuColapsed = true;
				} else {
				  window.sessionStorage.menuColapsed = false;
				}
		});
	});
	if(window.sessionStorage.menuColapsed == undefined){
		window.sessionStorage.menuColapsed = false;
	}else{
		if(window.sessionStorage.menuColapsed == "true"){
			$("body").addClass( "menuColapsed" );
		}
	}
});
</SCRIPT>