<x-app>
    <header class="bg-gray-800 text-white py-4">
        <div class="container mx-auto">
            {{--            <a href="#" class="i-back fixed top-4 left-5"></a>--}}
            <h1 class="text-2xl font-semibold text-center">Plans</h1>
            {{--            <a href="#" class="i-edit fixed top-5 right-5"></a>--}}
            {{--            <a href="#" class="i-plus-sm fixed top-5 right-16"></a>--}}
        </div>
    </header>
    <!-- Exercise List -->
    <section class="container mx-auto my-4 sm:my-8 px-4 sm:px-0">
        <h2 class="text-2xl font-semibold text-gray-300 mb-4">Bearbeiten</h2>
        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-4">
            @unless(count($plans) == 0)
                @foreach($plans as $plan)
                    <!-- Plans -->
                    <div class="bg-gray-800 rounded-lg shadow-md p-4">
                        <div class="flex justify-between items-center">
                            <h3 class="text-xl font-semibold text-white">{{ $plan->name }} </h3>
                            <a href="/edit/plans/{{ $plan->id }}" class="i-edit"></a>
                        </div>
{{--                        <a href="#" class="i-edit"></a>--}}
{{--                        <p class="text-gray-300">{{ $plan->description }}</p>--}}

                    </div>
                @endforeach

            @else
                <p>Kein Plan gefunden</p>
            @endunless
            <a href="#" class="hover:text-blue-500 i-plus edit-add"></a>
        </div>
    </section>
</x-app>
