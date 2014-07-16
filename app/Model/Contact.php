<?php

class Contact extends AppModel {
    var $name = 'Contact';
    var $validate = array(
        'name' => array(
            'rule' => 'notEmpty',
            'message' => 'O campo Nome � obrigatorio.'
        ),
        'email' => array(
            'rule' => 'email',
            'message' => 'O campo e-Mail � obrigat�rio.'
        ),
        'message' => array(
            'rule' => 'notEmpty',
            'message' => 'O campo Motivo do contato � obrigat�rio.'
        )
    );
}
