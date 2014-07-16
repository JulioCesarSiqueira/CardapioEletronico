<?php

class PostsController extends AppController {
    public $helpers = array ('Html','Form');
    public $name = 'Posts';
    public $components = array('Session');
    //para teste
    //public $layout='layoutPrincipalCardapio'; 
	
	
	//index é uma action
	//essa lógica poderá ser acessada pelo usuário em: www.endereco.com.br/Posts/index
	
	
    function index() {
		
		//o método set passa valores para dados do controller PostsController
		//que será criada
		
		//esse método cria uma variavel chamada "posts" que tem como valor
		//o retorno do método find()
		
		//$this->Post refere-se ao Model Post que está acessível porque
		//foi seguida o padrão de nomes :)
        $this->set('posts', $this->Post->find('all'));
    }
	
	
    public function view($id = null) {
        $this->Post->id = $id;
        $this->set('post', $this->Post->read());
    }
	
	
	/*
	
		!!!!!!!!!
	é interessante notar que SE não for enviado nenhum submit e add for chamdado normalmente
	ele simplemnete vai exibir a view add.ctp (e o layout correspondente, se houver)
	
	Mas quando há um submit, add() faz as operações necessárias e depois redireciona para 
	index.ctp O__o
	
	
	A action add() servirá para adicionar posts ao BD e exibir uma mensagem caso seja bem 
	sucedido.
	
	Quando usuário envia dados via formulario, essa informação fica armazenada na variavel
	$this->requet->data
	
	request->is('post') devolve true se o formulario recebido for do tipo post
	
	Post->save(dados) envia os dados recebidos do formulario, via request, para o Model armazenar.
	o metodo save() valida os dados antes de salvar, de acordo com parâmetros passados 
	dentro do Model Post
	
	SessionComponent::setFlash() define uma variavel de sessão, com uma mensagem a ser exibida
	Mais tarde, no layout, o método SessionHelper::flash() exibirá a mensagem e limpa o 
	conteudo.
	
	
	O método $this->redirect redireciona para a action index();
	
	
	

	
	*/
	public function add() {
            
            //echo "session is: </br>";
            //echo 
          
            
        if ($this->request->is('post')) {
            
            
            if ($this->Post->save($this->request->data)) {
                $this->Session->setFlash('Your post has been saved.');
                $this->redirect(array('action' => 'index'));
            }
        }
    }
	/*se for uma requisição do tipo GET (ex. clicou no link) 
		faz uma busca pelo método Post->read() e atribui o resultado a request->data
		
		request->data armazena os dados ???????
		
	
	se for uma requisição do tipo POST (ex. já editou o post e está enviando novamente,
	via formulário POST) então salva o post e exibe a mensagem, depois redirecina para index
	
	
	Ao falarmos que data = $this->Post->read();
	estamos falando que os formulários terão o valor retornado pelo método read()
	é por esse motivo que, quando abrimos a view edit, todos os inputs já tem o 
	valor padrão preenchido.


	Dessa forma, a view edit.ctp pode acessar os valores lidos de read()
	
	OBS: Poderia ser usado o método set() para passar os valores também funcionaria neste caso.

	
	*/
	function edit($id) {
	
		$this->Post->id = $id;
		if ($this->request->is('get')) { 
			$this->request->data = $this->Post->read(); //o que esta linha faz exatamente ??
		} else {
			if ($this->Post->save($this->request->data)) {
				$this->Session->setFlash('Your post has been updated.');
				$this->redirect(array('action' => 'index'));
			}
		}
	}
	
	
	
	/*esta Action exclui um dos posts selecionados
	
	o primeiro if verifica se a request não é do tipo post (se for um get...)
	se entrar no primeiro if, exibirá uma msg de erro amigável, algo como
	 "The requested address '/cakephp/posts/delete/4' was not found on this server."
	 ou falando que falta argumentos para esta actoin
	 
	
	o segundo if tenta deletar, se conseguir exibe mensagem e redireciona o usuario para index
	
	Como o link para exclusão será exibido na view index, nao há necessidade de uma view
	especifica para delete(); então não foi criada nenhuma delete.ctp
	
	o resultado será exibido instantaneamente, direto na index.ctp após clicar no link. 
	O resultdo aparecerá com uma ajuda de um helper html.
	
	
	
	*/
	
	function delete($id) {
    if (!$this->request->is('post')) {
        throw new MethodNotAllowedException();
    }
    if ($this->Post->delete($id)) {
        $this->Session->setFlash('The post with id: ' . $id . ' has been deleted.');
        $this->redirect(array('action' => 'index'));
    }
}
	
}
?>