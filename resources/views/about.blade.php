<x-app-layout>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="mb-5 text-5xl text-center font-bold tracking-tight text-gray-900">¿Quiénes somos?</div>
            <p class="font-normal text-gray-900 text-center">En Centro Nerine creemos que el aprendizaje y crecimiento a
                través de todos nuestros sentidos es fundamental para el desarrollo de nuestras funciones cognitivas
                básicas y superiores: la atención y la memoria, la comunicación y el lenguaje, la resolución de
                problemas, el razonamiento, la creatividad, la inteligencia emocional y la relación con el entorno
                moldean a su vez nuestra personalidad y marcan nuestra calidad de vida.</p>
            <img class="rounded img-equipo mt-5" src="images/equipo.jpg"
                    alt="Foto equipo" />
            <div class="mt-10 text-5xl text-center font-bold tracking-tight text-gray-900">Nuestro equipo</div>
            <p class="my-5 font-normal text-gray-900 text-center">Somos un equipo de profesionales de la salud especializados
                en Terapia Ocupacional, Logopedia, Fisioterapia y Psicología, con experiencia colegiados y en continua
                formación, dedicados a la prevención, detección, evaluación, tratamiento y rehabilitación de
                dificultades, trastornos y/o patologías que engloban las áreas del desarrollo cognitivo, el crecimiento
                emocional, la comunicación y la ocupación. Nos apasiona nuestro trabajo y así lo transmitimos en nuestras terapias.</p>
            <div class="grid lg:grid-cols-4 gap-6 mb-10">
                @foreach($professionals as $professional)
                <div class="max-w-sm rounded-lg">
                    <img class="rounded img-professional-card" src="{{ asset($route . $professional->photo) }}"
                        alt="Foto {{ $professional->name }}" />
                    <div class="p-5">
                        <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900">{{ $professional->name }} {{
                            $professional->surname }}</h5>
                        <p class="mb-3 font-normal text-gray-900"><strong>Especialidad: </strong>{{
                            $professional->specialty->name }}</p>
                        <a href="{{ route('professional', ['professional' => $professional]) }}"
                            class="inline-flex items-center px-3 py-2 text-sm font-medium text-center text-gray-900 bg-indigo-400 rounded-lg hover:bg-indigo-500">
                            Información del profesional
                            <svg class="rtl:rotate-180 w-3.5 h-3.5 ms-2" aria-hidden="true"
                                xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 10">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                    stroke-width="2" d="M1 5h12m0 0L9 1m4 4L9 9" />
                            </svg>
                        </a>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </div>
</x-app-layout>