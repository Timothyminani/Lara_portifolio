<template>
 <mainLayout :testimonies="testimonies">

 <!-- Page content -->

 

   
 </mainLayout>

</template>

<script setup>
import { usePage } from '@inertiajs/vue3'
import mainLayout from '../Layout/mainLayout.vue'


const page = usePage()

defineProps({
  testimonies: {
    type: Array,
    default: () => []
  },



  
})


</script>
