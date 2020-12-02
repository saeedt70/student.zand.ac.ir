
<html>
<body>
  <center>
  <table width="400" border="0">
  
      <td><a  href="index.php?ro=<?php echo 1; ?>">ثبت نام دانشجو</a></td>
      <td><a  href="index.php?ro=<?php echo 2; ?>">انتخاب واحد</a></td>
     
    </tr>
  </table>
  </center>
</body>
</html>

 <?php
if(isset($_GET['ro']))
{
	$r=$_GET['ro'];
	if($r==1)
  require('viewstudent.php');
if($r==2)
  require('viewdars.php');

}
?>