<!-- File: /app/View/Posts/add.ctp -->
<!--
é usado o helper Form para criar o formulario. 
O metodo create() se chamado sem argumentos, sempre vai procurar uma action add()
dentro do Controller da qual a view faz parte. 

ex: um Form->create() dentro  da view que está em Post/oi.ctp vai procurar o metodo add() 
de um PostController();

create('Post') 


-->

<h1>Add Post</h1>
<?php
echo $this->Form->create();
echo $this->Form->input('title');
echo $this->Form->input('body', array('rows' => '3'));
echo $this->Form->end('Save Post');

?>