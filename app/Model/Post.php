<?php

class Post extends AppModel {
    public $name = 'Post';


	/*essa é uma array com regras de validação :)
	
	essas são algumas regras de validação 
	serão avaliadas quando o método Post->save() deste model for chamado
	
	neste caso a "regra" de validação é que nem title nem body podem ser vazios
	caso estejam vazios, o post não será salvo e a msg "favor preencher este campo"
	será exibida automaticamentne O.O
	
	*/
	
	
    public $validate = array(
        'title' => array(
            'rule' => 'notEmpty'
        ),
        'body' => array(
           'rule' => 'notEmpty'
       )
    );

}
?>