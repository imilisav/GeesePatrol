<!DOCTYPE html>
<html>
  <head>
    <title>Geese Patrol</title>
    <style>
      .fonts {
        font-family: Helvetica, sans-serif;
        font-weight: lighter;
        text-align: center;
      }

      .font_li {
        font-family: Helvetica, sans-serif;
        font-weight: lighter;
      }

      .small_font {
        font-size: 0.7em;
      }

      html {
        height: 100%;
      }

      body {
        margin: 0;
        height: 100%;
        background-color: gold;
      }

      header {
        display: flex;
        flex-direction: row;
        justify-content: center;
        align-items: center;
      }

      header img {
        height: 50px;
        width: 50px;
        margin-left: 20px;
      }

      #report_content {
        display: flex;
        flex-direction: column;
        justify-content: center;
        align-items: center;
      }

      #map {
        width: 600px;
        height: 400px;
        margin: 25px auto;
        border: solid black 1px;
      }

      #report {
        width: 600px;
        margin: 10px auto;
      }

      #report ul{
        padding: 20px;
        background-color: white;
        list-style: none;
        border: solid black 1px;
        overflow-y: scroll;
      }

      button {
        display: block;
        height: 40px;
        width: 220px;
        font-size: 1.1em;
        border: solid black 1px;
        background-color: gold;
        margin: 25px auto 5px;
      }

      button:hover {
        background-color: black;
        color: gold;
      }

      footer {
        padding: 5px 0;
      }
    </style>

    <script src="http://maps.googleapis.com/maps/api/js"></script>
    <script>
      function initialize() {
        var mapProp = {
          center:new google.maps.LatLng(43.470576, -80.543974),
          zoom:15,
          mapTypeId:google.maps.MapTypeId.ROADMAP
        };
        var map = new google.maps.Map(document.getElementById("map"),mapProp);
      }
      google.maps.event.addDomListener(window, 'load', initialize);
    </script>
  </head>
  <body>
    <header>
      <h1 class="fonts">Geese Patrol</h1>
      <img src="geese.png"/>
    </header>

    <p class="fonts">Welcome to Geese Patrol, a place where you can record locations on geese nests or geese attacks to collectively help eachother find safer routes to navigate UW.</p>
    <button class="fonts" onclick="window.location.href='/geesePatrol/geeseReport.php'">Report Nest/Attack</button>
    <div id="report_content">
      <div id="map"></div>
      <div id="report">
        <h3 class="fonts">Today's Geese Reports:</h3>
        <ul>
            <?php
              //connecting to database
              $servername = "******";
              $username  = "*******";
              $password = "*******";

              class Report {
                public $Id;
                public $location;
                public $description;
                public $time;

                function __construct($inId=NULL, $inLocation=NULL, $inDescription=NULL, $inTime=NULL) {
                  if (!empty($inId))
                  {
                    $this->Id = $inId;
                  }
                  if (!empty($inLocation))
                  {
                      $this->location = $inLocation;
                  }
                  if (!empty($inDescription))
                  {
                      $this->description = $inDescription;
                  }
                  if (!empty($inTime))
                  {
                      $splitDate = explode("-", $inTime);
                      $this->inTime = $splitDate[1] . "/" . $splitDate[2] . "/" . $splitDate[0];
                  }
                }
              }

              $db = mysqli_connect($servername, $username, $password, "a9379153_reports");

              $reportCode = new Report;

              $sql = "SELECT * FROM reports ORDER BY id DESC";

              $res = mysqli_query($db, $sql) or die(mysqli_error($db));

              $reports = "";

              if (mysqli_num_rows($res) > 0) {
                while ($row = mysqli_fetch_assoc($res)) {
                  $id = $row['id'];
                  $loc = $row['location'];
                  $desc = $row['Description'];
                  $time_report = $row['TimeOfReport'];

                  //$output = $reportCode->__construct($desc);

                  $reports .= "<li class=fonts><b>$loc</b><br>$desc<br><small class='small_font'>$time_report</small></li>";
                }
                echo $reports;
              } else {
                echo "<li class='fonts'>There are no reports to display.</li>";
              }

            ?>
        </ul>
      </div>
    </div>

    <footer>
      <p class="fonts">Copyright &copy; 2016 Ilija Milisav.</p>
    </footer>
  </body>
</html>
