function updateClock() {
    const now = new Date();
    let hours = now.getHours();
    let minutes = now.getMinutes();
    // 确保小时和分钟都是两位数显示
    hours = hours < 10 ? '0' + hours : hours;
    minutes = minutes < 10 ? '0' + minutes : minutes;
    // 显示时间字符串
    const timeString = hours + ':' + minutes;
    document.getElementById('real-time-clock').textContent = timeString;

    // 每秒钟调用一次
    setTimeout(updateClock, 1000);
}
document.addEventListener('DOMContentLoaded', updateClock);



// 根据是否是工作时间改变样式
function updateTimeClass(isStart) {
    const timeshow = document.getElementById('timeshow');
    const progressBar = document.getElementById('pb');

    // 工作时间
    if (isStart) {
        timeshow.classList.add('timeshow-start');
        timeshow.classList.remove('timeshow-end');
        progressBar.classList.add('progress-bar-ltr');
        progressBar.classList.remove('progress-bar-rtl');
    }
    // 休息时间
    else {
        timeshow.classList.add('timeshow-end');
        timeshow.classList.remove('timeshow-start');
        progressBar.classList.add('progress-bar-rtl');
        progressBar.classList.remove('progress-bar-ltr');
    }
}



// 用于之后清除计时器
var countdown;
// 初始化为工作状态
var isStart = true;

// 开始和休息倒计时的函数
function start(isStart) {
    // 清除计时器
    clearInterval(countdown);
    // 更新样式
    updateTimeClass(isStart);

    // 根据状态选择工作时间或休息时间
    var minutes = isStart ? parseInt(document.getElementById('start_minutes').value) : parseInt(document.getElementById('rest_minutes').value);
    // 计算总秒数
    var seconds = minutes * 60;

    // 启动倒计时，每一秒更新一次显示的时间
    countdown = setInterval(function() {
        seconds--;
        var remainMinutes = parseInt(seconds / 60);
        var remainSeconds = seconds % 60;

        // 确保时间是两位数表示
        remainSeconds = remainSeconds < 10 ? '0' + remainSeconds : remainSeconds;
        document.getElementById('timeshow').textContent = remainMinutes + ":" + remainSeconds;

        // 每秒更新进度条宽度，进度条的比例为已过去的秒数/总秒数，然后用该比例给进度条的宽度
        var progress = ((minutes * 60 - seconds) / (minutes * 60)) * 100;
        document.getElementById('pb').style.width = progress + '%';

        // 当倒计时结束时
        if (seconds <= 0) {
            clearInterval(countdown);
            // 根据当前状态重启倒计时
            if (isStart) {
                start(false); // 自动开始休息时间
            } else {
                start(true);  //自动开始学习时间
            }
        }
    }, 1000);
}

// 停止倒计时，清楚时间和进度条的函数
function end() {
    clearInterval(countdown);
    document.getElementById('timeshow').textContent = "";
    document.getElementById('pb').style.width = "0%";
    updateTimeClass(isStart);
}