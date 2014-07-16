<?php 
//App::uses('AuthComponent', 'Controller/Component');
	class Department extends AppModel{
		public $name='Department';
		 
		 //a linha abaixo é opcional, pois o cake ja usará
		 //esta tabela, devido a nomenclatura da model
		 //só usaria se fosse fora do padrão 
		 //	public $useTable='departments';
	
	//trabalhando do jeito certo no modelo MVC
        //as operações com DB deveriam estar todas aqui
        //e chamadas vias controller
        
             function getDepartment($region=null){
                 return $this->find('all',array('conditions'=>array('region'=>$region)));
             
             }
		
	
	}
?>