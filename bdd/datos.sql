INSERT INTO empresas VALUES
("10001","VALORES Y SERVICIOS REGIONALES","usuario@vsr.sv.cv","12345678","Empresas_logos/10001.jpg"),
("10002","ALMACENES SIMAN","usuario@siman.sv.cv","12345678","Empresas_logos/10002.jpg"),
("10003","POLLO CAMPERO","usuario@pollo.campero.sv.cv","12345678","Empresas_logos/10003.png"),
("10004","TIGO","usuario@tigo.sv.cv","12345678","Empresas_logos/10004.png"),
("10005","DON POLLO","usuario@don.pollo.sv.cv","12345678","Empresas_logos/10005.jpg"),
("10006","RH SOLUCIONES","usuario@rh.sv.cv","12345678","Empresas_logos/10006.png"),
("10007","PAE","usuario@pae.sv.cv","12345678","Empresas_logos/10007.png"),
("10008","ASEI","usuario@asei.sv.cv","12345678","Empresas_logos/10008.png"),
("10009","PANADERIA EL ROSARIO","usuario@per.sv.cv","12345678","Empresas_logos/10009.png"),
("10010","BANCO CUSCATLÁN","usuario@bc.sv.cv","12345678","Empresas_logos/10010.jpg")

INSERT INTO detallesoferta VALUES
("DOF101","Servicios","Asistente Contable","Tiempo completo","Bachiller","de uno a tres años","18 / 70","600","600"),
("DOF102","Comercio Minorista","Auxiliar de Bodega","Tiempo completo","Bachiller","sin experiencia","18 / 27","0","0"),
("DOF103","Hoteleria Turismo Restaurantes","Cocinero","Tiempo completo","Bachiller","sin experiencia","18 / 70","0","0"),
("DOF104","Telecomunicaciones","Ejecutiv@ de Ventas","Tiempo completo","Bachiller","de uno a tres años","22 / 70","0","0"),
("DOF105","Consumo Masivo Bebidas Alimentos etc","Cocinero","Tiempo completo","Bachiller","sin experiencia","18/70","0","0"),
("DOF106","Servicios","Ejecutiv@ de Ventas","Tiempo completo","Bachiller","de uno a tres años","18 / 70","0","365"),
("DOF107","Agencia de Reclutamiento","Agente de Soporte","Tiempo completo","Bachiller","de uno a tres años","18 / 35","0","400"),
("DOF108","Bancos Financieras","Auxiliar Contable","Tiempo completo","Bachiller","de uno a tres años","21 / 42","0","0"),
("DOF109","Consumo Masivo Bebidas Alimentos etc","Chofer, Piloto","Tiempo completo","Bachiller","de tres a cinco años","18 / 70","365","365"),
("DOF110","Bancos Financieras","Gerente de Agencia, Sucursal","Tiempo completo","Bachiller","de uno a tres años","25 / 50","0","0")

INSERT INTO ofertas
(IdOferta, NombreOferta, Estado, IdEmpresa, IdDetallesOferta, Descripcion)
VALUES
("OFE101","ASISTENTE CONTABLE","1","10001","DOF101","Vacio"),
("OFE102","AUXILIAR DE BODEGA","1","10002","DOF102","Vacio"),
("OFE103","FERIA DE EMPLEO COCINEROS","1","10003","DOF103","Vacio"),
("OFE104","EJECUTIVO COMERCIAL AGENCIA LOURDES COLÓN","1","10004","DOF104","Vacio"),
("OFE105","COCINERO ZONA SAN SEBASTIÁN","1","10005","DOF105","Vacio"),
("OFE106","EJECUTIVO POS VENTA JUNIOR","1","10006","DOF106","Vacio"),
("OFE107","EJECUTIVO DE CANALES DIGITALES","1","10007","DOF107","Vacio"),
("OFE108","ASISTENTE CONTABLE","1","10008","DOF108","Vacio"),
("OFE109","MOTORISTA","	1","10009","DOF109","Vacio"),
("OFE110","GERENTE DE AGENCIA","1","10010","DOF110","Vacio")