<x-app>
    <header class="bg-gray-800 text-white py-4">
        <div class="container mx-auto">
            <a href="/exercises/manage/{{ $plan->id }}" class="i-back fixed top-4 left-5"></a>
            <h1 class="text-2xl font-semibold text-center">{{ $plan->name }}</h1>
        </div>
    </header>
    <!-- Exercise Details -->
    <section class="container mx-auto my-8 px-4">
        <h2 class="text-2xl font-semibold text-gray-300 mb-4">Plan details</h2>

        <div class="bg-gray-800 rounded-lg shadow-md p-4">
            <form action="/plans/update/{{ $plan->id }}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                <div class="mb-4">
                    <label for="name" class="text-lg text-white font-semibold mb-2 block ">Planname:</label>
                    <input type="text" id="name" name="name"
                           class="w-full rounded p-2 border border-gray-500 focus:outline-none bg-gray-600"
                           value="{{ $plan->name }}"/>

                </div>

                <button type="submit"
                        class="mt-10 bg-blue-500 text-white px-4 py-2 rounded-md block text-center mx-auto w-1/2">
                    Speichern
                </button>
            </form>
            <form method="POST" action="/plans/delete/{{$plan->id}}">
                @csrf
                @method('DELETE')
                <button type="submit"
                        class="mt-5 bg-red-500 text-white px-4 py-2 rounded-md block text-center mx-auto w-1/2">Löschen
                </button>
            </form>
        </div>


    </section>


</x-app>
