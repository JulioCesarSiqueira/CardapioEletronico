
<h1>Adicionar região</h1>


<?php


	echo $this->Form->create('Department');
	echo $this->Form->input('name');
	echo $this->Form->input('region');
	echo $this->Form->end('Salvar dados');


/*

	echo $this->Form->create('Department',array('action'=>'add'));
	echo $this->Form->input('Department.name',array('size'=>'120'));

	echo $this->Form->input('Department.region',array('size'=>40));
	
	echo $this->Form->end('Save');
*/
?>



