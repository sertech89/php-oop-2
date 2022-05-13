<?php
require __DIR__ . '/sconto.php';
class Crocchette extends Prodotto {
    use Sconto;
    public $ingredienti;
    public $tipologia;

    public function __construct(
        $_nome, 
        $_genere,
        $_prezzo,
        $_ingredienti,
        $_tipologia
    ){
        $this -> setNome($_nome);
        $this -> setGenere($_genere);
        $this -> setPrezzo($_prezzo);
        $this -> setIngredienti($_ingredienti);
        $this -> setTipologia($_tipologia);

    }

    public function setIngredienti($_ingredienti)
    {
        $this->ingredienti = $_ingredienti;

        return $this;
    }


    public function setTipologia($_tipologia)
    {
        $this->tipologia = $_tipologia;

        return $this;
    }
    
   
}

?>