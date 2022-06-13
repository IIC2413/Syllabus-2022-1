## Algunos sitios que pueden resultar útiles para la entrega:

- [grupos Entrega3](https://docs.google.com/spreadsheets/d/1zOLS_H-BXF5z3CE1Cl1P-OxniRNW0yF8T3RpE7hyqQ4/edit?usp=sharing)
- [Wiki del curso](https://github.com/IIC2413/Syllabus-2022-1/wiki)
- [Documentación de procedimientos almacenados](https://www.postgresql.org/docs/10/sql-createfunction.html)

### Modificaciones a la rúbrica

- 11/06/2022: Se añaden especificaciones en el procedimiento almacenado solicitado y se modifica el criterio de feedback solicitados ante la imposibilidad de importar un usuario. 

# Rúbrica Entrega 3

## Puntaje Total (75 pts):

Los puntajes asignados son los siguientes:
* **(18 pts) Usuarios y Login**
    * **(6 pts) Login:** Se espera que todo usuario sea capaz de logearse a la aplicación utilizando su username y su contraseña. Para esto se espera además que en el informe se indique la contraseña de todos los usuarios o el criterio utilizado para esto:
        - **(1 pto)** Por login de usuario tipo DGAC   
        - **(1 pto)** Por login de usuario tipo Pasajero   
        - **(1 pto)** Por login de usuario tipo Aerolinea
        - **(1 pto)** Por implementar los campos necesarios para el login en la página web.
        - **(2 ptos)** Por correcto manejo de cierre de sesión.
    * **(12 pts total) Importación de usuarios:** Se entrega 1 archivo en el que se encuentre el procedimiento almacenado o la función de php utilizada para la importación de usuarios y asignación de contraseñas. más específicamente debe cumplir con los siguientes requisitos:
        - **(1 pto)** Tipo de archivo correspondiente al indicado
        - **(1 pts)** Debe poder crear un usuario del tipo DGAC con la contraseña indicada en caso de ser necesario y ser capaz de verificar si es que el usuario ya existe en la base de datos del grupo impar.
        - **(2 pts)** Debe ser capaz de crear usuarios del tipo compañía aérea con el nombre de usuario indicado en el caso de que no existan ya en la tabla de usuarios y ser capaz de verificar esto último.
        - **(1 pto)** Debe ser capaz de agregar contraseñas **aleatorias*** a los usuarios del tipo compañía aerea. 
        - **(2 pts)** Debe ser capaz de crear usuarios del tipo pasajero cuyo username sea su número de pasaporte en el caso de que no existan ya en la tabla de usuarios y ser capaz de verificar esto último.
        - **(2 pts)** Debe ser capaz de agregar una contraseña a los usuarios de tipo pasajero según los criterios solicitados.
        - **(2 pts)** En caso de que no se puedan importar X usuarios, ya sea por un error o por no cumplir las condiciones de importación indicadas en el enunciado, se debe mostrar un mensaje que indique número usuarios de cada tipo que no se han podido importar.
        - **(1 pto)** Por acceder a dicha función con un botón ubicado en la página inicial de la aplicación.

*Cuando se habla de una contraseña aleatoria se refiere a una contraseña con un determinado grado de aleatoriedad sin basarse necesariamente en los datos propios de una entidad, **no es válido ocupar un dato como contraseña ni añadir algo del tipo** datoXX, XXdato, datoXXdato, etc....

* **(30 pts) Información personal y Navegación:**
    * **(15 pts) Usuario DGAC:**
        - **(1 pto) Vista principal:** Se espera que el usuario del tipo DGAC tenga acceso a una vista propia que posea una lista con propuestas de vuelo.
        - **(4 pts) Listado de propuestas de vuelo:** Se espera que el usuario del tipo DGAC vea un listado de propuestas de vuelo **pendientes**(con estado pendiente) y que en este listado se muestren la **totalidad de sus atributos**.
        - **(6 pts) Aceptación/Rechazo de propuestas:** Se espera que el usuario del tipo DGAC sea capaz de aceptar/rechazar propuestas de vuelo que están pendientes, además esto debería actualizar el valor de la propuesta de vuelo(bdd par) y del vuelo(bdd impar) según corresponda.
        - **(4 pts) Filtro por fecha:** Se espera que el usuario del tipo DGAC pueda filtrar el listado de propuestas de vuelo pendiente por fecha, eligiendo el inicio y final del intervalo a filtrar(inclusive). Notar que este filtro es por propuestas que se encuentren al interior del intervalo, ya sea que arriben dentro del intervalo, que partan durante el intervalo o que se encuentren en ejecución durante el intervalo. 
    * **(5 pts) Usuario Compañía aérea:**
        - **(3pts) Vista principal:** Se espera que el usuario del tipo Compañía aérea tenga acceso a una vista propia en la que se muestre el nombre de la compañía y dos listas/tablas de vuelos aprobados y rechazados.
        - **(2pts) Listas de vuelos: Se espera que el usuario del tipo Compañía aérea pueda visualizar 2 listas/tablas con vuelos de la compañía, una para vuelos rechazados y una para vuelos aceptados**
    * **(10 pts) Usuario Pasajero:**
        - **(4 pts) Vista principal:** Se espera que el usuario del tipo Pasajero tenga acceso a una vista propia en la que se muestre su nombre de usuario, número de pasaporte y un listado con todas sus reservas.(ojo, reservas, no tickets)
        - **(3 pts) Página/Sección de búsqueda de vuelos:** El usuario Pasajero debe tener acceso a una Página/Sección donde seleccionando **ciudad de origen, ciudad destino y una fecha de despegue** pueda ver toda la infomración de los vuelos disponibles entre esas ciudades y que despeguen en dicha fecha.
        - **(3 pts) Sección de vuelo:** Al seleccionar un vuelo se espera que aparezcan 3 campos y un botón(o se redirija a una vista con dicho contenido) en donde se pueda llamar a la función de hacer una reserva.
        - **Función de reserva:** puntaje a detallar en apartado de procedimiento almacenado. Notar que las verificaciones deben ser realizadas en el procedimiento almacenado y no en la vista.

* **(22 pts) Procedimiento Almacenado:** 
    * **(8 pts) Definición de archivos**: Se entrega uno o más archivos con la extensión `.sql` los cuales definen un procedimiento almacenado utilizando `plpgSQL` y cumple con todas las funcionalidades solicitadas por el enunciado. Notar que en este apartado el puntaje es por logro y que se hace referencia al procedimiento correspondiente a la **función de reserva** de los usuarios del tipo pasajero, otros procedidimientos almacenados no entran en esta categoría.
    * **(14 pts) Funcionamiento web**: Se requiere que el input solicitado en este apartado cumpla con lo pedido por el enunciado, que se llame correctamente al procedimiento almacenado, que se despliegue y guarde correctamente la información de la reserva generada. Notar que el puntaje de este apartado se divide en puntaje por implentación previa al procedimiento y puntaje por implementación posterior al procedimiento (este último depende de que el procedimiento funcione correctamente).

* **(5 pts) Funcionalidad Adicional** Se debe añadir una funcionalidad adicional que logre dar realmente valor a la aplicación (no, los _rickrolls_ y otros _easter egg_ no garantizan puntaje en este apartado)

## Bonus
* **(hasta 5 décimas) Por navegación sobresaliente:*** Se recomienda ver la posibilidad de subdividir las funcinalidades del usuario del tipo pasajero en múltiples vistas como base para poder probar bien la navegación.

*Una navegación sobresaliente es aquella donde es fácil loguearse, deloguearse, ir a mi perfil, acceder a las páginas importantes de lasdistintas entidades, volver a la página principal, etc. En resumen, poder hacer todas las acciones de forma **intuitiva** sin nunca tener que escribir la URL a mano en el navegador.

## Descuentos
A continuación los descuentos que se muestran hacen referencia a **puntos finales de la nota**, es decir, un descuetno de un punto implicaría que, si obtienen un 7, su nota final sería un 6.
* (1 pto) Por subir en carpeta incorrecta.
* (2 pts) Si es que se importa una base de datos completa de un grupo impar a un grupo par y viceversa.
* (Hasta 1 pto) A juicio del corrector, por trabajos que no estén bien explicados, que cuenten con demasiadas faltas de ortografía o que se dificulte la corrección. Por ejemplo, en el caso de que no entreguen las contraseñas de los usuarios o que no implementen algo de lo solicitado por el enunciado y no lo mencionen en el reporte.
* Los ayudantes adicionalmente nos reservamos el derecho a realizar descuentos en el caso de no entregar algo que haya sido solicitado por el enunciado, para evitar esto recuerden revisar bien la sección de detalles adicionales encontrada en el mismo.

### Disclaimer

La ayudantía realizada el 2021-2 posee un error de diseño el cuál será explicado en la ayudantía correspondiente a la entrega de este semestre. En el caso de cometer el error de diseño encontrado en esa ayudantía se podrán aplicar descuentos.
