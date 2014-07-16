
<?php
//a gambiarra abaixo também funciona, mas é muito mais elegante fazer a busca
//pelo controller e depios setar a variavel U_U
//$pratos = $this->requestAction("/pedidos/getPedido"); 


      
       //echo $this->Form->input('pratosenviados',array('type'=>'hidden','value'=>'$pratos'));
       //echo $this->Form->input('pratosenviados');
       //echo $this->Form->end('Fechar Pedido');

echo $this->Form->create('Conta', array('action' => 'confirma','type' => 'post'));
	echo $this->Form->input('nomecliente',array('label' => 'Nome'));
	echo $this->Form->input('detalhespedido',array('label' => 'Detalhes','rows' => '3'));
                
echo $this->Form->end('Confirmar');

echo "</br>";
echo $this->element('conteudopedido');

/*
     $total=0;
    if(!empty($pratos) && is_array($pratos)){
       	
        foreach($pratos as $prato){
             $total+= $prato['Prato']['preco'];  
             echo "</br>".$this->Html->image($prato['Prato']['thumbnail'], array('alt' => 'CakePHP'));
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
  
 */
    