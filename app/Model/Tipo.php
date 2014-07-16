<?php
    //Model que acessa a "tabela tipos"

    class Tipo extends AppModel{
    //1 Tipo tem N produtos, has many implica que a Outra tabela terá chave secundária
        public $name = 'Tipo';
        public $hasMany=array('Prato'); 
        
       /*função que retorna uma array com todos os tipos encontrados.
        * será usado para montar o menu no lado esquerdo do layout
        */ 
        function getTipo($idTipo=null){
            
            if($idTipo!=null){           
                return $this->find('all',array('conditions'=>array('id'=>$idTipo)));                
            }

            return $this->find('all');
            
    
        }          
        
    }
?>


