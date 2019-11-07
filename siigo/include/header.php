<SCRIPT>
$(document).ready(function(event){
	$("head").append('<link rel=icon href=images/favicon.png  type="image/png">');
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
		window.sessionStorage.menuColapsed = true;
	}else{
		if(window.sessionStorage.menuColapsed == "true"){
			$("body").addClass( "menuColapsed" );
		}
	}
});
$("[class*=menu-treelike] > li:even").css("background-color","rgba(0, 128, 128, 0.28)");
</SCRIPT>


<?php
if($_SESSION["s_nom_empresa"]!=""){
?>
<script>
var cadena="<button class='btn btn-warning' type='button' style='margin-right:1em;'><span class='glyphicon glyphicon-home'></span>&nbsp&nbsp<?php echo $_SESSION["s_nom_empresa"];?></button>";
$(".btn.btn-info.dropdown-toggle").before(cadena);
</script>
<?php
}
?>

<LINK href="include/recursos/font-awesome/css/font-awesome.min.css" 
rel="stylesheet"></link> 

<script type='text/javascript' src='include/recursos/notificaciones/bootstrap-notify.js'></script>
<script type='text/javascript' src='include/recursos/notificaciones/bootstrap-notify.min.js'></script>
<LINK href="include/recursos/notificaciones/animate.min.css" rel="stylesheet"></link> 
<script>
$.mensaje=function(titulo,mensaje,tipo,tiempo,quitar,progreso,index,desde,alinear){
	$.noti=$.notify({
		title: "<span style='font-weight:bold;'>"+titulo+"</span><br>",
		message:mensaje
    	},{
			element: 'body',
			type: tipo,
			delay: tiempo,
			allow_dismiss: quitar,
			newest_on_top: true,
			showProgressbar: progreso,
			z_index: index,
			placement:{
				from: desde,
            align: alinear
        },
		animate: {
			enter: 'animated bounceIn',
			exit: 'animated bounceOut'
		}
	});
};

$.mensaje2=function(titulo,mensaje,tipo,tiempo,quitar,progreso,index,desde,alinear){
	$.noti2=$.notify({
		title: "<span style='font-weight:bold;'>"+titulo+"</span><br>",
		message:mensaje
    	},{
			element: 'body',
			type: tipo,
			delay: tiempo,
			allow_dismiss: quitar,
			newest_on_top: true,
			showProgressbar: progreso,
			z_index: index,
			placement:{
				from: desde,
            align: alinear
        },
		animate: {
			enter: 'animated bounceIn',
			exit: 'animated bounceOut'
		}
	});
};
</script>
 