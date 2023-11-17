<x-app>
    <header class="bg-gray-800 text-white py-4">
        <div class="container mx-auto">
            <a href="/plans/{{ $exercise->plan->id }}" class="i-back fixed top-4 left-5"></a>
            <h1 class="text-2xl font-semibold text-center">{{ $exercise->name }}</h1>
{{--            <a href="#" class="i-edit fixed top-5 right-5"></a>--}}
        </div>
    </header>
    <!-- Exercise Details -->
    <section class="container mx-auto my-8 px-4">
        <h2 class="text-2xl font-semibold text-gray-300 mb-4">Übungsdetails</h2>
        <div class="bg-gray-800 rounded-lg shadow-md p-4">
            <h3 class="text-3xl font-semibold text-white mb-2">{{ $exercise->name }}</h3>
            <div class="text-blue-400 mb-4">
                <span class="font-semibold">Sätze:</span> 3
                <span class="mx-2">|</span>
                <span class="font-semibold">Wiederholungen:</span> 12
            </div>
            <p class="text-gray-300">Beschreibung der Übung. Hier kannst du eine ausführliche Beschreibung der Übung hinzufügen.</p>
            <div class="mt-4">
                <iframe width="100%" height="315" src="https://www.youtube.com/embed/DEIN_VIDEO_ID" frameborder="0" allowfullscreen></iframe>
            </div>
        </div>
    </section>
</x-app>
