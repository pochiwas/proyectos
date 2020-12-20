/*SACAR LOS VENDEDORES QUE TIENEN JEFE
Y MOSTRAR ADEMAS EL NOMBRE DEL JEFE*/

SELECT V1.NOMBRE AS 'VENDEDOR',V2.NOMBRE AS 'JEFE'
FROM VENDEDOR V1
INNER JOIN VENDEDOR V2 ON V1.JEFE = V2.ID;
/*en el inner join se compara el campo jefe con el campo ID
se comparan para saber quien de los vendedores tiene un jefe asignado
*/

SELECT * FROM VENDEDOR;
