<?php
trait Sconto{
    public $scontoVenti;
    public function getScontoVenti($iscritto){
        if($iscritto==true){
           $this->scontoVenti =0.80;
        }else{
           $this->scontoVenti=1;
        }
        return $this->scontoVenti;
    }
}

?>