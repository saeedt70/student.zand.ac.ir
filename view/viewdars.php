//انتخاب واحد یو ای

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
<style type="text/css">
* {
	font-family: Tahoma, Geneva, sans-serif;
	font-size: 12px;
}
a:link {
	text-decoration: none;
}
a:visited {
	text-decoration: none;
}
a:hover {
	text-decoration: none;
	color: #F00;
}
a:active {
	text-decoration: none;
}
</style>
</head>

<body>
<?php
 require "model.php";
 require "contorollerdars.php";
 $users = new Users();

$users->getdars();      //نمایش دروس
 foreach ($users->getdars() as $u) {
    echo "<center>"."<li>" ." کد درس= ". $u['code'] ."***". " نام درس= ". $u['name'] ."***"." استاد= ". $u['ostad'] ."***"." ساعت کلاس= ". $u['date'] . "</li>"."<center>"."<br>";
  }

if(isset($_POST['btn']))
{

$idu=$_POST['idu'];//ای دی کاربر
$idd=$_POST['idd'];// ای دی درس

$users->setsdars($idu,$idd);//انتخاب واحد

}
 
?>
<form action="" method="post" enctype="multipart/form-data" name="form1" id="form1">
  <table width="563" align="center" dir="rtl" style="border:1px solid #09C">
    <tr>
      <td colspan="8" align="right" bgcolor="#C1D1F7">انتخاب واحد
      <?php if(isset($err)) echo $err; ?></td>
    </tr>
   
    <tr>
      <td align="left">شماره دانشجویی :</td>
      <td  align="right"><input type="text" name="idu" />
      </td>
    </tr>


      <td align="left">کد درس  :</td>
      <td  align="right"><input type="text" name="idd" /></td>
    </tr>





    
    <tr>
      <td>&nbsp;</td>
      <td colspan="7"><input type="submit" name="btn" id="btn" value="ارسال" /></td>
    </tr>
  </table>
</form>
<br />




</body>
</html>
