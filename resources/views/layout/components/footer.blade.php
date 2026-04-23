<footer class="w-full bg-[#0f1117] border-t border-white/10" id="footer">
    <div class="max-w-[95rem] mx-auto
        grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-[2fr_1fr_1fr_1.5fr]
        gap-10 lg:gap-x-8 xl:gap-x-8 gap-y-10
        px-0 sm:px-2 md:px-4 lg:px-6 xl:px-8
        pt-12 sm:pt-14 md:pt-16 lg:pt-20 pb-6 sm:pb-8">

        {{-- Coluna 1: Logo + Descrição --}}
        <div class="flex flex-col gap-6 items-center lg:items-start">
            <a href="#mirim" class="block">
                <img
                    src="/images/01.png"
                    alt="Logo"
                    class="w-[420px] block ">
            </a>
            <p class="font-plus text-gray-400 leading-relaxed text-sm sm:text-base xl:text-lg max-w-[400px] text-center lg:text-left mx-auto lg:mx-0">
                Especialistas no desenvolvimento de soluções digitais completas, desde sites estratégicos a sistemas personalizados.
            </p>
        </div>

        {{-- Coluna 2: Navegação --}}
        <div class="flex flex-col gap-4 text-center lg:text-left">
            <h4 class="font-plus font-bold text-white text-sm sm:text-base xl:text-lg tracking-wide">Navegação</h4>
            <ul class="flex flex-col gap-3">
                @foreach (['Início' => '#mirim', 'Sobre Nós' => '#sobre', 'Soluções' => '#solucoes', 'Crescimento' => '#mirim'] as $label => $href)
                <li>
                    <a href="{{ $href }}"
                        class="font-plus text-gray-400 hover:text-orange-400 transition-colors duration-200 text-sm sm:text-base xl:text-lg">
                        {{ $label }}
                    </a>
                </li>
                @endforeach
            </ul>
        </div>

        {{-- Coluna 3: Especialidades --}}
        <div class="flex flex-col gap-4 text-center lg:text-left">
            <h4 class="font-plus font-bold text-white text-sm sm:text-base xl:text-lg tracking-wide">Especialidades</h4>
            <ul class="flex flex-col gap-3">
                @foreach (['Landing Pages', 'E-commerce & Custom', 'Sites Institucionais', 'Web Apps & Sistemas'] as $item)
                <li>
                    <a href="#solucoes"
                        class="font-plus text-gray-400 hover:text-orange-400 transition-colors duration-200 text-sm sm:text-base xl:text-lg">
                        {{ $item }}
                    </a>
                </li>
                @endforeach
            </ul>
        </div>

        {{-- Coluna 4: Fale conosco --}}
        <div class="flex flex-col gap-4 items-center lg:items-start">
            <h4 class="font-plus font-bold text-white text-sm sm:text-base xl:text-lg tracking-wide">Fale conosco</h4>
            <div class="flex flex-col gap-5">

                <div class="flex items-center gap-3">
                    <div class="flex-shrink-0 flex items-center justify-center rounded-lg
                        bg-orange-500/15 border border-orange-500/25 text-orange-400
                        w-9 h-9 xl:w-11 xl:h-11 text-sm xl:text-base">
                        <i class="fa-regular fa-envelope"></i>
                    </div>
                    <div>
                        <p class="font-plus font-bold tracking-widest text-orange-400 uppercase text-[10px] xl:text-xs mb-0.5">
                            E-mail</p>
                        <a href="mailto:contato@mirimweb.com.br"
                            class="font-plus text-gray-300 hover:text-orange-400 transition-colors duration-200 text-xs sm:text-sm xl:text-base">
                            contato@mirimweb.com.br
                        </a>
                    </div>
                </div>

                <div class="flex items-center gap-3">
                    <div class="flex-shrink-0 flex items-center justify-center rounded-lg
                        bg-orange-500/15 border border-orange-500/25 text-orange-400
                        w-9 h-9 xl:w-11 xl:h-11 text-sm xl:text-base">
                        <i class="fa-brands fa-whatsapp"></i>
                    </div>
                    <div>
                        <p class="font-plus font-bold tracking-widest text-orange-400 uppercase text-[10px] xl:text-xs mb-0.5">
                            WhatsApp</p>
                        <a href="https://wa.me/5514991221660"
                            class="font-plus text-gray-300 hover:text-orange-400 transition-colors duration-200 text-xs sm:text-sm xl:text-base">
                            (14) 99122–1660
                        </a>
                    </div>
                </div>

            </div>
        </div>

    </div>

    {{-- Rodapé --}}
    <div class="border-t border-white/10 pt-6 pb-6 sm:pb-8 sm:pt-8 text-center">
        <p class="font-plus text-gray-500 text-xs sm:text-sm xl:text-base ">
            © 2026 <a href="#"
                class="text-orange-400 hover:text-orange-300 transition-colors duration-200">Mirim Web</a>. Todos os
            direitos reservados.
        </p>
    </div>

</footer>