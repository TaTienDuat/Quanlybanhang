<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style type="text/css">
		*{margin: 0;}	
		.wrapper{
			width: 960px;
			margin: 0px auto;
			background: #DBDBDB;
			font-size: 14px;
			line-height: 1.5 line;
		}
		header{
			height: 100px;
			background: 	#5121c5; ;
			
			
		}
		h1{text-align: center;}
		.nav-menu ul{
			height: 40px;
			background: #4f3590;
		}
		a{text-decoration: none; 
			color: white;}
		.nav-menu>ul>li{
			float: left;
			list-style: none;
			padding: 10px 60px;
		} 
		.nav-menu>ul>li:hover{
			display: block;
			background: #939393;
		}
		.article{
			width: 20%;
			background-color: #211161;
			float: left;
			height: 400px;
		}
		.article>ul{padding: 0px;}
		.article>ul>li{
			list-style: none;
			padding: 10px 5px;
			border: #B1B1B1 dotted 1px;
			
		}
		.article>ul>li:hover{
			display: block;
			background: #939393;
		}
		table{width: 80%;padding-top: 20px;
		}
		
		.aside{
			height: 400px;
			background-color: #f3f1f0;
		}
		footer{
			height: 70px;
			background: #4f3590;
		}
		
	</style>
	
</head>
<body>
	<div >
		<header>
			<img src="http://localhost/qlbanhang/public/images/1.jpg">
			
		</header>
		<nav class="nav-menu">
			<ul >
				<li><a href="">Trang chủ</a></li>
				<li><a href="">Sản phảm</a></li>
				<li><a href="">Nhà cung cấp</a></li>
				<li><a href="">Giỏ hàng</a></li>
				<li><a href="">Liên hệ</a></li>
			</ul>
		</nav>
		<div class="article">
			<ul>
				<li><a href="">Cập nhật danh mục</a></li>
				<li><a href="http://localhost:80/qlbanhang/DanhsachNCC"> Cập nhật nhà cung cấp</a></li>
				<li><a href="http://localhost:80/QlBANHANG/Khachhang">Cập nhật khách hàng</a></li>
				<li><a href="">Báo cáo và thống kê</a></li>
			</ul>
		</div>
		<div class="aside">
			<?php
            include_once './MVC/views/pages/' . $data['page'] .'.php';
            ?>
		</div>
	</div>
</body>
</html>