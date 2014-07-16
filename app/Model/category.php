<?php

 class Category extends AppModel{
    public $name='Category';
    public $hasMany='Product';
    
    
    //EM RESUMO, OS TRES MÉTODOS ABAIXO SERVEM PARA MONTAR UM MENU BONITINHO DE CATEGORIAS
    //TODAS ALINHADAS A PARTIR DE UM IDPAI (PARENT_ID)
    
    
    
    /*esse método lista todas as categorias armazenadas na tabela
     */
    
    function getCategories($field='Category.id',$direction='ASC'){
        return $this->find('all',array('order'=>$field.''.$direction));
    } 
    
    /*este método recebe uma array de categorias (recebida da função anterior) e um parentId (id pai)
     *  
     * Ele constrói uma array com todas as categorias que pertencem a um parentId 
     * que foi recebido como parâmetro
     * A array momntada se chama $ChildCategories, ou seja, todas as categorias filhas de uma
     * categoria pai
     */
    
    function buildCategories($categories,$parentId){
        
    }
    
   /*este método retorna uma lista de ids de todas as categegorias que são filhas de uma 
    * categoria específca
    * 
    * O metodo anterior buildCategories construi uma array de de categorias filhas a partir de um
    * parentID 
    * 
    * Esse metodo retorna uma lista de todas as categorias que são filhas a partir de uma categoria 
    * específica (e não parentId)
    */ 
    
    function getChildCategories($categories,$id,$recursive=true){
        
    }
    
}

?>