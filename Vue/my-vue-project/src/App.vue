<script setup>
import { ref, watch } from 'vue';

const str = ref('')  // 表示只能声明一次

watch(str, (newValue) => {
  console.log('str changed:', newValue);
});
</script>



<template>
  <div class="todo-app">
    <div class="title">xxx的Todo App</div>

    <div class="todo-from">
      <!-- v-model表示双向绑定， -->
      <input v-model="str" class="todo-input" type="text" placeholder="add a todo" />
      <div class="todo-button">add todo</div>
    </div>

    <div class="item completed">
      <div>
        <input type="checkbox" />
        <span class="name">吃饭</span>
      </div>

      <div class="del">del</div>
    </div>

    <div class="item">
      <div>
        <input type="checkbox" />
        <span class="name">吃饭</span>
      </div>

      <div class="del">del</div>
    </div>

    <div class="item">
      <div>
        <input type="checkbox" />
        <span class="name">吃饭</span>
      </div>

      <div class="del">del</div>
    </div>
  </div>

  <!-- <div>
    路由导航
    <nav>
      <router-link to="/example1">路由案例</router-link> |
    </nav>
    案例内容显示区域
    <router-view />
  </div> -->
</template>



<style scoped>
  .completed {
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

