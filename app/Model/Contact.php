<?php

class Contact extends AppModel {
    var $name = 'Contact';
    var $validate = array(
        'name' => array(
            'rule' => 'notEmpty',
            'message' => 'O campo Nome é obrigatorio.'
        ),
        'email' => array(
            'rule' => 'email',
            'message' => 'O campo e-Mail é obrigatório.'
        ),
        'message' => array(
            'rule' => 'notEmpty',
            'message' => 'O campo Motivo do contato é obrigatório.'
        )
    );
}
