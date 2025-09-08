<script setup>
import { ref, watch } from 'vue';

const str = ref('');  // 表示只能声明一次

const ls = ref([
  { name: '吃饭', completed: false },
  { name: '睡觉', completed: false },
  { name: '打豆豆', completed: false }
]);  // 声明一个数组

function add() {
  if (str.value.trim() !== '') {
    ls.value.push(
      {name: str.value, completed: false}
    )
    str.value = ''
  }
};

// 定义匿名函数的方式
const del = (index) => {
  // 表示从index位置删除一个元素
  ls.value.splice(index, 1)
}

watch(str, (newValue, oldValue) => {
  console.log('str changed:', newValue, oldValue);
});
</script>



<template>
  <div class="todo-app">
    <div class="title">xxx的Todo App</div>

    <div class="todo-from">
      <!-- v-model表示双向绑定，v-bind则是动态绑定：数据动态设置到标签属性上，也可以简写为“:” -->
      <input v-model="str" class="todo-input" type="text" placeholder="add a todo" />
      <div @click="add" class="todo-button">add todo</div>
    </div>

    <!-- 表示动态绑定 -->
    <div v-for="(item, index) in ls" :class="[item.completed ? 'completed' : 'item']" >
      <div>
        <input @click="item.completed = !item.completed" type="checkbox" />
        <span class="name">{{ item.name }}</span>
      </div>

      <div @click="del(index)" class="del">del</div>
    </div>

  </div>

  <div>
    路由导航
    <nav>
      <router-link to="/example1">路由案例</router-link> |
    </nav>
    案例内容显示区域
    <router-view />
  </div>
</template>



<style scoped>
  .completed {
    box-sizing: border-box;
    display: flex;
    align-items: center;
    justify-content: space-between;
    width: 80%;
    height: 50px;
    margin: 8px auto;
    padding: 16px;
    border-radius: 20px;
    box-shadow: rgba(149, 157, 165, 0.2) 0px 8px 20px;
    text-decoration: line-through;
    opacity: 0.4;
  }
  .del {
    color: red;
  }
  .item {
    display: flex;
    align-items: center;
    justify-content: space-between;
    box-sizing: border-box;
    width: 80%;
    height: 50px;
    margin: 8px auto;
    padding: 16px;
    border-radius: 20px;
    box-shadow: rgba(149, 157, 165, 0.2) 0px 8px 20px;
  }
  .todo-button {
    width: 100px;
    height: 50px;
    border-radius: 0 20px 20px 0;
    line-height: 52px;
    text-align: center;
    background: linear-gradient(
      to right,
      rgb(113, 65, 168),
      rgba(44, 114, 251, 1)
    );
    cursor: pointer;
    user-select: none;
    color: #ffff;
  }
  .todo-input {
    box-sizing: border-box;
    margin-bottom: 20px;
    padding-left: 15px;
    border: 1px solid #dfe1e5;
    outline: none;
    width: 60%;
    height: 50px;
    border-radius: 20px 0 0 20px;
  }
  .todo-from {
    display: flex;
    margin-top: 20px;
    margin-left: 30px;
  }
  body {
    background: linear-gradient(
      to right,
      rgb(113, 65, 168),
      rgba(44, 114, 251, 1)
    );
  }
  .todo-app {
    width: 98%;
    height: 500px;
    padding-top: 30px;
    box-sizing: border-box;
    background-color: #ffff;
    border-radius: 5px;
    margin-top: 40px;
    margin-left: 1%;
  }
  .title {
    font-size: 30px;
    font-weight: 700;
    text-align: center;
  }
</style>

