<?php
mysql_connect("localhost","root","root") or die(mysql_error());

mysql_select_db("ecom");

if(isset($_POST['submit']));

{
$pid=$_POST['pid'];
$pname=$_POST['pname'];
$category=$_POST['category'];
$price=$_POST['price'];
$quentity=$_POST['quentity'];
}
if(empty($_POST['pname']))

{

echo "<script type='text/javascript'>alert('Enter product Name and product Price')
	 window.location='addnewitem.html';
</script>";
}

else
{
if(!eregi("[0-9]",$_POST['price']))
{
echo "<script type='text/javascript'>alert('Enter only numbers in Price field')
	 window.location='addnewitem.html';
</script>";
}
else
{
$query=mysql_query("select*from product where pname='".$pname."' ");
$res=mysql_fetch_row($query);
if($res)
{
echo "<script type='text/javascript'>alert('product already exists.')
	 window.location='addnewitem.html';
</script>";
}
else
{
$result=mysql_query("insert into product values ($pid,'$pname','$category','$price','$quentity')");
if($result)
{
echo "<script type='text/javascript'>alert('Item Added Successfully')
	 window.location='addnewitem.html';
</script>";
}
else
{
echo "<script type='text/javascript'>alert('Item Insertion Failed')
	 window.location='addnewitem.html';
</script>";
}
}
}
}
?>























