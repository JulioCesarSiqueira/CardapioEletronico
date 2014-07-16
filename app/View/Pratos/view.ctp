<?php

//exibe os detalhes de um Prato especifico
//é chamado a partir da view pratos.ctp que listou todos os pratos de uma categoria espcefica

//a variavel $prato aqui disponivel foi setada pelo controller


foreach($prato as $prato){
    
    echo $this->Html->image($prato['Prato']['imagem'], array('alt' => 'CakePHP'));
    echo "<br>";
    echo $prato['Prato']['nome'];
    echo "<br>";    
    echo $prato['Prato']['descricao'];
    echo "<br>";
    echo "R$ ".$prato['Prato']['preco'];
    echo "<br>";
    
    //fiz isso para melhor entendimento do link
    //mas poderia ter jogado direto da array para url
    
    $tipo_id=$prato['Prato']['tipo_id'];
    $prato_id=$prato['Prato']['id'];
    
    echo "<br>";
    
    //envia esses valores para que seja adicionado ao Pedido
    //n�o � necess�rio enviar session_id pois esta variavel j� esta disponivel
    //devido a heran�a de appController
    echo $this->Html->link("adicionar ao pedido",
            '/pedidos/add/prato_id:'.$prato_id.'/tipo_id:'.$tipo_id);
    
    
}

    
?>