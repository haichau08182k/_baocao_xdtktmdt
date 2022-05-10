<?php

class Home extends Controller{

    public $HelloModel;
    public $ProductModel;
    public $NewsModel;
    public $CategoryModel;


    function __construct(){
        $this->HelloModel = $this->model("HelloModel");
        $this->ProductModel = $this->model("ProductModel");
        $this->NewsModel = $this->model("NewsModel");
        $this->CategoryModel = $this->model("CategoryModel");
    }


    function show($name,$content){
        $this->view("MaterPage", [
            "page" => 'ShowContent',
            "name" => $name,
            "content" => $content
        ]);
    }

    function showNew(){
        $this->view("MaterPage", [
            "page" => 'ListNews',
            "news" => $this->NewsModel->getNews(),
            "product" => $this->ProductModel->getProduct()
        ]);
    }

    function Detail(){
        $this->view("MaterPage", [
            "page" => 'CardProduct',
            "product" => $this->ProductModel->getProduct(),
            "category" => $this->CategoryModel->getCategory()
        ]);
    }

    function Category($id){
        $this->view("MaterPage", [
            "page" => 'CardProduct',
            "category" => $this->CategoryModel->getCategory(),
            "product" => $this->ProductModel->getProductbyCategory($id)
        ]);
    }

    function Product($id){
        $this->view("MaterPage", [
            "page" => 'detailProduct',
            "category" => $this->CategoryModel->getCategory(),
            "product" => $this->ProductModel->getProductById($id)
        ]);
    }

    function ProductByHighLight(){
        $this->view("MaterPage", [
            "page" => 'CardProduct',
            "product" => $this->ProductModel->getProductByHightLight(),
            "category" => $this->CategoryModel->getCategory()
        ]);
    }
}
?>