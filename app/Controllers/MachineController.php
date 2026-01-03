<?php

namespace App\Controllers;
use App\Models\MachineModel;

use App\Controllers\BaseController;

class MachineController extends BaseController
{

    private $machine = '' ;
    public function __construct(){
      
        $this->machine = new MachineModel();       
    }

    public function index()
    {
        $data['machine']=$this->machine->findAll();

         
        return view('hard/findmachine',$data);
    }

    public function create(){
        return view('hard/machine');
 
 
     }

     public function edit($machine_id){
        $data['machine']=$this->machine->find($machine_id);
        
        return view('hard/editmachine',$data);
    }
     public function save(){
       
        $data = [
            'machine_name' => $this->request->getVar('machine_name'),
            'machine_type'  => $this->request->getVar('machine_type'),
            'machine_rates'  => $this->request->getVar('machine_rates'),
            'mo_no'  => $this->request->getVar('mo_no'),
           
        ];
        
        $this->machine->insert($data);    
        $session = session(); 
        $session->setFlashdata('msg', 'Product Successfully Added');   
        return $this->response->redirect(site_url('/machine'));



    }

    public function update(){
        
        $machine_id = $this->request->getVar('machine_id');
       
        $data = [
            'machine_name' => $this->request->getVar('machine_name'),
            'machine_type'  => $this->request->getVar('machine_type'),
            'machine_rates'  => $this->request->getVar('machine_rates'),
            'mo_no'  => $this->request->getVar('mo_no'),
        ];
       
       $this->machine->update($machine_id, $data);        
       return $this->response->redirect(site_url('/machine'));
   }

    public function delete($machine_id){

        $data['machine'] = $this->machine->where('machine_id', $machine_id)->delete($machine_id);
        return $this->response->redirect(site_url('/machine'));
    
       }

}
