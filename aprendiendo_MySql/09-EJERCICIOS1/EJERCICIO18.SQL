/*LISTAR LOS CLIENTES QUE HAN HECHO
ALGUN ENCARGO DEL COCHE PRISMA*/

SELECT *
FROM CLIENTE 
WHERE ID IN (SELECT CLIENTE_ID
             FROM ENCARGO
             WHERE COCHE_ID IN (SELECT ID
                                FROM COCHE
                                WHERE MODELO LIKE '%PRISMA%'));