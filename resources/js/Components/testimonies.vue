<template>
     <section id="testimonies" class="min-h-screen flex items-center justify-center bg-gray-100 dark:bg-gray-900">
   <div class=" flex flex-col mt-18  w-full p-4 ">


<div class=" flex justify-start ">

<button   @click="isOpen = true" class="px-4 py-2  text-white font-semibold
               bg-gradient-to-r from-indigo-500 to-blue-500 hover:from-blue-500 hover:to-indigo-600 transition">
               <i class="fa-solid fa-plus"></i>
 Add Testimony
</button>
 </div>

<div class=" flex justify-center flex-col mt-7 md:mt-0 items-center">

    <h2 class="text-2xl font-bold ">Testimonies </h2>
     <hr class="w-10 my-1 border-blue-600 border-3 ">

</div>


<div class="p-4 mt-8 md:mt-2 flex flex-wrap gap-4 justify-center items-start">



    <div 

    v-for="testimony in visibleTestimonies" 
    :key="testimony.id" 
    class=" rounded-lg shadow-lg bg-white p-4 mb-4 w-70  flex flex-col justify-center items-center  dark:bg-gray-800/80 dark:shadow-gray-600 dark:border font-poppins"  data-aos="fade-up">

<div class="w-full flex justfy-end text-yellow-500 text-3xl  ">
  <i class="fa-solid fa-quote-left"></i>
</div>
      <div class="flex items-center  h-17 w-17 bg-white rounded-full ">

          <img 
            v-if="testimony.picture" 
            :src="'/storage/' + testimony.picture"       
            class=" h-full w-full rounded-full "
          />

          <!-- fallback when no picture -->
  <img 
  v-else 
  :src="Person"    
  class="h-full w-full rounded-full"
/>


      </div>       
      
  <p class="text-yellow-500 font-bold flex"> 
  <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6 fill-current" viewBox="0 0 24 24">
    <path d="M12 17.27L18.18 21l-1.64-7.03L22 9.24l-7.19-.61L12 2 
             9.19 8.63 2 9.24l5.46 4.73L5.82 21z"/>
  </svg>
  <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6 fill-current" viewBox="0 0 24 24">
    <path d="M12 17.27L18.18 21l-1.64-7.03L22 9.24l-7.19-.61L12 2 
             9.19 8.63 2 9.24l5.46 4.73L5.82 21z"/>
  </svg>
  <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6 fill-current" viewBox="0 0 24 24">
    <path d="M12 17.27L18.18 21l-1.64-7.03L22 9.24l-7.19-.61L12 2 
             9.19 8.63 2 9.24l5.46 4.73L5.82 21z"/>
  </svg>
  <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6 fill-current" viewBox="0 0 24 24">
    <path d="M12 17.27L18.18 21l-1.64-7.03L22 9.24l-7.19-.61L12 2 
             9.19 8.63 2 9.24l5.46 4.73L5.82 21z"/>
  </svg>
  <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6 fill-current" viewBox="0 0 24 24">
    <path d="M12 17.27L18.18 21l-1.64-7.03L22 9.24l-7.19-.61L12 2 
             9.19 8.63 2 9.24l5.46 4.73L5.82 21z"/>
  </svg>
  </p>
       <p class="text-sm text-gray-600 font-bold dark:text-white">{{ testimony.name }}</p>
                                          <hr class="w-10 my-1 border-blue-600 border-3 ">
        <p class="dark:text-white fontFamily-poppins">{{ testimony.message }}</p>
       

    </div>



 






</div>


 <!-- Show More / Show Less Button -->
      <div   class="text-center  w-full flex justify-end pr-12">
        <button
           @click="showAll = !showAll"
          class="px-4 py-2 bg-blue-600 text-white rounded-lg hover:bg-blue-700 transition"
        >
          {{ showAll ? 'Show Less' : 'Show More....' }}
        </button>
      </div>











<div 
      v-if="isOpen" 
      class="fixed inset-0 bg-black/70 bg-opacity-50 flex items-center justify-center z-50 "
    >
      <div class="bg-white w-80 md:w-full max-w-md  shadow-lg p-6 relative">
        <!-- Close Button -->
        <button 
          @click="isOpen = false" 
          class="absolute top-2 right-2 text-gray-500 hover:text-gray-700">
          ✖
        </button>

        <h2 class="text-xl font-bold mb-4 dark:text-black">Add a Testimony</h2>
        
        <form @submit.prevent="submitTestimony">
          <!-- Name -->
          <div class="mb-4">
            <label class="block text-sm font-medium text-gray-700">Name</label>
            <input 
              type="text" 
              v-model="form.name"
              class="w-full mt-1 p-2 border dark:border-gray-300"
              required
            >
          </div>

         <!-- Email -->
          <div class="mb-4">
            <label class="block text-sm font-medium text-gray-700">Upload Picture(Optional)</label>
            <input 
              type="file" 
              @change="handleFileUpload"
              class="w-full mt-1 p-2 border dark:border-gray-300"
            
            >
          </div>


          

          <!-- Message -->
          <div class="mb-4">
            <label class="block text-sm font-medium text-gray-700">Message</label>
            <textarea 
              v-model="form.message"
              class="w-full mt-1 p-2 border dark:border-gray-300"
              rows="3"
              required
            ></textarea>
          </div>

          <!-- Submit -->
          <button 
            type="submit"
            class="px-4 py-2 bg-blue-600 text-white  hover:bg-blue-700 transition"
          >
            Submit
          </button>
        </form>
      </div>
      </div>




   </div>










<!-- Success Popup Modal -->
<transition name="fade">
  <div
    v-if="showSuccessModal"
    class="fixed inset-0 bg-black/70 bg-opacity-50 flex items-center justify-center z-50"
  >
    <div class="bg-white rounded-2xl h-40  shadow-xl w-[90%] max-w-sm p-6 text-center">
      <svg xmlns="http://www.w3.org/2000/svg" class="mx-auto h-12 w-12 text-green-500 mb-4" fill="none" viewBox="0 0 24 24" stroke="currentColor">
        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
      </svg>
      <h2 class="text-lg font-semibold text-gray-800 mb-2">Thank You!</h2>
      <p class="text-gray-600">{{ successText }}</p>
    </div>
  </div>
</transition>





    </section>










</template>

















<script setup>
import { ref, computed } from "vue"
import { useForm } from "@inertiajs/vue3"
import { route } from "ziggy-js"
import Person from '@/images/PersonIcon.jpg'
import { defineProps } from "vue"

// props from parent page
const props = defineProps({
  testimonies: {
    type: Array,
    default: () => []
  }
})



// 🟦 New state for show more / show less
const showAll = ref(false)

// 🟩 Computed property to control how many testimonies are shown
const visibleTestimonies = computed(() => {
  // Show first 4 if not showing all
  return showAll.value ? props.testimonies : props.testimonies.slice(0, 4)
})










// modal & message state
const isOpen = ref(false)            // form modal
const showSuccessModal = ref(false) // success popup modal
const successText = ref('')

// form (Inertia)
const form = useForm({
  name: "",
  message: "",
  picture: null,
}, { forceFormData: true })

// file handler
function handleFileUpload(event) {
  form.picture = event.target.files[0]
}

// submit and read flash from server response (page)
function submitTestimony() {
  form.post(route("testimonies.store"), {
      preserveScroll: true,
    onSuccess: (page) => {
      // page is the Inertia page object returned from the server
      // try to read flash from page.props (safe)
      const flash = page?.props?.flash ?? page?.props?.value?.flash ?? null
      const msg = flash?.success ?? 'Submitted successfully'
      successText.value = msg

      // show success modal
      showSuccessModal.value = true

      // close form and reset
      isOpen.value = false
      form.reset()

      // auto-hide after 3s
      setTimeout(() => {
        showSuccessModal.value = false
      }, 3000)

      // debug: open console to inspect page props if needed
      console.log('Inertia onSuccess page.props:', page?.props ?? page?.props?.value ?? page)
    },
    onError: (errors) => {
      // if validation fails, errors will be available here
      console.log('Validation errors:', errors)
    }
  })
}
</script>


<style scoped>
.fade-enter-active, .fade-leave-active {
  transition: opacity 0.40s;
}
.fade-enter-from, .fade-leave-to {
  opacity: 0;
}
</style>