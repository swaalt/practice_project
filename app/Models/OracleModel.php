<?php

namespace App\Models;
use Config\Database;
use PDO;
class OracleModel
{
    private $oracle;
    public function __construct(){
        $this->oracle = new PDO('oci:dbname=xe','PREMIUM','pinguirey1');
    
    }
    public function getAll(){
        $sql = 'SELECT * FROM EMPRESAS';
        $stm = $this->oracle->prepare($sql);
        $stm->execute();
        return $stm->fetchAll(PDO::FETCH_ASSOC);
    }
}