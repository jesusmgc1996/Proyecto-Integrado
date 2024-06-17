<x-app-layout>
    <div class="py-12">
        @if (session('status'))
        <div class="p-4 mb-4 text-sm text-gray-900 rounded-lg text-center" role="alert">
            {{ session('status') }}
        </div>
        @endif
        <div class="grid grid-cols-1 gap-6">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                @foreach($appointments as $appointment)
                <div class="max-w-sm p-6 bg-indigo-200 border border-gray-500 rounded-lg mb-5">
                    <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900">{{
                        $appointment->date }} {{ $appointment->time }}</h5>
                    <p class="mb-3 font-normal text-gray-900"><strong>Profesional: </strong>{{
                        $appointment->professional->name }} {{ $appointment->professional->surname }}</p>
                    <p class="mb-3 font-normal text-gray-900"><strong>Especialidad: </strong>{{
                        $appointment->professional->specialty->name }} </p>
                    <p class="mb-3 font-normal text-gray-900"><strong>Consulta: </strong>{{
                        $appointment->professional->consultingRoom_id }}</p>
                    @if(!blank($appointment->observations))
                    <p class="mb-3 font-normal text-gray-900"><strong>Observaciones: </strong><br>
                        {{ $appointment->observations }}</p>
                    @endif
                    <p><a href="{{ route('professional', ['professional' => $appointment->professional]) }}"
                            class="inline-flex items-center px-3 py-2 text-sm font-medium text-center text-gray-900 bg-indigo-400 rounded-lg hover:bg-indigo-500">
                            Información del profesional
                            <svg class="rtl:rotate-180 w-3.5 h-3.5 ms-2" aria-hidden="true"
                                xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 10">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                    stroke-width="2" d="M1 5h12m0 0L9 1m4 4L9 9" />
                            </svg>
                        </a></p>
                    @if($appointment->date > $tomorrowDate || ($appointment->time > $actualTime && $appointment->date ==
                    $tomorrowDate))
                    <br>
                    <form action="{{ route('appointment.destroy', ['appointment' => $appointment]) }}" method="POST"
                        class="inline delete-form">
                        @csrf
                        @method('DELETE')
                        <button type="submit"
                            class="focus:outline-none text-white bg-red-700 hover:bg-red-800 focus:ring-4 focus:ring-red-300 font-medium rounded-lg text-sm px-5 py-2.5 me-2 dark:bg-red-600 dark:hover:bg-red-700 dark:focus:ring-red-900">Cancelar
                            cita</button>
                    </form>
                    @endif
                </div><br>
                @endforeach
            </div>
        </div>
    </div>
</x-app-layout>

<script>
    document.querySelector('.delete-form').addEventListener('submit', function(event) {
        event.preventDefault();
        if (confirm('¿Está seguro de que desea cancelar esta cita?')) {
            this.submit();
        } else {
            return false;
        }
    });
</script>