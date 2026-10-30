<x-Header>
     <div class="max-w-6xl mx-auto">

        <div class="mb-8">
            <h1 class="text-3xl font-bold text-gray-900">
                My Tags
            </h1>

            <p class="mt-2 text-gray-500">
                A collection of things I've been building.
            </p>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 xl:grid-cols-3 gap-6">

            @foreach ($tags as $tag)
                <div class="group bg-white border border-gray-200 rounded-2xl p-6 shadow-sm hover:shadow-lg hover:-translate-y-1 transition duration-300">
                    <h1>{{ $tag['name'] }}</h1>
                </div>
            @endforeach

        </div>
    </div>
</x-Header>
