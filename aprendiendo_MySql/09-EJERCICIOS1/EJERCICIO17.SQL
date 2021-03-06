/*OBTENER UN LISTADO CON LOS ENCARGOS
REALIZADOS POR EL CLIENTE FERRETERIA S.A*/

SELECT E.ID AS 'N° ENCARGO',E.CANTIDAD,CL.NOMBRE,CO.MODELO,E.FECHA
FROM ENCARGO E
INNER JOIN CLIENTE CL ON CL.ID = E.CLIENTE_ID
INNER JOIN COCHE CO ON CO.ID = E.COCHE_ID
WHERE E.CLIENTE_ID IN (SELECT C.ID
                       FROM CLIENTE C
                       WHERE C.NOMBRE='FERRETERIA S.A');