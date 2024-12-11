
<section>
    <h2>Sửa sản phẩm 
    </h2>
    <a style="margin:10px;" href="admin.php?act=sanpham">sản phẩm</a>
    <a style="margin:10px;" href="admin.php?act=casesp">các case của sản phẩm</a>
    <form action ="admin.php?act=updatespform" method ="post" enctype="multipart/form-data">
        <select name="iddm" style="margin:10px;" id="">
            <?php
            $kqonedm=$kqone[0]['iddm'];
            if (isset($dsdm)) {
                foreach ($dsdm as $dm) {
                    if($dm['id']==$kqonedm)
                        echo' <option style="margin:10px;" value="'.$dm['id'].'" selected>'.$dm['tendm'].'</option>';
                    else 
                        echo' <option style="margin:10px;" value="'.$dm['id'].'">'.$dm['tendm'].'</option>';
                }
            }
            ?>
            
        </select>
        <input style="margin:10px;" value="<?=$kqone[0]['tensp']?>" type="text" name="tensp" placeholder="tên sản phẩm"id="">
        <input style="margin:10px;" value="<?=$kqone[0]['mota']?>"  type="file" name="mota" id="">
        <input type="hidden" name="id" value="<?=$kqone[0]['id']?>">
        <input style="margin:10px;" value="<?=$kqone[0]['manhinh']?>"  type="text" name="manhinh" placeholder="kích thước màn hình" id="">
        <input style="margin:10px;" value="<?=$kqone[0]['camera']?>"  type="text" name="camera" placeholder="độ phân giải camera" id="">
        <input style="margin:10px;" value="<?=$kqone[0]['chipset']?>"  type="text" name="chipset" placeholder="chipset" id="">        
        <input style="margin:10px;" value="<?=$kqone[0]['pin']?>"  type="text" name="pin" placeholder="dung lượng pin" id="">
        <input style="margin:10px;" value="<?=$kqone[0]['sac']?>"  type="text" name="sac" placeholder="tốc độ sac" id="">
        <input style="margin:10px;" value="<?=$kqone[0]['operator']?>"  type="text" name="operator" placeholder="hệ điều hành" id="">
        <input style="margin:10px;"  type="submit" name="capnhat" value="Cập nhật">
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
        <th style="margin:10px;">Dung lượng pin</th>
        <th style="margin:10px;">Sạc</th>
        <th style="margin:10px;">operator</th>
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
                    <td>'.$sp['pin'].'</td>
                    <td>'.$sp['sac'].'</td>
                    <td>'.$sp['operator'].'</td>
                    <td><a href="admin.php?act=updatespform&id='.$sp['id'].'">Sửa</a>
                    <a href="admin.php?act=delsp&id='.$sp['id'].'">Xóa</a></td>
                    </tr>';
                    $i++;
        }
    }?>
</table>
</section>
