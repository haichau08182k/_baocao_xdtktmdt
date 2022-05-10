<?php

class Admin extends Controller{

    public $ProductModel;
    public $CategoryModel;

    function __construct(){
        $this->ProductModel = $this->model("ProductModel");
        $this->CategoryModel = $this->model("CategoryModel");
    }


   function Detail() {
    $this ->view("MaterPage2", [
        "page" => 'adminPage',
        'category' => $this->CategoryModel -> getCategory()        
    ]);
   }

   
}
?>