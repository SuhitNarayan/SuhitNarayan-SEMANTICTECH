<!DOCTYPE HTML>
<HTML>
<HEAD>
<meta charset="utf-8"/>
<link rel="stylesheet" href="css/css.css" type="text/css"/>
<script src="js/jquery-1.4.2.min.js" type="text/javascript"></script>
<script src="js/script.js" type="text/javascript"></script>
</HEAD>
<BODY>
<div id="wrapper" style="width:960px;margin:0px auto;padding:0px;text-align:center;"><h1>Search Hotel details</h1>
<form action="process.php" method="POST">
<div id="hotelname" style="padding:10px;">
	<div id="titlename" style="float:left;width:40%;text-align:right;">Name of Hotel</div>
	<div id="valuesofhotelname" style="float:left;width:40%;text-align:left;">
		<select name="selecthotel">
			<option id="hotel1" value="hotel empire">hotel empire</option>
			<option id="hotel2" value="california hotel">california hotel</option>
			<option id="hotel3" value="flower hotel">flower hotel</option>
			<option id="hotel4" value="Finkgrub hotel">Finkgrub hotel</option>
			<option id="hotel5" value="Post hotel">Post hotel</option>
			<option id="hotel6" value="Latemar hotel">Latemar hotel</option>
			<option id="hotel7" value="Star hotel">Star hotel</option>
			<option id="hotel8" value="Nightmare hotel">Nightmare hotel</option>
			<option id="hotel9" value="Lasvegas hotel">Lasvegas hotel</option>
			<option id="hotel10" value="Moonlight hotel">Moonlight hotel</option>
			<option id="hotel11" value="Diamond hotel">Diamond hotel</option>
			<option id="hotel12" value="Pinter hotel">Pinter hotel</option>
			<option id="hotel13" value="Lagro hotel">Lagro hotel</option>
			<option id="hotel14" value="Museum hotel">Museum hotel</option>
		</select>
	</div>
</div>
<div style="clear:both"></div>
<div id="citydesc" style="padding:10px;">
	<div id="cityname">
		<div id="txtcity" style="float:left;width:40%;text-align:right;">Name of City</div>
		<div id="valuesofcityname" style="float:left;width:40%;text-align:left;">
		<select name="selectcity">
			<option id="city1" value="Bolzano">Bolzano</option>
			<option id="city2" value="Firenze">Firenze</option>
			<option id="city3" value="Genova">Genova</option>
			<option id="city4" value="Milan">Milan</option>
			<option id="city5" value="Roma">Roma</option>
		</select>
		</div>
		</div>
</div>
<div style="clear:both"></div>
<div id="stardesc" style="padding:10px;">
	<div id="starrating">
		<div id="starvalue" style="float:left;width:40%;text-align:right;">Stars</div>
		<div id="valuesofstars" style="float:left;width:40%;text-align:left;">
		<select name="selectstar">
			<option id="star1" value="2">2</option>
			<option id="star2" value="3">3</option>
			<option id="star3" value="4">4</option>
			<option id="star4" value="5">5</option>
		</select>
		</div>
		</div>
</div>
<div style="clear:both"></div>
<div id="landscapedesc" style="padding:10px;">
	<div id="lanscapediv">
		<div id="landscapevalue" style="float:left;width:40%;text-align:right;">Landscape</div>
		<div id="nameoflandscape" style="float:left;width:40%;text-align:left;">
		<select name="selectlandscape">
			<option id="landscape1" value="centre of city">centre of city</option>
			<option id="landscape2" value="interrior of city">interrior of city</option>
			<option id="landscape3" value="top of city">top of city</option>
		</select>
		</div>
		</div>
</div>
<div style="clear:both"></div>
<div id="typedesc" style="padding:10px;">
	<div id="typediv">
		<div id="typevalue" style="float:left;width:40%;text-align:right;">Type of hotel</div>
		<div id="nameoftype" style="float:left;width:40%;text-align:left;">
		<select name="selecttype">
			<option id="type1" value="airport hotel">airport hotel</option>
			<option id="type2" value="student hostel">student hostel</option>
			<option id="type3" value="tourist hotel">tourist hotel</option>
			<option id="type4" value="dormitory">dormitory</option>
			<option id="type5" value="Tourist hotel">Tourist hotel</option>
			<option id="type6" value="Tourist hotel">Tourist hotel</option>
		</select>
		</div>
		</div>
</div>
<div style="clear:both"></div>
<div id="pricedesc" style="padding:10px;">
	<div id="pricediv">
		<div id="pricevalue" style="float:left;width:40%;text-align:right;">Price</div>
		<div id="amtofprice" style="float:left;width:40%;text-align:left;">
		<select name="selectprice">
			<option id="price1" value="100">100</option>
			<option id="price2" value="20">20</option>
			<option id="price3" value="110">110</option>
			<option id="price4" value="60">60</option>
			<option id="price5" value="30">30</option>
			<option id="price6" value="10">10</option>
			<option id="price7" value="22">22</option>
		</select>
		</div>
		</div>
</div>
<div style="clear:both"></div>
<div id="sizedesc" style="padding:10px;">
	<div id="sizediv">
		<div id="sizevalue" style="float:left;width:40%;text-align:right;">Room size</div>
		<div id="roomsize" style="float:left;width:40%;text-align:left;">
		<select name="selectsize">
			<option id="size1" value="50 room">50 room</option>
			<option id="size2" value="100 room">100 room</option>
			<option id="size3" value="10 room">10 room</option>
			<option id="size4" value="30 room">30 room</option>
			<option id="size5" value="20 room">20 room</option>
			<option id="size6" value="25 room">25 room</option>
		</select>
		</div>
		</div>
</div>
<div style="clear:both"></div>
<div id="neartodesc" style="padding:10px;">
	<div id="neartodiv">
		<div id="neartoplace" style="float:left;width:40%;text-align:right;">Near to</div>
		<div id="neartoplacevalues" style="float:left;width:40%;text-align:left;">
		<select name="selectnearto">
			<option id="nearto1" value="central station">central station</option>
			<option id="nearto2" value="airport">airport</option>
			<option id="nearto3" value="railway station">railway station</option>
		</select>
		</div>
		</div>
</div>
<div style="clear:both"></div>
<div id="mysearchbtn" style="text-align:center;padding:30px;">
<input type="submit" id="submit" name="btnsubmit" value="search"/>
</div>
</form>
</div>
</BODY>
</HTML>
 