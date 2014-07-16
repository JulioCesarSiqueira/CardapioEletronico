<h3>Editar pedido</h3>
<?php

echo $this->Form->create('Pedido', array('action' => 'edit'));
//print_r($this->request->data);
//request foi setado pela function edit

echo $this->request->data['Prato']['nome'];
echo $this->Form->input('qty', array('label' =>'Quantidade'));
echo $this->Form->input('id', array('type' => 'hidden'));
echo $this->Form->end('Editar');
