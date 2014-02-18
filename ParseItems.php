<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
	"http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">

<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>

<body>

<?php
function ParseItems($xmlFileName)
{ 
  $xmlDoc = new DOMDocument();
  $xmlDoc->load($xmlFileName);
  $x = $xmlDoc->documentElement;
  $itemArray = $xmlDoc->getElementsByTagName('item');
  
  foreach($itemArray as $item)
  {
	Echo "<div class='item'>";
	Echo "<h5>";
	
	$nameArray = $item->getElementsByTagName("name");
	
	foreach($nameArray as $name)
	{
		print $name->nodeValue;
	}
	
	Echo "</h5>";
	
	$images = $item->getElementsByTagName("imgSrc");
	$imgSrc = $images->item(0)->nodeValue;
	
	Echo "<p><img class='imgpreview' src=";
	print $imgSrc; 
	Echo "alt='No Image of Site'/>";
	
	$descriptions = $item->getElementsByTagName("desc");
	
	foreach($descriptions as $desc)
	{
		print $desc->nodeValue;
	}
	
	Echo "</p>";
	
	$albums = $item->getElementsByTagName("albumSrc");
	foreach($albums as $album)
	{
		$sPattern = '/\s*/m';
		$sReplace = '';
		$sTestString = $album->nodeValue;
		$sTestString = preg_replace( $sPattern, $sReplace, $sTestString );

		if(strlen($sTestString) > 1)
		{
			Echo "<a class='photoLink' href=";
			print $sTestString;
			Echo " target='_blank'>&nbsp;&nbsp;&nbsp;-View Photos</a>";
		}
	}
	
	Echo   "</div><br />";
 }
}
?>
</body>
</html>