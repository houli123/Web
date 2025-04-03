//是否登录判断
window.addEventListener('load', function() {
    console.log(sessionStorage.getItem('isLog'));
    if (!sessionStorage.getItem('isLog')) {
        window.location.href = "login.html";
    }
});