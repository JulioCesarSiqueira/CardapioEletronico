<?php



//////INDEX PRINCIPAL DO SISTEMA
##################codigo para view index.ctp refrente a função index() de Pedido

    //a view que será usada como index da loja
    //o conteudo aqui será renderizado na coluna do centro do layout

    //$this->Session->write('Person.eyeColor', 'Green');
    
    //$this->Session->setFlash('Your post has been saved.');

    //$data=$this->Session->read();       
       
    //echo $data['Config']['userAgent'];
               

    //debug($this->Session->read());

    for($i=0;$i<=1000;$i++){
        //echo 'oi teste, ';
        
    }
    //echo "para debug: </br>";
    //echo "session id= ".$sid;
    //echo "</br>tipo id= ".$tipoid;
    //echo "</br>prato id= ".$pratoid;
    //echo "</br></br></br></br>";
    
    
    //o conteudo exibido dependerá do valor das variaveis $pdId (id do produto)
    //e $catId (categoria do produto)
    //essas variaveis serão recebidas pelo set que está em AppController conforme configurado
    //ex:http://localhost/cake/ecommerce/index/cat_id:12 
    
    
    
    
    
    if($pratoid){ //se tiver id do prato, cola os detalhes dele
            echo $this->element('pratoDetalhes');
    }
    else{
        if($tipoid){ //senão, se tiver apenas o tipo do produto, imprime os produtos desse tipo
                   echo $this->element('pratos');
         }
         else{//sennão, cola apenas as categorias
                    echo $this->element('tipos');
         }
    }
 		