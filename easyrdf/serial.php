<?php
if($_GET["txtname"] != '' && $_GET["txtdob"] != ''  && $_GET["txtemail"] != ''  && $_GET["txtphone"] != ''  && $_GET["txtaddress"] != '' ){
$txtname = $_GET["txtname"];
$txtdob  = $_GET["txtdob"];
$txtemail = $_GET["txtemail"];
$txtphone = $_GET["txtphone"];
$txtaddress = $_GET["txtaddress"];
    /**
     * Basic serialisation example
     *
     * This example create a simple FOAF graph in memory and then
     * serialises it to the page in the format of choice.
     *
     */
    set_include_path(get_include_path() . PATH_SEPARATOR . '../lib/');
    require_once "C:\\wamp\\www\\easyrdf\\easyrdf-0.9.0\\lib\\EasyRdf.php";
    require_once "html_tag_helpers.php";
    $graph = new EasyRdf_Graph();
    $me = $graph->resource('http://www.hotel.com/'.$txtname.'#me', 'foaf:Person');
    $me->set('foaf:name', $txtname);
    $me->set('foaf:dob', new EasyRdf_Literal_Date($txtdob));
    $me->set('foaf:email', $txtemail);
    $me->set('foaf:phone', $txtphone);
   
    
    $me->set('foaf:address', $txtaddress);
    if (isset($_REQUEST['format'])) {
        $format = preg_replace("/[^\w\-]+/", '', strtolower($_REQUEST['format']));
    } else {
        $format = 'RDF/XML';
    }
?>
<html>
<head><title>XML/RDF format data</title></head>
<body>
<h1>BOOKING DETAILS on <?php echo date("l jS \of F Y h:i:s A");?></h1>

<ul>
<?php
    foreach (EasyRdf_Format::getFormats() as $f) {
        if ($f->getSerialiserClass()) {
            if ($f->getName() == "RDF/XML") {
                print "<li><b>".$f->getLabel()."</b></li>\n";
            } 
        }
    }
?>
</ul>

<pre style="margin: 0.5em; padding:0.5em; background-color:#eee; border:dashed 1px grey;">
<?php
    $data = $graph->serialise($format);
    if (!is_scalar($data)) {
        $data = var_export($data, true);
    }
    print htmlspecialchars($data);
?>
</pre>

</body>
</html>
<?php } ?>