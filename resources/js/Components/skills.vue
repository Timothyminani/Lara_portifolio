<template>
     <section id="skills" class="min-h-screen flex items-center justify-center bg-gray-100 dark:bg-gray-900 transition-colors duration-500">
<div class="flex justify-center items-center flex-col gap-1 p-5 mt-15 w-full">
       <p class="text-3xl font-bold"><span class="text-blue-600">My</span> Skills</p>

          <div class="p-5 gap-2 flex justify-center items-center w-full flex-wrap">

<button
  v-for="category in categories"
  :key="category"
   @click="activeCategory = category"
 class=" text-garay-600 p-2 rounded-lg  transition border-1 border-gray-300"
 
:class="activeCategory === category 
      ? 'bg-blue-600 text-gray-100 shadow-md' 
      : 'bg-gray-200 text-gray-800 hover:bg-gray-300'"

    
 >
     {{ category }}
</button>





         </div>



          <div class="p-5">

<div class=" flex justify-center items-center gap-5 flex-wrap">



<div class="p-5 bg-white rounded-lg shadow-md w-60 mtext-center border-1 border-gray-300 dark:shadow-gray-600 dark:bg-gray-800/80 transition"

 v-for="skill in filteredSkills"
 :key="skill.name"

 data-aos="fade-up"
>
    <!-- Skill Icon + Name -->
    <div class="flex items-center justify-center gap-2 mb-3 " >
       <img v-if="skill.iconSrc" :src="skill.iconSrc" alt="" class="w-8 h-8" />
      <h3 class="text-lg font-semibold dark:text-gray-100">{{ skill.name }}</h3>
    </div>

    <!-- Progress bar -->
    <div class="w-full bg-gray-200 rounded-full h-3 mb-2"   v-if="skill.level" >
      <div class="bg-blue-600 h-3 rounded-full " :style="{ width: skill.level + '%' }"></div>
    </div>

    <!-- Percentage -->
    <p class="text-sm text-gray-600 flex justify-end dark:text-gray-100"   v-if="skill.level" >{{ skill.level }}%</p>
  </div>










</div>


         </div>

         









</div>
    </section>
</template>



<script setup>
import { ref, computed } from 'vue'

// Active category
const activeCategory = ref('All')

// Filter buttons (you already render these with v-for in the template)
const categories = ['All', 'Frontend', 'Backend', 'Database', 'Tools', 'Soft Skills', 'Methodologies']

// Skills data (icon uses SimpleIcons CDN so no external lib required)
const skills = [
  { name: 'HTML',      category: 'Frontend', iconSrc: 'https://cdn.simpleicons.org/html5/E34F26', level: 90 },
  { name: 'CSS',       category: 'Frontend', iconSrc: 'https://cdn.jsdelivr.net/gh/devicons/devicon/icons/css3/css3-original.svg', level: 85 },
  { name: 'JavaScript',category: 'Frontend', iconSrc: 'https://cdn.simpleicons.org/javascript/F7DF1E', level: 80 },
 { name: 'Vue.js',    category: 'Frontend', iconSrc: 'https://cdn.jsdelivr.net/gh/devicons/devicon/icons/vuejs/vuejs-original.svg', level: 78 },
  { name: 'PHP',       category: 'Backend',  iconSrc: 'https://cdn.simpleicons.org/php/777BB4', level: 75 },
  { name: 'Laravel',   category: 'Backend',  iconSrc: 'https://cdn.simpleicons.org/laravel/FF2D20', level: 72 },
  { name: 'MySQL',     category: 'Database', iconSrc: 'https://cdn.simpleicons.org/mysql/4479A1', level: 70 },
  { name: 'Git',       category: 'Tools',     iconSrc: 'https://cdn.simpleicons.org/git/F05032', level: 82 },
  { name: 'GitHub',    category: 'Tools',     iconSrc: 'https://cdn.simpleicons.org/github/181717', level: 85 },
  { name: 'Figma',     category: 'Tools',     iconSrc: 'https://cdn.simpleicons.org/figma/F24E1E', level: 60 },
  { name: 'Agile', category: 'Methodologies', iconSrc: 'https://cdn.jsdelivr.net/gh/devicons/devicon/icons/jira/jira-original.svg', level: 75 },
{ name: 'Scrum', category: 'Methodologies', iconSrc: 'https://cdn.jsdelivr.net/gh/devicons/devicon/icons/jira/jira-original.svg', level: 70 },
{ name: 'Kanban', category: 'Methodologies', iconSrc: 'https://cdn.jsdelivr.net/gh/devicons/devicon/icons/trello/trello-plain.svg', level: 68 },
  { name: 'Communication', category: 'Soft Skills' },
  { name: 'Teamwork', category: 'Soft Skills' },
  { name: 'Problem Solving', category: 'Soft Skills' },
  { name: 'Adaptability', category: 'Soft Skills' },
  { name: 'Creativity', category: 'Soft Skills' },
  { name: 'Time Management', category: 'Soft Skills' }
]

// computed list filtered by activeCategory
const filteredSkills = computed(() => {
  if (activeCategory.value === 'All') return skills
  return skills.filter(s => s.category === activeCategory.value)
})
</script>
