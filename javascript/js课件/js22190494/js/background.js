// 鼠标特效
let pic = document.getElementById("mypic");
document.onmousemove = function (e) {
    x = e.pageX;
    y = e.pageY;
    let picWidth = pic.offsetWidth;
    let picHeight = pic.offsetHeight;
    pic.style.left = (x - picWidth * 2+20) + "px";
    pic.style.top = (y - picHeight / 2-10) + "px"; 
}

//箭头按钮的显示与隐藏
var goTopBtn = document.getElementById('go-top');
window.addEventListener('scroll', function() {
    // 当页面滚动到一定位置时显示按钮，否则隐藏
    if (window.scrollY > 200) {
        goTopBtn.style.display = 'block';
    } else {
        goTopBtn.style.display = 'none';
    }
})

//自动调整高度
function adjustHeights() {
    var left = document.getElementById('left');
    var right = document.getElementById('right');
    left.style.height = right.offsetHeight - 20 + 'px'; // 设置#left的高度与#right相同
}


//给图片添加切换效果
window.onload = function() {
    var imgs = document.getElementsByClassName("photo1");
    for (var i = 0; i < imgs.length; i++) {
        imgs[i].onclick = function() {
            document.body.style.background = "url(" + this.src + ") no-repeat";
            document.body.style.backgroundSize = "cover";
            document.body.style.backgroundPosition = "none middle";
            document.body.style.backgroundAttachment = "fixed";
        }
    }
    adjustHeights(); // 页面加载时调整高度
}
window.onresize = adjustHeights; // 当窗口尺寸改变时再次调整高度

