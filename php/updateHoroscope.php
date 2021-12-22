<?php

session_start();
require("listHoroscope.php");

    if(isset($_SERVER["REQUEST_METHOD"])) {

        if($_SERVER["REQUEST_METHOD"] == "POST") {

            if(isset($_POST["date"])) {
                if(isset($_SESSION["hscope"])) {


                        $_SESSION["hscope"] = serialize(fetchHscope($_POST["date"]));

                        echo json_encode(unserialize($_SESSION["hscope"]));
                }

            } else {
                echo json_encode(false);
            }
        }
    }

?>