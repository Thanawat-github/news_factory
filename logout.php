<?php

session_start();

session_destroy();

//unset($_SESSION["shopping_cart"]);  
{
    echo "<script>
    alert('ออกจากระบบ ');
    window.location.replace('index.php');
    </script>";

}?>