<?php
if(isset($_POST['submit'])) :
    require 'functions.php';
    $output;
    $output .= "<div class='wrapper' 
    style='border:5px solid $borderColor;background-color:$bgColor'>";
    $output .= "<header>";
    $output .= "<h1 style='color:$textColor'>Welcome $name, thanks for signing up with us!</h1>";
    $output .= "</header>";
    $output .= "<main>";
    $output .= "<p style='color:$textColor'>Your current email: $email</p>";
    $output .= "</main>";
    $output .= "</div>";
    echo $output;
else:
    header('location:index.php');
endif;

?>
    