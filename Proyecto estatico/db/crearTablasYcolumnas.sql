CREATE DATABASE IF NOT EXISTS alimentacion;
USE alimentacion;

CREATE TABLE alimento (
   id_alimento INT AUTO_INCREMENT PRIMARY KEY,
   nombre VARCHAR(255) NOT NULL,
   descripcion TEXT NOT NULL,
   imagen_url VARCHAR(255) NOT NULL
);

CREATE TABLE tipo_alimento(
   id_tipo INT AUTO_INCREMENT PRIMARY KEY,
   nombre VARCHAR(255) NOT NULL
);

CREATE TABLE contenido (
   id_contenido INT AUTO_INCREMENT PRIMARY KEY,
   texto TEXT NOT NULL,
   id_tipo INT NOT NULL,
   id_alimento INT NOT NULL,

  FOREIGN KEY (id_tipo) REFERENCES tipo_alimento(id_tipo),
  FOREIGN KEY (id_alimento) REFERENCES alimento(id_alimento)
);

-- si quieres descripcion estos sea que puede dejar espacio puede usar este codigo
-- AlTER TABLE alimento MODIFY descripcion TEXT NULL;
-- AlTER TABLE alimento MODIFY imagen_url VARCHAR(255) NULL;

