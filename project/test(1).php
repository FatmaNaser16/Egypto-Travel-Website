<?php
$password="test-$321321321";
$passwordHashed=password_hash($password,PASSWORD_DEFAULT);
if(password_verify("test".$passwordHashed)){
    echo"success";
}
else{
    echo"failed";
}
?>