
<section>
    <h2>Cập nhật Danh mục
    </h2>
<form action ="admin.php?act=updatedmform" method ="post">
    <input style="margin:10px;" type="text" name="tendm" id="" value="<?=$kqone[0]['tendm']?>"><br>
    <label style="margin:10px;">độ ưu tiên của danh mục:</label>
    <input style="margin:10px;" type="number" name="uutien" id="" value="<?=$kqone[0]['uutien']?>"><br>
    <label style="margin:10px;">có hiển thị danh mục hay không(1 là có 0 là không)</label>
    <input style="margin:10px;" type="number" name="hienthi" id="" value="<?=$kqone[0]['hienthi']?>">
    <input type="hidden" name="id" value="<?=$kqone[0]['id']?>">
    <br><input style="margin:10px;" type="submit" name="capnhat" value="cập nhật">
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