<section class="relative w-full min-h-screen overflow-hidden flex items-center bg-[#0f1117] font-plus reveal" id="projetosection">
    <!-- Ruído de textura sutil -->
    <div class="pointer-events-none absolute -left-1/4 top-1/2 -translate-y-1/2
            w-[40vw] h-[40vw] max-w-[500px] max-h-[500px] rounded-full
            blur-[60px]"
        style="background: radial-gradient(circle, rgba(249,115,22,0.45) 0%, rgba(249,115,22,0.18) 30%, rgba(249,115,22,0.05) 60%, transparent 100%);">
    </div>

    <!-- Bola direita -->
    <div class="pointer-events-none absolute -right-1/4 top-1/2 -translate-y-1/2
            w-[40vw] h-[40vw] max-w-[500px] max-h-[500px] rounded-full
            blur-[60px]"
        style="background: radial-gradient(circle, rgba(249,115,22,0.45) 0%, rgba(249,115,22,0.18) 30%, rgba(249,115,22,0.05) 60%, transparent 100%);">
    </div>

    <div class="relative z-10 w-full px-4 sm:px-8 md:px-14 lg:px-20 xl:px-28 2xl:px-40
              py-16 sm:py-20 md:py-24 lg:py-28 xl:py-32
              flex flex-col lg:flex-row items-center lg:items-start gap-12 lg:gap-16 xl:gap-24 2xl:gap-32">

        <!-- Coluna esquerda -->
        <div class="w-full lg:w-1/2 xl:w-[45%] flex flex-col gap-6 sm:gap-8 lg:gap-10">

            <h2 class="font-plus font-extrabold text-white leading-tight
                 text-4xl sm:text-5xl md:text-6xl lg:text-6xl xl:text-5xl 2xl:text-7xl">
                Dê vida ao seu próximo projeto!
            </h2>

            <p class="text-gray-300 leading-relaxed
                text-sm sm:text-base md:text-lg lg:text-xl xl:text-2xl max-w-md xl:max-w-lg">
                Estamos prontos para analisar os seus processos e desenhar a solução digital que a sua empresa
                precisa.
                Preencha o formulário ou utilize um dos nossos canais diretos.
            </p>

            <div class="flex flex-col gap-5 sm:gap-6 mt-6">

                <!-- E-mail -->
                <div class="flex items-center gap-4">
                    <div class="flex-shrink-0 flex items-center justify-center rounded-xl bg-orange-500/20 border border-orange-500/30
                      w-11 h-11 sm:w-12 sm:h-12 lg:w-14 lg:h-14 xl:w-16 xl:h-16
                      text-orange-400 text-base sm:text-lg lg:text-xl xl:text-2xl">
                        <i class="fa-regular fa-envelope"></i>
                    </div>
                    <div>
                        <p class="font-bold tracking-widest text-orange-400 uppercase
                      text-xs sm:text-sm lg:text-base xl:text-lg mb-0.5">
                            E-mail
                        </p>
                        <a href="mailto:contato@mirimweb.com.br" class="text-gray-200 hover:text-orange-400 transition-colors duration-200
                      text-sm sm:text-base lg:text-lg xl:text-xl">
                            contato@mirimweb.com.br
                        </a>
                    </div>
                </div>

                <!-- WhatsApp -->
                <div class="flex items-center gap-4">
                    <div class="flex-shrink-0 flex items-center justify-center rounded-xl bg-orange-500/20 border border-orange-500/30
                      w-11 h-11 sm:w-12 sm:h-12 lg:w-14 lg:h-14 xl:w-16 xl:h-16
                      text-orange-400 text-base sm:text-lg lg:text-xl xl:text-2xl mt-6">
                        <i class="fa-brands fa-whatsapp"></i>
                    </div>
                    <div>
                        <p class="font-bold tracking-widest text-orange-400 uppercase
                      text-xs sm:text-sm lg:text-base xl:text-lg mb-0.5">
                            WhatsApp
                        </p>
                        <a href="https://wa.me/5514991221660" class="text-gray-200 hover:text-orange-400 transition-colors duration-200
                      text-sm sm:text-base lg:text-lg xl:text-xl">
                            (14) 99122–1660
                        </a>
                    </div>
                </div>

            </div>
        </div>

        <div id="toast-container" class="fixed bottom-6 right-6 flex flex-col gap-3 z-50"></div>

        <!-- Formulário -->
        <form method="POST" action="{{ route('contato.enviar') }}"
            class="w-full lg:w-1/2 xl:w-[55%]
      bg-white/5 border border-white/10 backdrop-blur-sm rounded-2xl xl:rounded-3xl
      p-5 sm:p-6 md:p-8 lg:p-8 xl:p-10 2xl:p-12" id="form-contato">

            @csrf

            <div class="grid grid-cols-1 sm:grid-cols-2 gap-4 sm:gap-5 xl:gap-6 mb-4 sm:mb-5 xl:mb-6">

                <!-- Nome -->
                <div class="flex flex-col gap-1.5">
                    <label class="text-gray-300 font-medium text-sm sm:text-base xl:text-lg">Nome</label>
                    <input type="text" placeholder="Seu nome" name="nome" class="w-full bg-white/8 border border-white/15 rounded-xl text-white placeholder-gray-500
                   focus:outline-none focus:border-orange-500 focus:bg-white/10 transition-all duration-200
                   px-4 py-3 xl:px-5 xl:py-4 text-sm sm:text-base xl:text-lg"
                        style="background: rgba(255,255,255,0.06);">
                </div>

                <!-- E-mail -->
                <div class="flex flex-col gap-1.5">
                    <label class="text-gray-300 font-medium text-sm sm:text-base xl:text-lg">E-mail</label>
                    <input type="email" placeholder="exemplo@email.com.br" name="email" class="w-full border border-white/15 rounded-xl text-white placeholder-gray-500
                   focus:outline-none focus:border-orange-500 focus:bg-white/10 transition-all duration-200
                   px-4 py-3 xl:px-5 xl:py-4 text-sm sm:text-base xl:text-lg"
                        style="background: rgba(255,255,255,0.06);">
                </div>

            </div>

            <!-- Assunto -->
            <div class="flex flex-col gap-1.5 mb-4 sm:mb-5 xl:mb-6">
                <label class="text-gray-300 font-medium text-sm sm:text-base xl:text-lg">Assunto</label>
                <input type="text" placeholder="Como podemos ajudar a sua empresa?" name="assunto" class="w-full border border-white/15 rounded-xl text-white placeholder-gray-500
                 focus:outline-none focus:border-orange-500 focus:bg-white/10 transition-all duration-200
                 px-4 py-3 xl:px-5 xl:py-4 text-sm sm:text-base xl:text-lg"
                    style="background: rgba(255,255,255,0.06);">
            </div>

            <!-- Mensagem -->
            <div class="flex flex-col gap-1.5 mb-5 sm:mb-6 xl:mb-8">
                <label class="text-gray-300 font-medium text-sm sm:text-base xl:text-lg">Mensagem</label>
                <textarea rows="4" placeholder="Descreva sua necessidade e nós apresentaremos a solução ideal para você"
                    class="w-full border border-white/15 rounded-xl text-white placeholder-gray-500 resize-none
                 focus:outline-none focus:border-orange-500 focus:bg-white/10 transition-all duration-200
                 px-4 py-3 xl:px-5 xl:py-4 text-sm sm:text-base xl:text-lg" name="mensagem"
                    style="background: rgba(255,255,255,0.06);"></textarea>
            </div>

            <!-- Botão -->
            <button class="w-full bg-orange-500 hover:bg-orange-600 active:scale-[0.98]
               text-white font-bold rounded-xl transition-all duration-300
               py-3.5 xl:py-4 2xl:py-5
               text-base sm:text-lg xl:text-xl 2xl:text-2xl
               flex items-center justify-center gap-3">
                Enviar mensagem
                <i
                    class="fa-solid fa-envelope relative top-0.5 transition-transform duration-200 group-hover:translate-x-1"></i>
            </button>

        </form>
    </div>

</section>