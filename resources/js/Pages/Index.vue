<template>

  <ProjectLayout>

    <div>
      <Hero />
    </div>

    <div>
      <About />
    </div>

   

    <div id="services"  class="w-full  md:h-screen p-4 md:flex md:items-center md:justify-between scroll-mt-20">
      <Services />
  
    </div>

    <div>
      <Works />
      <Tecnologies />
    </div>

    <div>
      <banContacto />
    </div>



    <div id="contact" class=" max-w-screen-xl mx-auto mt-20 scroll-mt-20">
      <ContactForm class="mt-4 mx-auto p-4 flex flex-col w-2/3 md:w-1/3 " />
    </div>

  



    <WspBtn />

  </ProjectLayout>

</template>

<script setup>
import ProjectLayout from '../Layouts/ProjectLayout.vue'
import ContactForm from '../Components/Project/ContactForm.vue'
import Services from '../Components/Project/Services.vue'
import Hero from '../Components/Project/Hero.vue'
import WspBtn from '../Components/wspBtn.vue'
import About from '../Components/Project/About.vue'
import Works from '../Components/Project/Works.vue'
import Tecnologies from '../Components/Project/Tecnologies.vue'
import banContacto from '../Components/Project/banContacto.vue'




</script>


<style scoped >

#services {
  background-image: url('https://res.cloudinary.com/dkoocayxp/image/upload/v1724099359/NVN%20Web%20Desing/grid-lines_e3ikw3.png');
  background-color:#22143D;
  opacity: 0.9;
  background-blend-mode: overlay ;
  background-size: cover;
  

}

</style>