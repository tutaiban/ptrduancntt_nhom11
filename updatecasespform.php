<section>
    <h2>sửa Case sản phẩm 
    </h2>
    <a style="margin:10px;" href="admin.php?act=sanpham">sản phẩm</a>
    <a style="margin:10px;" href="admin.php?act=casesp">các case của sản phẩm</a>
    <form action ="admin.php?act=updatecasespform" method ="post" enctype="multipart/form-data" >
    <select name="idsp" style="margin:10px;" id="">
            <?php
            if (isset($dssp)) {
                foreach ($dssp as $dm) {
                    if($dm['id']==$kqone[0]['idsp'])
                        echo' <option style="margin:10px;" value="'.$dm['id'].'" selected>'.$dm['tensp'].'</option>';
                    else 
                        echo' <option style="margin:10px;" value="'.$dm['id'].'">'.$dm['tensp'].'</option>';
                }
            }
            ?>
            
        </select>
        <input style="margin:10px;" value="<?=$kqone[0]['mau']?>" type="text" name="mau" placeholder="màu sản phẩm"id="">
        <input style="margin:10px;" value="<?=$kqone[0]['dungluong']?>"  type="text" name="dungluong" placeholder="dung lượng Rom" id="">
        <input  value="<?=$kqone[0]['dungluong1']?>"  type="text" name="dungluong1" placeholder="dung lượng Ram" id="">
        <img style="width:100px;" src="<?=$kqone[0]['img']?>" alt="">
        <input style="margin:10px;" value="<?=$kqone[0]['img']?>" type="file" name="img" placeholder="img" id="">
        <input style="margin:10px;" value="<?=$kqone[0]['gia']?>" type="text" name="gia" placeholder="giá" id="">
        <input style="margin:10px;" value="<?=$kqone[0]['giacu']?>" type="text" name="giacu" placeholder="giá cũ" id="">
        <input style="margin:10px;" value="<?=$kqone[0]['hot']?>" type="text" name="hot" placeholder="hot: 1(có) 0(không)" id="">
        <input type="hidden" name="id" value="<?=$kqone[0]['id']?>">
        <input style="margin:10px;"  type="submit" name="capnhat" value="cập nhật">
</form>
<br>
<table>
    <tr>
        <th style="margin:10px;">stt</th>
        <th style="margin:10px;">màu</th>
        <th style="margin:10px;">Ram</th>
        <th style="margin:10px;">Rom</th>
        <th style="margin:10px;">giá</th>
        <th style="margin:10px;">giá cũ</th>
        <th style="margin:10px;">hot</th>
        <th style="margin:10px;">img</th>
        
        <th style="margin:10px;">hành động</th>
    </tr>
    <?php
    if(isset($kq)&&(count($kq)>0)){
        $i=1;
        foreach ($kq as $sp ) {
            echo '<tr>
                    <td>'.$i.'</td>
                    <td>'.$sp['mau'].'</td>
                    <td>'.$sp['dungluong'].'</td>
                    <td>'.$sp['dungluong1'].'</td>
                    <td>'.$sp['gia'].'</td>
                    <td>'.$sp['giacu'].'</td>
                    <td>'.$sp['hot'].'</td>
                    <td><img src="'.$sp['img'].'" width="100px"></td>
                    <td><a href="admin.php?act=updatecasespform&id='.$sp['id'].'">Sửa</a>
                    <a href="admin.php?act=delcasesp&id='.$sp['id'].'">Xóa</a></td>
                    </tr>';
                    $i++;
        }
    }?>
</table>
</section>
