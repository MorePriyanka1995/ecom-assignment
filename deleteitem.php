<?php
mysql_connect("localhost","root","root")or die(mysql_error());
mysql_select_db("ecom") or die(mysql_error());

if(isset($_POST['submit']));
{
$pname=$_POST['pname'];
}
if(empty($pname))
{
echo "<script type='text/javascript'>alert('Enter Product Name')
	 window.location='deleteitem.html';
</script>";
}
else
{
$abc=mysql_query("delete from product where pname='".$pname."'");
if($abc)
{
echo "<script type='text/javascript'>alert('Product Deleted Successfully')
	 window.location='deleteitem.html';
</script>";
}
}
?>

