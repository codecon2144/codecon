<html>
<head>
<link rel="shortcut icon" href="logo.png" type="png">
<meta charset="utf-8">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.mi.."></script>
<script type="text/javascript" src="script-menu-3.js"></script>
<script type="text/javascript" src=".../js/jquery-1.js"></script>
<script type="text/javascript" src=".../js/jquery.js"></script>
<script type="text/javascript" src=".../js/jquery_002.js"></script>
<script type="text/javascript" src=".../js/additional-methods.js"></script>
<link rel="stylesheet" href="style.css">
<title>IT-сообщество</title>
<script type="text/javascript">
	$.validator.methods.equal = function(value, element, param) {
		return value == param;
	};
</script>
</head>
<body>
<div id="header">
<a href="index.php"><img src="logo.png" width="50" style="float:left;margin-right:20px;margin-left:20px;"></a><h1><font color="white" face="Cambria Math">IT-сообщество Якутии</font></h1>
<div style="float:right;margin-top:-33px;">
   <a href="#win1" style="text-decoration:none;color: white"><b><font face="Franklin Gothic Heavy">Регистрация</font></b></a>
<a href="#" style="text-decoration:none;margin-left:10px;color: white;"><b><font face="Franklin Gothic Heavy">Вход</font></b></a>
</div>


		<a href="#x" class="overlay" id="win1"></a>
        <div class="popup">
            <div id="login">
     <center> <h1>Регистрация</h1>
        <form action="" method="post">
          <input type="email" name="mail" placeholder="Введите Ваш email адреcc" required /><br>
          <input type="text"  name="name" placeholder="Имя пользователя" required /><br>
          <input type="password"  name="pass" placeholder="Ваш пароль" required /><br>
           <input type="password"  name="pass2" placeholder="Повторите Ваш пароль" required /><br>
          <input type="submit" name="submit" value="Зарегистрироваться" />
        </center>
            </div>
			<a class="close" title="Закрыть" href="#close"></a>
        </div>
</div>
</body>
</html>