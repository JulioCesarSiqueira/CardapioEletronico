<?php
 
$cakeDescription = __d('cake_dev', 'CARDAPIO VIRTUAL: ESCOLHA O PRATO DIRETO DO SEU TABLET');
$cakeVersion = __d('cake_dev', 'CakePHP %s', Configure::version())
?>

<!DOCTYPE html>
<html>
    <head>
        <?php echo $this->Html->charset(); ?>    
        <title>
		<?php echo $cakeDescription ?>:
		<?php //echo $title_for_layout; ?>
	</title>
        
        <?php
        
        echo $this->Html->css('cssreset');
        echo $this->Html->css('cssLayoutPrincipalCardapio');
        
        //echo $this->fetch('css');
        //echo $this->$Html->css(array('cssLayoutPrincipalCardapio.css')); 
        ?>
    </head>
    <body>
        
        <header class="container">
            <div class="cabecalho">
               <?php echo $this->Html->image("logo.png", array('alt' => 'CakePHP'));?>
            
            </div>
            
            
        </header>

        <section class="container destaque"> 
               <section class="menu-tipos">
                   <nav>
                        <?php echo $this->element('menu'); ?>            
                   </nav>

                </section>
                
                <section id="principal">
                    <?php echo $content_for_layout;  ?>     
                </section>
                
            
                <section id="conteudo-carrinho" >
                    
                        <?php echo $this->element('listapedido'); ?>
                   
                </section>
            
          
        </section>   


        <footer class="container">
            <?php echo "Julio Cesar Siqueira - 2014 - Contato: jctsiqueira@gmail.com"; ?>
        </footer>
    </body>
    
</html>

     
        



