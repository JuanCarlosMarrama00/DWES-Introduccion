<?php 
    class Usuario {
        private int $id_usuario;
        private string $nombre;
        private string $apellido;
        private string $nombre_usuario;
        private string $password;

        public function __construct(int $nombre, string $apellido, string $nombre_usuario, string $password){
            $this->nombre = $nombre;
            $this->apellido = $apellido;
            $this->nombre_usuario = $nombre_usuario;
            $this->password = $password;
        }

        public function getId_usuario()
        {
                return $this->id_usuario;
        }

        public function getNombre()
        {
                return $this->nombre;
        }

        public function setNombre($nombre)
        {
                $this->nombre = $nombre;

                return $this;
        }

        public function getApellido()
        {
                return $this->apellido;
        }

        public function setApellido($apellido)
        {
                $this->apellido = $apellido;

                return $this;
        }

        public function getNombre_usuario()
        {
                return $this->nombre_usuario;
        }

        public function setNombre_usuario($nombre_usuario)
        {
                $this->nombre_usuario = $nombre_usuario;

                return $this;
        }

        public function getPassword()
        {
                return $this->password;
        }

        public function setPassword($password)
        {
                $this->password = $password;

                return $this;
        }
        public function __toString() {
                return "ID Usuario: " . $this->id_usuario . 
                       "\nNombre: " . $this->nombre . 
                       "\nApellido: " . $this->apellido . 
                       "\nNombre de Usuario: " . $this->nombre_usuario .
                       "\nContraseña: " . $this->password;
            }
        }
