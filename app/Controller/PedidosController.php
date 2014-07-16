<?php

class PedidosController extends AppController{
    public $name='Pedidos';
    public $layout='layoutPrincipalCardapio';
    
     
 
    //exibirÃ¡ a index principal da loja (?)
    function index(){
        //$this->Session->write('Person.eyeColor', 'Green'); //funfando !
        
    }

    
    //adiciona 1 pratao ao pedido
    //se ele já foi adicionado antes, apenas aumenta qty dele 
    function add(){	
       
        $tipo_id=$this->passedArgs['tipo_id'];
        $prato_id=$this->passedArgs['prato_id'];
        
        //implementar
        //fazer uma busca para saber o status do produto
        //se for indisponivel, nem continua
     
        
        //faz uma busca pra saber se o prato ja foi adicionado ao pedido
        // $this->sid é a variavel que foi setada em AppController classe pai
        //e foi herdada em para este controller
        
        $contadorDePrato=$this->Pedido->getPratoNoPedido($prato_id,$this->sid);
     
        //se não foi,se retornar 0, apenas adiciona ele ao carrinho,addPedido()
        //else, se ja foi adicionado, adiciona +1 a qty a partir de updatePedido()
        
        if($contadorDePrato<1){
            $this->Pedido->addPedido($prato_id,$this->sid);
        }
        else{
            $this->Pedido->updatePedido($prato_id,$this->sid);
        }
        
        $this->Session->setFlash('TESTE'); 
               
        //$this->Cart->cleanUp(); limpa os pedidos antigos
             
        
        //funfando não mexer, pode ser usado para teste
        //$this->Pedido->addPedido($prato_id,$this->sid);
       // $this->Session->setFlash('Your stuff has been saved.');
        
        $this->redirect(array('controller'=>'Pratos',
                            'action'=>"view/tipo_id:$tipo_id/prato_id:$prato_id"));      
        
        
    }//fim da função ADD 

    
    
    //pega todos os pratos de um pedido a partir da sessionID
    //utiliza function getPedidoContent() do modle
    function getPedido(){
        //pega o valor que foi passado via get na url
        //$session_id=$this->passedArgs['session_id'];
        
        $session_id=$this->sid;
        
        //retorna o conteudo do pedido por meio da função getPedidoContent do Model
       
        return $this->Pedido->getPedidoContent($session_id); 
        
        
        
        
        
    }
    
    function view(){
        //não precisa enviar nenhum parametro, pq getPedido pega o pedido p
        //$pratos=$this->getPedido();
        
        //$this->set('pratos',$pratos);
        
    }
    function esvaziaPedido(){
               
        
            //se apagar retorna true
        if($this->Pedido->esvaziaPedido($this->sid)){
            
            
            
                      
        }
        //$this->redirect($this->referer());// redireciona para página anterior
                
        $this->redirect(array('action' => 'index'));
        
        //redirect para algum lugar
         
    }
    
    
    function deletaPratoPedido(){
        //$tipo_id=$this->passedArgs['tipo_id'];
        $prato_id=$this->passedArgs['prato_id'];
        
        //debug($prato_id);
        $this->Pedido->deletaPrato($prato_id,$this->sid);
        
          $this->redirect('/Pedidos');
    }
    
    //edita 1 prato do Pedido, ou seja, apenas 1 registro  
    function edit($pedidoid) {
           
           $this->Pedido->id = $pedidoid;
           
           //debug($pedidoid);
           
           if ($this->request->is('get')) { 
                $this->request->data = $this->Pedido->read(); 
                //$result=$this->getPedido();
                //$this->set('pratos',$result);
            } 
            else {//edita direto, nem manda para o Model
                if ($this->Pedido->save($this->request->data)) {
                    //$this->Session->setFlash('Your post has been updated.');
                    $this->redirect(array('action' => 'view'));
                    
                }
            }
    }
}

