
<section>
    <h2>Danh mục
    </h2>
    <form action ="admin.php?act=adddm" method ="post">
        <input type="text" name="tendm" id="">
        <input type="submit" name="themmoi" value="Thêm mới">
</form>
<br>
<table>
    <tr>
        <th>stt</th>
        <th>tên danh mục</th>
        <th>ưu tiên </th>
        <th>hành động</th>
    </tr>
    <?php
    if(isset($kq)&&(count($kq)>0)){
        $i=1;
        foreach ($kq as $dm ) {
            echo '<tr>
                    <td>'.$i.'</td>
                    <td>'.$dm['tendm'].'</td>
                    <td>'.$dm['uutien'].'</td>
                    <td><a href="admin.php?act=updatedmform&id='.$dm['id'].'">Sửa</a>
                    <a href="admin.php?act=deldm&id='.$dm['id'].'">Xóa</a></td>
                    </tr>';
                    $i++;
        }
    }?>
</table>
</section>