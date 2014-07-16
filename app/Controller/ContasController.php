

<?php
App::uses('CakeEmail', 'Network/Email');
    
class ContasController extends AppController{
    public $name='Contas';
    public $layout='layoutPrincipalCardapio';
    
    
    /*recebe os dados de Pedido/view.ctp e renderiza na view fechaconta.ctp
     * 
     */
    function fecha(){
        $session_id=$this->sid;
        $result=$this->Pedido->getPedidoContent($session_id); 
        
        $this->set('pratos',$result);
        
       
        
  
    }
    function confirma(){
         // $pratos=$this->PedidosController->getPedido();
        
        
        if ($this->request->is('post')){ 	
              $detalhesconta=$this->request->data;
              $pratos=$this->Pedido->getPedidoContent($this->sid);
                
                           
              $this->envia($detalhesconta,$pratos);
              $this->set(compact('detalhesconta','pratos'));
        }
        
             
        $this->Pedido->esvaziaPedido($this->sid);        
        
     
    }
       
 
    
    //envia email
    function envia($detalhes,$pratos) {
        //debug($detalhes);
        
        $Email = new CakeEmail('smtp');
        $Email->to('masionas@hotmail.com'); //destinatario teste
        $Email->subject('Novo Pedido - 0001');
        
        $corpoemail='Pratos do pedido: ';
        
        foreach($pratos as $prato){
            $corpoemail.=$prato['Prato']['nome']." \n";
            
        }
        
        $corpoemail.='Nome: '.$detalhes['Conta']['nomecliente']." \n";
        $corpoemail.='Detalhes do Pedido: '.$detalhes['Conta']['detalhespedido'];
                
        $Email->send($corpoemail);
        
        $this->Session->setFlash('Email Enviado ');
                   
        
    }
    
    
    function index() {
    }
}//fim da classe
    
    
