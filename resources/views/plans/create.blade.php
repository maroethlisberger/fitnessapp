<x-app>
    <header class="bg-gray-800 text-white py-4">
        <div class="container mx-auto">
            <a href="/plans/manage" class="i-back fixed top-4 left-5"></a>
            <h1 class="text-2xl font-semibold text-center">Neuer Plan</h1>
        </div>
    </header>
    <!-- Exercise Details -->
    <section class="container mx-auto my-8 px-4">
        <h2 class="text-2xl font-semibold text-gray-300 mb-4">Plan details</h2>
        <form method="POST" action="/plans/store">
            @csrf

        <div class="bg-gray-800 rounded-lg shadow-md p-4">
            <div class="mb-4">
                <label for="exerciseName" class="text-lg text-white font-semibold mb-2 block ">Planname:</label>
                <input type="text" id="name" name="name" class="w-full rounded p-2 border border-gray-500 focus:outline-none bg-gray-600"/>
            </div>
            <button class="mt-10 bg-blue-500 text-white px-4 py-2 rounded-md block text-center mx-auto w-1/2">Save</button>
{{--            <a href="/plans/manage"--}}
{{--               class="">Speichern</a>--}}
        </div>
        </form>
    </section>


</x-app>
