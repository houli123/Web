document.getElementById('todoInput').addEventListener('keydown', function(e) {
    // 按下回车键
    if (e.keyCode === 13 && this.value.trim()) { 
    const li = document.createElement('li');
    const span = document.createElement('span'); 
    span.textContent = this.value; 
    span.className = 'todoText'; 
    li.appendChild(span); 

    // 添加完成按钮
    const doneBtn = document.createElement('button');
    doneBtn.textContent = '完成';
    doneBtn.className = 'todoBtn done'; 
    // 完成按钮监听器
    doneBtn.addEventListener('click', function() {
        // 添加划线样式表示完成
        this.parentElement.style.textDecoration = 'line-through';
    });
    li.appendChild(doneBtn); 

    // 添加删除按钮
    const deleteBtn = document.createElement('button');
    deleteBtn.textContent = '删除'; 
    deleteBtn.className = 'todoBtn delete'; 
    // 删除按钮监听
    deleteBtn.addEventListener('click', function() {
        // 删除整个待办项
        this.parentElement.remove();
    });
    li.appendChild(deleteBtn);
    document.getElementById('todolist').appendChild(li);

    // 清空输入框
    this.value = '';
    adjustHeights();
    }
}); 