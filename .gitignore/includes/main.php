<div id="content1">
<div id="content">

<div class="news">
<h2><font face="Franklin Gothic Heavy">Новости индустрии</font></h2>
<?php
$host='localhost';
$database='id4690010_database';
$user='id4690010_codecon';
$password='codecon123';
$link=mysqli_connect($host,$user,$password,$database)
or die ("Ошибка.". mysqli_error($link));
$query="SELECT * FROM `news` ORDER BY `news`.`id` DESC LIMIT 0, 5";
$sql = "SELECT * FROM `news` ORDER BY `news`.`id` DESC LIMIT 0, 10 ";
$result=mysqli_query($link,$sql);
while ($tablerows=mysqli_fetch_row($result))
{ ?>
<a href="news_view.php?id=<?php echo $tablerows[0]?>" style="display:block;text-decoration:none;"><br>
<?php echo $tablerows[1]?>
</a>
<hr align="center" width="500" size="2" color="#4a76a8" />
<?php }
mysqli_close($link);

?>
</div>

<div class="work" align="center"><h2><font face="Franklin Gothic Heavy">Вакансии</font></h2>

<?php
$host='localhost';
$database='id4690010_database';
$user='id4690010_codecon';
$password='codecon123';
$link=mysqli_connect($host,$user,$password,$database)
or die ("Ошибка.". mysqli_error($link));
$query="SELECT * FROM `news` ORDER BY `news`.`id` DESC LIMIT 0, 5";
$sql = "SELECT * FROM `work` ORDER BY `work`.`id` DESC LIMIT 0, 3 ";
$result=mysqli_query($link,$sql);
while ($tablerows=mysqli_fetch_row($result))
{ ?>
<a href="work_view.php?id=<?php echo $tablerows[0]?>" style="display:block;text-decoration:none;"><br>
<?php echo $tablerows[1]?>
</a>

<hr align="center" width="10%" size="2" color="#4a76a8" />
<?php }
mysqli_close($link);

?>


</div>
<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js" ></script>
<script type="text/javascript" src="https://comet-server.ru/CometServerApi.js" ></script>
<script type="text/javascript" src="https://comet-server.ru/doc/html_chat.js" ></script>
<link rel="stylesheet" type="text/css" href="https://comet-server.ru/doc/html_chat.css"></link>
 
<!-- Осталось настроить сам чат и запустить, для этого пишем небольшой скрипт. -->
<div id="html-chat"></div>
<style>
/* Здесь настроим css стили для чата*/
.holder-html-chat{ border: 1px solid #ccc;padding:10px;background-color: #fff;width: 600px;}
.html-chat-history{ max-width: 600px; overflow: auto;max-height: 900px; border: 1px solid #ccc;padding: 5px;}
.html-chat-js-name{ margin-top:10px; }
.html-chat-js-input{ max-width: 600px;max-height: 100px;width: 600px;margin-top:10px; }
.html-chat-js-button-holder{ margin-bottom: 0px;margin-top: 10px; }
.html-chat-js-button-holder input{ width: 220px; }
.html-chat-js-answer{ float:right; }
.html-chat-js-answer a{ color: #777;font-size: 12px; font-family: cursive;}
.html-chat-js-answer a:hover{ color: #338;font-size: 12px; font-family: cursive;}
.html-chat-msg{ margin: 0px; }
</style>
 
<script>
 
   /**
    * Чат работает на comet-server.ru
    * По любым вопросам обращайтесь support@comet-server.ru или на сайт comet-server.ru
    */
    $(document).ready(function()
    {
       // Запуск api комет сервера
       CometServer().start({dev_id: 15 }) // Идентификатор разработчика на comet-server.ru
 
       // Запуск чата. Передаём ему элемент в котором надо создать окно чата.
       htmljs_Chat_Init( $("#html-chat") )
    });
</script>
<div class="about">
<h2><font face="Franklin Gothic Heavy">О проекте</font></h2>
<p>Сайт для людей думающих и желающих не отстать от прогресса. Сайт служит для качественного повышения профессионального уровня, продвинутых пользователей и IT специалистов. Проект не коммерческий.
</p>
<p>Кроме того, вы можете присоединиться к проекту независимо от ваших умений и сделать мир лучше. </p>
<p>Сделать это можно отправив письмо на it.icmp.ru@gmail.com, так же по этому адресу можно связаться с администрацией проекта по любым вопросам.</p></div>
<h2> </h2>
<p></p>
<p></p>
</div>
</div>