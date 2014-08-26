<?php
	//este elemento exibe o menu numa coluna do lado esquerdo e será chamado
        // a partir do layout: layoutPrincipalCardapio
        //
	//cada linha será um link para uma categoria diferente
        // os resultados serão renderizados na Pedido/index

	
?>


<h2>Tipos de Prato</h2>

        <ul>
                <li>


                    <!-- imprime um link chamado "todos os tipos,
                    que manda para index ssem argumentos -->
                    <?php echo $this->Html->link("Todos os tipos",'/pedidos/');?>		 
                   
                </li>
                
                
                <!-- //essa função requisita a Action menu do controller TiposController 
                     //E passa $catId $pdId como parâmetros para index atualizar
                 !-->                
                 <?php $tipos=$this->requestAction("/tipos/menu/"); 
		        
		foreach($tipos as $tipo){ ?>
                                     
                    <li>
                        <?php 
                            //... codigo para correr todas as categorias e 
                            //montar uma linha com link para cada uma delas
                            //echo $tipo['Tipo']['nome']; echo "</br>"; imprime o nome de todos os tipos

                         //moneta um link com o nome e id de todas os tipos
                            $nome=$tipo['Tipo']['nome'];
                            $url='/pedidos/index/tipo_id:'.$tipo['Tipo']['id'];                         
                            echo $this->Html->link($nome,$url);
                            //echo $this->Html->link("Ver pedido",'/pedidos/view/');/

                            ?>
                    </li>
                    <?php 
		}//fim do foreach
                ?>
        </ul>