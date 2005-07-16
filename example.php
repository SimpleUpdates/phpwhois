<?php

// $Id: example.php,v 1.4 2005/07/16 15:32:07 sparc Exp $

include('whois.main.php');

$domain = 'example.com';
if(isset($_REQUEST['domain'])) {
	$domain = $_REQUEST['domain'];
}
$whois = new Whois($domain);
$result = $whois->Lookup();

echo "<form method=\"post\" action=\"example.php\">";
echo "<input name=\"domain\" value=\"".$domain."\"/>";
echo "<input type=\"submit\"/>";
echo "</form>";

echo "<pre>";
print_r($result);
echo "</pre>";

?>
