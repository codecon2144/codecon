<div id="content1">
<div id="content">
<div class="about">
<h2><font face="Franklin Gothic Heavy">Вакансии</font></h2>
<?php
$host='localhost';
$database='id4690010_database';
$user='id4690010_codecon';
$password='codecon123';
$link=mysqli_connect($host,$user,$password,$database)
or die ("Ошибка.". mysqli_error($link));
$sql = "SELECT * FROM `work`";
$result=mysqli_query($link,$sql);
while ($tablerows=mysqli_fetch_row($result))
{ ?>
<a style="display:block;text-decoration:none;"><br>
<h2 align="center"><?php echo $tablerows[1]?></h2>
<center>Требования:<br><?php echo $tablerows[4]?></center>
<em><center>Оплата: <?php echo $tablerows[2]?></center></em></p></a>
<hr align="center" width="500" size="2" color="#4a76a8" />
<?php }
mysqli_close($link);

?>
</div>
</div>