<section>
    <h2>Case sản phẩm 
    </h2>
    <a style="margin:10px;" href="admin.php?act=sanpham">sản phẩm</a>
    <a style="margin:10px;" href="admin.php?act=casesp">các case của sản phẩm</a>
    <form action ="admin.php?act=casesp" method ="post" enctype="multipart/form-data" >
        <select name="idsp" style="margin:10px;" id="">
            <option value="0" style="margin:10px;">chọn sản phẩm</option>
            <?php
            if (isset($dssp)) {
                foreach ($dssp as $sp) {
                    echo' <option style="margin:10px;" value="'.$sp['id'].'">'.$sp['tensp'].'</option>';
                }
            }
            ?>
            
        </select>
        <input style="margin:10px;" type="text" name="mau" placeholder="màu sản phẩm"id="">
        <input style="margin:10px;"  type="text" name="dungluong" placeholder="dung lượng Rom" id="">
        <input style="margin:10px;"  type="text" name="gia" placeholder="giá" id="">
        <input style="margin:10px;"  type="text" name="giacu" placeholder="giá cũ" id="">
        <input style="margin:10px;"  type="file" name="img" placeholder="img" id="">
        <input style="margin:10px;"  type="text" name="hot" placeholder="hot: 1(có) 0(không)" id="">
        <input style="margin:10px;"  type="text" name="dungluong1" placeholder="dung lượng Ram" id="">
        <input style="margin:10px;"  type="submit" name="themmoi" value="Thêm mới">
</form>
<br>
<table>
    <tr>
        <th style="margin:10px;">stt</th>
        <th style="margin:10px;">màu</th>
        <th style="margin:10px;">Ram</th>
        <th style="margin:10px;">Rom</th>
        <th style="margin:10px;">img</th>
        <th style="margin:10px;">giá</th>
        <th style="margin:10px;">giá cũ</th>
        <th style="margin:10px;">hot</th>
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
                   
                    <td><img src="'.$sp['img'].'" width="100px"</td> 
                    <td>'.$sp['gia'].'</td>
                    <td>'.$sp['giacu'].'</td>
                    <td>'.$sp['hot'].'</td>
                    <td><a href="admin.php?act=updatecasespform&id='.$sp['id'].'">Sửa</a>
                    <a href="admin.php?act=delcasesp&id='.$sp['id'].'">Xóa</a></td>
                    </tr>';
                    $i++;
        }
    }?>
</table>
</section>
