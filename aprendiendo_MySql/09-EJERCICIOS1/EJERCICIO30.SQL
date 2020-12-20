/*mostrar los datos del vendedor con mas antiguedad
en el consecionario*/

SELECT *
FROM VENDEDOR 
ORDER BY FECHA ASC LIMIT 1;


/*30 PLUS OBTENER LOS COCHES CON 
MAS UNIDADES VENDIDAS*/


SELECT * 
FROM COCHE 
WHERE ID IN (SELECT COCHE_ID 
            FROM ENCARGO
            WHERE CANTIDAD IN (SELECT MAX(CANTIDAD)
                               FROM ENCARGO));
                               

