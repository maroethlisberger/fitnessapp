<x-app>
    <header class="bg-gray-800 text-white py-4">
        <div class="container mx-auto">
            <a href="/edit" class="i-back fixed top-4 left-5"></a>
            <h1 class="text-2xl font-semibold text-center">{{ $plan->name }}</h1>
            <a href="#" class="i-edit fixed top-5 right-5"></a>
            <a href="#" class="i-plus-sm fixed top-5 right-16"></a>
        </div>
    </header>
    <section class="container mx-auto my-4 sm:my-8 px-4 sm:px-0">
        <h2 class="text-2xl font-semibold text-gray-300 mb-4">Übungen</h2>
        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-4">
            @unless(count($exercises) == 0)
                @foreach($exercises as $exercise)
                    <div class="bg-gray-800 rounded-lg shadow-md p-4">
                        <div class="flex justify-between items-center">
                            <h3 class="text-xl font-semibold text-white">{{ $exercise->name }}</h3>
                            <a href="/edit/exercises/{{ $exercise->id }}" class="i-edit"></a>
                        </div>
                        <div class="text-blue-400">
                            <span class="font-semibold">Sätze:</span> {{ $exercise->sets }}
                            <span class="mx-2">|</span>
                            <span class="font-semibold">Wiederholungen:</span> {{ $exercise->repetitions }}
                        </div>
                        <p class="text-gray-300">Beschreibung</p>
                    </div>
                @endforeach

            @else
                <p>Keine Äbung gefunden</p>
            @endunless
        </div>


    </section>
</x-app>
