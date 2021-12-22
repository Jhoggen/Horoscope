<?php

session_start();

    require("listHoroscope.php");

    if($_SERVER["REQUEST_METHOD"]) {

        if($_SERVER["REQUEST_METHOD"] == "POST") {
            if(!isset($_SESSION["hscope"])) {

                $_SESSION["hscope"] = serialize(fetchHscope($_POST["date"]));
                    echo json_encode(true);
                    exit;

            } else {
                echo json_encode(false. "Du har redan ett horoskop sparat! tryck på delete först.");
                exit;
            }

        }

    }  else {
        echo json_encode("Ingen giltig förfrågan");
    }


?>