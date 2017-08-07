/*==============================================================*/
/* DBMS name:      MySQL 5.0                                    */
/* Created on:     5/08/2017 11:40:47 p.m.                      */
/*==============================================================*/

/*==============================================================*/
/* Table: EVENTO                                                */
/*==============================================================*/
create table EVENTO
(
   ID_EVENTO            int not null,
   TIPO                 varchar(15) not null,
   NOMBRE_EVENTO        varchar(35) not null,
   PONENTE              varchar(40) not null,
   NUMERO_PARTICIPANTES numeric(3,0) not null,
   FECHA                date not null,
   HORA                 time not null,
   LUGAR                varchar(30) not null,
   primary key (ID_EVENTO)
);

/*==============================================================*/
/* Table: PARTICIPACION                                         */
/*==============================================================*/
create table PARTICIPACION
(
   ID_EVENTO            int not null,
   DOCUMENTO            bigint not null,
   primary key (ID_EVENTO, DOCUMENTO)
);

/*==============================================================*/
/* Table: USUARIO                                               */
/*==============================================================*/
create table USUARIO
(
   DOCUMENTO            bigint not null,
   NOMBRES              varchar(35) not null,
   APELLIDOS            varchar(35) not null,
   CARRERA              varchar(30) not null,
   MATRICULA            numeric(2,0) not null,
   CORREO               varchar(35) not null,
   EDAD                 numeric(2,0),
   primary key (DOCUMENTO)
);

alter table PARTICIPACION add constraint FK_PARTICIPACION foreign key (ID_EVENTO)
      references EVENTO (ID_EVENTO) on delete restrict on update restrict;

alter table PARTICIPACION add constraint FK_PARTICIPACION2 foreign key (DOCUMENTO)
      references USUARIO (DOCUMENTO) on delete restrict on update restrict;

