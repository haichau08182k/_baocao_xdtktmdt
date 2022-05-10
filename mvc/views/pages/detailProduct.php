<?php
        while( $row = mysqli_fetch_array($data['product'])) { ?>
        <div class="col-4">
            <div class="card">
            <img src="/mvc_1800794/public/images/<?php echo $row['hinhanh']?>" class="card-img-top" alt="Hình ảnh">
                <div class="card-body">
                    <h5 class="card-title"><?php echo $row['tensp']?></h5>
                    <p class="card-text"><?php echo $row['giaban']?></p>
                    <p class="card-text"><?php echo $row['chitiet']?></p>
                    
                </div>
            </div>
        </div>
<?php
}
?>