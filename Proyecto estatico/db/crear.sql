
-- crear base de datos
CREATE DATABASE IF NOT EXISTS alimentacion;
USE alimentacion;

CREATE TABLE CONTENIDO
(
  id_contenido INT PRIMARY KEY AUTO_INCREMENT,
  texto TEXT
);

CREATE TABLE ALIMENTO
(
  id_alimento INT PRIMARY KEY AUTO_INCREMENT,
  nombre VARCHAR(50) NOT NULL,
  descripcion TEXT,
  imagen VARCHAR(255) NOT NULL,
  id_contenido INT,
  FOREIGN KEY (id_contenido) REFERENCES CONTENIDO(id_contenido)
);

CREATE TABLE SUBAPARTADO
(
  id_subapartado INT PRIMARY KEY AUTO_INCREMENT,
  nombre_apartado VARCHAR(50) NOT NULL,
  id_contenido INT,
  FOREIGN KEY (id_contenido) REFERENCES CONTENIDO(id_contenido)
);