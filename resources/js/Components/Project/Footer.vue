<template>

  <footer class="flex flex-col w-full h-64 bg-black dark:bg-gray-800 border-t border-grey-200">
    <div class="grid grid-cols-2 gap-4 p-4 mx-auto min-w-full h-full md:px-20">
      <div class="flex flex-col justify-center col-span-2 md:col-span-1 text-white">
        <h2 class="capitalize  text-2xl md:text-4xl">Contacto</h2>
        <div>
          <div class="flex gap-5 text-2xl">

            <div >
              <a class="flex flex-row justify-center align-middle items-center text-sm md:text-2xl" href="https://www.instagram.com/invites/contact/?igsh=1mof8vxeg4z0z&utm_content=uu4jqi3" target="_blank">
                <svg class="w-6 h-6 text-white dark:gray-800" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                  width="24" height="24" fill="none" viewBox="0 0 24 24">
                  <path fill="currentColor" fill-rule="evenodd"
                    d="M3 8a5 5 0 0 1 5-5h8a5 5 0 0 1 5 5v8a5 5 0 0 1-5 5H8a5 5 0 0 1-5-5V8Zm5-3a3 3 0 0 0-3 3v8a3 3 0 0 0 3 3h8a3 3 0 0 0 3-3V8a3 3 0 0 0-3-3H8Zm7.597 2.214a1 1 0 0 1 1-1h.01a1 1 0 1 1 0 2h-.01a1 1 0 0 1-1-1ZM12 9a3 3 0 1 0 0 6 3 3 0 0 0 0-6Zm-5 3a5 5 0 1 1 10 0 5 5 0 0 1-10 0Z"
                    clip-rule="evenodd" />
                </svg>Instagram</a>
            </div>
            <div>
              <a class="flex flex-row justify-center align-middle items-center text-sm md:text-2xl" href="https://wa.me/5491139236695?text=Hola,%20te%20escribo%20desde%nvnwebdesing.com%20te%20queria%20consultar%20sobre%20" target="_blank">
                <svg class="w-6 h-6 text-white dark:gray-800" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                  width="24" height="24" fill="none" viewBox="0 0 24 24">
                  <path fill="currentColor" fill-rule="evenodd"
                    d="M12 4a8 8 0 0 0-6.895 12.06l.569.718-.697 2.359 2.32-.648.379.243A8 8 0 1 0 12 4ZM2 12C2 6.477 6.477 2 12 2s10 4.477 10 10-4.477 10-10 10a9.96 9.96 0 0 1-5.016-1.347l-4.948 1.382 1.426-4.829-.006-.007-.033-.055A9.958 9.958 0 0 1 2 12Z"
                    clip-rule="evenodd" />
                  <path fill="currentColor"
                    d="M16.735 13.492c-.038-.018-1.497-.736-1.756-.83a1.008 1.008 0 0 0-.34-.075c-.196 0-.362.098-.49.291-.146.217-.587.732-.723.886-.018.02-.042.045-.057.045-.013 0-.239-.093-.307-.123-1.564-.68-2.751-2.313-2.914-2.589-.023-.04-.024-.057-.024-.057.005-.021.058-.074.085-.101.08-.079.166-.182.249-.283l.117-.14c.121-.14.175-.25.237-.375l.033-.066a.68.68 0 0 0-.02-.64c-.034-.069-.65-1.555-.715-1.711-.158-.377-.366-.552-.655-.552-.027 0 0 0-.112.005-.137.005-.883.104-1.213.311-.35.22-.94.924-.94 2.16 0 1.112.705 2.162 1.008 2.561l.041.06c1.161 1.695 2.608 2.951 4.074 3.537 1.412.564 2.081.63 2.461.63.16 0 .288-.013.4-.024l.072-.007c.488-.043 1.56-.599 1.804-1.276.192-.534.243-1.117.115-1.329-.088-.144-.239-.216-.43-.308Z" />
                </svg>Whatsapp</a>
            </div>

          </div>
        </div>
      </div>
      <div class="flex flex-col justify-center col-span-2 md:col-span-1 text-white  text-sm md:text-2xl">
        <h2 class="capitalize text-2xl md:text-4xl">Desarrollo de sitios web</h2>
        <p>Telefono: 11-3923-6695</p>
        <p>Email: contacto@nvnwebdesing.com</p>
      </div>

    </div>
    <Line />
    <div class="w-full my-2 flex justify-center">
      <span class="text-sm text-white dark:text-gray-400">© 2024 <a href="#" class="hover:underline">NVN Web
          Desing™</a>
      </span>
    </div>
  </footer>


</template>

<script setup>
import Line from '../Line.vue'

</script>

