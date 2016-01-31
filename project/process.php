<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8"/>
<link rel="stylesheet" href="css/css.css" type="text/css"/>
<script src="js/jquery-1.4.2.min.js" type="text/javascript"></script>
<script src="js/script.js" type="text/javascript"></script>
</head>
<body>
<?php
require_once( "sparqllib.php" );
$selecthotel=$_POST["selecthotel"];
$selectcity=$_POST["selectcity"];
$selectstar=$_POST["selectstar"];
$selectlandscape=$_POST["selectlandscape"];
$selecttype=$_POST["selecttype"];
$selectprice=$_POST["selectprice"];
$selectsize=$_POST["selectsize"];
$selectnearto=$_POST["selectnearto"];

$db = sparql_connect( "http://localhost:8080/openrdf-workbench/repositories/HotelsinItaly/query" );

if( !$db ) { print $db->errno() . ": " . $db->error(). "\n"; exit; }
 
$sparql = "
prefix hotel:<http://www.hotel.com/hotelsinItaly#>
prefix rdf:<http://www.w3.org/1999/02/22-rdf-syntax-ns#>
SELECT distinct ?hotel ?city ?starrating ?landscape ?type ?price ?size ?nearto WHERE 
{
?hotel hotel:city ?city;filter(str(?city)='".$selectcity."')
?hotel hotel:starrating ?starrating;filter(?starrating='".$selectstar."')
?hotel hotel:landscape ?landscape;filter(str(?landscape)='".$selectlandscape."')
?hotel hotel:type ?type;filter(str(?type)='".$selecttype."')
?hotel hotel:price ?price;filter(?price ='".$selectprice."')
?hotel hotel:size ?size;filter(str(?size)='".$selectsize."')
?hotel hotel:nearto ?nearto;filter(str(?nearto)='".$selectnearto."')
}
";
$result = $db->query( $sparql ); 
if( !$result ) { print $db->errno() . ": " . $db->error(). "\n"; exit; }
 
$fields = $result->field_array( $result );
 
print "<p>Number of rows: ".$result->num_rows( $result )." results.</p>";
$numrows = $result->num_rows( $result );
if($numrows == 0)
echo "There are no matching found";
else if($numrows != 0 )
{
print "<center><table class='example_table' style='border:1px solid #000;text-align:center;'>";
print "<tr>";
foreach( $fields as $field )
{
	print "<th style='border:1px solid #000;'>$field</th>";
}
print "</tr>";
while( $row = $result->fetch_array() )
{
	print "<tr>";
	foreach( $fields as $field )
	{
		print "<td style='border:1px solid #000;'>$row[$field]</td>";
	}
	print "</tr>";
}
print "</table></center>";
}
?>
<script>
$(document).ready(function(){
	$("#btnsubmit").click(function(){
		$txtname=$("#idname").val();
		$txtdob=$("#iddob").val();
		$txtemail=$("#idemail").val();
		$txtphone=$("#idphone").val();
		$txtaddress=$("#idaddress").val();
		if($txtname == ""){ alert("Please enter name");}
		if($txtdob == ""){ alert("Please enter Date of birth");}
		if($txtemail == ""){ alert("Please enter email");}
		if($txtphone == ""){ alert("Please enter phone");}
		if($txtaddress == ""){ alert("Please enter address");}
		if($txtname !='' && $txtdob !='' && $txtemail !='' && $txtphone !='' && $txtaddress !='')
		{
			$.ajax({
				type: "POST",
				url: "http://localhost/easyrdf/serial.php?format=rdfxml&name="+$txtname,
				context: document.body,
				success: function(resultData) { location.href="http://localhost/easyrdf/serial.php?format=rdfxml&txtname="+$txtname+"&txtdob="+$txtdob+"&txtemail="+$txtemail+"&txtphone="+$txtphone+"&txtaddress="+$txtaddress; }
				})
		}
	})
})
</script>
<div id="wrapper" style="margin-top:100px;width:960px;text-align:center;margin:0px auto;">
	<div id="titlebookingnote" style="text-align:center;"><h1>PERSONAL DETAILS TO BOOK YOUR HOTEL</h1></div>
	<div id="bookinginfo">
		<div id="personname" style="padding:10px;">
			<div id="labelname" style="float:left;width:40%;text-align:right;">Name</div>
			<div id="txtname" style="float:left;width:40%;text-align:left;"><input type="text" name="txtname" id="idname"/></div>	
		</div>
		<div style="clear:both"></div>
		<div id="persondob" style="padding:10px;">
			<div id="labeldob" style="float:left;width:40%;text-align:right;">Date of birth</div>
			<div id="txtdob" style="float:left;width:40%;text-align:left;"><input type="text" name="txtdob" id="iddob"/></div>	
		</div>
		<div style="clear:both"></div>
		<div id="personemail" style="padding:10px;">
			<div id="labelemail" style="float:left;width:40%;text-align:right;">Email</div>
			<div id="txtemail" style="float:left;width:40%;text-align:left;"><input type="text" name="txtemail" id="idemail"/></div>	
		</div>
		<div style="clear:both"></div>
		<div id="personphone" style="padding:10px;">
			<div id="labelphone" style="float:left;width:40%;text-align:right;">Phone</div>
			<div id="txtphone" style="float:left;width:40%;text-align:left;"><input type="text" name="txtphone" id="idphone"/></div>	
		</div>
		<div style="clear:both"></div>
		<div id="personaddress" style="padding:10px;">
			<div id="labeladdress" style="float:left;width:40%;text-align:right;">Address</div>
			<div id="txtaddress" style="float:left;width:40%;text-align:left;"><input type="text" name="txtaddress" id="idaddress"/></div>	
		</div>
		<div style="clear:both"></div>
		<div id="bookbutton" style="padding:10px;">
			<div id="btnsubmit" style="width:100px;background:#ccc;color:#000;text-align:center;margin:0px auto;">SUBMIT</div>
		</div>
	</div>
</div>
</body>
</html>
 