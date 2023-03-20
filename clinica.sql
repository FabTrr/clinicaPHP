CREATE DATABASE clinica;

USE clinica;

CREATE TABLE pacientes (
  id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
  nombre VARCHAR(30) NOT NULL,
  apellido VARCHAR(30) NOT NULL,
  fecha_nacimiento DATE NOT NULL,
  celular VARCHAR(15) NOT NULL
);

CREATE TABLE fechas_disponibles (
  id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
  estudio_clinico VARCHAR(50) NOT NULL,
  fecha DATE NOT NULL
);