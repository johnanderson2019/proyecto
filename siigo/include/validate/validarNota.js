
function validarNota(sVal)
{if(maximoCalificacion<100){var expresion="^("+maximoCalificacion+"|"+maximoCalificacion+".0|([0-"+(maximoCalificacion-1)+"]{1,1}(\\.([0-9]{1,"+decimales+"})?)?))$";}else{var expresion="^("+maximoCalificacion+"|"+maximoCalificacion+".0|([0-"+(maximoCalificacion-1)+"]{1,2}(\\.([0-9]{1,"+decimales+"})?)?))$";}
if(decimales==0){var expresion="^("+maximoCalificacion+"|"+maximoCalificacion+".0|([0-"+(maximoCalificacion-1)+"]{1,2}?))$";}
var regexp=new RegExp(expresion,"g");if(!sVal.match(regexp))
return"valor entre 0.0 y "+maximoCalificacion+" con "+decimales+" decimales";else
return true;}