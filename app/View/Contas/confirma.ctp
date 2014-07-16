<?php

//var_dump($detalhesconta); 
//var_dump($pratos);




echo $this->Session->flash();
//$this->requestAction("/pedidos/esvaziaPedido"); 

echo $this->Html->link('Fazer novo Pedido ?', array('controller'=>'pedidos', 'action'=>'index'));


