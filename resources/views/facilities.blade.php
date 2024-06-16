<x-app-layout>
    <div class="py-12">
        <div class="grid grid-cols-1">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                @foreach($consultingRooms as $consultingRoom)
                @if($consultingRoom->id % 2 == 1)
                <div
                    class="mb-5 flex flex-col items-center bg-white border border-gray-200 rounded-lg shadow md:flex-row md:max-w-xl hover:bg-gray-100 dark:border-gray-700 dark:bg-gray-800 dark:hover:bg-gray-700">
                    <img class="object-cover w-full rounded-t-lg h-96 md:h-auto md:w-48 md:rounded-none md:rounded-s-lg"
                        src="{{ asset($route . $consultingRoom->photo) }}" alt="Foto {{ $consultingRoom->name }}">
                    <div class="flex flex-col justify-between p-4 leading-normal">
                        <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">{{
                            $consultingRoom->name }}</h5>
                        <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">{{ $consultingRoom->description }}
                        </p>
                    </div>
                </div>
                @else
                <div
                    class="mb-5 flex flex-col items-center bg-white border border-gray-200 rounded-lg shadow md:flex-row md:max-w-xl hover:bg-gray-100 dark:border-gray-700 dark:bg-gray-800 dark:hover:bg-gray-700">
                    <div class="flex flex-col justify-between p-4 leading-normal">
                        <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">{{
                            $consultingRoom->name }}</h5>
                        <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">{{ $consultingRoom->description }}
                        </p>
                    </div>
                    <img class="object-cover w-full rounded-t-lg h-96 md:h-auto md:w-48 md:rounded-none md:rounded-s-lg"
                        src="{{ asset($route . $consultingRoom->photo) }}" alt="Foto {{ $consultingRoom->name }}">
                </div>
                @endif
                @endforeach
            </div>
        </div>
    </div>
</x-app-layout>