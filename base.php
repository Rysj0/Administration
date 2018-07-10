<?php
if (! isset ( $_SESSION )) {
	session_start ();
}
if (! isset ( $_SESSION ['userName'] )) {
	header ( "location:login.php" );
}
$userName = $_SESSION ['userName'];
// 计算当前文件名
$url = $_SERVER ['PHP_SELF'];
$start = strrpos ( $url, '/' );
$end = strrpos ( $url, '.' );
$menuName = substr ( $url, $start + 1, $end - $start - 1 );
?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta charset="utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0" />
<title>学生信息管理系统</title>
<meta name="description" content="" />
	<meta name="keywords" content="" />
	<meta name="robots" content="" />
	<meta name="viewport" content="width=device-width, minimum-scale=1.0, maximum-scale=1.0">
	<link rel="stylesheet" href="assets/css/style.css" media="all" />
    <link href="assets/css/bootstrap.css" rel="stylesheet" />
</head>
<body>
<div class="testing">
<header class="main">
	<ul style="text-align:center; font-size:40px; color: #E70ADC">学生信息管理系统<ul>
	
</header>
<section class="user">
	<div class="profile-img">
		<p><a href=""><img src="assets/img/10.jpg" alt="" height="40" width="40" /></a> 欢迎回来！</p>
	</div>
	<div class="buttons">
   
		<button class="ico-font">&#9206;</button>
		<span class="button">用户名：<font color="#FFFF00"><?=$userName?></font></span>
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
       &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
		<span class="button "><a href="newpassword.php">修改密码</a></span>&nbsp;
		<span class="button blue"><a href="loginout.php"><font >退出登录</font></a></span>
       
	</div>
</section>
</div>
<nav>
	<ul>
		<li>
        <a <?="control"==$menuName?" class='active'":""?>
						href="control.php"><img src="assets/img/uiface1.png" alt="" height="40" width="40" /></span><font style="font-size:25px"> 学生信息</font></a></li>
		<li >
		<a <?="subject"==$menuName?"class='active'":""?>
						href="subject.php"><img src="assets/img/uiface3.png" alt="" height="40" width="40" /></span><font style="font-size:25px"> 科目信息</font> </a>
		</li>
		<li >
        <a <?="score"==$menuName?"class='active'":""?>
						href="score.php"><img src="assets/img/uiface4.png" alt="" height="40" width="40" /></span> <font style="font-size:25px"> 成绩信息</font></a></li>
	
	</ul>
</nav>
</body>
</html>