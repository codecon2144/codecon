<div id="content1">
<div id="content">
<div class="about">
<h2><font face="Franklin Gothic Heavy">Новости</font></h2>
<?php
$host='localhost';
$database='id4690010_database';
$user='id4690010_codecon';
$password='codecon123';
$link=mysqli_connect($host,$user,$password,$database)
or die ("Ошибка.". mysqli_error($link));
$sql = "SELECT * FROM `news` ORDER BY `news`.`id` DESC";
$result=mysqli_query($link,$sql);
while ($tablerows=mysqli_fetch_row($result))
{ ?>
<a style="display:block;text-decoration:none;"><br>
<h2 align="center"><?php echo $tablerows[1]?></h2>
<center><img src="img/<?php echo $tablerows[4]?>" width="400"></center>
<em><p align="justify"><?php echo $tablerows[2]?></p></em></p></a>
<hr align="center" width="500" size="2" color="#4a76a8" />
<?php }
mysqli_close($link);

?>
</div>
</div>