/*CONSULTAS MULTITABLAS
SON CONSULTAS QUE SIRVEN PARA CONSULTAR VARIAS TABLAS
EN UNA SOLA SENTENCIA*/

/*MOSTRAR LAS ENTRAS CON EL NOMBRE DEL AUTOR Y EL NOMBRE DE LA CATEGORIA*/

SELECT E.ID,E.TITULO,U.NOMBRE 
FROM ENTRADA E,USUARIO U,CATEGORIA C
WHERE E.USUARIO_ID = U.ID 
AND E.CATEGORIA_ID = U.ID;


/*mostrar el nombre DE LAS CATEGORIAS Y AL LADO LA CANTIDAD QUE ESTAS TIENEN*/

SELECT C.NOMBRE,COUNT(E.ID) 
FROM CATEGORIA C,ENTRADA E
WHERE E.CATEGORIA_ID = C.ID
GROUP BY E.CATEGORIA_ID;

/*MOSTRAR EL EMAIL DE LOS USUARIOS Y  AL LADO CUANTAS ENTRADAS TIENEN*/

SELECT U.EMAIL,COUNT(TITULO)
FROM USUARIO U,ENTRADA 
WHERE E.USUARIO_ID = U.ID
GROUP BY E.USUARIO_ID;

/*APRENDIENDO INNER JOIN(COMBINACIONES INTERNAS)*/  

SELECT E.ID,E.TITULO,U.NOMBRE AS "Autor" ,C.NOMBRE AS "Categoria"
FROM ENTRADA E
INNER JOIN USUARIO U ON E.USUARIO_ID = U.ID
INNER JOIN CATEGORIA C ON E.CATEGORIA_ID = C.ID;

/*MOSTRAR LAS CATEGORIAS QUE NO TIENEN ENTRADAS*/
/*EJERCICIO CON LEFT JOIN*/
SELECT C.NOMBRE,COUNT(E.ID)
FROM CATEGORIA C 
LEFT  JOIN ENTRADA E ON E.CATEGORIA_ID = C.ID
GROUP BY E.CATEGORIA_ID; 


/*EJERCICIO CON RIGTH JOIN */

SELECT C.NOMBRE,COUNT(E.ID)
FROM ENTRADA E 
RIGHT JOIN CATEGORIA C ON E.CATEGORIA_ID = C.ID
GROUP BY E.CATEGORIA_ID; 
