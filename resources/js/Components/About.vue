<template>
     <section id="about" class="min-h-screen flex  items-center justify-center bg-gray-100 dark:bg-gray-900 transition-colors duration-500">

     <div class=" grid-cols-1 grid md:grid-cols-2 gap-2 ">

 <!------------- ------------------------PIC PART--------------------- ------------>
<div class="flex justify-center flex-col items-center gap-8 "  data-aos="fade-right">

 <h1 class="text-3xl font-bold text-black dark:text-gray-100">Software <span class="text-blue-700">Engineer</span></h1> 


<div class=" flex justify-center flex-col items-center">
 
       

         <div class="flex justify-center p-5 items-center  rounded-full animate-shadowMove animate-shadowMove-top">

          <img :src="profileImage" alt="Profile Picture" class="w-70 h-70 md:w-80 md:h-80 "/>

          </div> 
        
        
      </div>


      

</div>



  <!------------- ------------------------TEXT PART--------------------- ------------>


<div class=" p-7 md:p-5 mt-10 text-lg border-blue-500 flex justify-center items-center flex-col gap-2 "  data-aos="fade-left">
<h1 class="text-3xl font-bold">About <span class="text-blue-700">Me</span></h1>
<p class=" text-gray-700 text-lg font-semibold dark:text-gray-100">I'm a Software Engineer and Full Stack Developer passionate about building modern, responsive, and user-friendly applications. I combine clean code with practical solutions to create digital experiences that empower businesses and solve real-world challenges.</p>

<div class="grid grid-cols-1 md:grid-cols-2 gap-2 mt-5 bg-gray-300/35 p-8 shadow-lg shadow-gray-900/50   ">
  


  <div class="shadow-lg w-full shadow-gray-900/50 flex justify-start items-center bg-white gap-2 p-2 dark:bg-gray-800/80">

<div class="bg-blue-700 p-2 rounded-lg text-white text-xl  ">
<i class="fa-regular fa-user"></i>
</div>

<div class="flex flex-col">
  <h1 class="font-bold text-gray-500 dark:text-gray-400">Name</h1>
  <p class="font-bold text-black  dark:text-white">Timothy Minani</p>
</div>

  </div>




  <div class="shadow-lg  shadow-gray-900/50 flex  justify-start items-center bg-white gap-2 p-2  dark:bg-gray-800/80">

<div class="bg-blue-600 p-2 rounded-lg text-white text-xl ">
<i class="fa-solid fa-square-envelope"></i>
</div>

<div class="flex flex-col ">
  <h1 class="font-bold text-gray-500 dark:text-gray-500">Email</h1>
  <p class="font-bold text-black dark:text-white">timo@gmail.com</p>
</div>

  </div>









 <div class="shadow-lg  shadow-gray-900/50 flex justify-start items-center bg-white gap-2 p-2 dark:bg-gray-800/80">

<div class="bg-blue-600 p-2 rounded-lg text-white text-xl ">
<i class="fa-solid fa-signal"></i>
</div>

<div class="flex flex-col">
  <h1 class="font-bold text-gray-500 dark:text-gray-500">Status</h1>
  <p class="font-bold text-black dark:text-white">Available for Work</p>
</div>

  </div>



  <div class="shadow-lg shadow-gray-900/50 flex justify-start items-center bg-white gap-2 p-2 dark:bg-gray-800/80">

<div class="bg-blue-600 p-2 rounded-lg text-white text-xl ">
<i class="fa-solid fa-location-dot"></i>
</div>

<div class="flex flex-col">
  <h1 class="font-bold text-gray-500 dark:text-gray-500">Location</h1>
  <p class="font-bold text-black dark:text-white">Nairobi, Kenya</p>
</div>

  </div>




<div class="  flex justify-start items-center  p-2">

<button class=" w-full md:w-auto bg-blue-700 hover:bg-blue-700 text-white hover:text-white font-bold py-2 px-4  focus:outline-none focus:shadow-outline">
  <a href="/file/Timothy_CV.pdf" download="Timothy_CV.pdf">Download CV <i class="fa-solid fa-cloud-arrow-down"></i></a>

</button>

  </div>





  





















 



  
</div>




</div>




     </div>
    </section>
</template>


<script setup>
import profileImage from '@/images/photo2.png'
</script>
