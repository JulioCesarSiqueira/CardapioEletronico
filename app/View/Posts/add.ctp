<!-- File: /app/View/Posts/add.ctp -->
<!--
é usado o helper Form para criar o formulario. 


	#	$this->Form->create() 
	O metodo create() se chamado sem argumentos, sempre vai procurar uma action add()
	dentro do Controller da qual a view faz parte. 

	ex: um Form->create() dentro  da view que está em Cumprimento/oi.ctp vai procurar o
	metodo add() de um CumprimentosController();

	create('Post')
	com um argumento, procura pelo Model Post e toda a lógica relacionada
	também vai procurar pelo método add() de PostsController
	
	
	#	$this->Form->input('title');
	cria um input text com nome de 'title'

	
	
	#	$this->Form->end() 	
	gera um botão de submissão e encerra o formulário
	
	ao clicar no botão submit, será chamado a action ADD() do controlller, de acordo com o 
	explicado
	
	
	Interessante notar os nomes:
	
	O form tem o mesmo nome do model
	os input title e body tem o mesmo nome das colunas da tabela
	
-->

<h1>Add Post</h1>
<?php
echo $this->Form->create('Post');
echo $this->Form->input('title');
echo $this->Form->input('body', array('rows' => '3'));
echo $this->Form->end('Save Post');

?>