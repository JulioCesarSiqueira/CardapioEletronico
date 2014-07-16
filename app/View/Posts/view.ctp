<!-- File: /app/View/Posts/view.ctp -->


<!-- 
Esta view exibe o resultado da action view() do PostController;
Os valores estão salvos na variavel $post porque foram enviados através do método set() dentro
do corpo da action view();


-->
<h1><?php echo $post['Post']['title']?></h1>

<p><small>Created: <?php echo $post['Post']['created']?></small></p>

<p><?php echo $post['Post']['body']?></p>