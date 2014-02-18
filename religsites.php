<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
	"http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">

<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>

	<title>Shinkamigoto - Religious Sites</title>
	<link rel="stylesheet" href="style.css" type="text/css" charset="utf-8" />
    
    <script type="text/javascript" src="loadXMLDoc.js"></script>
    <script type="text/javascript" src="loadXMLString.js"></script>
    <?php include("ParseItems.php"); ?>
</head>

<body id="poi_page">
	<div id="wrapper">
	  	<div id="header">
            <h1><?php require($DOCUMENT_ROOT . "topbanner.html"); ?> <!-- loads Shinkamigoto site banner -->
            </h1>
			<div id="nav">
            	<?php require($DOCUMENT_ROOT . "navbar.html"); ?> <!-- loads the navigation bar -->
			</div>
		</div> <!-- header -->
        <div id="headline">
            <div id="search-news">
                <?php include($DOCUMENT_ROOT . "sidebar_right.html"); ?> <!-- loads the right side of the page with google ads -->
            </div>
        </div>
		<div id="body">
        	<p>
            
<br />

<!--Churches -->  
<h4 id="christian">
	<script type="text/javascript">
    <!--
    var xmlDoc=loadXMLDoc("religsites_churches.xml");
    
    var x=xmlDoc.getElementsByTagName("items")[0].getAttribute("sectionHead");
    document.write(x);
    //-->
    </script>
</h4>
<hr class="m" />
<?php ParseItems("religsites_churches.xml"); ?>
<br />

<!--Shrines -->  
<h4 id="shinto">
	<script type="text/javascript">
		<!--
		var shrineDoc=loadXMLDoc("religsites_shrines.xml");
		var shrinesHead=shrineDoc.getElementsByTagName("items")[0].getAttribute("sectionHead");
		document.write(shrinesHead);
		//-->
    </script>
</h4>
<hr class="m" />
<?php ParseItems("religsites_shrines.xml"); ?>
<br />

<!--Temples -->  
<h4 id="buddhist">
	<script type="text/javascript">
		<!--
		var templeDoc=loadXMLDoc("religsites_temples.xml");
		var templesHead=templeDoc.getElementsByTagName("items")[0].getAttribute("sectionHead");
		document.write(templesHead);
		//-->
    </script>
</h4>
<hr class="m" />
<?php ParseItems("religsites_temples.xml"); ?>
<br />

			<div class="clear"></div>
		</div>
	</div>
	<div id="footer">
			<?php include("footer.php"); ?>
	</div>
</body>
</html>
