<?php
class CategoryModel extends DB{

    public function getCategory(){
        $sql = "SELECT * FROM `danhmucsanpham`";
        return mysqli_query($this->con,$sql);
    }
   
}
?>