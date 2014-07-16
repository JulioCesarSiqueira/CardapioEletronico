<?php


        echo $this->element('conteudopedido');
                
	//o codigo exibe toodos os produtos do carrrinho, formatado e com opções de 
	//update ou delete produtos também opção de "checkout" que direciona para
	//outra classe que á a Encomenda/Order

/*
     $total=0;
    if(!empty($pratos) && is_array($pratos)){
       	
        foreach($pratos as $prato){
             $total+= $prato['Prato']['preco'];  
             echo $this->Html->image($prato['Prato']['thumbnail'], array('alt' => 'CakePHP'));
             echo "      ";   
             echo $prato['Prato']['nome'];            
             echo "      ";   
             echo "R$ ".$prato['Prato']['preco'];
             echo "<br>";
             echo "<br>";
        }
        //formatar essa saida de numero depois
        echo "Valor total do pedido: R$ $total reais";
    }
        //precisa ser um link do tipo post
    echo "</br>".$this->Html->link("Continuar Pedido",'/pedidos/index');
    
    echo "</br>".$this->Html->link("Fechar Conta",'/contas/fecha');
                 
       echo "</br>".$this->Html->link(
            'Esvaziar Pedido',
            array('controller' => 'pedidos', 'action' => 'esvaziaPedido'),
            array(),
            "Tem certeza que deseja apagar todos os pratos do pedido ?"
        );
                    
       echo "</br></br>";
       
*/