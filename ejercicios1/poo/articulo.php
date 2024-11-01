<?php
    class Articulo{
        protected $nombre;
        protected $precio;

        public function __construct($pNombre, $pPrecio){
            $this->nombre = $pNombre;
            $this->precio = $pPrecio;

        }
        public function __toString() {
            $string = 'Nombre: ' . $this->nombre . '<br />';
            $string .= 'Precio: ' . $this->precio . ' &euro;<br />';
            return $string;
        }

        function getPrecio(){
            return $this->precio;
        }

        function setPrecio($pPrecio){
            if(is_numeric($pPrecio)){
                $this->precio = $pPrecio;
            }
        }
    }
?>