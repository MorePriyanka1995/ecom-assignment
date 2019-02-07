
<?php

mysql_connect("localhost","root","root")or die(mysql_error());

mysql_select_db("ecom") or die(mysql_error());
if(isset($_POST['submit']));
{
$pid=$_POST['pid'];
}
/*$res=mysql_query("select pid,pname from product where pid='".$pid."'");
while($row=mysql_fetch_array($res))
{
echo $res[0];
echo $res[1];
}
*/
$result = mysql_query("SELECT pname,category,price,quentity FROM product where pid='".$pid."'");

if ($row = mysql_fetch_array($result, MYSQL_ASSOC)) {
   // printf("ID: %s  Name: %s", $row["pid"], $row["pname"]);

	$nm=$row["pname"];
	$ct=$row["category"];
	$pr=$row["price"];
	
	$qu=$row["quentity"];
}

?>
<html>
<style>
body {
  margin: 0;
  padding: 0;
  background-color: black;
  height: 100vh;
}
.form_bg {
    background-color:#faf0e6;
    color:#666;
    padding:20px;
    border-radius:10px;
    position: absolute;
    border:1px solid #fff;
    margin: auto;
    top: 0;
    right: 0;
    bottom: 0;
    left: 0;
    width: 500px;
    height: 300px;
}
.align-center {
    text-align:center;
}
</style>


<body>
<form method="POST" action="show.php">

<div class="form_bg">
           
<div class="container">
    <div class="row">
        <div class="form_bg">
           
                				
				 <div class="align-center">
                 <form>
                 <h2 class="text-center"><font color="#17a2b8">UPDATE PRODUCT</h2>
                <br/>
				 <div class="form-group">PRODUCT ID:
                    <input type="text" class="form-control" name="pid" value="<?php echo $pid;?>" readonly>
                </div>
				<br>
				
                <div class="form-group">PRODUCT NAME:
                    <input type="text" class="form-control" name="pname" id="pname" value="<?php echo $nm;?>" readonly>
                </div>
				<br>
				 <div class="form-group">PRODUCT CATEGORY:
                    <input type="text" class="form-control" name="category" id="category" value="<?php echo $ct;?>" readonly>
                </div>
				<br>
               <div class="form-group">PRODUCT PRICE:
                    <input type="text" class="form-control" name="price" id="price" value="<?php echo $pr;?>">
                </div>
				<br>
               <div class="form-group">PRODUCRT QUENTITY:
                    <input type="text" class="form-control" name="quentity" id="quentity" value="<?php echo $qu;?>">
                </div>
				<br>
               
                <div class="align-center">
                    <button type="submit" class="btn btn-default" id="login"><font color="#17a2b8"><b>UPDATE</button>
                </div>
            </form>
				 </div>
               
            </form>
        </div>
		</div>
    </div>
</div>
</body>
</html>






