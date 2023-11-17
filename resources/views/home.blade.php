<x-app>
    <!-- Header -->
    <header class="bg-gray-800 text-white py-4">
        <div class="container mx-auto">
            <h1 class="text-2xl font-semibold text-center">Fitness App</h1>
        </div>
    </header>

    <!-- Exercise List -->
    <section class="container mx-auto my-4 sm:my-8 px-4 sm:px-0">
        <h2 class="text-2xl font-semibold text-gray-300 mb-4">Übungen</h2>
        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-4">
            <!-- Übung 1 -->
            <div class="bg-gray-800 rounded-lg shadow-md p-4">
                <h3 class="text-xl font-semibold text-white">Übung 1</h3>
                <div class="text-blue-400">
                    <span class="font-semibold">Sätze:</span> 3
                    <span class="mx-2">|</span>
                    <span class="font-semibold">Wiederholungen:</span> 12
                </div>
                <p class="text-gray-300">Beschreibung der Übung 1.</p>
                <a href="/exercise" class="mt-2 bg-blue-500 text-white px-4 py-2 rounded-md hover:bg-blue-600 block text-center">Mehr Info</a>
            </div>

            <!-- Übung 2 -->
            <div class="bg-gray-800 rounded-lg shadow-md p-4">
                <h3 class="text-xl font-semibold text-white">Übung 2</h3>
                <div class="text-blue-400">
                    <span class="font-semibold">Sätze:</span> 4
                    <span class="mx-2">|</span>
                    <span class="font-semibold">Wiederholungen:</span> 10
                </div>
                <p class="text-gray-300">Beschreibung der Übung 2.</p>
                <a href="/exercise" class="mt-2 bg-blue-500 text-white px-4 py-2 rounded-md hover:bg-blue-600 block text-center">Mehr Info</a>
            </div>

            <!-- Übung 3 -->
            <div class="bg-gray-800 rounded-lg shadow-md p-4">
                <h3 class="text-xl font-semibold text-white">Übung 3</h3>
                <div class="text-blue-400">
                    <span class="font-semibold">Sätze:</span> 3
                    <span class="mx-2">|</span>
                    <span class="font-semibold">Wiederholungen:</span> 15
                </div>
                <p class="text-gray-300">Beschreibung der Übung 3.</p>
                <a href="/exercise" class="mt-2 bg-blue-500 text-white px-4 py-2 rounded-md hover:bg-blue-600 block text-center">Mehr Info</a>
            </div>

            <!-- Weitere Übungen hier einfügen -->
        </div>
    </section>
</x-app>
