<section>
    <h2>sản phẩm 
    </h2>
    <a style="margin:10px;" href="admin.php?act=sanpham">sản phẩm</a>
    <a style="margin:10px;" href="admin.php?act=casesp">các case của sản phẩm</a>
    <form action ="admin.php?act=sanpham" method ="post">
        <select name="iddm" style="margin:10px;" id="">
            <option value="0" style="margin:10px;">chọn danh mục</option>
            <?php
            if (isset($dsdm)) {
                foreach ($dsdm as $dm) {
                    echo' <option style="margin:10px;" value="'.$dm['id'].'">'.$dm['tendm'].'</option>';
                }
            }
            ?>
            
        </select>
        <input style="margin:10px;" type="text" name="tensp" placeholder="tên sản phẩm"id="">
        <input style="margin:10px;"  type="file" name="mota" placeholder="mô tả sản phẩm" id="">
        <input style="margin:10px;"  type="text" name="manhinh" placeholder="kích thước màn hình" id="">
        <input style="margin:10px;"  type="text" name="camera" placeholder="độ phân giải camera" id="">
        <input style="margin:10px;"  type="text" name="chipset" placeholder="chip" id="">        
        <input style="margin:10px;"  type="text" name="sac" placeholder="tốc độ sạc" id="">
        <input style="margin:10px;"  type="text" name="pin" placeholder="dung lượng pin" id="">
        <input style="margin:10px;"  type="text" name="operator" placeholder="hệ điều hành" id="">
        <input style="margin:10px;"  type="submit" name="themmoi" value="Thêm mới">
</form>
<br>
<table>
    <tr>
        <th style="margin:10px;">stt</th>
        <th style="margin:10px;">tên sản phẩm</th>
        <th style="margin:10px;">Mô tả</th>
        <th style="margin:10px;">Màn hình</th>
        <th style="margin:10px;">Camera</th>
        <th style="margin:10px;">Chip</th>
        <th style="margin:10px;">Sạc</th>
        <th style="margin:10px;">Dung lượng pin</th>
        <th style="margin:10px;">Hệ điều hành</th>
        <th style="margin:10px;">hành động</th>
    </tr>
    <?php
    if(isset($kq)&&(count($kq)>0)){
        $i=1;
        foreach ($kq as $sp ) {
            echo '<tr>
                    <td>'.$i.'</td>
                    <td>'.$sp['tensp'].'</td>
                    <td>'.$sp['mota'].'</td>
                    <td>'.$sp['manhinh'].'</td>
                    <td>'.$sp['camera'].'</td>
                    <td>'.$sp['chipset'].'</td>
                    <td>'.$sp['sac'].'</td>
                    <td>'.$sp['pin'].'</td>
                    <td>'.$sp['operator'].'</td>
                    <td><a style="margin:0 10px;" href="admin.php?act=updatespform&id='.$sp['id'].'">Sửa</a>
                    <a href="admin.php?act=delsp&id='.$sp['id'].'">Xóa</a></td>
                    </tr>';
                    $i++;
        }
    }?>
</table>
</section>
