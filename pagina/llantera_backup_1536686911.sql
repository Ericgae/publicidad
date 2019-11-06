

CREATE TABLE `almacen` (
  `idalmacen` smallint(6) NOT NULL AUTO_INCREMENT,
  `fkempresa` smallint(6) NOT NULL,
  `nombrea` varchar(30) DEFAULT NULL,
  `direcciona` varchar(30) DEFAULT NULL,
  PRIMARY KEY (`idalmacen`),
  KEY `fkempresa` (`fkempresa`),
  CONSTRAINT `almacen_ibfk_1` FOREIGN KEY (`fkempresa`) REFERENCES `empresa` (`idempresa`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

INSERT INTO almacen VALUES("2","1","IGNACIO ALLENDE","ALLENDE #343 NORTE");



CREATE TABLE `articulo` (
  `idarticulo` smallint(6) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(30) DEFAULT NULL,
  `codigo` varchar(30) DEFAULT NULL,
  `marca` varchar(30) DEFAULT NULL,
  `foto` longblob,
  `punitario` double DEFAULT NULL,
  `punitariod` double NOT NULL,
  `punitariot` double NOT NULL,
  `fkAlmacen` smallint(6) DEFAULT NULL,
  `fkTipo` smallint(6) DEFAULT NULL,
  `descripcion` varchar(100) DEFAULT NULL,
  `cantidad` varchar(30) DEFAULT NULL,
  PRIMARY KEY (`idarticulo`),
  KEY `fkTipo` (`fkTipo`),
  KEY `fkAlmacen` (`fkAlmacen`),
  CONSTRAINT `articulo_ibfk_2` FOREIGN KEY (`fkTipo`) REFERENCES `tipo` (`idtipo`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `articulo_ibfk_3` FOREIGN KEY (`fkAlmacen`) REFERENCES `almacen` (`idalmacen`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=22 DEFAULT CHARSET=latin1;

INSERT INTO articulo VALUES("11","LLANTAS","JHGHGH","KJHKHJK","../../articulos/7708177584462-7708177584257-7708177584028-7708177584110-7709990777222-a.jpg","78","0","0","2","1","JHFFGDFGDFD","7");
INSERT INTO articulo VALUES("21","170-02-3","40R","BARUM","../../articulos/162.jpg","500","600","700","2","1","35PSI ","7");



CREATE TABLE `automovil` (
  `idauto` smallint(6) NOT NULL AUTO_INCREMENT,
  `marca` varchar(30) DEFAULT NULL,
  `modelo` varchar(30) DEFAULT NULL,
  `color` varchar(30) DEFAULT NULL,
  `placas` varchar(30) DEFAULT NULL,
  `rodado` varchar(30) DEFAULT NULL,
  `fkCliente` smallint(6) DEFAULT NULL,
  PRIMARY KEY (`idauto`),
  KEY `fkCliente` (`fkCliente`),
  CONSTRAINT `automovil_ibfk_1` FOREIGN KEY (`fkCliente`) REFERENCES `cliente` (`idcliente`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

INSERT INTO automovil VALUES("2","NISSAN","TIDA","NARANJA","SHHS-JSK-HSH","20 PULGADAS","5");



CREATE TABLE `cliente` (
  `idcliente` smallint(6) NOT NULL AUTO_INCREMENT,
  `fkPersona` smallint(6) DEFAULT NULL,
  `tipoc` varchar(30) DEFAULT NULL,
  `supo` varchar(50) NOT NULL,
  PRIMARY KEY (`idcliente`),
  KEY `fkPersona` (`fkPersona`),
  CONSTRAINT `cliente_ibfk_1` FOREIGN KEY (`fkPersona`) REFERENCES `persona` (`idpersona`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=latin1;

INSERT INTO cliente VALUES("5","7","servicio","Facebook");
INSERT INTO cliente VALUES("7","10","cotizacion","Pagina Web");
INSERT INTO cliente VALUES("8","11","servicio","Pagina Web");



CREATE TABLE `cotizaciones_demo` (
  `id_cotizacion` smallint(6) NOT NULL AUTO_INCREMENT,
  `numero_cotizacion` int(11) NOT NULL,
  `fecha_cotizacion` datetime NOT NULL,
  `tel1` varchar(9) NOT NULL,
  `nombre` varchar(75) NOT NULL,
  `email` varchar(30) DEFAULT NULL,
  `condiciones` varchar(30) NOT NULL,
  `validez` varchar(20) NOT NULL,
  `entrega` varchar(20) NOT NULL,
  `estadop` int(11) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id_cotizacion`),
  KEY `numero_cotizacion` (`numero_cotizacion`)
) ENGINE=InnoDB AUTO_INCREMENT=38 DEFAULT CHARSET=latin1;

INSERT INTO cotizaciones_demo VALUES("6","1","2018-07-05 19:56:33","","","","","","","1");
INSERT INTO cotizaciones_demo VALUES("7","2","2018-07-05 19:59:10","","","","","","","1");
INSERT INTO cotizaciones_demo VALUES("8","3","2018-07-05 20:00:32","","","","","","","1");
INSERT INTO cotizaciones_demo VALUES("9","4","2018-07-05 20:03:57","","","","","","","1");
INSERT INTO cotizaciones_demo VALUES("10","5","2018-07-05 20:15:39","","","","","","","1");
INSERT INTO cotizaciones_demo VALUES("11","6","2018-07-05 20:16:18","","","","","","","1");
INSERT INTO cotizaciones_demo VALUES("12","7","2018-07-05 20:23:05","","","","","","","1");
INSERT INTO cotizaciones_demo VALUES("13","8","2018-07-05 20:34:08","","","","","","","1");
INSERT INTO cotizaciones_demo VALUES("14","9","2018-07-05 20:35:07","","","","","","","1");
INSERT INTO cotizaciones_demo VALUES("15","10","2018-07-06 22:30:35","","","","","","","1");
INSERT INTO cotizaciones_demo VALUES("16","11","2018-07-06 22:35:20","","","","","","","1");
INSERT INTO cotizaciones_demo VALUES("17","12","2018-07-06 22:36:14","","","","","","","1");
INSERT INTO cotizaciones_demo VALUES("18","18","2018-07-06 23:37:23","","","","","","","1");
INSERT INTO cotizaciones_demo VALUES("19","19","2018-07-07 00:27:53","","","","","","","1");
INSERT INTO cotizaciones_demo VALUES("20","20","2018-07-07 18:11:27","","","","","","","1");
INSERT INTO cotizaciones_demo VALUES("21","21","2018-07-07 19:01:54","","","","","","","1");
INSERT INTO cotizaciones_demo VALUES("22","22","2018-07-07 21:52:21","","","","","","","1");
INSERT INTO cotizaciones_demo VALUES("23","23","2018-07-07 22:13:48","2324342","JUAN PEDRO","espectroocho@gmail.com","Contado","15 días","Inmediato","1");
INSERT INTO cotizaciones_demo VALUES("24","24","2018-07-07 22:15:25","232324","JUAN PEDRO","eric@hotmail.com","Contado","15 días","Inmediato","1");
INSERT INTO cotizaciones_demo VALUES("25","25","2018-07-07 22:18:13","2324342","JUAN PEDRO","espectroocho@gmail.com","Contado","15 días","Inmediato","1");
INSERT INTO cotizaciones_demo VALUES("26","26","2018-07-07 22:21:03","2324343","FELIX","pedrito@hotmail.com","Contado","15 días","Inmediato","1");
INSERT INTO cotizaciones_demo VALUES("27","27","2018-07-07 22:23:27","34312","WEWE","pedro@hotmail.com","Contado","15 días","Inmediato","1");
INSERT INTO cotizaciones_demo VALUES("28","28","2018-07-07 22:59:07","2324342","JUAN PEDRO","espectroocho@gmail.com","Contado","15 días","Inmediato","1");
INSERT INTO cotizaciones_demo VALUES("29","29","2018-07-13 00:22:12","2324342","PERDO","pedro@hotmail.com","Contado","15 días","Inmediato","1");
INSERT INTO cotizaciones_demo VALUES("30","30","2018-07-13 01:03:48","2324343","PERDO","espectroocho@gmail.com","Contado","15 días","Inmediato","1");
INSERT INTO cotizaciones_demo VALUES("31","31","2018-07-13 01:09:05","2324342","JUAN PEDRO","espectroocho@gmail.com","Contado","15 días","Inmediato","1");
INSERT INTO cotizaciones_demo VALUES("32","32","2018-07-13 01:09:39","2324342","JUAN PEDRO","pedro@hotmail.com","Contado","15 días","Inmediato","1");
INSERT INTO cotizaciones_demo VALUES("33","33","2018-07-13 01:12:37","66856893","FELIX","pedrito@hotmail.com","Contado","15 días","Inmediato","1");
INSERT INTO cotizaciones_demo VALUES("34","34","2018-07-13 01:14:39","2234561","juna camanei","espectroocho@gmail.com","Contado","15 días","Inmediato","1");
INSERT INTO cotizaciones_demo VALUES("35","35","2018-07-18 20:39:09","rer","undefined","pedro@hotmail.com","Contado","15 días","Inmediato","1");
INSERT INTO cotizaciones_demo VALUES("36","36","2018-08-09 04:03:08","876786786","GARCIA","erik_1_56@hotmail.com","Contado","15 días","Inmediato","1");
INSERT INTO cotizaciones_demo VALUES("37","37","2018-09-11 19:21:25","876786786","GARCIA","erik_1_56@hotmail.com","Contado","15 días","Inmediato","1");



CREATE TABLE `cotizaciones_demo2` (
  `id_cotizacion` smallint(6) NOT NULL AUTO_INCREMENT,
  `numero_cotizacion` int(11) NOT NULL,
  `date` datetime NOT NULL,
  `fkcliente` smallint(6) NOT NULL,
  `fkempleado` smallint(6) NOT NULL,
  `fkauto` smallint(6) NOT NULL,
  `condiciones` varchar(30) NOT NULL,
  `validez` varchar(20) NOT NULL,
  `entrega` varchar(20) NOT NULL,
  PRIMARY KEY (`id_cotizacion`),
  KEY `fkpersona` (`fkcliente`),
  KEY `numero_cotizacion` (`numero_cotizacion`),
  KEY `fkAuto` (`fkauto`),
  KEY `fkEmpleado` (`fkempleado`),
  CONSTRAINT `cotizaciones_demo2_ibfk_1` FOREIGN KEY (`numero_cotizacion`) REFERENCES `detalle_cotizacion_demo2` (`numero_cotizacion`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `cotizaciones_demo2_ibfk_2` FOREIGN KEY (`fkcliente`) REFERENCES `cliente` (`idcliente`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `cotizaciones_demo2_ibfk_3` FOREIGN KEY (`fkauto`) REFERENCES `automovil` (`idauto`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `cotizaciones_demo2_ibfk_4` FOREIGN KEY (`fkempleado`) REFERENCES `empleado` (`idEmpleado`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

INSERT INTO cotizaciones_demo2 VALUES("4","1","2018-09-11 05:06:14","5","1","2","","15 días","Inmediato");
INSERT INTO cotizaciones_demo2 VALUES("5","2","2018-09-11 17:51:05","5","1","2","","15 días","Inmediato");



CREATE TABLE `detalle_cotizacion_demo` (
  `id_detalle_cotizacion` smallint(6) NOT NULL AUTO_INCREMENT,
  `numero_cotizacion` int(11) NOT NULL,
  `id_producto` smallint(11) NOT NULL,
  `cantidad` int(11) NOT NULL,
  `precio_venta` double NOT NULL,
  PRIMARY KEY (`id_detalle_cotizacion`),
  KEY `id_producto` (`id_producto`),
  KEY `numero_cotizacion` (`numero_cotizacion`),
  CONSTRAINT `detalle_cotizacion_demo_ibfk_1` FOREIGN KEY (`id_producto`) REFERENCES `articulo` (`idarticulo`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `detalle_cotizacion_demo_ibfk_2` FOREIGN KEY (`numero_cotizacion`) REFERENCES `cotizaciones_demo` (`numero_cotizacion`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;




CREATE TABLE `detalle_cotizacion_demo2` (
  `id_detalle_cotizacion` smallint(6) NOT NULL AUTO_INCREMENT,
  `numero_cotizacion` int(11) NOT NULL,
  `id_producto` smallint(11) NOT NULL,
  `cantidad` int(11) NOT NULL,
  `precio_venta` double NOT NULL,
  PRIMARY KEY (`id_detalle_cotizacion`),
  KEY `id_producto` (`id_producto`),
  KEY `numero_cotizacion` (`numero_cotizacion`),
  CONSTRAINT `detalle_cotizacion_demo2_ibfk_1` FOREIGN KEY (`id_producto`) REFERENCES `articulo` (`idarticulo`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=129 DEFAULT CHARSET=latin1;

INSERT INTO detalle_cotizacion_demo2 VALUES("19","1","11","1","78");
INSERT INTO detalle_cotizacion_demo2 VALUES("21","1","11","1","78");
INSERT INTO detalle_cotizacion_demo2 VALUES("33","1","11","1","78");
INSERT INTO detalle_cotizacion_demo2 VALUES("35","1","11","1","78");
INSERT INTO detalle_cotizacion_demo2 VALUES("38","1","11","1","78");
INSERT INTO detalle_cotizacion_demo2 VALUES("40","1","11","1","78");
INSERT INTO detalle_cotizacion_demo2 VALUES("45","1","11","1","78");
INSERT INTO detalle_cotizacion_demo2 VALUES("46","1","11","1","78");
INSERT INTO detalle_cotizacion_demo2 VALUES("47","1","11","1","78");
INSERT INTO detalle_cotizacion_demo2 VALUES("50","1","11","1","78");
INSERT INTO detalle_cotizacion_demo2 VALUES("51","1","11","1","78");
INSERT INTO detalle_cotizacion_demo2 VALUES("53","2","11","1","78");
INSERT INTO detalle_cotizacion_demo2 VALUES("56","3","11","1","78");
INSERT INTO detalle_cotizacion_demo2 VALUES("62","5","11","1","78");
INSERT INTO detalle_cotizacion_demo2 VALUES("65","6","11","1","78");
INSERT INTO detalle_cotizacion_demo2 VALUES("68","7","11","1","78");
INSERT INTO detalle_cotizacion_demo2 VALUES("71","8","11","1","78");
INSERT INTO detalle_cotizacion_demo2 VALUES("74","9","11","1","78");
INSERT INTO detalle_cotizacion_demo2 VALUES("77","10","11","1","78");
INSERT INTO detalle_cotizacion_demo2 VALUES("80","11","11","1","78");
INSERT INTO detalle_cotizacion_demo2 VALUES("84","13","11","1","78");
INSERT INTO detalle_cotizacion_demo2 VALUES("86","14","11","1","78");
INSERT INTO detalle_cotizacion_demo2 VALUES("87","14","11","1","78");
INSERT INTO detalle_cotizacion_demo2 VALUES("88","14","11","1","78");
INSERT INTO detalle_cotizacion_demo2 VALUES("92","16","11","1","78");
INSERT INTO detalle_cotizacion_demo2 VALUES("95","17","11","1","78");
INSERT INTO detalle_cotizacion_demo2 VALUES("98","18","11","2","78");
INSERT INTO detalle_cotizacion_demo2 VALUES("104","19","11","1","78");
INSERT INTO detalle_cotizacion_demo2 VALUES("107","20","11","1","78");
INSERT INTO detalle_cotizacion_demo2 VALUES("108","4","11","1","78");
INSERT INTO detalle_cotizacion_demo2 VALUES("109","4","11","1","78");
INSERT INTO detalle_cotizacion_demo2 VALUES("120","9","11","1","78");
INSERT INTO detalle_cotizacion_demo2 VALUES("121","9","11","1","78");
INSERT INTO detalle_cotizacion_demo2 VALUES("122","9","11","1","78");
INSERT INTO detalle_cotizacion_demo2 VALUES("123","9","11","1","78");
INSERT INTO detalle_cotizacion_demo2 VALUES("124","5","11","1","78");
INSERT INTO detalle_cotizacion_demo2 VALUES("125","5","21","1","500");
INSERT INTO detalle_cotizacion_demo2 VALUES("126","1","11","1","78");
INSERT INTO detalle_cotizacion_demo2 VALUES("127","1","21","1","500");
INSERT INTO detalle_cotizacion_demo2 VALUES("128","2","11","1","78");



CREATE TABLE `direccion` (
  `iddireccion` smallint(6) NOT NULL AUTO_INCREMENT,
  `fkempresa` smallint(6) NOT NULL,
  `calle` varchar(30) DEFAULT NULL,
  `colonia` varchar(30) DEFAULT NULL,
  `numero` int(11) DEFAULT NULL,
  `tel` int(11) DEFAULT NULL,
  `correo` varchar(30) DEFAULT NULL,
  PRIMARY KEY (`iddireccion`),
  KEY `fkEmpresa` (`fkempresa`),
  CONSTRAINT `direccion_ibfk_1` FOREIGN KEY (`fkempresa`) REFERENCES `empresa` (`idempresa`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `direccion_ibfk_2` FOREIGN KEY (`fkempresa`) REFERENCES `empresa` (`idempresa`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

INSERT INTO direccion VALUES("2","1","1 NOVIEMBRE","2 DE AGOSTO","23","23232323","lopez@hotmail.com");



CREATE TABLE `empleado` (
  `idEmpleado` smallint(6) NOT NULL AUTO_INCREMENT,
  `fkPersona` smallint(6) NOT NULL,
  `tipoE` varchar(100) NOT NULL,
  `usuario` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  PRIMARY KEY (`idEmpleado`),
  KEY `fkPersona` (`fkPersona`),
  CONSTRAINT `empleado_ibfk_1` FOREIGN KEY (`fkPersona`) REFERENCES `persona` (`idpersona`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

INSERT INTO empleado VALUES("1","6","Administrador","temoc","temoc");
INSERT INTO empleado VALUES("3","6","socio","socio","socio");



CREATE TABLE `empresa` (
  `idempresa` smallint(6) NOT NULL AUTO_INCREMENT,
  `nombree` varchar(30) DEFAULT NULL,
  `propietarioe` varchar(30) DEFAULT NULL,
  PRIMARY KEY (`idempresa`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

INSERT INTO empresa VALUES("1","BARUM","ANGELES REYES");



CREATE TABLE `multipuntos` (
  `idmulti` smallint(6) NOT NULL AUTO_INCREMENT,
  `nitrogeno` varchar(20) NOT NULL,
  `tipo_poliza` varchar(20) NOT NULL,
  `alineacion` varchar(20) NOT NULL,
  `balatas` varchar(30) DEFAULT NULL,
  `suspencion` varchar(30) DEFAULT NULL,
  `llantas` varchar(30) DEFAULT NULL,
  `baterias` varchar(30) DEFAULT NULL,
  `pulido_faro` varchar(30) DEFAULT NULL,
  `rotacion` varchar(30) DEFAULT NULL,
  `llanta_desecha` varchar(30) DEFAULT NULL,
  `especificacion` varchar(100) DEFAULT NULL,
  `fkVenta` int(11) DEFAULT NULL,
  `horaFin` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`idmulti`),
  KEY `fkVenta` (`fkVenta`),
  CONSTRAINT `multipuntos_ibfk_1` FOREIGN KEY (`fkVenta`) REFERENCES `cotizaciones_demo2` (`numero_cotizacion`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=28 DEFAULT CHARSET=latin1;

INSERT INTO multipuntos VALUES("6","si","no","si","no","si","no","si","no","si","no","","1","2018-09-10 20:15:37");
INSERT INTO multipuntos VALUES("26","Si","Si","Si","Si","Si","Si","Si","Si","Si","Si","KLJHKLJKL","1","2018-09-10 20:19:53");
INSERT INTO multipuntos VALUES("27","Si","Si","Si","Si","Si","Si","Si","Si","Si","Si","KLJHKLJKL","1","2018-09-10 20:19:53");



CREATE TABLE `persona` (
  `idpersona` smallint(6) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(30) DEFAULT NULL,
  `apeliidoP` varchar(30) DEFAULT NULL,
  `apellidoM` varchar(30) DEFAULT NULL,
  `tel` int(12) DEFAULT NULL,
  PRIMARY KEY (`idpersona`)
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=latin1;

INSERT INTO persona VALUES("1","lucio","biorato","ascencio","23232222");
INSERT INTO persona VALUES("6","LEONARDO","GARCIA","DIAZ","2147483647");
INSERT INTO persona VALUES("7","ERIC","GARCIA ","ESCAMILLA","2147483647");
INSERT INTO persona VALUES("10","PEPE","LOPEZ","JKHjk","22222");
INSERT INTO persona VALUES("11","CRISTINA ","BIORATO ","ROSAS","2147483647");



CREATE TABLE `promocion` (
  `idpromo` smallint(6) NOT NULL AUTO_INCREMENT,
  `descripcionp` varchar(100) DEFAULT NULL,
  `codigop` varchar(30) DEFAULT NULL,
  `fkArticulo` smallint(6) DEFAULT NULL,
  `estatus` varchar(30) DEFAULT NULL,
  `fechaInicio` date DEFAULT NULL,
  `fechaFin` date NOT NULL,
  PRIMARY KEY (`idpromo`),
  KEY `fkArticulo` (`fkArticulo`),
  CONSTRAINT `promocion_ibfk_1` FOREIGN KEY (`fkArticulo`) REFERENCES `articulo` (`idarticulo`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

INSERT INTO promocion VALUES("2","50%","3qezms","11","activo","2018-12-31","2018-12-25");
INSERT INTO promocion VALUES("3","50%","52b1m2","11","activo","2018-12-31","2019-01-29");



CREATE TABLE `provedor` (
  `idprovedor` smallint(6) NOT NULL AUTO_INCREMENT,
  `nombreP` varchar(50) NOT NULL,
  `rfc` varchar(50) NOT NULL,
  `fkdomicilio` smallint(6) NOT NULL,
  `correo` varchar(50) NOT NULL,
  `telefono` varchar(50) NOT NULL,
  PRIMARY KEY (`idprovedor`),
  KEY `fkdomicilio` (`fkdomicilio`),
  CONSTRAINT `provedor_ibfk_1` FOREIGN KEY (`fkdomicilio`) REFERENCES `direccion` (`iddireccion`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

INSERT INTO provedor VALUES("1","nutresa","hjghjg23","2","arturo@hotmail.com","343242323");



CREATE TABLE `sobrepedido` (
  `idpedido` smallint(6) NOT NULL AUTO_INCREMENT,
  `fkCliente` smallint(6) NOT NULL,
  `fkProvedor` smallint(6) NOT NULL,
  `fecha` date NOT NULL,
  `producto` varchar(100) NOT NULL,
  `precio` double NOT NULL,
  `cantidad` int(11) NOT NULL,
  `subtotal` double NOT NULL,
  `anticipo` double NOT NULL,
  `total` double NOT NULL,
  `status` varchar(50) NOT NULL,
  PRIMARY KEY (`idpedido`),
  KEY `fkCliente` (`fkCliente`),
  KEY `fkProvedor` (`fkProvedor`),
  CONSTRAINT `sobrepedido_ibfk_1` FOREIGN KEY (`fkCliente`) REFERENCES `cliente` (`idcliente`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `sobrepedido_ibfk_2` FOREIGN KEY (`fkProvedor`) REFERENCES `provedor` (`idprovedor`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=16 DEFAULT CHARSET=latin1;

INSERT INTO sobrepedido VALUES("15","5","1","2018-09-10","luces led","600","85","51000","250","50750","En proceso");



CREATE TABLE `tecnico` (
  `idtecnico` smallint(6) NOT NULL AUTO_INCREMENT,
  `fkPersona` smallint(6) NOT NULL,
  PRIMARY KEY (`idtecnico`),
  KEY `fkPersona` (`fkPersona`),
  CONSTRAINT `tecnico_ibfk_1` FOREIGN KEY (`fkPersona`) REFERENCES `persona` (`idpersona`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=latin1;




CREATE TABLE `tipo` (
  `idtipo` smallint(6) NOT NULL AUTO_INCREMENT,
  `tipo` varchar(30) DEFAULT NULL,
  PRIMARY KEY (`idtipo`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

INSERT INTO tipo VALUES("1","LLANTAS");
INSERT INTO tipo VALUES("2","rines");
INSERT INTO tipo VALUES("3","audio");



CREATE TABLE `tmp_cotizacion` (
  `id_tmp` smallint(6) NOT NULL AUTO_INCREMENT,
  `id_producto` smallint(11) NOT NULL,
  `cantidad_tmp` int(11) NOT NULL,
  `precio_tmp` double(8,2) DEFAULT NULL,
  `session_id` varchar(100) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id_tmp`),
  KEY `id_producto` (`id_producto`),
  CONSTRAINT `tmp_cotizacion_ibfk_1` FOREIGN KEY (`id_producto`) REFERENCES `articulo` (`idarticulo`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

INSERT INTO tmp_cotizacion VALUES("5","11","1","78.00","2uv7tjsbqnvvbql81l70a07om1");



CREATE TABLE `tmp_cotizacion2` (
  `id_tmp` smallint(6) NOT NULL AUTO_INCREMENT,
  `id_producto` smallint(11) NOT NULL,
  `cantidad_tmp` int(11) NOT NULL,
  `precio_tmp` double(8,2) DEFAULT NULL,
  `session_id` varchar(100) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id_tmp`),
  KEY `id_producto` (`id_producto`),
  CONSTRAINT `tmp_cotizacion2_ibfk_1` FOREIGN KEY (`id_producto`) REFERENCES `articulo` (`idarticulo`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=211 DEFAULT CHARSET=latin1;

INSERT INTO tmp_cotizacion2 VALUES("125","11","1","78.00","0brg5rs1ac367uf39kg0ocp8d0");
INSERT INTO tmp_cotizacion2 VALUES("198","11","1","78.00","7s3k7rqu12uv7apik9kup3o7k0");
INSERT INTO tmp_cotizacion2 VALUES("205","11","1","78.00","53i2ck5k4na663e7qut4j08bq5");



CREATE TABLE `user_demo` (
  `user_id` int(11) NOT NULL AUTO_INCREMENT,
  `firstname` varchar(32) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL DEFAULT '',
  `lastname` varchar(32) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL DEFAULT '',
  `email` varchar(96) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL DEFAULT '',
  `code` varchar(32) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `status` tinyint(1) NOT NULL,
  `date_added` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`user_id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

INSERT INTO user_demo VALUES("1","Obed","Alvarado","joaquinobed@gmail.com","2555","1","2014-04-11 00:00:00");



CREATE TABLE `vendedor` (
  `idvendedor` smallint(6) NOT NULL AUTO_INCREMENT,
  `fkPersona` smallint(6) NOT NULL,
  PRIMARY KEY (`idvendedor`),
  KEY `fkPersona` (`fkPersona`),
  CONSTRAINT `vendedor_ibfk_1` FOREIGN KEY (`fkPersona`) REFERENCES `persona` (`idpersona`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;




CREATE TABLE `ventas` (
  `idventas` smallint(6) NOT NULL AUTO_INCREMENT,
  `fkArticulo` smallint(6) DEFAULT NULL,
  `fkVendedor` smallint(6) DEFAULT NULL,
  `fkPromocion` smallint(6) DEFAULT NULL,
  `fkCliente` smallint(6) DEFAULT NULL,
  `cantidad` varchar(30) DEFAULT NULL,
  `fecha` date DEFAULT NULL,
  `total` double DEFAULT NULL,
  `hora` time DEFAULT NULL,
  `extras` varchar(30) DEFAULT NULL,
  `fkAuto` smallint(6) DEFAULT NULL,
  `fkTecninco` smallint(6) DEFAULT NULL,
  PRIMARY KEY (`idventas`),
  KEY `fkArticulo` (`fkArticulo`),
  KEY `fkPromocion` (`fkPromocion`),
  KEY `fkCliente` (`fkCliente`),
  KEY `fkAuto` (`fkAuto`),
  KEY `fkVendedor` (`fkVendedor`),
  KEY `fkTecninco` (`fkTecninco`),
  CONSTRAINT `ventas_ibfk_1` FOREIGN KEY (`fkArticulo`) REFERENCES `articulo` (`idarticulo`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `ventas_ibfk_3` FOREIGN KEY (`fkPromocion`) REFERENCES `promocion` (`idpromo`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `ventas_ibfk_4` FOREIGN KEY (`fkCliente`) REFERENCES `cliente` (`idcliente`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `ventas_ibfk_5` FOREIGN KEY (`fkAuto`) REFERENCES `automovil` (`idauto`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `ventas_ibfk_6` FOREIGN KEY (`fkTecninco`) REFERENCES `tecnico` (`idtecnico`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `ventas_ibfk_7` FOREIGN KEY (`fkVendedor`) REFERENCES `vendedor` (`idvendedor`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `ventas_ibfk_8` FOREIGN KEY (`fkTecninco`) REFERENCES `tecnico` (`idtecnico`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=latin1;


