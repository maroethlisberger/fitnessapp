<x-app>
    <header class="bg-gray-800 text-white py-4">
        <div class="container mx-auto">
            <a href="/exercises/manage/{{ $exercise->plan->id }}" class="i-back fixed top-4 left-5"></a>
            <h1 class="text-2xl font-semibold text-center">{{ $exercise->name }}</h1>
        </div>
    </header>
    <!-- Exercise Details -->
    <section class="container mx-auto my-8 px-4">
        <h2 class="text-2xl font-semibold text-gray-300 mb-4">Übungsdetails</h2>

            <div class="bg-gray-800 rounded-lg shadow-md p-4">
                <form action="/exercises/update/{{ $exercise->id }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                <div class="mb-4">
                    <label for="exerciseName" class="text-lg text-white font-semibold mb-2 block ">Übungsnamen:</label>
                    <input type="text" id="name" name="name"
                           class="w-full rounded p-2 border border-gray-500 focus:outline-none bg-gray-600"
                           value="{{ $exercise->name }}"/>
                </div>
                <div class="mb-4">
                    <label for="exerciseName" class="text-lg text-white font-semibold mb-2 block ">Sätze:</label>
                    <input type="text" id="sets" name="sets"
                           class="w-full rounded p-2 border border-gray-500 focus:outline-none bg-gray-600"
                           value="{{ $exercise->sets }}"/>
                </div>
                <div class="mb-4">
                    <label for="exerciseName"
                           class="text-lg text-white font-semibold mb-2 block ">Wiederholungen:</label>
                    <input type="text" id="repetitions" name="repetitions"
                           class="w-full rounded p-2 border border-gray-500 focus:outline-none bg-gray-600"
                           value="{{ $exercise->repetitions }}"/>
                </div>
                <div class="mb-4">
                    <label for="exerciseName" class="text-lg text-white font-semibold mb-2 block ">Beschreibung:</label>
                    <input type="text" id="description" name="description"
                           class="w-full rounded p-2 border border-gray-500 focus:outline-none bg-gray-600"
                           value="{{ $exercise->description }}"/>
                </div>
                <div class="mb-4">
                    <label for="exerciseName" class="text-lg text-white font-semibold mb-2 block ">Video Url:</label>
                    <input type="text" id="video_path" name="video_path"
                           class="w-full rounded p-2 border border-gray-500 focus:outline-none bg-gray-600"
                           value="{{ $exercise->video_path }}"/>
                </div>
                    <button type="submit" class="mt-10 bg-blue-500 text-white px-4 py-2 rounded-md block text-center mx-auto w-1/2">Speichern</button>
                </form>
                    <form method="POST" action="/exercises/delete/{{$exercise->id}}">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="mt-5 bg-red-500 text-white px-4 py-2 rounded-md block text-center mx-auto w-1/2">Löschen</button>
                    </form>

            </div>

    </section>



</x-app>
