<!-- Example1.vue -->
<template>
  <div class="example">
    <h3>案例1：响应式数据</h3>
    <p>{{ message }}</p>
    <button @click="message = '修改后的值'">点击修改</button>
  </div>
</template>

<script setup>
import { ref } from 'vue'
const message = ref('初始值')
</script>