
<!DOCTYPE html>
<html lang="en">

<head>
    <title>Searching Flights | DAMS-RDBMS Project</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->  
    <link rel="icon" type="image/png" href="../subtheme2/images/icons/favicon.ico"/>
<!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="../subtheme2/vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="../subtheme2/fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="../subtheme2/fonts/iconic/css/material-design-iconic-font.min.css">
<!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="../subtheme2/vendor/animate/animate.css">
<!--===============================================================================================-->  
    <link rel="stylesheet" type="text/css" href="../subtheme2/vendor/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="../subtheme2/vendor/animsition/css/animsition.min.css">
<!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="../subtheme2/vendor/select2/select2.min.css">
<!--===============================================================================================-->  
    <link rel="stylesheet" type="text/css" href="../subtheme2/vendor/daterangepicker/daterangepicker.css">
<!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="../subtheme2/css/util.css">
    <link rel="stylesheet" type="text/css" href="../subtheme2/css/main.css">
<!--===============================================================================================-->
    <style>
        a { color: #FFFFFF; font-weight: bold; }
         /* CSS link color */
         tr:nth-child(even) {background-color: #f2f2f2;}
         th {
              background-color: #34282C;
              color: white;
              text-align: center;
            }
    </style>
<!--===============================================================================================-->


</head>

<body>

<div class="container-login100" style="background-image: url('subtheme2/images/voyage.png');">
        <div class="wrap-login100 p-l-55 p-r-55 p-t-80 p-b-30">
            <form class="login100-form validate-form">
                <span class="login100-form-title p-b-37">
                    Safe Journey!<br><br><h6>Displaying Running Flights on your desired route</h6>
                </span>
<!--===================================PHP CODE FOR DISPLAYING AIRCRAFTS============================================================-->

                        <?php
                        echo "<table style='border: solid 1px black;'>";
                        echo "<tr><th>Flight No.</th><th>Destination</th><th>Origin</th><th>Fare (in Rs.)</th><th>Flight Date</th><th>Arrival Time</th><th>Departure Time</th></tr>";

                        class TableRows extends RecursiveIteratorIterator {
                            function __construct($it) {
                                parent::__construct($it, self::LEAVES_ONLY);
                            }

                            function current() {
                                return "<td style='width:150px;border:1px solid black;padding: 15px; text-align: center;'>" . parent::current(). "</td>";
                            }

                            function beginChildren() {
                                echo "<tr>";
                            }

                            function endChildren() {
                                echo "</tr>" . "\n";
                            }
                        }

                        $servername = "localhost";
                        $username = "root";
                        $password = "Mayankmaheshwari@1806";
                        $dbname = "DAMS";


                        $from =$_POST['from'];
                        $to =$_POST['to'];
                        $date =$_POST['date'];

                        try {
                            $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
                            $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
                            $stmt = $conn->prepare("select FlID, destination, airport, Fare, FlightDate, ArrivalTime, DepartureTime from Route, Airfare, Flight_schedule where Route = RtID  AND destination = '$to' AND airport = '$from' AND flightdate = '$date';");
                            $stmt->execute();

                            // set the resulting array to associative
                            $result = $stmt->setFetchMode(PDO::FETCH_ASSOC);
                            foreach(new TableRows(new RecursiveArrayIterator($stmt->fetchAll())) as $k=>$v) {
                                echo $v;
                            }
                        }
                        catch(PDOException $e) {
                            echo "Error: " . $e->getMessage();
                        }
                        $conn = null;
                        echo "</table>";
                        ?>
<!--============================================PHP CODE ENDED HERE===================================================-->
                <div class="text-center p-t-57 p-b-20">
                    <span class="txt1">
                        Please keep the Flight No. handy. You will be asked to fill in the desired Flight No.
                    </span>
                </div>

                <div class="container-login100-form-btn">
                    <button class="login100-form-btn">
                        <a href="bookflighttickets.php">Proceed to Book Tickets</a>
                    </button>
                </div>

             </form>
     </div>

</div>


<div id="dropDownSelect1"></div>
    
<!--===============================================================================================-->
    <script src="../subtheme2/vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
    <script src="../subtheme2/vendor/animsition/js/animsition.min.js"></script>
<!--===============================================================================================-->
    <script src="../subtheme2/vendor/bootstrap/js/popper.js"></script>
    <script src="../subtheme2/vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
    <script src="../subtheme2/vendor/select2/select2.min.js"></script>
<!--===============================================================================================-->
    <script src="../subtheme2/vendor/daterangepicker/moment.min.js"></script>
    <script src="../subtheme2/vendor/daterangepicker/daterangepicker.js"></script>
<!--===============================================================================================-->
    <script src="../subtheme2/vendor/countdowntime/countdowntime.js"></script>
<!--===============================================================================================-->
    <script src="../subtheme2/js/main.js"></script>


</body>

</html>