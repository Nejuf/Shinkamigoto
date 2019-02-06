<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
	"http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">

<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>

	<title>Shinkamigoto - Local Language Guide</title>
	<link rel="stylesheet" href="style.css" type="text/css" charset="utf-8" />

        <link rel="icon" type="image/png" href="/favicon-16x16.png" sizes="16x16">  
        <link rel="icon" type="image/png" href="/favicon-32x32.png" sizes="32x32">  
        <link rel="icon" type="image/png" href="/favicon-96x96.png" sizes="96x96"> 
        <link rel="shortcut icon" href="/favicon.ico">
</head>

<body id="getaround_page">
	<div id="wrapper">
	  	<div id="header" Vary: Accept-Encoding>
            <h1><?php require(getenv("DOCUMENT_ROOT") . "/topbanner.html"); ?> <!-- loads Shinkamigoto site banner -->
            </h1>
			<div id="nav">
            	<?php require(getenv("DOCUMENT_ROOT") . "/navbar.html"); ?> <!-- loads the navigation bar -->
			</div>
		</div> <!-- header -->
        <div id="headline">
            <div id="search-news">
                <?php include(getenv("DOCUMENT_ROOT") . "/sidebar_right.html"); ?> <!-- loads the right side of the page with google ads -->
            </div>
        </div>
		<div id="body">
        	<p> Here is a useful list of translations with kanji characters to help traveler's get around the island effectively.
<br /><br />

<h2>Towns:</h2>
<ol class="langList">
<li>Arikawa 有川</li>
<li>Urakuwa 浦桑</li>
<li>Shinkamigoto　新上五島</li>
<li>Naraou 奈良尾</li>
<li>Wakamatsu 若松</li>
<li>Oota 太田</li>
</ol> 
<br />
<h2>Places:</h2>
<ul class="langList">
<li>Christian キリシタン (kirishitan)</li>
<li>church 教会 (kyoukai)</li>
<li>Shinto　神道</li>
<li>shrine　神社(jinja)</li>
<li>Buddhist　仏教徒</li>
<li>temple　お寺(otera)</li>
<li>area 地区(chiku)</li>
<li>Nakadori 中鳥</li>
</ul><br />
<h2>
<h2>Transportation:</h2>
<ul class="langList">
  <li>bus バス</li>
<li>taxi　タクシー</li>
<li>rental car レンタカー</li>
<li>ferry　フェリー</li>
<li>boat　ボート/船(ふね)</li>
</ul>
<br />
  </p>
			<div class="clear"></div>
		</div>
	</div>
	<div id="footer">
			<?php include("footer.php"); ?>
	</div>
</body>
</html>
