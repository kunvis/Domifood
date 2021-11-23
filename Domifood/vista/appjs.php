<?php
include ("pagina.php");
class restaurante {
	constructor(informacion){
		this.informacion=informacion;
	}//cierre llave constructor

//metodos

mostrar(){
	alert(`Descripción Local: ${this.informacion} `)
}



}//cierre de llave class

const restaurante1 = new restaurante ("El Gato - Es un restaurante especializado en comidas rápidas, que busca brindar a nuestros clientes el mejor servicio y calidad en nuestros exquisitos platos. Los esperamos para tener el gusto de atenderlos.");
const restaurante2 = new restaurante ("La Tabla - Es un restaurante familiar con platos típicos de nuestra tierra colombiana.");
const restaurante3 = new restaurante ("Asadero Rico Piolin - Ofrece diversidad de platos, a buen precio y delicioso sazón.");
const restaurante4 = new restaurante ("MR. VIKINGO - Ofrece a sus clientes la mejor calidad en comida rápida a un excelente precio. Te esperamos Para que disfrutes con amigos, compañeros y familia de nuestros excelentes productos.");
const restaurante5 = new restaurante ("KFC - Ofrece un sabor unico del pollo con gran innovación en menú con una amplia gama de productos que cuentan con la preferencia del consumidor colombiano.");
const restaurante6 = new restaurante ("Frutería y Heladería Tío Rico - Disfruta de las más exquisitas ensaladas de frutas, Fresas con crema, banana split, Brownie con helado y mucho más... Cálidad y servicio");


function gato() {
	document.getElementById('clasegato').innerHTML=restaurante1.mostrar();
	document.getElementById('clasegato').innerHTML="Informacion nuevamente";
}

function tabla() {
	document.getElementById('clasetabla').innerHTML=restaurante2.mostrar();
	document.getElementById('clasetabla').innerHTML="Informacion nuevamente";
}

function piolin() {
	document.getElementById('clasepiolin').innerHTML=restaurante3.mostrar();
	document.getElementById('clasepiolin').innerHTML="Informacion nuevamente";
}
function vikingos() {
	document.getElementById('clasevikingos').innerHTML=restaurante4.mostrar();
	document.getElementById('clasevikingos').innerHTML="Informacion nuevamente";
}

function kfc() {
	document.getElementById('clasekfc').innerHTML=restaurante5.mostrar();
	document.getElementById('clasekfc').innerHTML="Informacion nuevamente";
}

function tio() {
	document.getElementById('clasetio').innerHTML=restaurante6.mostrar();
	document.getElementById('clasetio').innerHTML="Informacion nuevamente";
}
?>