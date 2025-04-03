var imgShow = document.getElementsByClassName('parent')[0],
    dotList = document.querySelectorAll('.dots >.clearfix > li');
var btnLeft = document.getElementsByClassName('btnLeft')[0],
    btnRight = document.getElementsByClassName('btnRight')[0];
var dotLen = dotList.length,
    index = 0; //轮播层的图片索引，0表示第一张

//圆点显示
function showRadius() {
    for (var i = 0; i < dotLen; i++) {
        if (dotList[i].className === "on") {
            dotList[i].className = "off";
        }
    }
    dotList[index].className = "on";
}

// 计算并设置图片位置
function moveImage() {
    imgShow.style.left = -(index * 700) + "px";
}

// 圆点点击事件的处理函数
for (let i = 0; i < dotList.length; i++) {
    (function(i) {
        dotList[i].onclick = function() {
            index = i;
            moveImage();
            showRadius();
        }
    })(i);
}

//向左移动
btnLeft.onclick = function() {
    index--;
    if (index < 0) { /*第1张向左时，变为第5张*/
        index = 4;
    }
    showRadius();
    var left;
    var imgLeft = imgShow.style.left;
    if (imgLeft === "0px") { /*当是第1张时，每张图片左移，移4张图，位置为-(4*700)*/
        left = -2800;
    } else {
        left = parseInt(imgLeft) + 700; /*由于left为负数，每左移一张加700*/
    }
    imgShow.style.left = left + "px";
}

//同样的逻辑，向右移动
btnRight.onclick = function() {
    index++;
    if (index > 4) { /*第5张向右时，变为第1张*/
        index = 0;
    }
    showRadius();
    var right;
    var imgLeft = imgShow.style.left;
    if (imgLeft === "-2800px") { /*当是第5张时，第1张的位置为0*/
        right = 0;
    } else {
        right = parseInt(imgLeft) - 700; /*由于left为负数，每右移一张减700*/
    }
    imgShow.style.left = right + "px";
}

// 自动轮播
// var timer;
// function autoPlay() {
// 	timer = setInterval(function() {
// 		var right;
// 		var imgLeft = imgShow.style.left;
// 		if(imgLeft === "-2800px") {
// 			right = 0;
// 		}
// 		else{
// 			right = parseInt(imgLeft) - 700;
// 		}
// 		imgShow.style.left = right + "px";
// 	} ,2700)
// }
// autoPlay()


// 图片放大镜效果的实现
document.addEventListener('DOMContentLoaded', function() {
const bigViewLis = document.querySelectorAll('.bigView li');
bigViewLis.forEach((li) => {
    const img = li.querySelector('img');
    img.style.transition = 'transform 0.25s ease';

    // 当鼠标移动在图片上时，局部放大目标
    li.addEventListener('mousemove', function(e) {
    const rect = this.getBoundingClientRect();
    const x = e.clientX - rect.left; 
    const y = e.clientY - rect.top; 
    
    const oneThirdWidth = rect.width / 3;
    const oneThirdHeight = rect.height / 3;
    
    // 计算放大后的图的位置
    const bgPosX = -x * (img.naturalWidth / oneThirdWidth - 1);
    const bgPosY = -y * (img.naturalHeight / oneThirdHeight - 1);
    
    li.style.overflow = 'hidden'; 
    img.style.transform = 'scale(3)'; 
    img.style.transformOrigin = `${(x / rect.width) * 100}% ${(y / rect.height) * 100}%`;
    });

    // 鼠标移出恢复正常
    li.addEventListener('mouseleave', function(e) {
    img.style.transform = 'scale(1)';
    img.style.transformOrigin = 'center center';
    });
});
});