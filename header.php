<DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>admin</title>
    <style>
        nav a{
            padding:10px;
        }
        footer{
            margin-top:30px;
            padding:10px;
            background-color:gray;
            text-align:center;
        }
        body{
            margin:15px;
        }
        a{
            text-decoration:none;
        }
        li{
            list-style-type:none;
        }
        header{
            background-color:aqua; 
            padding: 5px;
            height:100px;
        }
        header ul{
            display: flex;
            padding:0;
        }
        header li:hover{
            background-color:aquamarine; 
        }
        table td{
            border: 1px solid black;
            padding:5px;
            
        }
        table{
            border-collapse: collapse;
            width: 100%;
        }
    </style>
</head>
<body>
    <header>
    <h1>admin</h1>
    <nav>
        <ul>
        <li><a href="admin.php">Trang chủ </a></li>
        <li><a href="admin.php?act=danhmuc">Danh mục</a></li>
        <li><a href="admin.php?act=sanpham">Sản phẩm</a></li>
        <li><a href="admin.php?act=donhang">Đơn hàng</a></li>
        <li><a href="admin.php?act=doanhthu">Doanh thu</a></li>
</ul>    </nav>
</header>