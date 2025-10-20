<template>
     <section id="projects" class="min-h-screen flex items-center justify-center bg-gray-100 dark:bg-gray-900 transition-colors duration-500">
<div class=" flex flex-col gap-4 mt-5">

<div class=" p-4 flex justify-center mb-4">
<h1 class="text-3xl  font-bold"><span class="text-blue-600">My</span> Projects</h1>
</div>

<div class=" p-2 flex gap-6 flex-wrap justify-center ">

 
<div class=" relative p-0 w-75 h-75 md:w-90 md:h-90 flex flex-col justify-center items-center shadow-2xl shadow-gray-400  rounded-lg group overflow-hidden dark:shadow-gray-600"  data-aos="fade-right">
 
           <img :src="Hospital" alt="Profile Picture" class="w-full h-full object-cover transition-transform duration-500 group-hover:scale-110 "/>


<div class="absolute inset-0 bg-gradient-to-t from-black/70 to-transparent flex flex-col items-center justify-end text-center text-white px-4 
              opacity-0 group-hover:opacity-100 transition-opacity duration-500">
  <div class="flex flex-col justify-center items-center gap-2 p-6">
    <p class="text-lg text-blue-300 font-bold">Hospital Management System</p>
    <p class=" font-semibold">A web-based system that registers, admits, and tracks patients while generating detailed medical reports</p>


<button class="px-4 py-2 rounded-lg text-white font-semibold
               bg-gradient-to-r from-indigo-500 to-blue-500 hover:from-blue-500 hover:to-indigo-600 transition">
  View On Github
    <i class="fab fa-github text-lg"></i>
</button>

</div>

  </div>
</div>





<div class=" relative p-0 w-75 h-75 md:w-90 md:h-90 flex flex-col justify-center items-center shadow-2xl shadow-gray-400 rounded-lg group overflow-hidden dark:shadow-gray-600"  data-aos="fade-right">
 
           <img :src="SafuInterior" alt="Profile Picture" class="   w-full h-full object-cover transition-transform duration-500 group-hover:scale-110 "/>


<div class="absolute inset-0 bg-gradient-to-t from-black/86 to-transparent flex flex-col items-center justify-end text-center text-white px-4 
              opacity-0 group-hover:opacity-100 transition-opacity duration-500">
  <div class="flex flex-col justify-center items-center gap-2 p-6">
    <p class="text-lg text-blue-300 font-bold">Interior Design Website</p>
    <p class=" font-semibold">A clean and elegant showcase website for interior design services and creative furniture solutions.</p>


<button class="px-4 py-2 rounded-lg text-white font-semibold
               bg-gradient-to-r from-indigo-500 to-blue-500 hover:from-blue-500 hover:to-indigo-600 transition">
  View On Github
    <i class="fab fa-github text-lg"></i>
</button>

</div>

  </div>
</div>


<div class=" relative p-0 w-75 h-75 md:w-90 md:h-90 flex flex-col justify-center items-center shadow-2xl shadow-gray-400 rounded-lg group overflow-hidden dark:shadow-gray-600"  data-aos="fade-right">
 
           <img :src="Zetech" alt="Profile Picture" class="w-full h-full object-cover transition-transform duration-500 group-hover:scale-110 "/>


<div class="absolute inset-0 bg-gradient-to-t from-black/70 to-transparent flex flex-col items-center justify-end text-center text-white px-4 
              opacity-0 group-hover:opacity-100 transition-opacity duration-500">
  <div class="flex flex-col justify-center items-center gap-1 p-4">
    <p class="text-lg text-blue-300 font-bold">University Attachment Management System</p>
    <p class=" font-semibold">An academic platform that manages attachees, assigns projects, and enables real-time collaboration with supervisors</p>


<button class="px-4 py-2 rounded-lg text-white font-semibold
               bg-gradient-to-r from-indigo-500 to-blue-500 hover:from-blue-500 hover:to-indigo-600 transition">
  View On Github
    <i class="fab fa-github text-lg"></i>
</button>

</div>

  </div>
</div>























</div>




</div>
    </section>
</template>


<script setup>
import Hospital from '@/images/hospital.jpg'
import Zetech from '@/images/zetech.PNG'
import SafuInterior from '@/images/Safu4.PNG'
</script>
