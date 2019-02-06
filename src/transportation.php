<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
	"http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">

<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>

	<title>Shinkamigoto - Transportation</title>
	<link rel="stylesheet" href="style.css" type="text/css" charset="utf-8" />
    
    <script type="text/javascript" src="loadXMLDoc.js"></script>
    <script type="text/javascript" src="loadXMLString.js"></script>
    <script type="text/javascript" src="sortable.js"></script>
    <?php include("ParseItems.php"); ?>
</head>

<body id="getaround_page">
	<div id="wrapper">
	  	<div id="header">
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
        	<h4>Getting to the Island</h4>
            <p> There's two basic methods for getting to Shinkamigoto on Nakadori Island.  Both require that you first get to either Nagasaki or Sasebo.  Both have good transportation options, but, typically, traveling from Sasebo is cheaper.  Nearly everyone gets to Shinkamigoto by ferry boat, though there is also a small airport.
            </p><br />
            
            
            <!-- Ferries -->
            <h4>
                <?php GetSectionHead("transportation_ferries.xml"); ?>
            </h4>
            <hr class="m" />
            
              <p>Ferry rides cost $20-$60 one way, and there are two basic types of ferries available.  The fast boats and jet foils take a little over an hour to reach the island.  The slow ferries are cheaper, but take about three hours and don't run as often during the day.  Making a reservation in advance is usually unnecessary, though if you are traveling during a festival time there's a small chance the ferry could be full, so please take that into account.
            </p><br  />
           <?php ParseItems("transportation_ferries.xml"); ?>
            <br />
            <div>
            <table class="sortable" id="ferryTable" cellpadding="0" cellspacing="0">
  <tbody>
    <tr>
      <th>Ferry Company</th>
      <th>Ferry Name</th>
      <th>Price(Adult)円</th>
      <th>Price(Child)円</th>
      <th>Duration</th>
      <th>Ports</th>
      <th>Contact</th>
      <th>Note</th>
    </tr>
    <tr>
      <!-- <td><a href='http://www.iwasaki-group.com/service/ferry/' target='_blank'>Iwasaki Group - Misaki Ferry</a></td> -->
      <td><a href='http://www.misakiferry.com/jikoku.html' target='_blank'>Iwasaki Group - Misaki Ferry</a></td>
      <td>Phoenix (Fast Boat)</td>
      <td>3500</td>
      <td>3200</td>
      <td></td>
      <td>Arikawa-Sasebo</td>
      <td>TEL 0956-56-8282</td>
      <td></td>
    </tr>
    <tr>
      <td><a href='http://www.misakiferry.com/jikoku.html' target='_blank'>Iwasaki Group - Misaki Ferry</a></td>
      <td>Ferry</td>
      <td>1800</td>
      <td>900</td>
      <td></td>
      <td>Arikawa-Sasebo</td>
      <td>TEL 0956-56-8282</td>
      <td></td>
    </tr>
    <tr>
      <td><a href='http://www.kyusho.co.jp/' target='_blank'>Kyushu Shosen</a></td>
      <td>Ferry Namiji</td>
      <td>2820</td>
      <td>1410</td>
      <td></td>
      <td>Kamigoto-Sasebo</td>
      <td>TEL 095-822-9153</td>
      <td></td>
    </tr>
    <tr>
      <td><a href='http://www.kyusho.co.jp/' target='_blank'>Kyushu Shosen</a></td>
      <td>Ferry</td>
      <td>970</td>
      <td>490</td>
      <td></td>
      <td>Arikawa-Ojika</td>
      <td>TEL 095-822-9153</td>
      <td></td>
    </tr>
    <tr>
      <td><a href='http://www.kyusho.co.jp/' target='_blank'>Kyushu Shosen</a></td>
      <td>Ferry</td>
      <td>1480</td>
      <td>740</td>
      <td></td>
      <td>Arikawa-Ukuhira</td>
      <td>TEL 095-822-9153</td>
      <td></td>
    </tr>
    <tr>
      <td><a href='http://www.kyusho.co.jp/' target='_blank'>Kyushu Shosen</a></td>
      <td>Ferry</td>
      <td>550</td>
      <td>280</td>
      <td></td>
      <td>Ukuhira-Ojika</td>
      <td>TEL 095-822-9153</td>
      <td></td>
    </tr>
    <tr>
      <td><a href='http://www.kyusho.co.jp/' target='_blank'>Kyushu Shosen</a></td>
      <td>Sea Queen (Fast Boat)</td>
      <td>4780</td>
      <td>2390</td>
      <td></td>
      <td>Kamigoto-Sasebo</td>
      <td>TEL 095-822-9153</td>
      <td></td>
    </tr>
    <tr>
      <td><a href='http://www.kyusho.co.jp/' target='_blank'>Kyushu Shosen</a></td>
      <td>Sea Queen (Fast Boat)</td>
      <td>1790</td>
      <td>900</td>
      <td></td>
      <td>Arikawa-Ojika</td>
      <td>TEL 095-822-9153</td>
      <td></td>
    </tr>
    <tr>
      <td><a href='http://www.kyusho.co.jp/' target='_blank'>Kyushu Shosen</a></td>
      <td>Sea Queen (Fast Boat)</td>
      <td>2660</td>
      <td>1330</td>
      <td></td>
      <td>Arikawa-Ukuhira</td>
      <td>TEL 095-822-9153</td>
      <td></td>
    </tr>
    <tr>
      <td><a href='http://www.kyusho.co.jp/' target='_blank'>Kyushu Shosen</a></td>
      <td>Sea Queen (Fast Boat)</td>
      <td>910</td>
      <td>460</td>
      <td></td>
      <td>Ukuhira-Ojika</td>
      <td>TEL 095-822-9153</td>
      <td></td>
    </tr>
    <tr>
      <td><a href='http://www.goto-sangyo.co.jp/' target='_blank'>Goto Sangyo Kisen</a></td>
      <td>Big Earth (Jet Foil)</td>
      <td>4760</td>
      <td>2380</td>
      <td>1.5 hours</td>
      <td>Kamigoto-Nagasaki</td>
      <td>TEL:095-820-5588</td>
      <td>Online Reservation Service, Ryoma painted on top</td>
    </tr>
    <tr>
      <td><a href='http://www.goto-sangyo.co.jp/' target='_blank'>Goto Sangyo Kisen</a></td>
      <td>Arikawa</td>
      <td>3500</td>
      <td>2000</td>
      <td>1.3 hours</td>
      <td>Arikawa-Sasebo</td>
      <td>TEL：0956-23-4106</td>
      <td>Online Reservation Service</td>
    </tr>
  </tbody>
			</table>
            </div>
            <br  />
            
<!-- Flights -->
       <h4>
              <?php GetSectionHead("transportation_flights.xml"); ?>
            </h4>
            <hr class="m" />
            <p>There is a small airport on the eastern tip of Nakadori Island. At the time of writing, the price and availability of aerial transportation is unknown.
            </p><br  />
            <?php ParseItems("transportation_flights.xml"); ?>
            <br />     
            
            

            
   <br /><br /><br /><br />       
            <h4>Travel on the Island</h4>
            <p>There are many options available for getting around the island.  Because of Nakadori Island's small size, it is possible to circumnavigate the island in a day.</p>
            <br />
            
            
 <!-- Car -->
  <h4>
                <?php GetSectionHead("transportation_car.xml"); ?>
            </h4>
            <hr class="m" />
            
              <p>Despite the size of the island, car travel is very common.  However, transporting a car to the island on the ferry is very expensive, so it is highly recommended that you rent a car on the island if you wish to travel by car.  The rental price for cars are reasonable and commonly used by the native islanders.  If you're going to drive, be sure that you have an international driver's license and be aware that many of the streets are a lot more narrow than found in the United States.
            </p><br  />
                <?php ParseItems("transportation_car.xml"); ?>
            <br />              
            
            <div>
            <table class="sortable" id="carRentalTable" cellpadding="0" cellspacing="0">
  <tbody>
    <tr>
      <th>Car Rental Company</th>
      <th>Price 円</th>
      <th>Location</th>
      <th>Contact</th>
      <th>Note</th>
    </tr>
    <tr>
      <td>Arikawa Rental Car 有川レンタカー</td>
      <td></td>
      <td>Arikawa</td>
      <td>0959-42-0042</td>
      <td></td>
    </tr>
    <tr>
      <td>Naraou Rental Car 奈良尾レンタカー</td>
      <td></td>
      <td>Naraou</td>
      <td>0959-44-0364</td>
      <td></td>
    </tr>
    <tr>
      <td>Toyota Rental Car トヨタレンタカー<br />奈良尾店</td>
      <td></td>
      <td>Naraou</td>
      <td>0959-44-1200</td>
      <td></td>
    </tr>
    <tr>
      <td>Goto Sangyo Kisen Rental Car 五島産業汽船<br />レンタカー</td>
      <td></td>
      <td></td>
      <td>0959-42-3447</td>
      <td></td>
    </tr>
    <tr>
      <td>Toyota Rental Car トヨタレンタカー<br />有川店</td>
      <td></td>
      <td>Arikawa</td>
      <td>0959-53-0100</td>
      <td></td>
    </tr>
    <tr>
      <td>Shinkou Rental Car シンコーレンタカー</td>
      <td></td>
      <td></td>
      <td>0959-44-1711</td>
      <td></td>
    </tr>
  </tbody>
</table>
            </div>
            <br  />
            
            
<!-- Bus and Taxi -->
<h4>
                <?php GetSectionHead("transportation_bustaxi.xml"); ?>
            </h4>
            <hr class="m" />
            
              <p>The bus network reaches most if not all of the villages of the island.  While there are a lot of buses during the day, there are only a few at night, so you may need to consider calling a taxi for late travel.
            </p><br  />
            <?php ParseItems("transportation_bustaxi.xml"); ?>
            <br /> 
			
            <div>
            <table class="sortable" id="busTable" cellpadding="0" cellspacing="0">
  <tbody>
    <tr>
      <th>Bus Company</th>
      <th>Price 円</th>
      <th>Location</th>
      <th>Contact</th>
      <th>Note</th>
    </tr>
    <tr>
      <td><a href='http://www.bus.saihigroup.co.jp/' target='_blank'>Saihi Bus 西肥自動車 五島営業所</a></td>
      <td></td>
      <td>Kamigoto</td>
      <td>0959-52-2015</td>
      <td></td>
    </tr>
    <tr>
      <td>Kamigoto Tourism Bus 上五島観光交通</a></td>
      <td></td>
      <td>Naraou</td>
      <td>0959-44-0022</td>
      <td></td>
    </tr>
  </tbody>
</table>
            </div>
            <br  />
            <div>
            <table class="sortable" id="taxiTable" cellpadding="0" cellspacing="0">
  <tbody>
    <tr>
      <th>Taxi Company</th>
      <th>Price 円</th>
      <th>Location</th>
      <th>Contact</th>
      <th>Note</th>
    </tr>
    <tr>
      <td>Wakamatsu Taxi 若松タクシー </td>
      <td></td>
      <td>Wakamatsu</td>
      <td>0959-46-2121</td>
      <td></td>
    </tr>
    <tr>
      <td>Silver Taxi シルバータクシー</td>
      <td></td>
      <td></td>
      <td>0959-52-2247</td>
      <td></td>
    </tr>
    <tr>
      <td>Tomishi Taxi 富士タクシー</td>
      <td></td>
      <td></td>
      <td>0959-52-2405</td>
      <td></td>
    </tr>
    <tr>
      <td><a href="http://www.arikawataxi.net/index.html" target="_blank">Arikawa Taxi 有川タクシー</a></td>
      <td></td>
      <td>Arikawa</td>
      <td>0959-42-0256</td>
      <td></td>
    </tr>
    <tr>
      <td>Hato Taxi はとタクシー</td>
      <td></td>
      <td></td>
      <td>0959-46-2194</td>
      <td></td>
    </tr>
    <tr>
      <td>Kyouwa Taxi 共和タクシー</td>
      <td></td>
      <td></td>
      <td>0959-52-2175</td>
      <td></td>
    </tr>
    <tr>
      <td>Kimihae Taxi 公栄タクシー</td>
      <td></td>
      <td></td>
      <td>0959-55-2068</td>
      <td></td>
    </tr>
    <tr>
      <td>Misuzu Sightseeing Taxi 美鈴観光タクシー</td>
      <td></td>
      <td></td>
      <td>0959-44-1797</td>
      <td></td>
    </tr>
  </tbody>
</table>
            </div>
            <br />


<!-- Bicycle -->
<h4>
                <?php GetSectionHead("transportation_bicycle.xml"); ?>
            </h4>
            <hr class="m" />
            
              <p>Bicycles on the island are common and convenient.  Most bicycles are equipped with a basket on the front and can be rented or purchased from the numerous bike shops.  Riding a bike lets one take advantage of the fantastic scenery of the island, though be aware that much of the terrain is mountainous.
            </p><br  />
            <?php ParseItems("transportation_bicycle.xml"); ?>
            <br />
            <div>
            <table class="sortable" id="ferryTable" cellpadding="0" cellspacing="0">
  <tbody>
    <tr>
      <th>Bike Rental Company</th>
      <th>Price 円</th>
      <th>Location</th>
      <th>Contact</th>
      <th>Note</th>
    </tr>
    <tr>
      <td>Kawatake Marine Cycle 川竹マリンサイクル</td>
      <td></td>
      <td>Arikawa</td>
      <td>TEL 0956-42-0139</td>
      <td></td>
    </tr>
    </tbody>
    </table>
    </div>
	<br />
			<div class="clear"></div>
		</div>
	</div>
	<div id="footer">
			<?php include("footer.php"); ?>
	</div>
</body>
</html>
