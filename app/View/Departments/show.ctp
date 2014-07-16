<h1 class="first">

<p>Our Department:</p>

<?php
	
	//envia os dados para a Action Show() via POST
	
	echo $this->Form->create('Department',array('action'=>'show','type' => 'post'));
	echo $this->Form->input('region');//region vai definir qual campo será buscado
	echo $this->Form->end('Buscar');

	//echo $dados[0]['Department']['name']."</br>";

	
	
	foreach($dados as $department){
		echo "Nome: ".($department['Department']['name'])." - Departamento ".($department['Department']['region']);
		echo "</br>";
	}

?>