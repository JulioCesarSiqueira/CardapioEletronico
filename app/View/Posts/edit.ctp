<!--
	a forma abaixo foi eu que fiz e funfa também :)
	embora meio que arcaico.
	O modo ensinado pelo livro é o segundo, muito mais simples
	
		<?php echo '</br></br></br>';
		//echo $this->Form->create('Post');
		//echo $this->Form->input('title',array('default'=>$post['Post']['title']));
		//echo $this->Form->input('body', array('default'=>$post['Post']['body']),array('rows' => '3'));
		//echo $this->Form->end('Edit Post');
		?>

-->

<!--

	cria um form para editar o post
	Primeiro, o tipo de form já define uma action do tipo 'edit', o que é diferente
	do form da view add, que está sem parâmetro e por isso busca o action add() por default
	
	
	como caralhos os valores estão dentro do form ???
-->


<h1>Edit Post</h1>
<?php
	echo $this->Form->create('Post', array('action' => 'edit'));
    echo $this->Form->input('title');
    echo $this->Form->input('body', array('rows' => '3'));
    echo $this->Form->input('id', array('type' => 'hidden'));
    echo $this->Form->end('Save Post');