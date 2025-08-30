// router/index.js
import { createRouter, createWebHistory } from 'vue-router'
import Example1 from '../examples/example1.vue'

const routes = [
  { path: '/example1', component: Example1 },
  // 新增案例只需加一条路由配置
]

const router = createRouter({
  history: createWebHistory(),
  routes
})

export default router