<?php

namespace App\Controllers;
use App\Models\OracleModel;

class Home extends BaseController
{
    protected $OracleModel;
    public function __construct()
    {
       $this->OracleModel = new OracleModel();
    }
    public function index()
    {
        $result = [
        'Empresas'=>$this->OracleModel->getAll()
   
        ];
        return view('list_practices', $result);
    }
}
