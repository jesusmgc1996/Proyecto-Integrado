<x-app-layout>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="grid grid-cols-2 gap-1">
                <img class="rounded-t-lg img-professional" src="{{ asset($route . $professional->photo) }}"
                    alt="Foto {{ $professional->name }}" />
                <div class="p-5">
                    <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">{{
                        $professional->name }} {{ $professional->surname }}</h5>
                    <p class="mb-3 font-normal text-gray-700 dark:text-gray-400"><strong>Especialidad: </strong>{{
                        $professional->specialty->name }}</p>
                    <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">{{
                        $professional->specialty->description }}</p>
                    <p class="mb-3 font-normal text-gray-700 dark:text-gray-400"><strong>Horario: </strong>{{
                        $professional->schedule }}</p>
                    <p class="mb-3 font-normal text-gray-700 dark:text-gray-400"><strong>Educación: </strong>{{
                        $professional->education }}</p>
                    <p class="mb-3 font-normal text-gray-700 dark:text-gray-400"><strong>Experiencia: </strong>{{
                        $professional->experience }}</p>
                    <p class="mb-3 font-normal text-gray-700 dark:text-gray-400"><strong>Teléfono: </strong>{{
                        $professional->phoneNumber }}</p>
                    <p class="mb-3 font-normal text-gray-700 dark:text-gray-400"><strong>E-mail: </strong>{{
                        $professional->email }}</p>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>