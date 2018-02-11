<div id="content1">
<div id="content">
<div class="about">
<?php
$host='localhost';
$database='id4690010_database';
$user='id4690010_codecon';
$password='codecon123';
$link=mysqli_connect($host,$user,$password,$database)
or die ("Ошибка.". mysqli_error($link));
$idq =$_GET['id'];
$query="SELECT * FROM `news` ORDER BY `news`.`id` DESC LIMIT 0, 5";
$sql = "SELECT * FROM `news` WHERE `id` like '$idq'";
$result=mysqli_query($link,$sql);
while ($tablerows=mysqli_fetch_row($result))
{ ?>
<h2><font face="Franklin Gothic Heavy"><?php echo $tablerows[1]?></font></h2>

<p><pre><?php echo $tablerows[3]?></pre></p>

<hr align="center" width="500" size="2" color="#4a76a8" />
<?php }
mysqli_close($link);

?>
</div>
</div>