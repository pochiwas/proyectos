/*visualizar los nombres de los clientes 
y la cantidad de encargos realizados
incluyendo los que no hayan realizado ninguno*/

INSERT INTO CLIENTE VALUES(NULL,5,'PC FACTORY','TECNOLOGIA','QUILPUE',0,CURDATE());


SELECT C.NOMBRE ,COUNT(E.ID)
FROM CLIENTE C 
LEFT JOIN ENCARGO E ON C.ID = E.CLIENTE_ID
GROUP BY 1;
