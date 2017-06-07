use carritoresponsive;

/*==============================================================*/
/* DBMS name:      MySQL 5.0                                    */
/* Created on:     02/09/2016 0:34:09                           */
/*==============================================================*/


drop table if exists categoria;
drop table if exists subcategoria;

/*==============================================================*/
/* Table: categoria                                             */
/*==============================================================*/
create table categoria
(
   id_categoria         int not null,
   des_categoria        varchar(255),
   vigencia_categoria   int,
   primary key (id_categoria)
);


/*==============================================================*/
/* Table: subcategoria                                          */
/*==============================================================*/
create table subcategoria
(
   id_subcategoria      int not null,
   id_categoria         int,
   des_subcategoria     varchar(255),
   vigencia_subcategoria int,
   primary key (id_subcategoria)
);


INSERT INTO categoria(id_categoria, des_categoria, vigencia_categoria) values(1, 'uno', 1);
INSERT INTO categoria(id_categoria, des_categoria, vigencia_categoria) values(2, 'dos', 1);
INSERT INTO categoria(id_categoria, des_categoria, vigencia_categoria) values(3, 'tres', 1);
INSERT INTO categoria(id_categoria, des_categoria, vigencia_categoria) values(4, 'cuatro', 1);
INSERT INTO categoria(id_categoria, des_categoria, vigencia_categoria) values(5, 'cinco', 1);
INSERT INTO categoria(id_categoria, des_categoria, vigencia_categoria) values(6, 'seis', 1);
INSERT INTO categoria(id_categoria, des_categoria, vigencia_categoria) values(7, 'siete', 1);
INSERT INTO categoria(id_categoria, des_categoria, vigencia_categoria) values(8, 'ocho', 1);
INSERT INTO categoria(id_categoria, des_categoria, vigencia_categoria) values(9, 'nueve', 1);
INSERT INTO categoria(id_categoria, des_categoria, vigencia_categoria) values(10, 'diez', 1);



INSERT INTO subcategoria(id_subcategoria, id_categoria, des_subcategoria, vigencia_subcategoria) values(1, 1, 'subcategoria uno con cat 1', 1);
INSERT INTO subcategoria(id_subcategoria, id_categoria, des_subcategoria, vigencia_subcategoria) values(2, 1, 'subcategoria dos con cat 1', 1);
INSERT INTO subcategoria(id_subcategoria, id_categoria, des_subcategoria, vigencia_subcategoria) values(3, 1, 'subcategoria tres con cat 1', 1);
INSERT INTO subcategoria(id_subcategoria, id_categoria, des_subcategoria, vigencia_subcategoria) values(4, 2, 'subcategoria cuatro con cat 2', 1);
INSERT INTO subcategoria(id_subcategoria, id_categoria, des_subcategoria, vigencia_subcategoria) values(5, 2, 'subcategoria cinco con cat 2', 1);
INSERT INTO subcategoria(id_subcategoria, id_categoria, des_subcategoria, vigencia_subcategoria) values(6, 3, 'subcategoria seis con cat 3', 1);
