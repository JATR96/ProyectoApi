create database almacen;
use almacen;

CREATE TABLE personas(
	id INT AUTO_INCREMENT PRIMARY KEY NOT NULL,
	Nombre VARCHAR(30),
	Apellido VARCHAR(30),
	Edad INT,
	Dni CHAR(8),
	Genero VARCHAR(16),
	Foto BINARY(255),
	EsActivo BOOLEAN,
	Updated_at DATE,
	Created_at DATE
);

CREATE TABLE productos(
	id INT AUTO_INCREMENT PRIMARY KEY NOT NULL,
    Codigo CHAR(6),
    Nombre VARCHAR(30),
    Descripcion VARCHAR(90),
    FechaIngreso TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
    Estado CHAR(16),
    AfectoIgv CHAR(3),
    Precio FLOAT,
    Ruc CHAR(11),
    Proveedor VARCHAR(30),
    Categoria VARCHAR(30)
);

INSERT INTO personas (Nombre, Apellido, Edad, Dni, Genero)
	VALUES
		('Jesus', 'Tornero Rojas', 24, '71053687','Masculino'),
		('Carlos Jose', 'Saravaria Bautista', 26, '21851999', 'Masculino'),
		('Jose Jose', 'Armas Almeyda', 28, '21851899', 'Masculino'),
		('Jefferson', 'Caquiamarca Castilla', 23, '21851600', 'Masculino'),
		('Reynaldo', 'Chivilches Torres', 29, '21851500', 'Masculino'),
		('Carlos Jose', 'Almeyda Almeyda', 32, '21851890', 'Masculino'),
		('Jesus Maria', 'Torres Rojas', 40, '28563211', 'Masculino'),
		('Roger', 'Tomairo Paniagua', 29, '21851595', 'Masculino');

INSERT INTO productos (Codigo, Nombre, Descripcion, Precio, Ruc, Proveedor, Categoria)
	VALUES
		('225566', 'Te Verde de China', 'Proveniente del pais de China, otorga energia al cuerpo', 16, 45677786355, 'ChinaSAC', 'Bebidas energeticas'),
        ('225586', 'Te Blanco', 'Proveniente del pais de japon, otorga energia al cuerpo', 14, 42566678654, 'JaponSAC', 'Bebidas energeticas'),
        ('225548', 'Te Ingles', 'Proveniente del pais de Inglaterra, otorga energia al cuerpo', 16, 44567786545, 'InglaterraSAC', 'Bebidas energeticas'),
        ('225586', 'Te de Menta', 'Proveniente del pais de Peru, otorga energia al cuerpo', 12.50, 56776986545, 'PeruSAC', 'Bebidas energeticas');

SELECT * FROM personas;

SELECT * FROM productos;

