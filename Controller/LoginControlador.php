<?php

    namespace   Controller;

    class LoginControlador extends Controlador{
        public function login(){
            $this->cargarVista("Login/inicio_sesion");
        }

        public function loginaction(){
            $this->cargarVista("Login/LoginAction");
        }

        public function logout(){
            $this->cargarVista("Login/LogoutAction");
        }
        public function registeraction(){
            $this->cargarVista("Login/RegisterAction");
        }
        public function registro(){
            $this->cargarVista("Login/registro");
        }
        public function registrar(){
            $this->cargarVista("Login/registroL");
        }
        public function registra(){
            $this->cargarVista("Login/regAction");
        }
    }