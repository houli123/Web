//是否登录判断
window.addEventListener('load', function() {
    console.log(sessionStorage.getItem('isLog'));
    if (!sessionStorage.getItem('isLog')) {
        alert("请先登录！");
    }
});

document.getElementById('loginForm').onsubmit = function(e) {
    // 防止默认提交行为。
    e.preventDefault();
    var userName = document.getElementsByName("uname")[0].value;
    var passWord = document.getElementsByName("pwd")[0].value;
    
    if(userName.trim() === "") {
        alert("用户名不能为空");
        return false;
    }
    if(passWord.trim() === "") {
        alert("密码不能为空");
        return false;
    }

    if(userName.trim() === "Jack" && passWord.trim() === "123456") {
      // 保存登录状态
      sessionStorage.setItem('isLog', 'true');
      window.location.href = "../index.html";
    } else {
      alert("用户名或密码错误");
    }
};