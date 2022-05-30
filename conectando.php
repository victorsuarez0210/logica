<?php

class Conectando{

    private $con;

    public function __construyendo()
    {
        $this->con = new mysqli('localhost', 'root', '', 'victors');
    }


}

?>