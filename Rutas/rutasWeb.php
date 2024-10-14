<?php
    use Controller\InicioControlador;
    use Controller\LoginControlador;
    use Libreria\Enrutador;

    Enrutador::get("/",[InicioControlador::class,"inicio"]);
    //Login
    Enrutador::get("/Login/inicio_sesion",[LoginControlador::class,"login"]);
    Enrutador::get("/Login/registro",[LoginControlador::class,"registro"]);
    Enrutador::post("/Login/LoginAction",[LoginControlador::class,"loginaction"]);
    Enrutador::post("/Login/RegisterAction",[LoginControlador::class,"registeraction"]);
    Enrutador::get("/Login/LogoutAction",[LoginControlador::class,"logout"]);
    //locales
    Enrutador::post("/Login/resAction",[LoginControlador::class,"registra"]);
    Enrutador::get("/Login/registroL",[LoginControlador::class," registrar"]);


    Enrutador::obtenerRuta();