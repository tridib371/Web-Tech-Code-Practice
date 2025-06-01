<?php
    setcookie('sectione', '41', time()-10); // remove cookie

?>

page2.php
<?php

    echo $_COOKIE['sectione'];


?>
