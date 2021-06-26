<?php

    header("Content-Type: text/html; charset=utf-8");

    include("Config/config.php");
    include(DIRREQ."Lib/vendor/autoload.php");
    include(DIRREQ."Helpers/variables.php");
    
    $dispatch=new Classes\ClassDispatch();
    include($dispatch->getInclusao());