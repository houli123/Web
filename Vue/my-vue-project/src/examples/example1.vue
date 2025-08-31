<!-- RefExample.vue -->
<script setup>
// 导入ref函数创建响应式数据
import { ref } from 'vue'
// 创建响应式变量，初始值为0
const count = ref(0)

const isActive = ref(true)
const hasError = ref(false)
const fontSize = ref(16)

const isShow = ref(true)

console.log(isShow.value)  // 访问ref的值需要使用.value;

</script>


<template>
  <div class="example">
    <h3>响应式数据（ref）</h3>
    <p>当前计数：{{ count }}</p>
    <button @click="count++">加1</button>
    <!-- 上下两者方法等价，@是简称 -->
    <button v-on:click="count = 0">重置</button>
  </div>


   <!-- v-bind 动态绑定样式 -->
    <div>
    <h3>动态样式</h3>
    
    <!-- 动态class（对象语法） -->
    <div 
      :class="{ 
        active: isActive, 
        'text-danger': hasError 
      }"
    >
      动态Class示例
    </div>
    
    <!-- 动态style（对象语法） -->
    <p :style="{ 
      fontSize: `${fontSize}px`, 
      color: hasError ? 'red' : 'black' 
    }">
      动态Style示例
    </p>
    
    <button @click="isActive = !isActive">切换active</button>
    <button @click="hasError = !hasError">切换错误状态</button>
    <button @click="fontSize++">增大字体</button>
  </div>

  <!-- v-show -->
     <div>
    <h3>v-show 条件显示</h3>
    <button @click="isShow = !isShow">切换显示</button>
    
    <!-- v-show 控制显示（DOM始终存在） -->
    <p v-show="isShow">这是v-show控制的内容</p>
    
    <!-- 对比v-if（DOM会被移除/添加） -->
    <p v-if="isShow">这是v-if控制的内容</p>
  </div>
</template>


<style>
.active {
  background: #eee;
  padding: 10px;
}
.text-danger {
  color: red;
}
</style>