<?php

    namespace Classes;

    class ClassValidate{

        private $erro=[];
        // private $cadastro;

        public function getErro()
        {
            return $this->erro;
        }

        public function setErro($erro)
        {
            array_push($this->erro,$erro);
        }

        #Validar se os campos desejados foram preenchidos
        public function validateFields($par)
        {
            $i=0;
            foreach ($par as $key => $value){
                if(empty($value)){
                    $i++;
                }
            }
            if($i==0){
                return true;
            }else{
                $this->setErro("Preencha todos os dados!");
                return false;
            }
        }

        #Validar se o email existe no banco de dados (action null para cadastro)
        public function validateIssetEmail($email,$action=null)
        {
            $b=$this->cadastro->getIssetEmail($email);

            if($action==null){
                if($b > 0){
                    $this->setErro("Email já cadastrado!");
                    return false;
                }else{
                    return true;
                }
            }else{
                if($b > 0){
                    return true;
                }else{
                    $this->setErro("Email não cadastrado!");
                    return false;
                }
            }
        }

        #Verificar se a senha é igual a confirmação de senha
        public function validateConfSenha($senha,$senhaConf)
        {
            if($senha === $senhaConf){
                return true;
            }else{
                $this->setErro("Senha diferente de confirmação de senha!");
            }
        }

        #Verificar a força da senha
        public function validateStrongSenha($senha,$par=null)
        {
            $zxcvbn=new Zxcvbn();
            $strength = $zxcvbn->passwordStrength($senha);

            if($par==null){
                if($strength['score'] >= 3){
                    return true;
                }else{
                    $this->setErro("Utilize uma senha mais forte!");
                }
            }else{
                /*login*/
            }
        }

        #Verificar se o captcha está correto
        public function validateCaptcha($captcha,$score=0.5)
        {
            $return=file_get_contents("https://www.google.com/recaptcha/api/siteverify?secret=".SECRETKEY."&response={$captcha}");
            $response=json_decode($return);
            if($response->success == true && $response->score >= $score){
                return true;
            }else{
                $this->setErro("Captcha Inválido! Atualize a página e tente novamente.");
            }
        }

        #Validação final do cadastro
        public function validateFinalCad($arrVar)
        {
            if(count($this->getErro())>0){
                $arrResponse=[
                    "retorno"=>"erro",
                    "erros"=>$this->getErro()
                ];
            }else{
                $arrResponse=[
                    "retorno"=>"success",
                    "erros"=>null
                ];
                /*$this->cadastro->insertCad($arrVar);*/
            }
            return json_encode($arrResponse);
        }

    }