window.onload = function(){
        var imgs = document.getElementsByClassName("photo1");
        for (var i = 0; i < imgs.length; i++) {
            imgs[i].onclick = function(){
                document.body.style.background = "url("+this.src+") no-repeat";//通过js控制改变行内样式
                document.body.style.backgroundSize = "cover";
                document.body.style.backgroundPosition = "none middle";
                document.body.style.backgroundAttachment="fixed";
            }
        }
    }
