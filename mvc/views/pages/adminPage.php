    
<div class="container mt-3">
    <h2>Danh mục sản phẩm</h2>

    <table class="table table-success table-hover">
        <thead>
            <tr>
                <th>Mã Loại</th>
                <th>Tên danh mục</th>
            </tr>
        </thead>
        <tbody>
            <?php  while( $row = mysqli_fetch_array($data['category'])) { ?>
            <tr>
                <td><?php echo $row['Maloai']?></td>
                <td><?php echo $row['Tenloai']?></td>
            </tr>
            <?php } ?>
        </tbody>
    </table>
    <a href="#" class="btn btn-md btn-primary">Thêm danh mục</a>
</div>