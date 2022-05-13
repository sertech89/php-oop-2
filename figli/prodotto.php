<?php



class Prodotto{
    public $nome;
    public $genere;
    public $prezzo;
    
    
    public function __construct($_nome, $_genere,$_prezzo){
        $this -> setNome($_nome);
        $this -> setGenere($_genere);
        $this -> setPrezzo($_prezzo);


    }

    public function setNome($_nome)
    {
        $this->nome = $_nome;

        return $this;
    }
    
    
    public function setGenere($_genere)
    {
        $this->genere = $_genere;

        return $this;
    }
    
  


    public function setPrezzo($_prezzo)
    {
        $this->prezzo = $_prezzo;
        if (is_string($this->prezzo)) {
            throw new Exception("il prezzo non è un numero");}
        return $this;
    }    
    
   
   
}