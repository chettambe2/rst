<?php $mysqli= new mysqli ('localhost', 'root', '', 'demo');
if ($mysqli-> connect_error){
    printf ("Cannot connect database %s \n", 
            $mysqli->connect_error);
    exit (); 
    
}
    
    ?>

