<?php

// $Id: example.php,v 1.1 2002/10/13 14:32:58 rossigee Exp $

include("main.whois");

$whois = new Whois("example.com");
$result = $whois->Lookup();
echo "<pre>";
print_r($result);
echo "</pre>";

?>
