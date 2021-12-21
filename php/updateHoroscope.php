<?php

session_start();

    if(isset($_SERVER["REQUEST_METHOD"])) {

        if($_SERVER["REQUEST_METHOD"] == "POST") {

            if(isset($_POST["date"])) {
                if(isset($_SESSION["hscope"])) {

                    require("listHoroscope.php");

                        $_SESSION["hscope"] = serialize(fetchHscope($_POST["date"]));

                        echo json_encode(unserialize($_SESSION["hscope"]));
                }

            } else {

                echo json_encode("Datum ej inmatat");
            }
        }
    }

?>