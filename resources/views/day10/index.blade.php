<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Hari 10') }}
        </h2>
    </x-slot>

    <div class="py-12">

        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 mt-4 lg:w-1/3">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <span class="text-3xl text-black">
                        <center>Ubah Suhu</center>
                    </span>

                    <hr class="my-4">
                    <div class="form-control">
                        <label class="label">
                            <span class="label-text"></span>
                        </label>
                        <div class="relative">
                            <input type="number" placeholder="Celcius" required autofocus id="celcius"
                                class="w-full pr-16 input input-primary input-bordered">
                            <button class="absolute top-0 right-0 rounded-l-none btn btn-primary" id="go">GO</button>
                        </div>
                    </div>

                    <hr class="my-4">

                    <div class="form-control">
                        <div class="relative">
                            <input type="number" placeholder="Farenheit" required autofocus id="farenheit"
                                class="w-full pr-16 input input-primary input-bordered">
                            <span class="absolute top-0 right-0 rounded-l-none btn btn-primary">F</span>
                        </div>
                    </div>

                    <div class="form-control">
                        <label class="label">
                            <span class="label-text"></span>
                        </label>
                        <div class="relative">
                            <input type="number" placeholder="Reamur" required autofocus id="reamur"
                                class="w-full pr-16 input input-primary input-bordered">
                            <span class="absolute top-0 right-0 rounded-l-none btn btn-primary">R</span>
                        </div>
                    </div>

                    <div class="form-control">
                        <label class="label">
                            <span class="label-text"></span>
                        </label>
                        <div class="relative">
                            <input type="number" placeholder="Kelvin" required autofocus id="kelvin"
                                class="w-full pr-16 input input-primary input-bordered">
                            <span class="absolute top-0 right-0 rounded-l-none btn btn-primary">K</span>
                        </div>
                    </div>

                </div>
            </div>
        </div>

    </div>

    @section('script')

    <script src="https://code.jquery.com/jquery-3.6.0.js"
        integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>

    <script>

        $('#celcius').keyup(function(){
            
            var celcius = parseInt($('#celcius').val());

            var celToFar = (celcius * 9/5) + 32;
            var celToRe = 4/5 * celcius;
            var celToKel = celcius + 273.15;

            $('#farenheit').val(celToFar);
            $('#reamur').val(celToRe);
            $('#kelvin').val(celToKel);

        })

    </script>

    @endsection

</x-app-layout>