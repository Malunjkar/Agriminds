<?php

namespace App\Controllers;
use App\Models\MachineModel;
use App\Controllers\BaseController;

class ViewmachineController extends BaseController
{

    private $machine = '' ;
    public function __construct(){
      
        $this->machine = new MachineModel();       
    }
    public function viewmachine()
    {
         $data['machine']=$this->machine->findAll();

         
        
        return view('hard/viewmachine',$data);
    }
}
