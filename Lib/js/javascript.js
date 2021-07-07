
// Google ReCaptcha
(function getCaptcha(){
    grecaptcha.ready(function() {
        grecaptcha.execute('SUA KEY', {action: 'homepage'}).then(function(token) {
            const gRecaptchaResponse=document.querySelector("#g-recaptcha-response").value=token;
        });
    });
});getCaptcha();

//Ajax do formulário de cadastro
$("#formCadastro").on("submit",function(event){
    event.preventDefault();
    var dados=$(this).serialize();

    $.ajax({
       url: getRoot()+'controllers/controllerCadastro',
        type: 'post',
        dataType: 'json',
        data: dados,
        success: function (response) {
            $('.retornoCad').empty();
            if(response.retorno == 'erro'){
                getCaptcha();
                $.each(response.erros,function(key,value){
                    $('.retornoCad').append(value+'');
                });
            }else{
                $('.retornoCad').append('Dados inseridos com sucesso!');
            }
        }
    });
});