 <footer class="text-gray-600 body-font">
     <div class="container px-5 py-8 mx-auto flex items-center sm:flex-row flex-col">
         <a class="flex title-font font-medium items-center md:justify-start justify-center text-gray-900">
             <svg xmlns="http://www.w3.org/2000/svg" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-10 h-10 text-white p-2 bg-indigo-500 rounded-full" viewBox="0 0 24 24">
                 <path d="M12 2L2 7l10 5 10-5-10-5zM2 17l10 5 10-5M2 12l10 5 10-5"></path>
             </svg>
             <span class="ml-3 text-xl text-blue-500">ISHOP</span>
         </a>
       
         <span class="inline-flex sm:ml-auto sm:mt-0 mt-4 justify-center sm:justify-start">
             <a class="text-gray-500">
                 <svg fill="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-5 h-5" viewBox="0 0 24 24">
                     <path d="M18 2h-3a5 5 0 00-5 5v3H7v4h3v8h4v-8h3l1-4h-4V7a1 1 0 011-1h3z"></path>
                 </svg>
             </a>
             <a class="ml-3 text-gray-500">
                 <svg fill="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-5 h-5" viewBox="0 0 24 24">
                     <path d="M23 3a10.9 10.9 0 01-3.14 1.53 4.48 4.48 0 00-7.86 3v1A10.66 10.66 0 013 4s-4 9 5 13a11.64 11.64 0 01-7 2c9 5 20 0 20-11.5a4.5 4.5 0 00-.08-.83A7.72 7.72 0 0023 3z"></path>
                 </svg>
             </a>
             <a class="ml-3 text-gray-500">
                 <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-5 h-5" viewBox="0 0 24 24">
                     <rect width="20" height="20" x="2" y="2" rx="5" ry="5"></rect>
                     <path d="M16 11.37A4 4 0 1112.63 8 4 4 0 0116 11.37zm1.5-4.87h.01"></path>
                 </svg>
             </a>
             <a class="ml-3 text-gray-500">
                 <svg fill="currentColor" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="0" class="w-5 h-5" viewBox="0 0 24 24">
                     <path stroke="none" d="M16 8a6 6 0 016 6v7h-4v-7a2 2 0 00-2-2 2 2 0 00-2 2v7h-4v-7a6 6 0 016-6zM2 9h4v12H2z"></path>
                     <circle cx="4" cy="4" r="2" stroke="none"></circle>
                 </svg>
             </a>
         </span>
     </div>
 </footer>






 <script src="/assets/js/script.js"></script>
 <script>


 </script>
 <script>
     // Get references to the cart button and sidebar modal
     var cartButton = document.getElementById("cartButton");
     var sidebarModal = document.getElementById("sidebarModal");

     // Function to open the sidebar modal
     function openSidebarModal() {
         sidebarModal.style.width = "250px";
         sidebarModal.style.visibility = "visible"; // Adjust width as needed
     }

     // Function to close the sidebar modal
     function closeSidebarModal() {
         sidebarModal.style.width = "0";
         sidebarModal.style.visibility = "hidden";
     }

     // Event listener for the cart button
     cartButton.addEventListener("click", function() {
         // Toggle the visibility of the sidebar modal
         if (sidebarModal.style.width === "250px") {
             closeSidebarModal();
         } else {
             openSidebarModal();
         }
     });
 </script>



 <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
 <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
 <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
 </body>

 </html>