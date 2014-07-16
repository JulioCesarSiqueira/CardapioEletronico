<?php

class PratosController extends AppController{
   public $name='Pratos';   
   public $layout='layoutPrincipalCardapio';
    
    
    //função que manda buscar todos os pratos pertencentes a um tipo			
    //esse método é chamado dentro do elemento pratos.ctp mais abaixo
    //vai ser chamado a partir do element pratos.ctp
    
    function lists(){ 
         $tipos=$this->Prato->lists($this->passedArgs['prat']);
         return $tipos;
    }
		
    //Essa fun��o � chamada a partir de Pedido/index.ctp quando o usuario j� escolheu
    //O tipo de prato e clica no link do prato que lists() chamou
    //
    //função que busca todos os detalhes de um prato e depois renderiza isso para ser exibido
    //na view view.ctp, também no meio do layout principal
    //vai ser chamado a partir do elment prato_detalhes
    
    function view(){
        
        $prato_id=$this->passedArgs['prato_id'];
        $tipo_id=$this->passedArgs['tipo_id'];
        
           //eu poderia chamar a função find direto daqui
           //mas para respeitar o modelo MVC vou chamar apenas no MODEL
        
            $result=$this->Prato->view($prato_id);
            
            $this->set('prato',$result);
            
            //debug($result);
            //print_r($result);
        
    }	
    
    
}
