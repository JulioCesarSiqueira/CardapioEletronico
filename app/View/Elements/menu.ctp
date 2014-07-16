<?php
	//este elemento exibe o menu numa coluna do lado esquerdo e será chamado
        // a partir do layout: layoutPrincipalCardapio
        //
	//cada linha será um link para uma categoria diferente
        // os resultados serão renderizados na Pedido/index

	
?>


	
            <!-- todos os tipos manda para index sem argumento nenhum -->
		<?php echo $this->Html->link("todos os tipos",'/pedidos/');?>		 
                <!-- //essa função requisita a Action menu do controller TiposController 
                     //E passa $catId $pdId como parâmetros para index atualizar
                
                -->
		
		<?php $tipos=$this->requestAction("/tipos/menu/"); 
		        
		foreach($tipos as $tipo){
                      
                    
			//... codigo para correr todas as categorias e 
			//montar uma linha com link para cada uma delas
			
			//echo $tipo['Tipo']['nome']; echo "</br>"; imprime o nome de todos os tipos
                    
                     //moneta um link com o nome e id de todas os tipos
                        $nome=$tipo['Tipo']['nome'];
                        $url='/pedidos/index/tipo_id:'.$tipo['Tipo']['id'];                         
                        echo $this->Html->link($nome,$url);
                        //echo $this->Html->link("Ver pedido",'/pedidos/view/');/
                        echo "</br>";
		
		}//fim do foreach
            
    