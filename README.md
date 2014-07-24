Cardapio Eletrônico
=======

Este Cardapio Eletronico foi desenvolvido com CakePHP e baseado num e-commerce.

É possível escolher entre diversos Pratos diferentes cadastrados em um Banco de Dados, 
todos organizados por Tipos (menu do lado esquerdo), também cadastrados no BD.

Ao escolher um prato, é possível adicionar ele ao Pedido. Todos os pratos escolhidos aparecerão no menu ao lado direito. 


O menu de Pedido também indica o valor do Pedido e quantidade de vezes que um prato foi pedido,
evitando que o mesmo prato apareça de forma repetida.

Ao finalizar o pedido, é possível clicar em "Ver Pedido", onde aparecerão os detalhes
e diversas opções para editar o pedido.

Ao clicar em "Fechar conta", o cliente pode adicionar alguns detalhes sobre os pratos pedidos
como preferências e por fim confirmar a Conta, enviando assim uma mensagem para o "Cheff"

### 

Instruções para teste:

1 - Crie um novo banco MySql com o nome de "bdcake" e importe o 
arquivo "bdcake.sql" (LOCALIZADO NA RAIZ DESTE REPOSITÓRIO)

2 - Jogue os arquivos do repositório num servidor PHP como o Apache (pasta WWW)

3 - Abra no navegador na pagina http://localhost/CardapioVirtual/ e teste o sistema

4 - Sucesso ;)
