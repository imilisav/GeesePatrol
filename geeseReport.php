<!DOCTYPE html>
<html>
  <head>
    <title>Reporting</title>
    <style>
      .fonts {
        font-family: Helvetica, sans-serif;
        font-weight: lighter;
        text-align: center;
      }

      html {
        height: 100%;
      }

      body {
        margin: 0;
        height: 100%;
        background-color: gold;
      }

      form {
        width: 100%;
        margin-left: 15px;
        font-family: Helvetica, sans-serif;
        font-weight: lighter;
        -webkit-column-count: 2; /* Chrome, Safari, Opera */
        -moz-column-count: 2; /* Firefox */
        column-count: 2;
      }

      textarea {
        display: block;
        margin-left: auto;
        margin-right: auto;
        padding: 0;
        text-align: left;
        font-size: 1em;
      }

      #submit {
        display: block;
        margin-left: auto;
        margin-right: auto;
        height: 40px;
        width: 220px;
        font-size: 1.1em;
        border: solid black 1px;
        background-color: gold;
      }

      #submit:hover {
        background-color: black;
        color: gold;
      }

      footer {
        padding: 5px 0;
      }
    </style>
  </head>

  <body>
    <h1 class="fonts">Report A Nest/Attack</h1>
    <p class="fonts">Please state a location nearby to where this occured.</p>
    <form id="Report" action="processForm.php" method="post">
      <input type="radio" name="Location" value="ACW" checked> ACW - Accelerator Centre Waterloo<br>
      <input type="radio" name="Location" value="AL" > AL - Arts Lecture Hall<br>
      <input type="radio" name="Location" value="ARC" > ARC - School of Architecture<br>
      <input type="radio" name="Location" value="B1" > B1 - Biology 1<br>
      <input type="radio" name="Location" value="B2" > B2 - Biology 2<br>
      <input type="radio" name="Location" value="BAU" > BAU - Bauer Warehouse<br>
      <input type="radio" name="Location" value="BMH" > BMH - B.C. Matthews Hall<br>
      <input type="radio" name="Location" value="BRH" > BRH - Brubacher House<br>
      <input type="radio" name="Location" value="C2" > C2 - Chemistry 2<br>
      <input type="radio" name="Location" value="CGR" > CGR - Conrad Grebel University College<br>
      <input type="radio" name="Location" value="CIF" > CIF - Columbia Icefield<br>
      <input type="radio" name="Location" value="CLN" > CLN - Columbia Lake Village North<br>
      <input type="radio" name="Location" value="CLV" > CLV - Columbia Lake Village<br>
      <input type="radio" name="Location" value="COG" > COG - Columbia Greenhouses<br>
      <input type="radio" name="Location" value="COM" > COM - Commissary<br>
      <input type="radio" name="Location" value="CPH" > CPH - Carl A. Pollock Hall<br>
      <input type="radio" name="Location" value="CSB" > CSB - Central Services Building<br>
      <input type="radio" name="Location" value="DC" > DC - William G. Davis Computer Research Centre<br>
      <input type="radio" name="Location" value="DMS" > DMS - Digital Media Stratford<br>
      <input type="radio" name="Location" value="DWE" > DWE - Douglas Wright Engineering Building<br>
      <input type="radio" name="Location" value="E2" > E2 - Engineering 2<br>
      <input type="radio" name="Location" value="E3" > E3 - Engineering 3<br>
      <input type="radio" name="Location" value="E5" > E5 - Engineering 5<br>
      <input type="radio" name="Location" value="E6" > E6 - Engineering 6<br>
      <input type="radio" name="Location" value="EC1" > EC1 - East Campus 1<br>
      <input type="radio" name="Location" value="EC2" > EC2 - East Campus 2<br>
      <input type="radio" name="Location" value="EC3" > EC3 - East Campus 3<br>
      <input type="radio" name="Location" value="EC4" > EC4 - East Campus 4<br>
      <input type="radio" name="Location" value="EC5" > EC5 - East Campus 5<br>
      <input type="radio" name="Location" value="ECH" > ECH - East Campus Hall<br>
      <input type="radio" name="Location" value="EIT" > EIT - Centre for Environmental and Information Technology<br>
      <input type="radio" name="Location" value="ERC" > ERC - Energy Research Centre<br>
      <input type="radio" name="Location" value="ESC" > ESC - Earth Sciences &amp; Chemistry<br>
      <input type="radio" name="Location" value="EV1" > EV1 - Environment 1<br>
      <input type="radio" name="Location" value="EV2" > EV2 - Environment 2<br>
      <input type="radio" name="Location" value="EV3" > EV3 - Environment 3<br>
      <input type="radio" name="Location" value="FED" > FED - Federation Hall<br>
      <input type="radio" name="Location" value="GH" > GH - Graduate House<br>
      <input type="radio" name="Location" value="GSC" > GSC - General Services Complex<br>
      <input type="radio" name="Location" value="HH" > HH - J.G. Hagey Hall of the Humanities<br>
      <input type="radio" name="Location" value="HS" > HS - Health Services<br>
      <input type="radio" name="Location" value="IHB" > IHB - Integrated Health Building<br>
      <input type="radio" name="Location" value="LHI" > LHI - Lyle S. Hallman Institute for Health Promotion<br>
      <input type="radio" name="Location" value="LIB" > LIB - Dana Porter Arts Library<br>
      <input type="radio" name="Location" value="M3" > M3 - Mathematics 3<br>
      <input type="radio" name="Location" value="MC" > MC - Mathematics &amp; Computer Building<br>
      <input type="radio" name="Location" value="MHR" > MHR - Minota Hagey Residence<br>
      <input type="radio" name="Location" value="MKE" > MKE - William Lyon Mackenzie King Village East<br>
      <input type="radio" name="Location" value="MKV" > MKV - William Lyon Mackenzie King Village<br>
      <input type="radio" name="Location" value="MLW" > MKW - William Lyon Mackenzie King Village West<br>
      <input type="radio" name="Location" value="ML" > ML - Modern Languages<br>
      <input type="radio" name="Location" value="MWS" > MWS - Manulife Water Street<br>
      <input type="radio" name="Location" value="GSK" > GSK - 44 Gaukel Street, Kitchener<br>
      <input type="radio" name="Location" value="NH" > NH - Ira G. Needles Hall<br>
      <input type="radio" name="Location" value="OPT" > OPT - Optometry<br>
      <input type="radio" name="Location" value="PAC" > PAC - Physical Activities Complex<br>
      <input type="radio" name="Location" value="PAS" > PAS - Psychology, Anthropology, Sociology<br>
      <input type="radio" name="Location" value="PHR" > PHR - Pharmacy<br>
      <input type="radio" name="Location" value="PHY" > PHY - Physics<br>
      <input type="radio" name="Location" value="QNC" > QNC - Mike &amp; Ophelia Lazaridis Quantum-Nano Centre<br>
      <input type="radio" name="Location" value="RA2" > RA2 - Research Advancement Centre 2<br>
      <input type="radio" name="Location" value="RAC" > RAC - Research Advancement Centre<br>
      <input type="radio" name="Location" value="RCH" > RCH - J.R. Coutts Engineering Lecture Hall<br>
      <input type="radio" name="Location" value="REC" > REC - Ron Eydt Village Central Complex<br>
      <input type="radio" name="Location" value="REN" > REN - Renison University College<br>
      <input type="radio" name="Location" value="REV" > REV - Ron Eydt Village<br>
      <input type="radio" name="Location" value="SCH" > SCH - South Campus Hall<br>
      <input type="radio" name="Location" value="SLC" > SLC - Student Life Centre<br>
      <input type="radio" name="Location" value="STC" > STC - Science Teaching Complex<br>
      <input type="radio" name="Location" value="STJ" > STJ - St. Jerome's University<br>
      <input type="radio" name="Location" value="STP" > STP - St. Paul's University College<br>
      <input type="radio" name="Location" value="TC" > TC - William M. Tatham Centre for Co-operative Education &amp; Career Action<br>
      <input type="radio" name="Location" value="TH" > TH - Tutors' Houses<br>
      <input type="radio" name="Location" value="TT" > TT - Tech Town<br>
      <input type="radio" name="Location" value="UC" > UC - University Club<br>
      <input type="radio" name="Location" value="UEC" > UEC - UW Place Woolwich Court<br>
      <input type="radio" name="Location" value="UET" > UET - UW Place Beck Hall<br>
      <input type="radio" name="Location" value="UNC" > UNC - UW Place Wellesley Court<br>
      <input type="radio" name="Location" value="USC" > USC - UW Place Waterloo Court<br>
      <input type="radio" name="Location" value="UWC" > UWC - UW Place Wilmot Court<br>
      <input type="radio" name="Location" value="UWD" > UWD - University of Waterloo Daycare<br>
      <input type="radio" name="Location" value="UWP" > UWP - University of Waterloo Place<br>
      <input type="radio" name="Location" value="UWT" > UWT - UW Place Eby Hall<br>
      <input type="radio" name="Location" value="V1" > V1 - Student Village 1<br>
      <input type="radio" name="Location" value="V1C" > V1C - Student Village 1 Central Complex<br>
      <input type="radio" name="Location" value="VE" > VE - Ron Eydt Village East<br>
      <input type="radio" name="Location" value="VN" > VN - Ron Eydt Village North<br>
      <input type="radio" name="Location" value="VS" > VS - Ron Eydt Village South<br>
      <input type="radio" name="Location" value="VW" > VW - Ron Eydt Village West<br>
      <p class="fonts">Please describe the location or incident as best you can.</p>
      <textarea rows="6" cols="80" name="comment" form="Report"></textarea><br>
      <input type="submit" value="Report The Incident" id="submit">
     </form>

     <footer><p class="fonts">Copyright &copy; 2016 Ilija Milisav.</p></footer>
  </body>
</html>
