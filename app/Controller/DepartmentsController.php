<?php

class DepartmentsController extends AppController {
        public $helpers = array ('Html','Form');
        public $name = 'Departments';
        
        //indica que vai usar um layout diferente do padrão
        //public $layout='layoutPrincipalLoja'; 
        
        
        public function index(){            


        }


        public function add() {
                if ($this->request->is('post')) {
                        if ($this->Department->save($this->request->data)) {
                                $this->Session->setFlash('Salvou a mensagem ;)');
                                $this->redirect(array('action' => 'index'));
                        }
                }
        }


        //ESTA FUN��O ESTÁ PREPARADA PARA RECEBER REQUESTS DO TIPO POST E GET
        //BASTA MUDAR O TIPO DE FORM QUE SERÁ ENVIADO
        
        public function show(){
            //$this->set('dados', $this->Department->find('all'));
            
               

                    //se a request for do tipo post
                if ($this->request->is('post')){ 	

                        //region é o nome do input colocado no form
                        $region=$this->data['Department']['region'];				

                        //funcionando usando o método find padrão da classe Model
                        $busca= $this->Department->find('all', array('conditions' => array('Department.region' => $region)));

                        //funcionando com o método getDeparment, implementado diretamente no corpo do model Department
                        //   $busca= $this->Department->getDepartment($region); 
                        
                        $this->set('dados', $busca);                           
                        
                        


                        }//se for tipo get
                        else if ($this->request->is('get')){ 	
                            $region = $this->request->query['region'];
                            $busca= $this->Department->find('all', array('conditions' => array('Department.region' => $region)));

                            echo $region;
                            $this->set('dados', $busca);                           
                        }
                        
                       
                        
                   
          
                        
                        
        }   



}



		
		
?>