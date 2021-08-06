<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Hari 6') }}
        </h2>
    </x-slot>

    <div class="py-12">

        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 mt-4 lg:w-1/3">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <span class="text-3xl text-center">Data Anda</span>

                    <hr class="my-4">

                    <table class="table w-full">
                        <tr>
                            <td class="capitalize">nama</td>
                            <td class="capitalize">:</td>
                            <td>{{ $data['nama'] }}</td>
                        </tr>
                        <tr>
                            <td class="capitalize">alamat</td>
                            <td class="capitalize">:</td>
                            <td>{{ $data['alamat'] }}</td>
                        </tr>
                        <tr>
                            <td class="capitalize">tempat</td>
                            <td class="capitalize">:</td>
                            <td>{{ $data['tempat'] }}</td>
                        </tr>
                        <tr>
                            <td class="capitalize">jkl</td>
                            <td class="capitalize">:</td>
                            <td>{{ $data['jkl'] }}</td>
                        </tr>
                        <tr>
                            <td class="capitalize">usia</td>
                            <td class="capitalize">:</td>
                            <td>{{ $data['usia'] }}</td>
                        </tr>

                    </table>
                </div>
            </div>
        </div>


    </div>

</x-app-layout>