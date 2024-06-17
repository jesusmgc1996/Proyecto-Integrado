<div>
    <form action="{{ route('appointment.store') }}" method="POST" class="max-w-sm mx-auto create-form">
        @csrf
        <label for="specialtiy"
            class="block mb-2 text-sm font-medium text-gray-900">Especialidad:</label>
        <select wire:model.live="selectedSpecialty" id="specialty" name="specialty"
            class="bg-indigo-200 border border-gray-500 text-gray-900 text-sm rounded-lg block w-full p-2.5">
            <option {{ $selectedSpecialty ? 'disabled' : 'selected' }}>Seleccione una especialidad</option>
            @foreach($specialties as $specialty)
            <option value="{{ $specialty->id }}">{{ $specialty->name }}</option>
            @endforeach
        </select><br>
        @if($professionals)
        <label for="professional"
            class="block mb-2 text-sm font-medium text-gray-900">Profesional:</label>
        <select wire:model.live="selectedProfessional" id="professional" name="professional"
            class="bg-indigo-200 border border-gray-500 text-gray-900 text-sm rounded-lg block w-full p-2.5">
            <option {{ $professionalId ? 'disabled' : 'selected' }}>Seleccione un profesional</option>
            @foreach($professionals as $professional)
            <option value="{{ $professional->id }}">{{ $professional->name }} {{ $professional->surname }}</option>
            @endforeach
        </select><br>
        @if($professionalId)
        <label for="date" class="block mb-2 text-sm font-medium text-gray-900">Fecha:</label>
        <div class="relative max-w-sm">
            <input type="date" id="date" name="date" wire:model.live="selectedDate"
                class="bg-indigo-200 border border-gray-500 text-gray-900 text-sm rounded-lg block w-full ps-10 p-2.5">
        </div><br>
        @if($date)
        <legend class="block mb-2 text-sm font-medium text-gray-900">Horas:</legend>
        @foreach($schedules as $schedule)
        <div class="flex items-center mb-4">
            <input wire:model.live="selectedTime" id="time-option-{{ $schedule->id }}" type="radio" name="time" value="{{ $schedule->time }}" {{
                in_array($schedule->time, $appointments) || ($schedule->time < $actualTime && $date == $actualDate) ? 'disabled' : '' }}
            class="w-4 h-4 border-gray-500 focus:ring-2 focus:ring-indigo-300">
            <label for="time-option-{{ $schedule->id }}"
                class="block ms-2 text-sm font-medium {{ in_array($schedule->time, $appointments) || ($schedule->time < $actualTime && $date == $actualDate) ? 'text-gray-300' : 'text-gray-900' }}">
                {{ $schedule->time }}
            </label>
        </div>
        @endforeach
        @endif
        @endif
        @endif
        <label for="observations"
            class="block mb-2 text-sm font-medium text-gray-900">Observaciones:</label>
        <textarea id="observations" name="observations" rows="4"
            class="block p-2.5 w-full text-sm text-gray-900 bg-indigo-200 rounded-lg border border-gray-500 placeholder-gray-700"
            placeholder="Escriba sus observaciones..."></textarea><br>
        <button type="submit"
            class="focus:ring-2 focus:ring-indigo-300 font-medium rounded-lg text-sm px-5 py-2.5 me-2 mb-10 {{ $time ? 'bg-indigo-400 hover:bg-indigo-500 text-gray-900' : 'bg-gray-500 text-white' }} focus:outline-none" {{ $time ? '' : 'disabled' }}>Solicitar
            cita</button>
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