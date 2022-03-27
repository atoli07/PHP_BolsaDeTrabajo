INSERT INTO empresas VALUES
("10001","VALORES Y SERVICIOS REGIONALES","usuario@vsr.sv.cv","12345678"),
("10002","ALMACENES SIMAN","usuario@siman.sv.cv","12345678"),
("10003","POLLO CAMPERO","usuario@pollo.campero.sv.cv","12345678"),
("10004","TIGO","usuario@tigo.sv.cv","12345678"),
("10005","DON POLLO","usuario@don.pollo.sv.cv","12345678"),
("10006","RH SOLUCIONES","usuario@rh.sv.cv","12345678"),
("10007","PAE","usuario@pae.sv.cv","12345678"),
("10008","ASEI","usuario@asei.sv.cv","12345678"),
("10009","PANADERIA EL ROSARIO","usuario@per.sv.cv","12345678"),
("10010","BANCO CUSCATLÁN","usuario@bc.sv.cv","12345678")

INSERT INTO detallesoferta VALUES
("DOF001","Servicios","Asistente Contable","Tiempo completo","Bachiller","de uno a tres años","18 / 70","600","600"),
("DOF002","Comercio Minorista","Auxiliar de Bodega","Tiempo completo","Bachiller","sin experiencia","18 / 27","0","0"),
("DOF003","Hoteleria Turismo Restaurantes","Cocinero","Tiempo completo","Bachiller","sin experiencia","18 / 70","0","0"),
("DOF004","Telecomunicaciones","Ejecutiv@ de Ventas","Tiempo completo","Bachiller","de uno a tres años","22 / 70","0","0"),
("DOF005","Consumo Masivo Bebidas Alimentos etc","Cocinero","Tiempo completo","Bachiller","sin experiencia","18/70","0","0"),
("DOF006","Servicios","Ejecutiv@ de Ventas","Tiempo completo","Bachiller","de uno a tres años","18 / 70","0","365"),
("DOF007","Agencia de Reclutamiento","Agente de Soporte","Tiempo completo","Bachiller","de uno a tres años","18 / 35","0","400"),
("DOF008","Bancos Financieras","Auxiliar Contable","Tiempo completo","Bachiller","de uno a tres años","21 / 42","0","0"),
("DOF009","Consumo Masivo Bebidas Alimentos etc","Chofer, Piloto","Tiempo completo","Bachiller","de tres a cinco años","18 / 70","365","365"),
("DOF010","Bancos Financieras","Gerente de Agencia, Sucursal","Tiempo completo","Bachiller","de uno a tres años","25 / 50","0","0")

INSERT INTO ofertas
(IdOferta, NombreOferta, Estado, IdEmpresa, IdDetallesOferta, Descripcion)
VALUES
("OFE001","ASISTENTE CONTABLE","1","10001","DOF001","Vacio"),
("OFE002","AUXILIAR DE BODEGA","1","10002","DOF002","Vacio"),
("OFE003","FERIA DE EMPLEO COCINEROS","1","10003","DOF003","Vacio"),
("OFE004","EJECUTIVO COMERCIAL AGENCIA LOURDES COLÓN","1","10004","DOF004","Vacio"),
("OFE005","COCINERO ZONA SAN SEBASTIÁN","1","10005","DOF005","Vacio"),
("OFE006","EJECUTIVO POS VENTA JUNIOR","1","10006","DOF006","Vacio"),
("OFE007","EJECUTIVO DE CANALES DIGITALES","1","10007","DOF007","Vacio"),
("OFE008","ASISTENTE CONTABLE","1","10008","DOF008","Vacio"),
("OFE009","MOTORISTA","	1","10009","DOF009","Vacio"),
("OFE010","GERENTE DE AGENCIA","1","10010","DOF010","Vacio")