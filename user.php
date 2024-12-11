<?php
//hàm tương tác vơi user
function checkuser($user,$pass){
    $conn=connectdb();
    $stmt=$conn->prepare("SELECT * FROM tbl_user WHERE user='".$user."' AND pass='".$pass."'");
    $stmt->execute();
    $result=$stmt->setFetchMode(PDO::FETCH_ASSOC);
    $kq=$stmt->fetchAll();
    if(count($kq)>0) return $kq[0]['role'];
    else return 10;
}
function checkusercn($id,$pass){
    $conn=connectdb();
    $stmt=$conn->prepare("SELECT * FROM tbl_user WHERE id='".$id."' AND pass='".$pass."'");
    $stmt->execute();
    $result=$stmt->setFetchMode(PDO::FETCH_ASSOC);
    $kq=$stmt->fetchAll();
    if(count($kq)>0) return $kq[0]['role'];
    else return 10;
}
function suauser($id,$email,$address,$name,$passmoi,$user,$sdt){
    $conn=connectdb();
    $sql="UPDATE tbl_user SET email='".$email."',sdt='".$sdt."' ,address='".$address."' , name='".$name."', pass='".$passmoi."', user='".$user."' WHERE id=".$id;
    $stmt=$conn ->prepare ($sql);
    $stmt ->execute();
}
function checkusertt($user,$pass){
    $conn=connectdb();
    $stmt=$conn->prepare("SELECT * FROM tbl_user WHERE user='".$user."' AND pass='".$pass."'");
    $stmt->execute();
    $result=$stmt->setFetchMode(PDO::FETCH_ASSOC);
    $kq=$stmt->fetchAll();
    if(count($kq)>0) return $kq[0]['id'];
    else return 0;
}
function checkusername($user){
    $conn=connectdb();
    $stmt=$conn->prepare("SELECT * FROM tbl_user WHERE user='".$user."'");
    $stmt->execute();
    $kq=$stmt->fetchAll();
    if(count($kq)>0) return $kq[0]['role'];
    else return 10;
}
function checkusername2($user,$id){
    $conn=connectdb();
    $stmt=$conn->prepare("SELECT * FROM tbl_user WHERE user='".$user."' AND id!='".$id."'" );
    $stmt->execute();
    $kq=$stmt->fetchAll();
    if(count($kq)>0) return $kq[0]['role'];
    else return 10;
}
function checkuserid($id){
    $conn=connectdb();
    $stmt=$conn->prepare("SELECT * FROM tbl_user WHERE id='".$id."'");
    $stmt->execute();
    $kq=$stmt->fetchAll();
    return $kq;
}
function checkemail($email){
    $conn=connectdb();
    $stmt=$conn->prepare("SELECT * FROM tbl_user WHERE email='".$email."'");
    $stmt->execute();
    $kq=$stmt->fetchAll();
    if(count($kq)>0) return $kq[0]['role'];
    else return 10;
}
function checksdt($sdt,$id){
    $conn=connectdb();
    $stmt=$conn->prepare("SELECT * FROM tbl_user WHERE sdt='".$sdt."' AND id!='".$id."'" );
    $stmt->execute();
    $kq=$stmt->fetchAll();
    if(count($kq)>0) return $kq[0]['role'];
    else return 10;
}
function checksdtdd($sdt) {   
    $pattern = '/^0[0-9]{9}$/';  
    
    if (preg_match($pattern, $sdt)) {  
        return true;  
    } else {  
        return false;  
    }  
}  
function checkemail2($email,$id){
    $conn=connectdb();
    $stmt=$conn->prepare("SELECT * FROM tbl_user WHERE email='".$email."' AND id!='".$id."'");
    $stmt->execute();
    $kq=$stmt->fetchAll();
    if(count($kq)>0) return $kq[0]['role'];
    else return 10;
}
function adduser($user,$email,$pass){
    $conn=connectdb();
    $sql="INSERT INTO tbl_user (user,email,pass) VALUES ('".$user."','".$email."','".$pass."')";
    $conn->exec($sql);
}
//hàm tương tác với danh muc 
function getall_dm(){
    $conn=connectdb();
    $stmt =$conn -> prepare ("SELECT * FROM tbl_danhmuc");
    $stmt ->execute();
    $result=$stmt-> setFetchMode (PDO::FETCH_ASSOC);
    $kq=$stmt->fetchAll();
    return $kq;
}
function deldm($id){
    $conn=connectdb();
    $sql="DELETE FROM tbl_danhmuc WHERE id='".$id."'";
    $conn->exec($sql);
}
function getonedm($id){
    $conn=connectdb();
    $stmt =$conn -> prepare ("SELECT * FROM tbl_danhmuc WHERE id='".$id."'");
    $stmt ->execute();
    $result=$stmt-> setFetchMode (PDO::FETCH_ASSOC);
    $kq=$stmt->fetchAll();
    return $kq;
}
function updatedm($id,$tendm,$uutien,$hienthi){
    $conn=connectdb();
    $sql="UPDATE tbl_danhmuc SET tendm='".$tendm."' ,uutien='".$uutien."' , hienthi='".$hienthi."' WHERE id=".$id;
    $stmt=$conn ->prepare ($sql);
    $stmt ->execute();
}
function adddm($tendm){
    $conn=connectdb();
    $sql="INSERT INTO tbl_danhmuc (tendm) VALUES ('$tendm')";
    $conn->exec($sql);
}
// tương tác với sản phẩm
function getall_sp(){
    $conn=connectdb();
    $stmt =$conn -> prepare ("SELECT * FROM tbl_sanpham");
    $stmt ->execute();
    $result=$stmt-> setFetchMode (PDO::FETCH_ASSOC);
    $kq=$stmt->fetchAll();
    return $kq;
}
function delsp($id){
    $conn=connectdb();
    $sql="DELETE FROM tbl_sanpham WHERE id='".$id."'";
    $conn->exec($sql);
}
function getonesp($id){
    $conn=connectdb();
    $stmt =$conn -> prepare ("SELECT * FROM tbl_sanpham WHERE id='".$id."'");
    $stmt ->execute();
    $result=$stmt-> setFetchMode (PDO::FETCH_ASSOC);
    $kq=$stmt->fetchAll();
    return $kq;
}
function updatesp($id,$tensp,$mota,$manhinh,$camera,$iddm,$chipset,$sac,$pin,$operator){
    $conn=connectdb();
    if(isset($mota) && $mota!=''){
    $sql="UPDATE tbl_sanpham SET tensp='".$tensp."' ,mota='".$mota."', operator='".$operator."', pin='".$pin."', sac='".$sac."', chipset='".$chipset."' , manhinh='".$manhinh."', camera='".$camera."', iddm='".$iddm."' WHERE id=".$id;
    }
    else {$sql="UPDATE tbl_sanpham SET tensp='".$tensp."', operator='".$operator."', pin='".$pin."', sac='".$sac."', chipset='".$chipset."' , manhinh='".$manhinh."', camera='".$camera."', iddm='".$iddm."' WHERE id=".$id;}
    $stmt=$conn ->prepare ($sql);
    $stmt ->execute();
}
function addsp($tensp,$mota,$manhinh,$camera,$iddm,$chipset,$sac,$pin,$operator){
    $conn=connectdb();
    $sql="INSERT INTO tbl_sanpham (tensp, mota, manhinh, camera, iddm, chipset, sac, pin, operator) VALUES ('$tensp','$mota','$manhinh','$camera','$iddm','$chipset','$sac','$pin','$operator')";
    $conn->exec($sql);
}
//tương tác với case sản phẩm 
function getall_casesp(){
    $conn=connectdb();
    $stmt =$conn -> prepare ("SELECT * FROM tbl_sanphamcase");
    $stmt ->execute();
    $result=$stmt-> setFetchMode (PDO::FETCH_ASSOC);
    $kq=$stmt->fetchAll();
    return $kq;
}
function delcasesp($id){
    $conn=connectdb();
    $sql="DELETE FROM tbl_sanphamcase WHERE id='".$id."'";
    $conn->exec($sql);
}
function getonecasesp($id){
    $conn=connectdb();
    $stmt =$conn -> prepare ("SELECT * FROM tbl_sanphamcase WHERE id='".$id."'");
    $stmt ->execute();
    $result=$stmt-> setFetchMode (PDO::FETCH_ASSOC);
    $kq=$stmt->fetchAll();
    return $kq;
}
function updatecasesp($mau,$dungluong,$dungluong1,$gia,$img,$idsp,$id,$hot,$giacu){
    $conn=connectdb();
    if($img==""){
    $sql="UPDATE tbl_sanphamcase SET mau='".$mau."' ,dungluong='".$dungluong."',hot='".$hot."', giacu='".$giacu."' , dungluong1='".$dungluong1."', gia='".$gia."', idsp='".$idsp."' WHERE id=".$id;
    }
    else {
    $sql="UPDATE tbl_sanphamcase SET mau='".$mau."', giacu='".$giacu."' ,dungluong='".$dungluong."',hot='".$hot."' , dungluong1='".$dungluong1."', gia='".$gia."', img='".$img."', idsp='".$idsp."' WHERE id=".$id;
    }
    $stmt=$conn ->prepare ($sql);
    $stmt ->execute();
}
function addcasesp($mau,$dungluong,$dungluong1,$gia,$img,$idsp,$hot,$giacu){
    $conn=connectdb();
    $sql="INSERT INTO tbl_sanphamcase (mau, dungluong, dungluong1, gia,idsp, img, hot, giacu) VALUES ('$mau','$dungluong','$dungluong1','$gia','$idsp','$img','$hot','$giacu')";
    $conn->exec($sql);
}
//lấy sản phẩm
function getall_spyc($iddm=0,$kyw=""){
    $conn=connectdb();
    $sql="SELECT * FROM tbl_sanpham WHERE 1";
    if ($iddm>0) {
        $sql.=" AND iddm=".$iddm;
    }
    else if ($kyw!="")  $sql.=" AND tensp like '%".$kyw."%'";
    $stmt =$conn -> prepare ($sql);
    $stmt ->execute();
    $result=$stmt-> setFetchMode (PDO::FETCH_ASSOC);
    $kq=$stmt->fetchAll();
    return $kq;
}
function getall_casehot(){
        $conn=connectdb();
        $stmt =$conn -> prepare ("SELECT * FROM tbl_sanphamcase WHERE hot=1");
        $stmt ->execute();
        $result=$stmt-> setFetchMode (PDO::FETCH_ASSOC);
        $kq=$stmt->fetchAll();
        return $kq;
}
function getall_casespyc($idsp=0,$kyw=""){
    $conn=connectdb();
    $sql="SELECT * FROM tbl_sanphamcase WHERE 1";
    if ($idsp>0) {
        $sql.=" AND idsp=".$idsp;
    }
    if ($kyw!="")  $sql.=" AND tensp like '%".$kyw."%'";
    $stmt =$conn -> prepare ($sql);
    $stmt ->execute();
    $result=$stmt-> setFetchMode (PDO::FETCH_ASSOC);
    $kq=$stmt->fetchAll();
    return $kq;
}
//tương tác với giỏ hàng

function delgiohang( $id){
    $conn=connectdb();
    $sql="DELETE FROM tbl_giohang WHERE id='".$id."'";
    $conn->exec($sql);
}
function getgiohangnd($iduser){
    $conn=connectdb();
    $stmt =$conn -> prepare ("SELECT * FROM tbl_giohang WHERE iduser='".$iduser."' ORDER BY id DESC");
    $stmt ->execute();
    $result=$stmt-> setFetchMode (PDO::FETCH_ASSOC);
    $kq=$stmt->fetchAll();
    return $kq;
}
function getgiohangid($id){
    $conn=connectdb();
    $stmt =$conn -> prepare ("SELECT * FROM tbl_giohang WHERE id='".$id."'");
    $stmt ->execute();
    $result=$stmt-> setFetchMode (PDO::FETCH_ASSOC);
    $kq=$stmt->fetchAll();
    return $kq;
}
function checkslsp( $iduser,$idsp){
    $conn=connectdb();
    $stmt =$conn -> prepare ("SELECT * FROM tbl_giohang WHERE idsp='".$idsp."' AND iduser='".$iduser."'");
    $stmt ->execute();
    $result=$stmt-> setFetchMode (PDO::FETCH_ASSOC);
    $kq=$stmt->fetchAll();
    return $kq;
}
function updategh($id,$soluong){
    $conn=connectdb();
    $sql="UPDATE tbl_giohang SET soluong='".$soluong."' WHERE id=".$id;
    $stmt= $conn ->prepare ($sql);
    $stmt ->execute();
}
function addgh($iduser,$idsp,$soluong){
    $conn=connectdb();
    $sql="INSERT INTO tbl_giohang (idsp, soluong, iduser) VALUES ('$idsp','$soluong','$iduser')";
    $conn->exec($sql);
}
function addmuangay($iduser,$idsp,$soluong){
    $conn=connectdb();
    $sql="INSERT INTO tbl_giohang (iduser,idsp,soluong) VALUES ('$iduser','$idsp','$soluong')";
    $conn->exec($sql);
    $last=$conn->lastInsertId();
    return $last;
}
function checkspgh($iduser,$idsp){
    $conn=connectdb();
    $stmt=$conn->prepare("SELECT soluong FROM tbl_giohang WHERE iduser='".$iduser."' AND idsp='".$idsp."'" );
    $stmt->execute();
    $kq=$stmt->fetchAll();
    return $kq;
}
//tương tác đơn hàng
function adddh($iduser,$thanhtien,$sdtuser,$diachi,$name){
    $conn=connectdb();
    $sql="INSERT INTO tbl_donhang (iduser,thanhtien,sdtuser,diachi,nameuser) VALUES ('$iduser','$thanhtien','$sdtuser','$diachi','$name')";
    $conn->exec($sql);
    $last=$conn->lastInsertId();
    return $last;
}
function addspdh($idsp,$iddh,$soluong,$gia){
    $conn=connectdb();
    $sql="INSERT INTO tbl_donhang_sanpham (idsp,iddh,soluong,gia) VALUES ('$idsp','$iddh','$soluong','$gia')";
    $conn->exec($sql);
}
function getalldh($iduser){
    $conn=connectdb();
    $stmt =$conn -> prepare ("SELECT * FROM tbl_donhang WHERE iduser='".$iduser."'");
    $stmt ->execute();
    $result=$stmt-> setFetchMode (PDO::FETCH_ASSOC);
    $kq=$stmt->fetchAll();
    return $kq;
}
function nhanhang($id){
    $conn=connectdb();
    $sql="UPDATE tbl_donhang SET trangthai='Giao hàng thành công' WHERE id=".$id;
    $stmt= $conn ->prepare ($sql);
    $stmt ->execute();
}
function giaohang($id){
    $conn=connectdb();
    $sql="UPDATE tbl_donhang SET trangthai='Đang giao hàng' WHERE id=".$id;
    $stmt= $conn ->prepare ($sql);
    $stmt ->execute();
}
function deldh($id){
    $conn=connectdb();
    $sql="DELETE FROM tbl_donhang_sanpham WHERE iddh='".$id."'";
    $conn->exec($sql);
    $sql1="DELETE FROM tbl_donhang WHERE id='".$id."'";
    $conn->exec($sql1);
}
function huydonhang($id){
    $conn=connectdb();
    $sql="UPDATE tbl_donhang SET trangthai='Đơn hàng đã bị hủy' WHERE id=".$id;
    $stmt= $conn ->prepare ($sql);
    $stmt ->execute();
}
function getall_dh(){
    $conn=connectdb();
    $stmt =$conn -> prepare ("SELECT * FROM tbl_donhang");
    $stmt ->execute();
    $result=$stmt-> setFetchMode (PDO::FETCH_ASSOC);
    $kq=$stmt->fetchAll();
    return $kq;
}
function getdhyc($kyw=""){
    $conn=connectdb();
    $sql="SELECT * FROM tbl_donhang WHERE nameuser like '%".$kyw."%' OR sdtuser like '%".$kyw."%'";
    $stmt =$conn -> prepare ($sql);
    $stmt ->execute();
    $result=$stmt-> setFetchMode (PDO::FETCH_ASSOC);
    $kq=$stmt->fetchAll();
    return $kq;
}
function getall_dhxong(){
    $conn=connectdb();
    $stmt =$conn -> prepare ("SELECT * FROM tbl_donhang WHERE trangthai like '%Giao hàng thành công%'");
    $stmt ->execute();
    $result=$stmt-> setFetchMode (PDO::FETCH_ASSOC);
    $kq=$stmt->fetchAll();
    return $kq;
}
//tương tác sản phẩm đơn hàng 
function getallspdh($iddh){
    $conn=connectdb();
    $stmt =$conn -> prepare ("SELECT * FROM tbl_donhang_sanpham WHERE iddh='".$iddh."'");
    $stmt ->execute();
    $result=$stmt-> setFetchMode (PDO::FETCH_ASSOC);
    $kq=$stmt->fetchAll();
    return $kq;
}
function getall_spdh(){
    $conn=connectdb();
    $stmt =$conn -> prepare ("SELECT * FROM tbl_donhang_sanpham");
    $stmt ->execute();
    $result=$stmt-> setFetchMode (PDO::FETCH_ASSOC);
    $kq=$stmt->fetchAll();
    return $kq;
}
?>

