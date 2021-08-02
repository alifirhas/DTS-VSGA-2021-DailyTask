<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Hari 4') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <span class="text-3xl text-black">
                        Selamat Belajar HTML
                    </span>
                    <br>
                    <span class="text-3xl text-black">
                        Semoga Sukses!
                    </span>
                </div>
            </div>
        </div>

        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 mt-4">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <ul class="divide-y">
                        <li class="py-3">ini list</li>
                        <li class="py-3">ini list</li>
                        <li class="py-3">ini list</li>
                        <li class="py-3">ini list</li>
                        <li class="py-3">ini list</li>
                    </ul>
                </div>
            </div>
        </div>

        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 mt-4">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <p class="text-xs text-gray-500">The quick brown fox ...</p>
                    <p class="text-sm text-red-500">The quick brown fox ...</p>
                    <p class="text-base text-yellow-500">The quick brown fox ...</p>
                    <p class="text-lg text-green-500">The quick brown fox ...</p>
                    <p class="text-xl text-blue-500">The quick brown fox ...</p>
                    <p class="text-2xl text-indigo-500">The quick brown fox ...</p>
                    <p class="text-3xl text-purple-500">The quick brown fox ...</p>
                    <p class="text-4xl text-pink-500">The quick brown fox ...</p>
                </div>
            </div>
        </div>



    </div>

    @section('script')

    <script>

    </script>

    @endsection

</x-app-layout>