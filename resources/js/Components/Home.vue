<template>
     <section id="home" class="min-h-screen flex-col md:flex  items-center justify-center  bg-gray-100 dark:bg-gray-900 transition-colors duration-500">

     <div class="grid-cols-1 grid md:grid-cols-2 ">

<!------------- ------------------------INTRODUCTION PART--------------------- ------------>
      <div class=" p-5 mt-0 md:mt-27 px-10 order-2 md:order-1 "  data-aos="fade-right">
         <h1 class="text-5xl  font-extrabold text-gray-900 dark:text-white mb-4 ">
    Hi, I’m Timothy 👋
  </h1>
  <p class="text-lg md:text-2xl text-gra-700 dark:text-gray-300 max-w-2xl">
    A passionate <span class="text-blue-500 font-semibold">Full Stack Developer</span> 
    who loves turning ideas into modern, responsive, and user-friendly web applications.
  </p>
        
        <div class="mt-8">
    <a href="#contact" 
       class="px-6 py-3 flex justify-center items-center w-40  bg-blue-600 text-white font-semibold rounded-lg shadow-md hover:bg-blue-700 transition">
      Let's Work <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" strokeWidth={1.5} stroke="currentColor"  class="w-6 h-6 inline-block ml-2 items-center">
  <path strokeLinecap="round" strokeLinejoin="round" d="M20.25 14.15v4.25c0 1.094-.787 2.036-1.872 2.18-2.087.277-4.216.42-6.378.42s-4.291-.143-6.378-.42c-1.085-.144-1.872-1.086-1.872-2.18v-4.25m16.5 0a2.18 2.18 0 0 0 .75-1.661V8.706c0-1.081-.768-2.015-1.837-2.175a48.114 48.114 0 0 0-3.413-.387m4.5 8.006c-.194.165-.42.295-.673.38A23.978 23.978 0 0 1 12 15.75c-2.648 0-5.195-.429-7.577-1.22a2.016 2.016 0 0 1-.673-.38m0 0A2.18 2.18 0 0 1 3 12.489V8.706c0-1.081.768-2.015 1.837-2.175a48.111 48.111 0 0 1 3.413-.387m7.5 0V5.25A2.25 2.25 0 0 0 13.5 3h-3a2.25 2.25 0 0 0-2.25 2.25v.894m7.5 0a48.667 48.667 0 0 0-7.5 0M12 12.75h.008v.008H12v-.008Z" />
</svg>

    </a>
  </div>
      </div>

      <!------------- ------------------------PIC PART--------------------- ------------>

      <div class=" flex justify-center items-center  p-5   mt-24 md:mt-27 order-1 md:order-2"  data-aos="fade-left">
 
        

         <div class="flex justify-center items-center border-l-6 hover:border-r-6 hover:border-l-0 border-r-blue-600 border-l-blue-600 rounded-full shadow-lg">

          <img :src="profileImage" alt="Profile Picture" class="w-50 h-50 md:w-80 md:h-80 rounded-full"/>

          </div> 
          
        
      </div>

<!------------- ------------------------BURNER PART--------------------- ------------>
      <div class="order-3 md:order-3 mb-10 mx-10 md:p-0 p-2 rounded-lg col-span-1 md:col-span-2 bg-gray-300/70 md:flex justify-center dark:bg-gray-800/80 shadow-lg " >
          <CounterBox :target="30" label="Projects Completed"/>
          <CounterBox :target="25" label="Happy Clients"/>
          <CounterBox :target="5" label="Years in Development"/>
           <CounterBox :target="15" label="Tech Stacks"/>
           <CounterBox :target="1000" label="Coffees Consumed ☕"/>
          

      </div>


     </div>

    </section>
</template>

<script setup>
import CounterBox from "@/Components/CounterBox.vue"
import { defineComponent } from "vue"
import profileImage from '@/images/photo2.png'

defineComponent({
  components: {
    CounterBox
  }
})

</script>
