<?php

echo "<html lang=\"en\">\n";
echo "<head>\n";
echo "  <meta charset=\"utf-8\">\n";
echo "  \n";
echo "  <meta content=\"width=device-width, initial-scale=1.0\" name=\"viewport\">\n";
echo "  <meta content=\"\" name=\"keywords\">\n";
echo "  <meta content=\"\" name=\"description\">\n";
echo "\n";
echo "  <link href=\"img/favicon.png\" rel=\"icon\">\n";
echo "  <link href=\"img/apple-touch-icon.png\" rel=\"apple-touch-icon\">\n";
echo "\n";
echo "\n";
echo "  <link href=\"https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,500,600,700,700i|Montserrat:300,400,500,600,700\" rel=\"stylesheet\">\n";
echo "\n";
echo "  <link href=\"lib/bootstrap/css/bootstrap.min.css\" rel=\"stylesheet\">\n";
echo "\n";
echo "\n";
echo "  <link href=\"lib/font-awesome/css/font-awesome.min.css\" rel=\"stylesheet\">\n";
echo "  <link href=\"lib/animate/animate.min.css\" rel=\"stylesheet\">\n";
echo "  <link href=\"lib/ionicons/css/ionicons.min.css\" rel=\"stylesheet\">\n";
echo "  <link href=\"lib/owlcarousel/assets/owl.carousel.min.css\" rel=\"stylesheet\">\n";
echo "  <link href=\"lib/lightbox/css/lightbox.min.css\" rel=\"stylesheet\">\n";
echo "\n";
echo "\n";
echo "  <link href=\"css/style.css\" rel=\"stylesheet\">\n";
echo "  <link rel=\"stylesheet\" href=\"https://unpkg.com/leaflet@1.5.1/dist/leaflet.css\" integrity=\"sha512-xwE/Az9zrjBIphAcBb3F6JVqxf46+CDLwfLMHloNu6KEQCAWi6HcDUbeOfBIptF7tcCzusKFjFw2yuvEpDL9wQ==\" crossorigin=\"\"/>\n";
echo "  <script src=\"https://unpkg.com/leaflet@1.5.1/dist/leaflet.js\" integrity=\"sha512-GffPMF3RvMeYyc1LWMHtK8EbPv0iNZ8/oTtHPx9/cc2ILxQ+u905qIwdpULaqDkyBKgOaB57QTMg7ztg8Jm2Og==\" crossorigin=\"\"></script>\n";
echo "\n";

    session_start();
    $state=$_SESSION['state'];
    if($state=="delhi")
    {
    	$x="delhi";
    }
    elseif ($state=="uttar pradesh") {
    	$x="up";
    }
    elseif($state=="andhra pradesh")
    {
    	$x="ap";
    }

?>

<?php
echo "</head>\n";
echo "\n";
echo "<body>\n";
echo "  <header id=\"header\">\n";
echo "\n";
echo "    <div id=\"topbar\">\n";
echo "      <div class=\"container\">\n";
echo "        <div class=\"social-links\">\n";
echo "          <a href=\"#\" class=\"twitter\"><i class=\"fa fa-twitter\"></i></a>\n";
echo "          <a href=\"#\" class=\"facebook\"><i class=\"fa fa-facebook\"></i></a>\n";
echo "          <a href=\"#\" class=\"linkedin\"><i class=\"fa fa-linkedin\"></i></a>\n";
echo "          <a href=\"#\" class=\"instagram\"><i class=\"fa fa-instagram\"></i></a>\n";
echo "        </div>\n";
echo "      </div>\n";
echo "    </div>\n";
echo "\n";
echo "    <div class=\"container\">\n";
echo "\n";
echo "      <div class=\"logo float-left\">\n";
echo "        <h1 class=\"text-light\"><a href=\"#intro\" class=\"scrollto\"><span>ENVIRUS</span></a></h1>\n";
echo "        \n";
echo "      </div>\n";
echo "\n";
echo "      <nav class=\"main-nav float-right d-none d-lg-block\">\n";
echo "        <ul>\n";
echo "          <li class=\"active\"><a href=\"#intro\">Home</a></li>\n";
echo "          <li><a href=\"#about\">About Us</a></li>\n";
echo "          <li><a href=\"#services\">Services</a></li>\n";
echo "          <li><a href=\"#team\">Team</a></li>\n";
// echo "          <li class=\"drop-down\"><a href=\"\">Drop Down</a>\n";
// echo "            <ul>\n";
// echo "              <li><a href=\"#\">Drop Down 1</a></li>\n";
// echo "              <li class=\"drop-down\"><a href=\"#\">Drop Down 2</a>\n";
// echo "                <ul>\n";
// echo "                  <li><a href=\"#\">Deep Drop Down 1</a></li>\n";
// echo "                  <li><a href=\"#\">Deep Drop Down 2</a></li>\n";
// echo "                  <li><a href=\"#\">Deep Drop Down 3</a></li>\n";
// echo "                  <li><a href=\"#\">Deep Drop Down 4</a></li>\n";
// echo "                  <li><a href=\"#\">Deep Drop Down 5</a></li>\n";
// echo "                </ul>\n";
// echo "              </li>\n";
// echo "              <li><a href=\"#\">Drop Down 3</a></li>\n";
// echo "              <li><a href=\"#\">Drop Down 4</a></li>\n";
// echo "              <li><a href=\"#\">Drop Down 5</a></li>\n";
// echo "            </ul>\n";
// echo "          </li>\n";
echo "          <li><a href=\"conva-$x.php\">User Profile</a></li>\n";
echo "          <li><a href=\"#footer\">Contact Us</a></li>\n";
echo "        </ul>\n";
echo "      </nav>\n";
echo "      \n";
echo "    </div>\n";
echo "  </header>";
?>