<?php

// $Id: example.php,v 1.2 2002/10/17 10:44:40 rossigee Exp $

include("main.whois");

$domain = "example.com";
if(isset($_REQUEST['domain'])) {
	$domain = $_REQUEST['domain'];
}
$whois = new Whois($domain);
$result = $whois->Lookup();

echo "<form method=\"post\" action=\"example.php\">";
echo "<input name=\"domain\"/>";
echo "<input type=\"submit\"/>";
echo "</form>";

echo "<pre>";
print_r($result);
echo "</pre>";

?>
