

# rappitest

#esta prueba fue realizada en HTML5 bootstrap(cargado de la web),jquery(cargado desde la web) angularjs (cargado desde /lib).
#se creó un controlador para una única vista utilizando angular (lastimosamente no alcance a realizarlo como quería por falta de tiempo).
#se eligio un lenguaje complejo para esta prueba debido a su asincronicidad.
#para realizar esta prueba se utilizaron distintos patrones, callbacks, promesas.

#la estructura funciona con un sitio html con un script embebido, este script tiene dos objetos (myTesterObject,myObject).
#myObject se encarga de la lógica de la prueba, desde el manejo de vistas por capas, hasta la inicialización de la matriz y sus respectivas operaciones.
#myTesterObject se encarga de automatizar la prueba siguiendo los pasos (tal cual como un usuario lo realizaría.) 
#Lastimosamente esta parte tiene un problema debido a la asincronia el cual no alcance a solucionar.

#se realizaron pruebas unitarias del funcionamiento del formulario o se puede emular esto haciendo 
#clic sobre "Puede hacer clic aquí para iniciar una prueba automática".


#nota: este código tiene una mala práctica la ausencia de ";" obliga que al interpretador ponerlo, y genera errores si se desea minimizar.

#CODE REFACTORING 

#básicamente a ese código le elimine las líneas en comentarios.

#en mi paradigma de programación sugeriría que para estas validaciones (no me gusta el abuso de sentencias if) se debería crear
#Un componente (nombre de espacios, o clase) que maneje los diferentes errores (clases pequeñas y documentadas), de esta manera se puede realizar
#un mantenimiento de una manera más eficiente a la aplicación (el abuso de if en mi experiencia siempre genera problemas al leer/modificar
#el código)

# ¿En qué consiste el principio de responsabilidad única? ¿Cuál es su propósito?  Nos dice que cada módulo de una clase debe tener una 
#Responsabilidad única, esto nos permite tener aplicaciones poco acopladas, lo cual nos permite hacer modificaciones fácilmente 
#(Como quitar piezas de lego )
#¿Qué características tiene según tu opinión “buen” código o código limpio? el código limpio debe estar documentado, sin abusos de ciclos
#o condiciones, con métodos que no sean grandes. Entregando responsabilidades a quien pertenece, por ejemplo en MVC en el modelo o controlador
#no deberían manejarse validaciones de tipo negocio, deberían haber componentes externos (posiblemente reutilizables) 
#Encargados de esta labor. También se debe dejar la menor cantidad de variables quemadas en código así evitamos tener que llegar a modificarlo
#Por un pequeño cambio.
