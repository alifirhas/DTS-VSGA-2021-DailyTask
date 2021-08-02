<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Hari 1') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <span class="text-3xl text-black">Luas lingkaran</span>

                    <hr class="my-4">


                    <div class="flex gap-3">
                        <div class="mb-4 flex-initial">
                            <x-label for="jenis" :value="__('Jenis')" />

                            <select name="jenis" id="jenis" required
                                class="rounded-md shadow-sm border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 block mt-1 w-full">
                                <option value="jari">Jari-jari</option>
                                <option value="diameter">Diameter</option>
                            </select>
                        </div>

                        <div class="mb-4 flex-1">
                            <x-label for="jarak" :value="__('Jari-jari / Diameter')" />

                            <x-input id="jarak" class="block mt-1 w-full" type="number" name="jarak" required />
                        </div>
                    </div>

                    <x-button-green class="w-full text-center mb-4" type="button" onclick="luasLingkaran()">
                        {{ __('Hitung') }}
                    </x-button-green>


                    <div class="mb-4">
                        <x-label for="hasilLingkaran" :value="__('Hasil')" />

                        <x-input id="hasilLingkaran" class="block mt-1 w-full" type="text"
                            name="hasilLingkaran" disabled />
                    </div>


                    <p x-text="message"></p>

                </div>

            </div>
        </div>

        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 mt-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <span class="text-3xl text-black">Besar kecil</span>

                    <hr class="my-4">

                    <div class="flex gap-3">
                        <div class="mb-4 flex-1">
                            <x-label for="bilSatu" :value="__('Bilangan Satu')" />

                            <x-input id="bilSatu" class="block mt-1 w-full" type="number" name="bilSatu"
                                required />
                        </div>

                        <div class="mb-4 flex-1">
                            <x-label for="bilDua" :value="__('Bilangan Dua')" />

                            <x-input id="bilDua" class="block mt-1 w-full" type="number" name="bilDua"
                                required />
                        </div>
                    </div>

                    <x-button-green class="w-full text-center mb-4" onclick="banding()">
                        {{ __('Tentukan') }}
                    </x-button-green>


                    <div class="mb-4">
                        <x-label for="hasilBanding" :value="__('Hasil')" />

                        <x-input id="hasilBanding" class="block mt-1 w-full" type="text"
                            name="hasilBanding" disabled />
                    </div>

                </div>

            </div>
        </div>
    </div>

    @section('script')
        
        <script>
            function luasLingkaran(){
                var jenis = document.getElementById('jenis').value;
                var jarak = document.getElementById('jarak').value;
                
                if (jenis == '' || jarak == '') {
                    document.getElementById('hasilLingkaran').value = "Harap isi semua form";
                    return;
                }

                var phi = Math.PI;
                var luas;

                if (jenis == 'diameter') {
                    jarak = jarak/2;
                }

                luas = phi * jarak * jarak;

                document.getElementById('hasilLingkaran').value = luas;

            }

            function banding(){
                var bilSatu = document.getElementById('bilSatu').value;
                var bilDua = document.getElementById('bilDua').value;

                if (bilSatu == '' || bilDua == '') {
                    document.getElementById('hasilBanding').value = "Harap isi semua form";
                    return;
                }

                var message = "sama dengan";

                if (bilSatu < bilDua) {
                    message = "lebih kecil dari";
                }

                if (bilSatu > bilDua) {
                    message = "lebih besar dari";
                }

                document.getElementById('hasilBanding').value = bilSatu + " " + message + " " + bilDua;

            }

        </script>

    @endsection

</x-app-layout>