<?php
    session_start();
    session_destroy();

    header("Refresh:0.5 ;url=index.php");

?>