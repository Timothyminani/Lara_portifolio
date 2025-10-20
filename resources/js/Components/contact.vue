<template>
     <section id="contact" class="min-h-screen flex items-center justify-center bg-gray-100 dark:bg-gray-900 transition-colors duration-500">
      <div class=" w-full flex flex-col mt-15">

<div class=" w-full flex flex-col items-center justify-center ">
<h1 class="text-2xl font-bold">Let's Talk</h1>
<hr class="w-12 border-2 border-blue-600">
</div>

<div class=" w-full flex item-center justify-center" data-aos="fade-up">




<div class=" p-5 flex flex-col gap-2 w-260">

 <!-- Success alert (auto hide) -->
    <transition name="fade">
      <div v-if="localSuccess" class="mb-4 bg-green-100 border border-green-400 text-green-800 px-4 py-2 rounded">
        {{ localSuccess }}
      </div>
    </transition>

<form  @submit.prevent="submitContact">

  <div class="mb-4">
    <label class="block text-gray-700 text-sm font-bold mb-2 dark:text-white" for="name">
      Name
    </label>
    <input  v-model="form.name" class="shadow appearance-none border-2 border-blue-600 rounded w-full py-2 px-3 text-gray-700 dark:text-white leading-tight focus:outline-none focus:shadow-outline" id="name" type="text" placeholder="Your Name">
  </div>


  <div class="mb-4">
    <label class="block text-gray-700 text-sm font-bold mb-2 dark:text-white" for="email">
      Email
    </label>
    <input v-model="form.email" class="shadow appearance-none border-2 border-blue-600 rounded w-full py-2 px-3 text-gray-700 dark:text-white leading-tight focus:outline-none focus:shadow-outline" id="email" type="email" placeholder="Your Email">
  </div>


 <div class="mb-4">
            <label class="block text-gray-700 text-sm font-bold mb-2 dark:text-white" for="massage">Message</label>
            <textarea  v-model="form.message"
              class="w-full mt-1 p-2 border-2  border-blue-600 dark:text-white "
              rows="3"
              required
            ></textarea>
          </div>


  <div class="flex items-center justify-center w-full ">
    <button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 w-full rounded focus:outline-none focus:shadow-outline" type="submit">
      Send Message
    </button> 
      
  </div>


</form>

</div>





</div>


<div class=" w-full flex items-center justify-center gap-6" >

<a href="https://www.linkedin.com/in/timothy-minani-1442a7281/"><div class="p-2 text-xl text-blue-700 hover:shadow-gray-700 hover:p-3 hover:shadow-md rounded-full hover:text-2xl">
  <i class="fa-brands fa-linkedin"></i>
</div></a>


<a href="https://wa.me/254769295800?text=Hello%20Timothy%2C%20I%20saw%20your%20portfolio%20and%20I%20would%20like%20to%20connect!
"><div class="p-2 text-xl text-green-700  hover:shadow-gray-700 hover:p-3 hover:shadow-md rounded-full hover:text-2xl">
  <i class="fa-brands fa-whatsapp"></i>
</div></a>


<div class="p-2 text-xl text-blue-600  hover:shadow-gray-700 hover:p-3 hover:shadow-md rounded-full hover:text-2xl">
 <i class="fa-brands fa-square-facebook"></i>
</div>



<div class="p-2 text-xl text-red-800  hover:shadow-gray-700 hover:p-3 hover:shadow-md rounded-full hover:text-2xl">
  <i class="fa-brands fa-square-instagram"></i>
</div>

</div>

      </div>




    </section>
</template>


<script setup>
import { ref, watch } from 'vue'
import { useForm, usePage } from '@inertiajs/vue3'
import { route } from 'ziggy-js' // if you use ziggy; otherwise replace route(...) with '/contact'

const page = usePage()

// local reactive success value (mutable)
const localSuccess = ref(null)

// watch the Inertia flash success prop and show it locally, auto-hide after 3s
watch(
  () => page.props.flash?.success,
  (newVal) => {
    if (newVal) {
      localSuccess.value = newVal
      // hide after 3 seconds
      setTimeout(() => {
        localSuccess.value = null
      }, 3000)
    }
  },
  { immediate: true } // in case there's already a flash on first render
)

// form
const form = useForm({
  name: '',
  email: '',
  message: ''
})

function submitContact() {
  form.post(route('contact.send'), {
    preserveScroll: true,
    onSuccess: () => {
      form.reset()
      // (server flash will arrive via page.props and trigger the watcher)
    },
    onError: (errors) => {
      // optional: handle validation errors client-side
      console.log('Validation errors', errors)
    }
  })
}
</script>