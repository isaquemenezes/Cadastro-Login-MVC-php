
// Google ReCaptcha
(function getCaptcha(){
    grecaptcha.ready(function() {
        grecaptcha.execute('SUA_SITE_KEY', {action: 'homepage'}).then(function(token) {
            const gRecaptchaResponse=document.querySelector("#g-recaptcha-response").value=token;
        });
    });
}());