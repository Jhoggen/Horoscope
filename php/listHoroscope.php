<?php


function fetchHscope($birthday) {

    $hscope = '';
    $dates = explode('-', $birthday);
    $month = $dates[1];
    $day = $dates[2];


    if ( ( $month == 3 && $day > 20 ) || ( $month == 4 && $day < 20 ) ) {
       $hscope = "Väduren"; 
    }
   elseif ( ( $month == 4 && $day > 19 ) || ( $month == 5 && $day < 21 ) ) { 
       $hscope = "Oxen"; 
    } 
   elseif ( ( $month == 5 && $day > 20 ) || ( $month == 6 && $day < 21 ) ) { 
       $hscope = "Tvillingarna"; 
    }
   elseif ( ( $month == 6 && $day > 20 ) || ( $month == 7 && $day < 23 ) ) { 
       $hscope = "Kräftan"; 
    } 
   elseif ( ( $month == 7 && $day > 22 ) || ( $month == 8 && $day < 23 ) ) { 
       $hscope = "Lejonet"; 
    } 
   elseif ( ( $month == 8 && $day > 22 ) || ( $month == 9 && $day < 23 ) ) { 
       $hscope = "Jungfrun"; 
    } 
   elseif ( ( $month == 9 && $day > 22 ) || ( $month == 10 && $day < 23 ) ) { 
       $hscope = "Vågen"; 
    } 
   elseif ( ( $month == 10 && $day > 22 ) || ( $month == 11 && $day < 22 ) ) { 
       $hscope = "Skorpionen"; 
    } 
   elseif ( ( $month == 11 && $day > 21 ) || ( $month == 12 && $day < 22 ) ) { 
       $hscope = "Skytten"; 
    } 
   elseif ( ( $month == 12 && $day > 21 ) || ( $month == 1 && $day < 20 ) ) { 
       $hscope = "Stenbocken"; 
    } 
   elseif ( ( $month == 1 && $day > 19 ) || ( $month == 2 && $day < 19 ) ) { 
       $hscope = "Vattumannen"; 
    } 
   elseif ( ( $month == 2 && $day > 18 ) || ( $month == 3 && $day < 21 ) ) { 
       $hscope = "Fiskarna"; 
    } else { 
        $hscope = "Fyll i ditt personnummer för att se ditt stjärntecken"; 
    } 

  return $hscope;
  
}
?>