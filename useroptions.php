<?php
mysql_connect("localhost","root","root")or die(mysql_error());

mysql_select_db("ecom") or die(mysql_error());
$query=mysql_query("select * from product");

//$res=mysql_fetch_row($query);
echo "<table>
  <tr>
    <th>Product Name</th>
    <th>Quentity</th> 
    <th>Price</th><th>Select product</th>
	</tr>";
while($row = mysql_fetch_array($query, MYSQL_ASSOC)) {
  
    $nm=$row["pname"];
	$ct=$row["category"];
	$pr=$row["price"];
	$qu=$row["quentity"];

 echo "
  <tr>
    <td>$nm</td>
    <td>$qu</td>
    <td>$pr</td>
	<td> <input type=checkbox name=sp1 value=sp></td>
  </tr>";

}
echo "</table>
<button type=submit class=btn btn-default >Add To Cart</button>
";
?>