<?php
class auto{
    public $jmeno;
    //konstruktor pro jmeno auta
    public function __construct($jmeno)
    {
        $this->jmeno = $jmeno;
    }

    //funkce pro echovani zvuku auta
    public function mluv(){
        return 'Brm Brm!';
    }
}