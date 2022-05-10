<?php
class ProductModel extends DB{

    public function getProductbyCategory($id){
        $sql = "SELECT * FROM `sanpham` JOIN `danhmucsanpham` ON sanpham.maloai = danhmucsanpham.Maloai WHERE danhmucsanpham.Maloai = $id";
        return mysqli_query($this->con,$sql);
    }
    public function getProduct(){
        $sql = "SELECT * FROM `sanpham`";
        return mysqli_query($this->con,$sql);
    }

    public function getProductById($id){
        $sql = "SELECT * FROM `sanpham` WHERE sanpham.masp = $id";
        return mysqli_query($this->con,$sql);
    }

    public function getProductByHightLight(){
        $sql = "SELECT * FROM `sanpham` WHERE sanpham.noibat = 1";
        return mysqli_query($this->con,$sql);
    }
}
?>