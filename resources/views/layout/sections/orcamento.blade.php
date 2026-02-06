 <section class="relative w-full z-100 animate-fadeIn animate-slideIn [animation-delay:0s] overflow-hidden bg-gray-100  min-h-screen" id="solucoes">

     <div class="absolute top-0 right-0 w-full h-full lg:w-1/2 lg:h-full z-10">
         <div class="h-full overflow-hidden shadow-4xl"
             style="clip-path: polygon(0 0, 100% 0, 100% 100%, 0 100%); lg:clip-path: polygon(15% 0, 100% 0, 100% 100%, 0 100%);">
             <div class="relative w-full h-full">

                 <img id="carouselImage"
                     class="absolute inset-0 w-full h-full object-cover transition-opacity duration-700 opacity-100" />

                 <div class="absolute inset-0 bg-black/65"></div>
             </div>
         </div>
     </div>

     <div class="relative z-20">

         <div class="w-full max-w-4xl mb-8 mx-auto px-4">
             <div class="flex justify-center py-6">
                 <div
                     class="inline-flex flex-wrap justify-center gap-4 sm:gap-8 md:gap-12 lg:gap-16 xl:gap-24 border-b-2 border-gray-200">

                     <button onclick="goToSlide(0)"
                         class="tab-btn-v3 active relative px-3 sm:px-4 md:px-6 pb-4 sm:pb-6 font-semibold text-sm sm:text-base tracking-widest transition-all duration-300 flex items-center gap-2 sm:gap-3">
                         <i class="fas fa-mobile-alt text-base sm:text-lg"></i>
                         <span class="hidden sm:inline">MOBILE</span>
                         <span class="sm:hidden">MOB</span>
                     </button>

                     <button onclick="goToSlide(1)"
                         class="tab-btn-v3 relative px-3 sm:px-4 md:px-6 pb-4 sm:pb-6 font-semibold text-sm sm:text-base tracking-widest text-gray-400 transition-all duration-300 flex items-center gap-2 sm:gap-3">
                         <i class="fas fa-desktop text-base sm:text-lg"></i>
                         WEB
                     </button>

                     <button onclick="goToSlide(2)"
                         class="tab-btn-v3 relative px-3 sm:px-4 md:px-6 pb-4 sm:pb-6 font-semibold text-sm sm:text-base tracking-widest text-gray-400 transition-all duration-300 flex items-center gap-2 sm:gap-3">
                         <i class="fas fa-laptop-code text-base sm:text-lg"></i>
                         <span class="hidden sm:inline">DESKTOP</span>
                         <span class="sm:hidden">DESK</span>
                     </button>

                 </div>
             </div>
         </div>

         <div class="relative grid grid-cols-1 lg:grid-cols-2 min-h-[500px] sm:min-h-[600px] lg:min-h-[550px] mt-12 sm:mt-16 lg:mt-20 xl:mt-44">

             <div class="relative z-20 flex items-center px-4 sm:px-6 lg:px-0">
                 <div class="max-w-7xl w-full">
                     <div
                         class="relative min-h-[300px] sm:min-h-[400px] lg:ml-12 xl:ml-20 mb-12 sm:mb-16 lg:mb-24 md:mb-16">

                         <div
                             class="carousel-text-slide absolute inset-0 opacity-100 z-10 transition-opacity duration-500 pointer-events-auto">
                             <div
                                 class="h-full flex flex-col items-center lg:items-start justify-center gap-6 sm:gap-8 md:gap-10 lg:gap-14 xl:gap-16 py-6 sm:py-9">

                                 <h2
                                     class="text-3xl sm:text-5xl md:text-5xl lg:text-6xl xl:text-7xl 2xl:text-7xl font-inter text-white lg:text-gray-900 leading-tight tracking-tight max-w-3xl text-center lg:text-left">
                                     <span class="text-orange-500">Coletores indicadores</span>, seja o que for
                                     estará na palma de sua
                                     mão para
                                     <span class="text-orange-500">acesso rápido.</span>
                                 </h2>

                                 <button
                                     class="inline-flex items-center gap-5 sm:gap-4 md:gap-5 lg:gap-6 bg-orange-500 text-white px-12 py-6 sm:px-14 sm:py-5 md:px-16 md:py-6 lg:px-18 lg:py-7 xl:px-20 xl:py-8 text-xl sm:text-lg md:text-xl lg:text-2xl xl:text-3xl
                                     rounded-full font-inter font-semibold hover:bg-orange-600 transition-all duration-300 hover:shadow-2xl hover:-translate-y-1 whitespace-nowrap">
                                     Solicitar orçamento
                                     <i
                                         class="fa-solid fa-arrow-right text-xl sm:text-lg md:text-xl lg:text-2xl xl:text-3xl"></i>
                                 </button>
                             </div>
                         </div>

                         <div
                             class="carousel-text-slide absolute inset-0 opacity-0 z-0 transition-opacity duration-500 pointer-events-none">
                             <div
                                 class="h-full flex flex-col items-center lg:items-start justify-center gap-6 sm:gap-8 md:gap-10 lg:gap-14 xl:gap-16 py-6 sm:py-9">

                                 <h2
                                     class="text-3xl sm:text-4xl md:text-4xl lg:text-6xl xl:text-7xl 2xl:text-7xl font-inter text-white lg:text-gray-900 leading-tight tracking-tight max-w-3xl text-center lg:text-left">
                                     Tenha seu <span class="text-orange-500">espaço profissional na
                                         internet</span> com um site que
                                     entenda as suas
                                     <span class="text-orange-500">dores</span> e <span class="text-orange-500">cresça
                                         junto</span> com
                                     o
                                     seu negócio.
                                 </h2>

                                 <button
                                     class="inline-flex items-center gap-5 sm:gap-4 md:gap-5 lg:gap-6 bg-orange-500 text-white px-12 py-6 sm:px-14 sm:py-5 md:px-16 md:py-6 lg:px-18 lg:py-7 xl:px-20 xl:py-8 text-xl sm:text-lg md:text-xl lg:text-2xl xl:text-3xl
                                                   rounded-full font-inter font-semibold hover:bg-orange-600 transition-all duration-300 hover:shadow-2xl hover:-translate-y-1 whitespace-nowrap">
                                     Solicitar orçamento
                                     <i
                                         class="fa-solid fa-arrow-right text-xl sm:text-lg md:text-xl lg:text-2xl xl:text-3xl"></i>
                                 </button>
                             </div>
                         </div>

                         <div
                             class="carousel-text-slide absolute inset-0 opacity-0 z-0 transition-opacity duration-500 pointer-events-none">
                             <div
                                 class="h-full flex flex-col items-center lg:items-start justify-center gap-6 sm:gap-8 md:gap-10 lg:gap-14 xl:gap-16 py-6 sm:py-9">

                                 <h2
                                     class="text-3xl sm:text-4xl md:text-4xl lg:text-6xl xl:text-7xl 2xl:text-7xl font-inter text-white lg:text-gray-900 leading-tight tracking-tight max-w-3xl text-center lg:text-left">
                                     Processos, análises e operações complexas executadas direto no seu
                                     computador,
                                     <span class="text-orange-500">sem depender de rede.</span>
                                 </h2>

                                 <button
                                     class="inline-flex items-center gap-5 sm:gap-4 md:gap-5 lg:gap-6 bg-orange-500 text-white px-12 py-6 sm:px-14 sm:py-5 md:px-16 md:py-6 lg:px-18 lg:py-7 xl:px-20 xl:py-8 text-xl sm:text-lg md:text-xl lg:text-2xl xl:text-3xl
                                                   rounded-full font-inter font-semibold hover:bg-orange-600 transition-all duration-300 hover:shadow-2xl hover:-translate-y-1 whitespace-nowrap">
                                     Solicitar orçamento
                                     <i
                                         class="fa-solid fa-arrow-right text-xl sm:text-lg md:text-xl lg:text-2xl xl:text-3xl"></i>
                                 </button>

                             </div>
                         </div>
                     </div>
                 </div>
             </div>

            <div class="relative w-full h-full hidden lg:block"></div>

         </div>
     </div>

 </section>
