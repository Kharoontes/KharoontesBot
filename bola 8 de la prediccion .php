<?php
   $respuestas = array(
       "En mi opinión, sí",
       "Es cierto",
       "Es decididamente así",
       "Probablemente",
       "Buen pronóstico",
       "Todo apunta a que sí",
	   "Sin duda",
	   "Sí",
	   "Sí - definitivamente",
	   "Pregunta en otro momento",
	   "Será mejor que no te lo diga ahora",
	   "No puedo predecirlo ahora",
	   "Concéntrate y vuelve a preguntar",
	   "No cuentes con ello",
	   "Mi respuesta es no",
	   "Debes confiar en ello",
	   "Mis fuentes me dicen que no",
	   "Las perspectivas no son buenas",
	   "Muy dudoso"
	   
       );
   $random = array_rand($respuestas);
   echo $respuestas[$random];
?>