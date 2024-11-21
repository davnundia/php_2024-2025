<?php
    include "articulo.php";

    if (!class_exists('Articulo')){
        echo "No existe la clase articulo";
    }

    final class ArticuloRebajado extends Articulo {
        private $rebaja;

        public function __construct($pNombre, $pPrecio, $pRebaja) {
            parent::__construct($pNombre, $pPrecio);
            $this->rebaja = $pRebaja;
        }

        private function calculaDescuento() {
            return $this->precio * ($this->rebaja / 100);
        }

        public function precioRebajado() {
            return $this->precio - $this->calculaDescuento();
        }

        public function __toString() {
            $string = parent::__toString();
            $string .= 'La rebaja es: ' . $this->rebaja . ' %<br />';
            $string .= 'El descuento es: ' . $this->calculaDescuento() . ' &euro;<br />';
            return $string;
        }
    }

    $articulorebajado1 = new ArticuloRebajado("bicicleta", 352.10, 20);

    echo $articulorebajado1;
    echo "El precio del artículo rebajado es " . $articulorebajado1->precioRebajado() . " &euro;<br />";

    echo "<pre>";
    var_dump($articulorebajado1);
    echo "</pre>";
?>
