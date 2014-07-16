<!-- File: /app/View/Posts/index.ctp -->

<h1>Posts do Blog</h1>
 <!-- gera um link para a action add -->
<?php
	echo"</br>";
	echo $this->Html->link('Add Post', array('controller' => 'posts', 'action' => 'add'));
	echo"</br>";
	
	echo $this->Html->link('Add User', '/Users/add'); //link para novo user
	echo"</br>";
	
	echo $this->Html->link('Login', '/Users/login'); //link para login direto
	echo"</br>";
	
	echo $this->Html->link('Logout', '/Users/logout'); //logout
	echo"</br>";

	?>
	

<table>
    <tr>
        <th>Id</th>
        <th>Título</th>
        <th>Data de Criação</th>
    </tr>

    <!-- Aqui é onde nós percorremos nossa matriz $posts, imprimindo
         as informações dos posts 
		 
		 A array $posts foi recebida a partir do Controller, pelo método set() que 
		 criou esta variavel !!!
		 
	
			//foreach imprime a array de arrays, é o mesmo que:
			//echo $posts[0]['Post']['id'];		
			//echo $posts[0]['Post']['body'];		
			//etc

	//o helper Html->link transforma dois argumentos em um link, um titulo e uma URL
	//precisa estar dentro do echo
	//echo $this->Html->link("Titulo",'http://www.google.com.br');
	
	//o link é criado com primeiro argumento o Título do post
	//o segundo argumetno ja é uma OUTRA action do Controller, chamada view();
	
	// view() recebe como argumento a id do post quando alguém clica nela
	
	O link poderia ser escrito assim "link('Titulo','/Posts/view/1')"
	No segundo argumento, 
	# Posts é o nome do controller
	#view o nome da action
	#1 é o argumento passado para a action
	

	
	2 tipos de helpers para link foram  usados aqui. 
	
	o helper $this->Html->link() 
	que gera links comuns (ex. para action add() ) 
	ou com actions do tipo get (ex. link para edit()
	
	O segundo helper de link é:
	$this->Form->postLink() 
	
	Foi usado para chamar a action delete() e gera uma request do tipo POST, caso o usuario
	confirme a ação e envia a id do post para a action delete. 
	Interessante notar que só é possivel enviar a id para delete() pois 
	a a variavel $post['Post']['id'] está disponível nesta view, por causa do método
	set() na action index() 
	
	Loucura !!!
	
	-->
	
	
	
    <?php foreach ($posts as $post): ?>
    <tr>
        <td><?php //Imprime id
			echo $post['Post']['id']; ?></td>
        <td>
            <?php
					//Imprime título com link para view()
			
			 echo $this->Html->link($post['Post']['title'],
		array('controller' => 'posts', 'action' => 'view', $post['Post']['id']));
			?>
        </td>
        <td><?php 
				//imprime data de criação
				echo $post['Post']['created']; ?></td>
		
		<td>
			<?php
				echo $this->Form->postLink( //delete()
						'Delete',
						array('action' => 'delete', $post['Post']['id']),
						array('confirm' => 'Are you sure?'));
			?>
        </td>
		
		
		<td>
			<?php
					//edit()
			echo $this->Html->link('Edit', array('action' => 'edit', $post['Post']['id']));?>		
		</td>
    </tr>
    <?php endforeach; ?>

 
 

</table>