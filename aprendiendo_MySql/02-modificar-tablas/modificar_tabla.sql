
/*seleccionar todo el contenido de una tabla*/
select * from usuarios_renom;
/*cambiar el nombre de una tabala*/
alter table usuarios_renom rename usuarios;
/*cambiar nombre de una columna*/
alter table usuarios CHANGE apellido apellidos varchar(35) null;
/*modificar columna sin cambiar el nombre*/
alter table usuarios MODIFY apellidos char(30) not null;
/*añadir columna en una tabla*/
alter table usuarios ADD PAGINA_WEB VARCHAR(50) NOT NULL;
/*AÑADIR RESTRICCIONES A LAS COLUMNAS*/
ALTER TABLE usuarios ADD CONSTRAINT UQ_EDAD UNIQUE(EDAD);
/*BORRAR UNA COLUMNA DE UNA TABLA*/
ALTER TABLE usuarios DROP EDAD;