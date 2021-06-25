<?php

    header("Content-Type: text/html; charset=utf-8");
    $dispatch=new \Classes\ClassDispatch();
    include($dispatch->getInclusao());