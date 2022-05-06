# Historial de Cambios en los datos

Fecha           | Hora      |  Modificación
---------------- |--------- |--------------- 
06-05-2022       | 12:00    | IMPARES: Se elimina la columna aerolinea del archivo reservas, ver issue [#127](https://github.com/IIC2413/Syllabus-2022-1/issues/127)
06-05-2022       | 12:00    | PARES:   Se corrige el archivo aeropuertos para evitar repeticiones de puertos de salida y pistas, ver issue [#133](https://github.com/IIC2413/Syllabus-2022-1/issues/133)

# Rúbrica E2

## Puntajes (78 pts): 

Los puntajes asignados son los siguientes:

- **(12 pts) Modelo Entidad Relación:** se entrega un diagrama que represente de manera fiel la situación planteada en la entrega 1 y que se adapte a los datos entregados sobre esta([ver detalle](https://github.com/IIC2413/Syllabus-2022-1/issues/125)) . Se incluyen las cardinalidades de las relaciones entre las entidades.

- **(12 pts) Esquema Relacional:** se entrega un esquema relacional resultante del diagrama anterior. Además, se incluyen los tipos de datos, llaves primarias y llaves foráneas correctas. 

- **(12 pts) Justificación del modelo:** se justifica, mediante dependencias funcionales, que el modelo está en BCNF o en 3NF. Esto implica listar las dependencias de **cada tabla** y explicar **para cada una** por qué dichas dependencias permiten decir que su esquema está en BCNF o 3NF.

- **(42 pts) Consultas en la Aplicación Web:** 6 ptos por cada consulta bien implementada en la aplicación. Se ejecutarán diversos casos de prueba y se corregirá el output entregado por su aplicación, además se asignará puntaje por implementar el **tipo de input solicitado**(ya sea por selección del valor o por ingreso de texto) dentro de la página web. Para esto deben haber importado los datos correctamente. Si tienen dudas sobre las consultas recurrir a las Issues.

 **Importante**: las búsquedas de parámetros (_strings_) ingresados deben ser _case-insensitive_ y con _matching parcial_.

 ## Bonus

- (hasta 5 décimas) Por página sobresaliente en su diseño.(a criterio del cuerpo doceente).

## Descuentos

- (Hasta 1 pto) Por subir en carpeta incorrecta o usar la base de datos incorrecta.
- (Hasta 1 pto) A juicio del corrector, por trabajos que no estén bien explicados, que cuenten con demasiadas faltas de ortografía o que se dificulte la corrección. Por ejemplo, en el caso de que no implementen todas las consultas en el sitio web y eso no lo hayan mencionado en el reporte.
- Los ayudantes adicionalmente nos reservamos el derecho a realizar descuentos en el caso de no entregar algo que haya sido solicitado por el enunciado, para evitar esto recuerden revisar bien la sección de detalles adicionales encontrada en el enunciado

### Formato de Entrega esperado

Recuerden que, al final de su entrega, al entrar al servidor y utilizar el comando ```ls``` deberían ver algo así:


<img width="457" alt="HappyPath" src="https://user-images.githubusercontent.com/37157550/116116000-a80b2d80-a688-11eb-8b7e-d7cb6517d7fd.png">
