<?
	$tablas=" CREATE TABLE curso(
			titulo varchar(200) NOT NULL,
			descripcion varchar(500) NOT NULL,
			inicia date NOT NULL,
			finaliza date NOT NULL,
			digitador int(15) NOT NULL,
			ingreso date NOT NULL,
			updatede varchar(100),
			estado int(1)
			PRIMARY KEY(titulo),
			FOREIGN KEY(digitador) REFERENCES usuario(id_usuario) ON DELETE RESTRICT ON UPDATE CASCADE 

		);
		CREATE TABLE data_curso(
			titulo_curso varchar(200) NOT NULL,
			titulo varchar(200) NOT NULL,
			descripcion varchar(500) NOT NULL,
			url varchar(200) NOT NULL,
			tipo varchar(25) NOT NULL,
			digitador int(15) NOT NULL,
			ingreso date NOT NULL,
			updatede varchar(100),
			estado int(1)
			PRIMARY KEY(titulo, titulo_curso),
			FOREIGN KEY(digitador) REFERENCES usuario(id_usuario) ON DELETE RESTRICT ON UPDATE CASCADE,
			FOREIGN KEY(titulo_curso) REFERENCES curso(titulo) ON DELETE RESTRICT ON UPDATE CASCADE
		);
		CREATE TABLE pregunta(
			titulo_curso varchar(200) NOT NULL,
			pregunta varchar(200) NOT NULL,
			respuesta varchar(200) NOT NULL,
			posible1 varchar(200) NOT NULL,
			posible2 varchar(200) NOT NULL,
			digitador int(15) NOT NULL,
			ingreso date NOT NULL,
			updatede varchar(100),
			estado int(1),
			PRIMARY KEY(pregunta, titulo_curso),
			FOREIGN KEY(digitador) REFERENCES usuario(id_usuario) ON DELETE RESTRICT ON UPDATE CASCADE,
			FOREIGN KEY(titulo_curso) REFERENCES curso(titulo) ON DELETE RESTRICT ON UPDATE CASCADE 

		);
	";

?>