<!-- GOAL: nell'ottica di quanto visto a lezione definire classe Square e classe Cube (2 e 3 dimensioni); definire, oltre a variabili d'istanza, costruttore, e toString, i metodi per il calcolo dell'area/volume e del perimetro/superficie cercando di sfruttare al meglio ereditarieta' e polimorfismo; testare le classi definite con alcune istanze per verificare che sia tutto corretto -->

<?php
  class Square{
    public $lato;
    public $perimetro;
    public $area;

    public function __construct($lato){
      $this -> lato = $lato;
      $this -> perimetro = $lato * 4;
      $this -> area = $lato * $lato;
    }

    public function __strCoords(){
      return  "lato: " . $this -> lato . "cm <br>"
            . "perimetro: " . $this -> perimetro . "cm <br>"
            . "area: " . $this -> area . "cm² <br>";
    }

    public function __toString(){
      return "Square (2D Obj): <br>" . $this -> __strCoords() . "<br>";
    }

  }

  class Cube extends Square{
    public $volume;
    public $superficie;

    public function __construct($lato){
      parent::__construct($lato);
      $this -> volume = $lato * $lato * $lato;
      $this -> superficie = 6 * $lato * $lato;
    }

    public function __strCoords(){
      return  parent::__strCoords()
            . "superficie: " . $this -> superficie . "cm² <br>"
            . "volume: " . $this -> volume . "cm³ <br>";
    }

    public function __toString(){
      return "Cube (3D Obj): <br>" . $this -> __strCoords() . "<br>";
    }
  }

  $square1 = new Square (12);
  $cube1 = new Cube (14);

  echo $square1;
  echo $cube1;

?>
