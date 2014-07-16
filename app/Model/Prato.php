<?php


class Prato extends AppModel{
    public $name='Prato';
    public $belongsTo=array('Tipo');
    
    
    //função que busca todos os pratos a partir de uma Tipo passado
    
    public function lists($tipoId=null){
        $result=$this->find('all',array('conditions'=>array('Prato.tipo_id'=>$tipoId)));
                
            return $result;
        
              
    }
    
    //retorna uma lista de pratos de um tipo especifico
     public function view($tipoId=null,$pratoId=null){
        $result=$this->find('all',array('conditions'=>array('Prato.id'=>$tipoId)));   
        return $result;       
        
    }
    
    //retorna os dados de um prato especifico pelo id
     public function findById($pratoId=null){
        $result=$this->find('all',array('conditions'=>array('Prato.id'=>$pratoId)));   
        return $result;       
        
    }
    
    
    
    
}

