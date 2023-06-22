<?php

if ($_POST['email']=="s@s.com" && $_POST['password']=="123") {
    echo "Hello User";
}
else {
    header("location: ./index.php");
}

?>