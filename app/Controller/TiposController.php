<?php

class TiposController extends AppController{
    public $name='Tipos';
    public $helpers = array ('Html','Form');
    public $layout='layoutPrincipalCardapio'; 
    
 
    
    function index(){

       
       $result=$this->Tipo->find('all');               
       
       $this->set('tipos',$result);
       
    }
    
    /*função que utiliza retorna uma array com todos os Tipos cadastrados
     * e também será utilizada para montar o menu no lado esquerdo     * 
     */
    function getAll(){      
        $result=$this->Tipo->getTipo();
        return $result;
        
        }
    
    //função que será chamada a partir do element menu.ctp
    //esta função vai fornecer uma lista de todos os tipos
    
    function menu(){
         $result=$this->Tipo->getTipo();
         //$this->set('tipos',$result);
         return $result;
         
         
    }
        
}


?>