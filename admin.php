<?php
session_start();
ob_start();
include "connectdb.php";
    include "header.php";
    include "user.php";
    if(isset($_GET['act'])){
        switch ($_GET['act']) {
            //danh mục 
            case 'danhmuc':
                $kq=getall_dm();
                include "danhmuc.php";
                break;
            case 'deldm':
                if(isset($_GET['id'])){
                    $id=$_GET['id'];
                    deldm($id);
                }
                $kq=getall_dm();
                 include "danhmuc.php";
                break;
            case 'updatedmform':
                if(isset($_GET['id'])){
                    $id=$_GET['id'];
                    $kqone=getonedm($id);
                    $kq=getall_dm();
                    include "updatedmform.php";
                }
                if(isset($_POST['id'])){
                    $id=$_POST['id'];
                    $tendm=$_POST['tendm'];
                    $uutien=$_POST['uutien'];
                    $hienthi=$_POST['hienthi'];
                    updatedm($id,$tendm,$uutien,$hienthi);
                    $kq=getall_dm();
                    include "danhmuc.php";
                }
                break;
            case 'adddm':
                if(isset($_POST['themmoi'])&&($_POST['themmoi'])){
                    $tendm=$_POST['tendm'];
                    adddm($tendm);
                }
                $kq=getall_dm();
                include "danhmuc.php";
                break;
            //sản phẩm
            case 'sanpham':
                if(isset($_POST['themmoi'])&&($_POST['themmoi'])){
                    $tensp=$_POST['tensp'];
                    $mota=$_POST['mota'];
                    $chipset=$_POST['chipset'];
                    $sac=$_POST['sac'];
                    $pin=$_POST['pin'];
                    $operator=$_POST['operator'];
                    $manhinh=$_POST['manhinh'];
                    $camera=$_POST['camera'];
                    $iddm=$_POST['iddm'];
                    addsp($tensp,$mota,$manhinh,$camera,$iddm,$chipset,$sac,$pin,$operator);
                }
                $dsdm=getall_dm();
                $kq=getall_sp();
                include "sanpham.php";
                break;
            case 'delsp':
                if(isset($_GET['id'])){
                    $id=$_GET['id'];
                    delsp($id);
                    }
                $dsdm=getall_dm();
                $kq=getall_sp();
                include "sanpham.php";
                break;    
            case 'updatespform':
                if(isset($_GET['id'])){
                    $id=$_GET['id'];
                    $dsdm=getall_dm();
                    $kqone=getonesp($id);
                    $kq=getall_sp();
                    include "updatespform.php";
                    }
                if(isset($_POST['id'])){
                    $id=$_POST['id'];
                    $tensp=$_POST['tensp'];
                    if(isset($_POST['mota'])){
                    $mota=$_POST['mota'];}
                    else $mota='';
                    $chipset=$_POST['chipset'];
                    $sac=$_POST['sac'];
                    $pin=$_POST['pin'];
                    $operator=$_POST['operator'];
                    $manhinh=$_POST['manhinh'];
                    $camera=$_POST['camera'];
                    $iddm=$_POST['iddm'];
                    updatesp($id,$tensp,$mota,$manhinh,$camera,$iddm,$chipset,$sac,$pin,$operator);
                
                $dsdm=getall_dm();
                $kq=getall_sp();
                include "sanpham.php";}
                    break;
            //case sản phẩm có ảnh 
            case 'casesp':
                if(isset($_POST['themmoi'])&&($_POST['themmoi'])){
                    $mau=$_POST['mau'];
                    $dungluong=$_POST['dungluong'];
                    $dungluong1=$_POST['dungluong1'];
                    $gia=$_POST['gia'];
                    $giacu=$_POST['giacu'];
                    $hot=$_POST['hot'];
                    $idsp=$_POST['idsp'];
                    $target_dir="../upload/";
                    $uploadOk = 1;
                    $target_file=$target_dir . basename($_FILES["img"]["name"]);
                    $img=$target_file;
                    $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
                    // Allow certain file formats
                    // if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
                    // && $imageFileType != "gif" ) {
                    // $uploadOk = 0;
                    // }
                    move_uploaded_file($_FILES["img"]["tmp_name"], $target_file);
                    //if($_FILES['img']['name']!="") $img=$_FILES['img']['name'];
                    // else $img="";
                    addcasesp($mau,$dungluong,$dungluong1,$gia,$img,$idsp,$hot,$giacu);
                }
                $dssp=getall_sp();
                $kq=getall_casesp();
                include "casesp.php";
                break;
            case 'delcasesp':
                if(isset($_GET['id'])){
                    $id=$_GET['id'];
                    delcasesp($id);
                    }
                $dssp=getall_sp();
                $kq=getall_casesp();
                include "casesp.php";
                break;    
            case 'updatecasespform':
                if(isset($_GET['id'])){
                    $id=$_GET['id'];
                    $dssp=getall_sp();
                    $kqone=getonecasesp($id);
                    $kq=getall_casesp();
                    include "updatecasespform.php";
                    }
                if(isset($_POST['id'])){
                    $id=$_POST['id'];
                    $mau=$_POST['mau'];
                    $dungluong=$_POST['dungluong'];
                    $dungluong1=$_POST['dungluong1'];
                    $gia=$_POST['gia'];
                    $giacu=$_POST['giacu'];
                    $hot=$_POST['hot'];
                    $idsp=$_POST['idsp'];
                    if($_FILES["img"]["tmp_name"]!=""){
                    $target_dir="../upload/";
                    $uploadOk = 1;
                    $target_file=$target_dir . basename($_FILES["img"]["name"]);
                    $img=$target_file;
                    $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
                    // Allow certain file formats
                    if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
                    && $imageFileType != "gif" ) {
                    $uploadOk = 0;
                    }
                    move_uploaded_file($_FILES["img"]["tmp_name"], $target_file);
                }
                    else {
                        $img="";
                    }
                    updatecasesp($mau,$dungluong,$dungluong1,$gia,$img,$idsp,$id,$hot,$giacu);
                
                $dssp=getall_sp();
                $kq=getall_casesp();
                include "casesp.php";}
                    break;
        //xem đơn hàng
            case 'donhang':
                $dsdh=getall_dh();
                include "donhang.php";
                break;
            case 'timkiemdonhang':
                if(isset($_POST['timkiem'])&&($_POST['timkiem'])){
                    $kyw=$_POST['kyw'];
                    $dsdh=getdhyc($kyw);
                }
                include "donhang.php";
                break;
            case 'huydonhang':
                if(isset($_GET['id'])&&($_GET['id']>0)){
                    $id=$_GET['id'];
                    huydonhang($id);
                }
                header('location:admin.php?act=donhang');
                break;
            case 'giaohang':
                if(isset($_GET['id'])&&($_GET['id']>0)){
                    $id=$_GET['id'];
                    giaohang($id);
                }
                header('location:admin.php?act=donhang');
                break;  
            case 'nhandonhang':
                if(isset($_GET['id'])&&($_GET['id']>0)){
                    $id=$_GET['id'];
                    nhanhang($id);
                }
                header('location:admin.php?act=donhang');
                break;
            case 'doanhthu':
                $dsdh=getall_dhxong();
                include "doanhthu.php";
                break;  
            default:
            include "section.php";
                break;
        }
    }else include "section.php";

    
    include "footer.php";
?>