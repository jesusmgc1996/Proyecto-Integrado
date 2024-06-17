<x-app-layout>
    <div class="py-12">
        <div class="grid grid-cols-1">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 mb-10">
                @foreach($consultingRooms as $consultingRoom)
                @if($consultingRoom->id % 2 == 1)
                <div
                    class="mb-5 flex flex-col items-center md:flex-row md:max-w-xl">
                    <img class="object-cover w-48 rounded img-consultingRoom"
                        src="{{ asset($route . $consultingRoom->photo) }}" alt="Foto {{ $consultingRoom->name }}">
                    <div class="flex flex-col justify-between p-4 leading-normal">
                        <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900">{{
                            $consultingRoom->name }}</h5>
                        <p class="mb-3 font-normal text-gray-900">{{ $consultingRoom->description }}
                        </p>
                    </div>
                </div>
                @else
                <div
                    class="mb-5 flex flex-col items-center md:flex-row md:max-w-xl">
                    <div class="flex flex-col justify-between p-4 leading-normal">
                        <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900">{{
                            $consultingRoom->name }}</h5>
                        <p class="mb-3 font-normal text-gray-900">{{ $consultingRoom->description }}
                        </p>
                    </div>
                    <img class="object-cover w-48 rounded img-consultingRoom"
                        src="{{ asset($route . $consultingRoom->photo) }}" alt="Foto {{ $consultingRoom->name }}">
                </div>
                @endif
                @endforeach
            </div>
        </div>
    </div>
</x-app-layout>