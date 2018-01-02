<?php
$xmlDoc=new DOMDocument();
$xmlDoc->load("frameworks.xml");

$x = $xmlDoc->getElementsByTagName('opt');


//get the q parameter from URL
$q=$_GET["fname"];

//lookup all links from the xml file if length of q>0
if (strlen($q)>0) {
  $hint="";
  for($i=0; $i<($x->length); $i++) {
    $y=$x->item($i)->getElementsByTagName('name');
    if ($y->item(0)->nodeType==1) {
      //find a link matching the search text
      if (stristr($y->item(0)->nodeValue,$q)) {
        if ($hint=="") {
          $hint=$y->item(0)->nodeValue;
        } else {
          $hint=$hint . " , " . $y->item(0)->nodeValue;
        }
      }
    }
  }
}

if ($hint=="") {
  $response="no suggestion";
} else {
  $response=$hint;
}

echo $response;
?>
