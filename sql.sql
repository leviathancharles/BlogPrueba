CREATE DATABASE IF NOT EXISTS blog;
USE blog;

CREATE TABLE IF NOT EXISTS rol(

id          INT(11) auto_increment NOT NULL,
tipo_rol    VARCHAR(25),
CONSTRAINT pk_role PRIMARY KEY(id)

)ENGINE=InnoDb;


INSERT INTO rol(tipo_rol) VALUES('admin'),('usuario'),('visitante');


CREATE TABLE IF NOT EXISTS usuarios(

id                  INT(11) auto_increment NOT NULL, 
nombre              VARCHAR(25),
apellido            VARCHAR(25),
email               VARCHAR(25),
password            VARCHAR(25),
alias               VARCHAR(25),
avatar              VARCHAR(25),
rol_usuario         INT(11),
creacion            DATETIME,
CONSTRAINT pk_usario PRIMARY KEY(id),
CONSTRAINT fk_rol_usuario FOREIGN KEY(rol_usuario) REFERENCES rol(id)

)ENGINE=InnoDb;

INSERT INTO usuarios(nombre, apellido, email, password, rol_usuario, creacion)VALUES('Carlos', 'Hurtado', 'gabo_duty@hotmail.com', '$2a$04$yiW8pI5gJp.GRGq5DQdgEe2n/AXqbeHnMDb7ssIabAuM.vIGqMZbC', 1, NOW());
INSERT INTO usuarios(nombre, apellido, email, password, rol_usuario, creacion)VALUES('Juan', 'Ramiro', 'juan@gmail.com', '$2a$04$GLdXu6qaTppm5rL4gWk45Ov4ycPgTruZKBlNjYEOX39cTOYfou9jK', 2 , NOW());
INSERT INTO usuarios(nombre, apellido, email, password, rol_usuario, creacion)VALUES('Diana', 'Martinez', 'dianita@gmail.com', '$2a$04$XJcodMzszGdOYtjFxk4cGeAvD6vhbDUXlXtEaVj1ZXra47YPhskO2', 2 , NOW());

CREATE TABLE IF NOT EXISTS tipo_entrada(

id              INT(11) auto_increment NOT NULL,
tipo_entrada    VARCHAR(25),
CONSTRAINT pk_tipo_entrada PRIMARY KEY(id)

)ENGINE=InnoDb;

INSERT INTO tipo_entrada(tipo_entrada) VALUES('Politica'),('Romance'),('Cine'),('Farandula'),('Tecnologica'),('Educacion'),('Videojuegos');

CREATE TABLE IF NOT EXISTS entradas(

id                  INT(11) auto_increment NOT NULL,
titulo              VARCHAR(100),
contenido           TEXT,
imagen              VARCHAR(25),
usuario_id          INT(11),
tipo_id             INT(11),
creacion            DATETIME,
actualizacion       DATETIME,
CONSTRAINT pk_entradas PRIMARY KEY(id),
CONSTRAINT fk_usuario_entrada FOREIGN KEY(usuario_id) REFERENCES usuarios(id),
CONSTRAINT fk_tipo_entrada  FOREIGN KEY(tipo_id) REFERENCES tipo_entrada(id)
)ENGINE=InnoDb;

INSERT INTO entradas(titulo, contenido, imagen, usuario_id, tipo_id, creacion)VALUES('E3', 'La conferencia mas grande de videojuegos del mundo', 'e3.jpg', 1, 7, NOW());
INSERT INTO entradas(titulo, contenido, imagen, usuario_id, tipo_id, creacion)VALUES('Las Cosas andan mal en china', 'El coronavirus el problema mas grande de todos ahora', 'china.jpg', 1, 1, NOW());
INSERT INTO entradas(titulo, contenido, imagen, usuario_id, tipo_id, creacion)VALUES('Parasite y como cambia el mundo', 'La Pelicula del gran director Bonn jonn Huu a cambio la forma de pensar que las personas veian en el cine coreano', 'parasite.jpg', 2, 3, NOW());
INSERT INTO entradas(titulo, contenido, imagen, usuario_id, tipo_id, creacion)VALUES('El nuevo Android', 'Ya esta aqui la version mas actual de android, si como cabe esperar es hora de android 11 una version mas estable ', 'image2.jpg', 3, 5, NOW());

CREATE TABLE IF NOT EXISTS contacto(
id      INT(11) auto_increment NOT NULL,
nombre  VARCHAR(50) NOT NULL,
correo  VARCHAR(25) NOT NULL,
mensaje TEXT NOT NULL,
CONSTRAINT pk_contacto PRIMARY KEY(id)

)ENGINE=InnoDb