<x-app>
    <header class="bg-gray-800 text-white py-4">
        <div class="container mx-auto">
            <a href="/exercises/manage/{{ $plan->id }}" class="i-back fixed top-4 left-5"></a>
            <h1 class="text-2xl font-semibold text-center">Neue übung</h1>
        </div>
    </header>
    <!-- Exercise Details -->
    <section class="container mx-auto my-8 px-4">
        <h2 class="text-2xl font-semibold text-gray-300 mb-4">Übungsdetails</h2>
        <form method="POST" action="/exercises/store/{{ $plan->id }}">
            @csrf
            <div class="bg-gray-800 rounded-lg shadow-md p-4">
                <div class="mb-4">
                    <label for="name" class="text-lg text-white font-semibold mb-2 block ">Übungsnamen:</label>
                    <input type="text" id="name" name="name"
                           class="w-full rounded p-2 border border-gray-500 focus:outline-none bg-gray-600"/>
                </div>
                <div class="mb-4">
                    <label for="sets" class="text-lg text-white font-semibold mb-2 block ">Sätze:</label>
                    <input type="text" id="sets" name="sets"
                           class="w-full rounded p-2 border border-gray-500 focus:outline-none bg-gray-600"/>
                </div>
                <div class="mb-4">
                    <label for="repetitions" class="text-lg text-white font-semibold mb-2 block ">Wiederholungen:</label>
                    <input type="text" id="repetitions" name="repetitions"
                           class="w-full rounded p-2 border border-gray-500 focus:outline-none bg-gray-600"/>
                </div>
                <div class="mb-4">
                    <label for="description" class="text-lg text-white font-semibold mb-2 block ">Beschreibung:</label>
                    <input type="text" id="description" name="description"
                           class="w-full rounded p-2 border border-gray-500 focus:outline-none bg-gray-600"/>
                </div>
                <div class="mb-4">
                    <label for="video_path" class="text-lg text-white font-semibold mb-2 block ">Video Url:</label>
                    <input type="text" id="video_path" name="video_path"
                           class="w-full rounded p-2 border border-gray-500 focus:outline-none bg-gray-600"/>
                </div>
                <button type="submit" class="mt-10 bg-blue-500 text-white px-4 py-2 rounded-md block text-center mx-auto w-1/2">Speichern</button>
            </div>
        </form>

    </section>


</x-app>
