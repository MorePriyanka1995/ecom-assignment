
<?php

mysql_connect("localhost","root","root")or die(mysql_error());

mysql_select_db("ecom") or die(mysql_error());

if(isset($_POST['submit']));
{
$pid=$_POST['pid'];
$pnm=$_POST['pname'];
$qunt=$_POST['quentity'];
$pr=$_POST['price'];
}
echo $pid;
echo $qunt;
echo $pr;


$result=mysql_query("update product set price='".$pr."',quentity='".$qunt."' where pid='".$_POST['pid']."' ");

if($result)
{
echo "<script type='text/javascript'>alert('Status Updated Successfully')
	 window.location='updateitem.html';
</script>";

}

else

{

echo ("Failed");

}

?>




