<?php
    $validate=new Classes\ClassValidate();

    $validate->validateFields($_POST);
    // var_dump($validate->getErro());  DEBUG
    
    $validate->validateConfSenha($senha,$senhaConf);
    $validate->validateStrongSenha($senha);

    // $validate->validateCaptcha($gRecaptchaResponse); Google ReCaptcha

    echo $validate->validateFinalCad($arrVar);
