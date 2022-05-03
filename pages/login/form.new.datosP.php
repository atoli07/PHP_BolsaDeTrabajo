<?php
$departamentos=array(
    "Ahuachapán"=>array(
        "Ahuachapán",
        "Apaneca",
        "Atiquizaya",
        "Concepción de Ataco",
        "El Refugio",
        "Guaymango",
        "Jujutla",
        "San Francisco Menéndez",
        "San Lorenzo",
        "San Pedro Puxtla",
        "Tacuba",
        "Turín"
    ),
    "Cabañas"=>array(
        "Cinquera",
        "Dolores",
        "Guacotecti",
        "Ilobasco",
        "Jutiapa",
        "San Isidro",
        "Sensuntepeque",
        "Tejutepeque",
        "Victoria"
    ),
    "Chalatenango"=>array(
        "Agua Caliente",
        "Arcatao",
        "Azacualpa",
        "Cancasque",
        "Chalatenango",
        "Citalá",
        "Comapala",
        "Concepción Quezaltepeque",
        "Dulce Nombre de María",
        "El Carrizal",
        "El Paraíso",
        "La Laguna",
        "La Palma",
        "La Reina",
        "Las Flores",
        "Las Vueltas",
        "Nombre de Jesús",
        "Nueva Concepción",
        "Nueva Trinidad",
        "Ojos de Agua",
        "Potonico",
        "San Antonio de la Cruz",
        "San Antonio Los Ranchos",
        "San Fernando",
        "San Francisco Lempa",
        "San Francisco Morazán",
        "San Ignacio",
        "San Isidro Labrador",
        "San Luis del Carmen",
        "San Miguel de Mercedes",
        "San Rafael",
        "Santa Rita",
        "Tejutla"
    ),
    "Cuscatlán"=>array(
        "Cojutepeque",
        "Candelaria",
        "El Carmen",
        "El Rosario",
        "Monte San Juan",
        "Oratorio de Concepción",
        "San Bartolomé Perulapía",
        "San Cristóbal",
        "San José Guayabal",
        "San Pedro Perulapán",
        "San Rafael Cedros",
        "San Ramón",
        "Santa Cruz Analquito",
        "Santa Cruz Michapa",
        "Suchitoto",
        "Tenancingo"
    ),
    "La Libertad"=>array(
        "Playa Mizata",
        "Playa La Perla",
        "Playa El Palmarcito",
        "Playa km 59",
        "Playa El Zonte",
        "Playa El Tunco",
        "Playa El Sunzal",
        "Playa Río Grande, La Bocana",
        "Playa El Majahual",
        "Playa San Blas",
        "Playa Conchalio",
        "Playa Punta Roca",
        "Playa La Paz",
        "Playa El Obispo",
        "Playa Las Flores",
        "Playa San Diego"
    ),
    "Morazán"=>array(
        "Arambala",
        "Cacaopera",
        "Chilanga",
        "Corinto",
        "Delicias de Concepción",
        "El Divisadero",
        "El Rosario",
        "Gualococti",
        "Guatajiagua",
        "Joateca",
        "Jocoaitique",
        "Jocoro",
        "Lolotiquillo",
        "Meanguera",
        "Osicala",
        "Perquín",
        "San Carlos",
        "San Fernando",
        "San Francisco Gotera",
        "San Isidro",
        "San Simón",
        "Sensembra",
        "Sociedad",
        "Torola",
        "Yamabal",
        "Yoloaiquín"
    ),
    "La Paz"=>array(
        "Zacatecoluca",
        "Cuyultitán",
        "El Rosario",
        "Jerusalén",
        "Mercedes La Ceiba",
        "Olocuilta",
        "Paraíso de Osorio",
        "San Antonio Masahuat",
        "San Emigdio",
        "San Francisco Chinameca",
        "San Pedro Masahuat",
        "San Juan Nonualco",
        "San Juan Talpa",
        "San Juan Tepezontes",
        "San Luis La Herradura",
        "San Luis Talpa",
        "San Miguel Tepezontes",
        "San Pedro Nonualco",
        "San Rafael Obrajuelo",
        "Santa María Ostuma",
        "Santiago Nonualco",
        "Tapalhuaca"
    ),
    "Santa Ana"=>array(
        "Candelaria de la Frontera",
        "Chalchuapa",
        "Coatepeque",
        "El Congo",
        "El Porvenir",
        "Masahuat",
        "Metapán",
        "San Antonio Pajonal",
        "San Sebastián Salitrillo",
        "Santa Ana",
        "Santa Rosa Guachipilín",
        "Santiago de la Frontera",
        "Texistepeque"
    ),
    "San Miguel"=>array(
        "Carolina",
        "Chapeltique",
        "Chinameca",
        "Chirilagua",
        "Ciudad Barrios",
        "Comacarán",
        "El Tránsito",
        "Lolotique",
        "Moncagua",
        "Nueva Guadalupe",
        "Nuevo Edén de San Juan",
        "Quelepa",
        "San Antonio",
        "San Gerardo",
        "San Jorge",
        "San Luis de la Reina",
        "San Miguel",
        "San Rafael Oriente",
        "Sesori",
        "Uluazapa"
    ),
    "San Salvador"=>array(
        "Aguilares",
        "Apopa",
        "Ayutuxtepeque",
        "Ciudad Delgado",
        "Cuscatancingo",
        "El Paisnal",
        "Guazapa",
        "Ilopango",
        "Mejicanos",
        "Nejapa",
        "Panchimalco",
        "Rosario de Mora",
        "San Marcos",
        "San Martín",
        "San Salvador",
        "Santiago Texacuangos",
        "Santo Tomás",
        "Soyapango",
        "Tonacatepeque"
    ),
    "San Vicente",
    "Sonsonate",
    "La Unión",
    "Usulután"
);
?>
<section class="w-100 vh-100 contenedor-new-datos d-flex justify-content-center align-items-center">
    <div class="formulario p-md-5 mx-md">
        <form action="" method="post" class="">
            <h2 class="text-center">Datos Personales</h2>
            <div class="input-group mb-3">
                <span class="input-group-text icono"><i class="bi bi-person"></i></span>
                <input type="text" class="form-control" name="nombres" placeholder="Ingrese sus nombres">
                <input type="text" class="form-control" name="apellidos" placeholder="Ingrese sus apellidos">
            </div>
            <div class="input-group mb-3">
                <span class="input-group-text icono"><i class="bi bi-123"></i></span>
                <input required type="number" class="form-control" name="edad" placeholder="Ingrese su edad">
            </div>
            <div class="input-group mb-3">
                <span class="input-group-text icono"><i class="bi bi-person"></i></span>
                <select class="form-select" id="selGenero" name="genero" aria-placeholder="Escoga una opción">
                    <option value="0">Masculino</option>
                    <option value="1">Femenino</option>
                </select>
            </div>
            <fieldset>
                <legend>Dirección <span class="icono"><i class="bi bi-pin-map-fill"></i></span></legend>
                <div class="input-group mb-3">
                <label class="input-group-text" for="selDep">Departamento</label>
                <select class="form-select"  id="selDep" name="departamento" aria-placeholder="Escoga una opción">
                    <?php
                    foreach ($departamentos as $dep) {
                        echo "<option value=\"$dep\">$dep</option>";
                    }
                    ?>    
                </select>
            </div>
            </fieldset>
            <div class="submit">
                <button type="submit" name="crear" class="boton estilizado"><span>Crear cuenta</span></button>
            </div>
        </form>
    </div>
</section>