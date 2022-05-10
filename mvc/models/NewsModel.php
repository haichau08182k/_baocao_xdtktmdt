<?php
class NewsModel extends DB{
    public function getNews(){
        return "Tin tức mới nhất!";
    }

    public function showNumberNews($n){
        return $n;
    }
}
?>