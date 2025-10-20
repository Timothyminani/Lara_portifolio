<template>
<div class="min-h-screen flex flex-col  ">

<!------- Nav bar ----->
   
<Navbar />

<!------- Page Content ----->

 <main>
<!--- Home Page ---->
        <Home />


<!--- About Page ---->
         <About />


<!--- Skills Page ---->
         <Skills />


<!--- Projects Page ---->
         <Projects />

<!--- Testimonies Page ---->
         <Testimonies :testimonies="testimonies"/>


<!--- Contact Page ---->
         <Contact />

    </main>
   

<!------- Footer Content  ----->
<Footer />
  

  </div>








</template>

<script setup>
import Navbar from "@/Components/nav.vue"
import Footer from "@/Components/Footer.vue"

import Testimonies from "@/Components/testimonies.vue"
import Home from "@/Components/Home.vue"
import About from "@/Components/About.vue"
import Skills from "@/Components/skills.vue"
import Projects from "@/Components/project.vue"
import Contact from "@/Components/contact.vue"



defineProps({
  testimonies: {
    type: Array,
    default: () => []
  }
})



</script>
