<?php

class Product extends Controller{
    
    public $ProductModel;
    public $HelloModel;

    function __construct(){
        $this->ProductModel = $this->model("ProductModel");
        $this->HelloModel = $this->model("HelloModel");
    }


    function getProduct(){
        echo $this->ProductModel->getProduct();
    }

    function detailProduct($id){
        $this->view("MaterPage", [
            "page" => 'ListProduct',
            "name" => $this->ProductModel->getProduct(),
            "id" => $this->ProductModel->getDetailProduct($id)
        ]); 
    }

}
?>