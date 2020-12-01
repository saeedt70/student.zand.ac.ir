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
if(isset($_POST['btn']))
{

$name=$_POST['name'];
$family=$_POST['family'];
$mobile=$_POST['mobile'];
$jensiat=$_POST['jensiat'];
$reshte =$_POST['reshte'];
$addres =$_POST['addres'];
  require "model.php";
  require "contorolleruser.php";
  $users = new Users();
$users->setstudent($name,$family,$mobile, $jensiat, $reshte, $addres);
}
 
?>
<form action="" method="post" enctype="multipart/form-data" name="form1" id="form1">
  <table width="563" align="center" dir="rtl" style="border:1px solid #09C">
    <tr>
      <td colspan="8" align="right" bgcolor="#C1D1F7">ثبت نام دانشجو
      <?php if(isset($err)) echo $err; ?></td>
    </tr>
    <tr>
      <td width="85" align="left">نام :</td>
      <td width="250" align="right"><input type="text" name="name" /></td>
   
    </tr>
    <tr>
      <td align="left">نام خانوادگی  :</td>
      <td  align="right"><input type="text" name="family" />
      </td>
    </tr>


      <td align="left">شماره همراه  :</td>
      <td  align="right"><input type="text" name="mobile" /></td>
    </tr>


  <tr>
      <td align="left">ادرس :</td>
    <td colspan="7" align="right"><textarea name="addres" id="text" cols="45" rows="5">
      </textarea></td>
    </tr>


      <td align="left">جنسیت  :</td>
      <td  align="right"><input type="text" name="jensiat" /></td>
    </tr>

     <td align="left">رشته  :</td>
      <td  align="right"><input type="text" name="reshte" /></td>
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