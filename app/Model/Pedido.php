<?php

//model pedido controla a tabela pedidos do BD
//equivale ao Carrinho num ecommerce

class Pedido extends AppModel{
    public $name='Pedido';
    // 1 prato est· em N pedidos, 1 registro de pedido possui apenas 1 prato
    //entretanto isso ser· adaptado depois, pq cada sess„o ter· varios pedidos
    public $belongsTo=array('Prato');
    
        
      
    //Insere 1 prato no pedido
    // recebe um produto e a id de uma sess√£o e adiciona ao Pedido
    //adiciona 1 registro a tabela pedidos    
    
    function addPedido($pid,$sid){ //OK
	$this->data['Pedido']['prato_id']=$pid;
	$this->data['Pedido']['qty']=1;
	$this->data['Pedido']['pd_session_id']=$sid;
        
        $this->save($this->data);
               //save($this->request->data))
    }
    
        
    //busca o conteudo do pedido
    //traz todos os referente a Pedido e Prato (a partir do relacionamento dos models       
    function getPedidoContent($sid){ //OK
          
           //funfando normalmente            
           $result=$this->find('all',array('conditions'=>array('Pedido.pd_session_id'=>$sid)));
           return $result;
                
    }
    
    
     //retorna quantas vezes o prato j· apareceu no pedido
    //se j· apareceu no pedido, ent„o n„o ser· adiconado novamente
    //antiga getPedidoQty e getPedido
    function getPratoNoPedido($pid,$sid){//OK
        $result = $this->find('count',
             array('conditions'=>array('Pedido.prato_id'=>$pid,
                                       'Pedido.pd_session_id'=>$sid)));   
     
        return $result;
                     
    }
    
    
    //adiciona +1 ao campo qty de pedido , no gestrio do Prato que o cliente 
    //ja havia pedido anteriormente
    //essa verificaÁ„o foi feita no controller
    
     function updatePedido($pid,$sid){//OK
         
          $result = $this->find('all',
             array('conditions'=>array('Pedido.prato_id'=>$pid,
                                       'Pedido.pd_session_id'=>$sid))); 
         
         
          $quantidade=$result[0]['Pedido']['qty'];
          $novaquantidade=$quantidade+1;
          
          //update nova quantidade;
          $this->updateAll(
                            array('Pedido.qty' => $novaquantidade),
                            array('Pedido.prato_id' =>$pid,
                                  'Pedido.pd_session_id'=>$sid )
                           );
           
     }

     
   
    
    //apaga TODOS os pratos/registros referete a 1 pedido especifico (de acordo com a sess„o)
    function esvaziaPedido($sessionId){ //OK
        //sempre retorna true depois de apagar
        $this->deleteAll(array('Pedido.pd_session_id' => $sessionId), false);
                   
    }
 
    
    //apaga 1 prato do pedido de acordo com id
    function deletaPrato($pid,$sid){//OK
        $this->deleteAll(array('Pedido.pd_session_id' => $sid,'Pedido.prato_id'=>$pid),false);
 
    }//fim de deletaPrato();
    

    
    #------------------------------------------------------------------------------#
    //funÁıes descontinuadas por enquanto
    
    
    
    
    //descontinuada, n„o ser· usada
    //
    //verifica se existe algum registro na tabela de Pedido com a sessionId
    //se n√£o existir, retorna true, ou seja, n√£o foi adicionado nenhum Prato ao pedido 
    //(produto ao carrinho)
    //È usado para mudar o status do carrinho na coluna direita do layout
    //ex: se tiver vazio n„o tenta imprimir o pedido, nem link
    
    function isPedidoVazio($sid=null){
        $result=$this->find('all',array('conditions'=>array('Pedido.pd_session_id'=>$sid)));
        
        if (empty($result)){
            return true;
        }
        else{
            return false;
        }
    }
    
        ////descontinuada, n„o ser· usada
    //foi substituida pela function edit do controller
     //adiciona uma quantidade exata de qty ao prato especifico 
    function doUpdate($product_id,$newQty){
        
    }
    
    //////descontinuada, n„o ser· usada
    //
    //limpa os pedidos antigos
    //muitos pedidos podem ficar nesta tabela, incompletosp por n√£o terem sido completados
     //ser· implementado mais a frente, quando tiver um painel de controle administrativo
    function cleanUP(){
        
    }
}