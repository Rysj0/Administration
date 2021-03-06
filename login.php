<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta charset="utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0" />
<title>系统登录</title>
<!-- BOOTSTRAP STYLES-->
<link href="assets/css/bootstrap.css" rel="stylesheet" />
<!-- FONTAWESOME STYLES-->
<link href="assets/css/font-awesome.css" rel="stylesheet" />
<!-- CUSTOM STYLES-->
<link href="assets/css/custom.css" rel="stylesheet" />
<!-- GOOGLE FONTS-->
<!--  <link href='http://fonts.googleapis.com/css?family=Open+Sans'
	rel='stylesheet' type='text/css' />-->
</head>
<body style="background-image: url(assets/img/9.jpg);background-size: 100%;background-repeat:no-repeat;">
	<div class="container">
		<div class="row text-center ">
			<div class="col-md-12">
				<br /> <br />
				<h2>用户登录</h2>
				<br />
			</div>
		</div>
		<div class="row ">
			<div
				class="col-md-4 col-md-offset-4 col-sm-6 col-sm-offset-3 col-xs-10 col-xs-offset-1">
				<div class="panel panel-default">
					<div class="panel-heading">
						<strong> 请输入登录信息 </strong>
					</div>
					<div class="panel-body">
						<form role="form" action='logindo.php' method='post'>
							<br />
							<div class="form-group input-group">
								<span class="input-group-addon"><i class="fa fa-tag"></i></span>
								<input type="text" class="form-control" placeholder="在此输入用户名"
									name='username' />
							</div>
							<div class="form-group input-group">
								<span class="input-group-addon"><i class="fa fa-lock"></i></span>
								<input type="password" class="form-control" placeholder="在此输入密码"
									name='passcode' />
							</div>
                            <div class="form-group input-group">
								<span class="input-group-addon"><i class="fa fa-lock"></i></span>
                            请输入验证码：<input type="text"class="form-control" placeholder="在此输入验证码"
									name='yzm' />
                           <img src="code.php" onclick="show()" id = "img" /><br/>

                           </div>

							<div class="form-group">
								</span>
							</div>
							<input type='submit' class="btn btn-primary " value='登录' />
                            <a href="register.php"><input type='' class="btn btn-primary " value='没有账号？去注册' /></a>
							<hr />
					
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>
    <script>
    function show(){
     var img = document.getElementById("img");
     img.src = "code.php?id="+Math.random();

	}
</script>
	<!-- SCRIPTS -AT THE BOTOM TO REDUCE THE LOAD TIME-->
	<!-- JQUERY SCRIPTS -->
	<script src="assets/js/jquery-1.10.2.js"></script>
	<!-- BOOTSTRAP SCRIPTS -->
	<script src="assets/js/bootstrap.min.js"></script>
	<!-- METISMENU SCRIPTS -->
	<script src="assets/js/jquery.metisMenu.js"></script>
	<!-- CUSTOM SCRIPTS -->
	<script src="assets/js/custom.js"></script>

</body>
</html>
