<?php
$name = $_POST['name'];
$email = $_POST['email'];
$pwd = $_POST['pwd'];
$pwdCheck = $_POST['pwdCheck'];
$textColor = $_POST['textColor'];
$bgColor = $_POST['bgColor'];
$borderColor = $_POST['borderColor'];

$validationArray = [$name, $email,$textColor, $bgColor, $borderColor];

function validation($pwd, $pwdCheck, $validationArray)
{
    if ($pwd != $pwdCheck) :
        header('location:index.php?pwderror=no_match'); 
    elseif (!preg_match('/^(?=.*\d)/', $pwd)) :
        header('location:index.php?pwderror=need_a_number'); 
    elseif (!preg_match('/^(?=.*[A-Z])/', $pwd)) :
        header('location:index.php?pwderror=need_an_uppercase_letter'); 
    elseif (!preg_match('/^(?=.*[a-z])/', $pwd)) :
        header('location:index.php?pwderror=need_a_lowercase_letter'); 
    elseif (!preg_match('/^(?=.*[!?-])/', $pwd)) :
        header('location:index.php?pwderror=need_a_special_character'); 
    elseif (preg_match('/^(?=.*[<>])/', $pwd)) :
        header('location:index.php?pwderror=can_not_use_tags');
    endif;
    
    //OBS, använder mig av referens för att modifiera variablerna
    foreach ($validationArray as &$values):
        $values = strtolower($values);
        $values = strip_tags($values);
    endforeach;
}
validation($pwd, $pwdCheck, $validationArray);

?>




