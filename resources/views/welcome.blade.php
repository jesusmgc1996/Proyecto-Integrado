<x-app-layout>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div id="controls-carousel" class="relative w-full mb-10" data-carousel="slide">
                <div class="relative h-56 overflow-hidden rounded-lg md:h-96">
                    <div class="hidden duration-700 ease-in-out" data-carousel-item>
                        <img src="images/logo.png"
                            class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2 logo-principal"
                            alt="...">
                    </div>
                    <div class="hidden duration-700 ease-in-out" data-carousel-item>
                        <img src="images/img_facilities/consulta1.jpg"
                            class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="...">
                    </div>
                    <div class="hidden duration-700 ease-in-out" data-carousel-item="active">
                        <img src="images/img_facilities/consulta2.jpg"
                            class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="...">
                    </div>
                    <div class="hidden duration-700 ease-in-out" data-carousel-item>
                        <img src="images/img_facilities/consulta3.jpg"
                            class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="...">
                    </div>
                    <div class="hidden duration-700 ease-in-out" data-carousel-item>
                        <img src="images/img_facilities/consulta4.jpg"
                            class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="...">
                    </div>
                </div>
                <button type="button"
                    class="absolute top-0 start-0 z-30 flex items-center justify-center h-full px-4 cursor-pointer group focus:outline-none"
                    data-carousel-prev>
                    <span
                        class="inline-flex items-center justify-center w-10 h-10 rounded-full bg-white/30 dark:bg-gray-800/30 group-hover:bg-white/50 dark:group-hover:bg-gray-800/60 group-focus:ring-4 group-focus:ring-white dark:group-focus:ring-gray-800/70 group-focus:outline-none">
                        <svg class="w-4 h-4 text-white dark:text-gray-800 rtl:rotate-180" aria-hidden="true"
                            xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M5 1 1 5l4 4" />
                        </svg>
                        <span class="sr-only">Anterior</span>
                    </span>
                </button>
                <button type="button"
                    class="absolute top-0 end-0 z-30 flex items-center justify-center h-full px-4 cursor-pointer group focus:outline-none"
                    data-carousel-next>
                    <span
                        class="inline-flex items-center justify-center w-10 h-10 rounded-full bg-white/30 dark:bg-gray-800/30 group-hover:bg-white/50 dark:group-hover:bg-gray-800/60 group-focus:ring-4 group-focus:ring-white dark:group-focus:ring-gray-800/70 group-focus:outline-none">
                        <svg class="w-4 h-4 text-white dark:text-gray-800 rtl:rotate-180" aria-hidden="true"
                            xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="m1 9 4-4-4-4" />
                        </svg>
                        <span class="sr-only">Siguiente</span>
                    </span>
                </button>
            </div>
            <div class="mb-10 text-5xl text-center font-bold tracking-tight text-gray-900"><span class="italic">"Podemos
                    aprender algo nuevo cada vez que creemos que podemos"</span> - Virginia Satir</div>
            <div class="bg-gray-900 overflow-hidden shadow-sm sm:rounded-lg">
                <video class="w-full h-auto max-w-full" autoplay controls>
                    <source src="video.mp4" type="video/mp4">
                    Su navegador no soporta la etiqueta de video.
                </video>
            </div>
            <div>
                <div class="mb-2 mt-10 text-5xl text-center font-bold tracking-tight text-gray-900">Itinerario de tu
                    paso por Centro Nerine</div>
                <div class="grid lg:grid-cols-2 gap-6 mt-10">
                    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                        <div class="mb-5 block max-w-sm p-6">
                            <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900">1. Entrevista inicial</h5>
                            <p class="font-normal text-gray-900">A través de una entrevista personalizada, recogemos
                                todos los datos para crear la historia clínica y el desarrollo evolutivo del usuario.
                            </p>
                        </div>
                    </div>
                    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                        <div class="mb-5 block max-w-sm p-6">
                            <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900">2. Valoración</h5>
                            <p class="font-normal text-gray-900">Realizamos una evaluación estandarizada para obtener
                                las fortalezas y dificultades del usuario con el fin de establecer los objetivos.</p>
                        </div>
                    </div>
                    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                        <div class="mb-5 block max-w-sm p-6">
                            <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900">3. Objetivos</h5>
                            <p class="font-normal text-gray-900">Con base objetiva decidimos qué profesional o
                                profesionales cubren las necesidades del usuario, y se realiza un programa de
                                intervención individual, combinado o grupal.</p>
                        </div>
                    </div>
                    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                        <div class="mb-5 block max-w-sm p-6">
                            <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900">4. Intervención</h5>
                            <p class="font-normal text-gray-900">Se inicia el tratamiento y posterior seguimiento de los
                                objetivos marcados con evaluaciones periódicas, coordinación con otros profesionales,
                                reuniones de equipo y familia.</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="mb-2 mt-10 text-5xl text-center font-bold tracking-tight text-gray-900">Nuestras especialidades
            </div>
            <div class="grid lg:grid-cols-2 gap-6 mt-10">
                @foreach($specialties as $specialty)
                <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                    <div class="mb-5 block max-w-sm p-6">
                        <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900">{{ $specialty->name
                            }}</h5>
                        <p class="font-normal text-gray-900">{{ $specialty->description }}</p>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </div>
</x-app-layout>