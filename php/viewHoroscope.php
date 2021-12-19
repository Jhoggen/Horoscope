<?php


session_start();


    if(isset($_SERVER["REQUEST_METHOD"])) {

        if($_SERVER["REQUEST_METHOD"] == "GET") {
            if(isset($_SESSION["hscope"])) {

                $hscope = json_encode(unserialize($_SESSION["hscope"]));
                echo $hscope;
                exit;

            } else {
                echo json_encode(false);
                exit;
            }

        } else {
            echo json_encode(false);
            exit;
        }
    } else {
        echo json_encode("Ingen giltig förfrågan");
        exit;
    }
?>