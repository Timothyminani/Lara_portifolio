<template>
 <div class=" md:py-0 py-4 md:px-2 m-5  shadow-lg md:shadow-none  md:border-l-2 border-gray-400 bg-transparent  text-center" :id="`counter-${label.replace(/\s+/g, '-')}`" >
  <h2 class="text-3xl font-bold text-blue-600 dark:text-gray-100">{{displayNumber}}+</h2>
  <p class="mt-2 text-gray-700 dark:text-gray-100">{{label}}</p>
</div>

</template>


<script setup>

import { ref, onMounted } from "vue"

const props = defineProps({
  target: { type: Number, required: true }, // final number
  label: { type: String, required: true }   // text below number
})

const displayNumber = ref(0)
let hasAnimated = false

onMounted(() => {
  const section = document.querySelector(`#counter-${props.label.replace(/\s+/g, '-')}`)

  const observer = new IntersectionObserver((entries) => {
    if (entries[0].isIntersecting && !hasAnimated) {
      hasAnimated = true
      animateCount()
    }
  }, { threshold: 0.6 })

  observer.observe(section)
})

function animateCount() {
  let start = 0
  const interval = setInterval(() => {
    if (start < props.target) {
      start++
      displayNumber.value = start
    } else {
      clearInterval(interval)
    }
  }, 40) // speed
}






</script>