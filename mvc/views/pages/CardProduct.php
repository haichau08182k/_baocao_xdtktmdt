<div class="row">
    <?php
        while( $row = mysqli_fetch_array($data['product'])) { ?>
        <div class="col-3">
            <div class="card">
            <img src="/mvc_1800794/public/images/<?php echo $row['hinhanh']?>" class="card-img-top" alt="Hình ảnh">
                <div class="card-body">
                    <h5 class="card-title"><?php echo $row['tensp']?></h5>
                    <p class="card-text"><?php echo $row['giaban']?></p>
                    <a href="/mvc_1800794/Home/Product/<?php echo $row['masp']?>" class="btn btn-primary">Xem chi tiết</a>
                </div>
            </div>
        </div>
    <?php
    }
    ?>
<div>

