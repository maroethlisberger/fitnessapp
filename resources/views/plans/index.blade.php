<x-app>
    <header class="bg-gray-800 text-white py-4">
        <div class="container mx-auto">
            <h1 class="text-2xl font-semibold text-center">Fitness App</h1>
        </div>
    </header>
    <!-- Exercise List -->
    <section class="container mx-auto my-4 sm:my-8 px-4 sm:px-0">
        <h2 class="text-2xl font-semibold text-gray-300 mb-4">Pläne</h2>
        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-4">
            @unless(count($plans) == 0)
                @foreach($plans as $plan)
                    <!-- Plans -->
                    <div class="bg-gray-800 rounded-lg shadow-md p-4">
                        <h3 class="text-xl font-semibold text-white">{{ $plan->name }}</h3>
                        {{--                        <p class="text-gray-300">{{ $plan->description }}</p>--}}
                        <a href="/plans/{{ $plan->id }}"
                           class="mt-2 bg-blue-500 text-white px-4 py-2 rounded-md hover:bg-blue-600 block text-center">Zum
                            Plan</a>
                    </div>
                @endforeach

            @else
                <p>Kein Plan gefunden</p>
            @endunless

        </div>
    </section>
</x-app>
