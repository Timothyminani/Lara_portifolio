<template>
    <nav class="fixed md:flex  justify-between top-0 left-0 w-full bg-white shadow z-50 px-0 md:px-5  dark:bg-gray-800/80 dark:text-white transition-colors duration-500">
      
<div class="flex justify-center items-center p-4 dark:text-white md:mr-0 mr-60 order-1 md:order-1 ">
        <h1 class="text-2xl font-bold">&lt;Dev<span class="text-blue-500">Tim</span>/&gt;</h1>

</div>
      
      <ul :class="['flex', 'flex-col', 'order-3', 'md:order-2', 'justify-center', 'items-center', 'gap-6', 'p-4',  menuOpen ? 'block' : 'hidden', 'md:flex', 'md:flex-row', 'md:block' ]">
        <li><a href="#home" :class="{ 'text-blue-500 font-bold': activeSection === 'home' } " ><span class="font-semibold ">HOME</span></a></li>
        <li><a href="#about" :class="{ 'text-blue-500 font-bold': activeSection === 'about' } " ><span class="font-semibold">ABOUT</span></a></li>
        <li><a href="#projects" :class="{ 'text-blue-500 font-bold': activeSection === 'projects' } "><span class="font-semibold">PROJECT</span></a></li>
        <li><a href="#skills" :class="{ 'text-blue-500 font-bold': activeSection === 'skills' } "><span class="font-semibold">SKILLS</span></a></li>
        <li><a href="#testimonies" :class="{ 'text-blue-500 font-bold': activeSection === 'testimonies' } "><span class="font-semibold">TESTIMONIES</span></a></li>
        <li><a href="#contact" :class="{ 'text-blue-500 font-bold': activeSection === 'contact' } "><span class="font-semibold">CONTACT</span></a></li>
      </ul>


      <div class="flex absolute md:static justify-center items-center gap-5 md:gap-3 p-2 md:right-0 right-2 md:top-0 top-0  order-2 md:order-3  ">

<!-- Dark Mode Toggle Button -->
<button
    @click="toggleDarkMode"
    class="relative flex items-center justify-center w-10 h-10 rounded-full bg-gray-200 dark:bg-gray-700 transition-all duration-500"
  >
    <Sun
      v-if="!isDark"
      class="w-6 h-6 text-yellow-500 transition-transform duration-500 rotate-0 scale-100"
    />
    <Moon
      v-else
      class="w-6 h-6  text-blue-500 transition-transform duration-500 rotate-180 scale-100"
    />
  </button>


     <button
      @click="toggleMenu"
      class="md:hidden text-gray-700 dark:text-gray-200 text-2xl"
    >
      <i :class="menuOpen ? 'fa fa-times' : 'fa fa-bars'"></i>
    </button>

        <a href="#contact" class="hidden md:flex text-gray-100 font-semibold  bg-blue-500 p-1.5 hover:bg-gray-100 hover:text-gray-900  hover:border-2">Hire Me</a>

      </div>

    </nav>
</template>


<script setup>
import { ref, onMounted, watch } from 'vue'
import { Sun, Moon } from 'lucide-vue-next'



const menuOpen = ref(false)

function toggleMenu() {
  menuOpen.value = !menuOpen.value
}







const isDark = ref(false)


onMounted(() => {
  // Load saved preference
  const userPref = localStorage.getItem("theme")

  if (userPref) {
    isDark.value = userPref === "dark"
  } else {
    // Use system preference by default
    isDark.value = window.matchMedia("(prefers-color-scheme: dark)").matches
  }

  // Apply it on mount
  document.documentElement.classList.toggle("dark", isDark.value)
})

// Toggle theme

function toggleDarkMode() {
  isDark.value = !isDark.value

  // Toggle class on <html> element
  document.documentElement.classList.toggle('dark', isDark.value)

  // Save preference to localStorage
  localStorage.setItem('theme', isDark.value ? 'dark' : 'light')






}







// Active Section Highlighting
const activeSection = ref('Home')

onMounted(() => {
  const sections = document.querySelectorAll('section')
  const observer = new IntersectionObserver(
    (entries) => {
      entries.forEach(entry => {
        if (entry.isIntersecting) {
          activeSection.value = entry.target.id
        }
      })
    },
    { threshold: 0.6 } // at least 60% visible
  )

  sections.forEach(section => observer.observe(section))






})



</script>


