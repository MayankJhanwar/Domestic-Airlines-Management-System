
<!DOCTYPE html>
<html lang="en">

<head>
    <title>Retrieved PassengerID | DAMS-RDBMS Project</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->  
    <link rel="icon" type="image/png" href="../subtheme1/images/icons/favicon.ico"/>
<!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="../subtheme1/vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="../subtheme1/fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="../subtheme1/fonts/iconic/css/material-design-iconic-font.min.css">
<!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="../subtheme1/vendor/animate/animate.css">
<!--===============================================================================================-->  
    <link rel="stylesheet" type="text/css" href="../subtheme1/vendor/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="../subtheme1/vendor/animsition/css/animsition.min.css">
<!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="../subtheme1/vendor/select2/select2.min.css">
<!--===============================================================================================-->  
    <link rel="stylesheet" type="text/css" href="../subtheme1/vendor/daterangepicker/daterangepicker.css">
<!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="../subtheme1/css/util.css">
    <link rel="stylesheet" type="text/css" href="../subtheme1/css/main.css">
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

<div class="container-login100" style="background-image: url('subtheme1/images/voyage.png');">
        <div class="wrap-login100 p-l-55 p-r-55 p-t-80 p-b-30">
            <form class="login100-form validate-form">
                <span class="login100-form-title p-b-37">
                    Your Passenger ID!<br><br><h6>Please keep your PassengerID Safe</h6>
                </span>
<!--===================================PHP CODE FOR DISPLAYING AIRCRAFTS============================================================-->

                        <?php
                        echo "<table style='border: solid 1px black;'>";
                        echo "<tr><th>Pass.ID</th><th>Name</th><th>Email</th></tr>";

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


                        $Username =$_POST['Username'];
                        $emailID =$_POST['emailID'];
                        
                        try {
                            $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
                            $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
                            $stmt = $conn->prepare("select PassengerID, Name, Email from Passengers, Contact_details where Name = '$Username' AND Email = '$emailID' ;");
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
                        Pass.ID = Passenger ID
                    </span>
                </div>

                <div class="container-login100-form-btn">
                    <button class="login100-form-btn">
                        <a href="../index.html">Back to HOME</a>
                    </button>
                </div>

             </form>
     </div>

</div>


<div id="dropDownSelect1"></div>
    
<!--===============================================================================================-->
    <script src="../subtheme1/vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
    <script src="../subtheme1/vendor/animsition/js/animsition.min.js"></script>
<!--===============================================================================================-->
    <script src="../subtheme1/vendor/bootstrap/js/popper.js"></script>
    <script src="../subtheme1/vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
    <script src="../subtheme1/vendor/select2/select2.min.js"></script>
<!--===============================================================================================-->
    <script src="../subtheme1/vendor/daterangepicker/moment.min.js"></script>
    <script src="../subtheme1/vendor/daterangepicker/daterangepicker.js"></script>
<!--===============================================================================================-->
    <script src="../subtheme1/vendor/countdowntime/countdowntime.js"></script>
<!--===============================================================================================-->
    <script src="../subtheme1/js/main.js"></script>


</body>

</html>