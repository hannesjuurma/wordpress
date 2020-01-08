<?php 
/*
Plugin Name: Welcome Screen For Your Site
Description: This is my first plugin.
Author: Hannes Juurma
Author URI: http://juurmahannes.ikt.khk.ee/wordpress/wordpress/

*/

function alert($message) {
        echo "<script>alert('$message');</script>";
    
}

alert("Tere tulemast minu veebilehele!");

?>