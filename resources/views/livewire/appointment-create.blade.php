<div>
    <form action="{{ route('appointment.store') }}" method="POST" class="max-w-sm mx-auto create-form">
        @csrf
        <label for="specialtiy"
            class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Especialidad:</label>
        <select wire:model.live="selectedSpecialty" id="specialty" name="specialty"
            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
            <option {{ $selectedSpecialty ? 'disabled' : 'selected' }}>Seleccione una especialidad</option>
            @foreach($specialties as $specialty)
            <option value="{{ $specialty->id }}">{{ $specialty->name }}</option>
            @endforeach
        </select><br>
        @if($professionals)
        <label for="professional"
            class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Profesional:</label>
        <select wire:model.live="selectedProfessional" id="professional" name="professional"
            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
            <option {{ $professionalId ? 'disabled' : 'selected' }}>Seleccione un profesional</option>
            @foreach($professionals as $professional)
            <option value="{{ $professional->id }}">{{ $professional->name }} {{ $professional->surname }}</option>
            @endforeach
        </select><br>
        @if($professionalId)
        <label for="date" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Fecha:</label>
        <div class="relative max-w-sm">
            <input type="date" id="date" name="date" wire:model.live="selectedDate"
                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full ps-10 p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
        </div><br>
        @if($date)
        <legend class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Horas:</legend>
        @foreach($schedules as $schedule)
        <div class="flex items-center mb-4">
            <input wire:model.live="selectedTime" id="time-option-{{ $schedule->id }}" type="radio" name="time" value="{{ $schedule->time }}" {{
                in_array($schedule->time, $appointments) || ($schedule->time < $actualTime && $date == $actualDate) ? 'disabled' : '' }}
            class="w-4 h-4 border-gray-300 focus:ring-2 focus:ring-blue-300 dark:focus:ring-blue-600
            dark:focus:bg-blue-600 dark:bg-gray-700 dark:border-gray-600">
            <label for="time-option-{{ $schedule->id }}"
                class="block ms-2  text-sm font-medium {{ in_array($schedule->time, $appointments) || ($schedule->time < $actualTime && $date == $actualDate) ? 'text-gray-300 dark:text-gray-700' : 'text-gray-900 dark:text-gray-300' }}">
                {{ $schedule->time }}
            </label>
        </div>
        @endforeach
        <label for="observations"
            class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Observaciones:</label>
        <textarea id="observations" name="observations" rows="4"
            class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
            placeholder="Escriba sus observaciones..."></textarea><br>
        @if($time)
        <button type="submit"
            class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 me-2 mb-2 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800">Solicitar
            cita</button>
        @endif
        @endif
        @endif
        @endif
    </form>
</div>

<script>
    document.querySelector('.create-form').addEventListener('submit', function(event) {
        event.preventDefault();
        if (confirm('¿Está seguro de que desea solicitar esta cita? Tenga en cuenta que sólo podrá cancelarla con 24 horas de antelación como mínimo.')) {
            this.submit();
        } else {
            return false;
        }
    });
</script>