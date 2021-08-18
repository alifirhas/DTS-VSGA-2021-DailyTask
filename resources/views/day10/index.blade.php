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
                            <button class="absolute top-0 right-0 rounded-l-none btn btn-primary">C</button>
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

        function celConvert(to, deg){
            
            if (to == 'far') {
                return (deg * 9/5) + 32;
            }

            if (to == 're') {
                return 4/5 * deg;
            }

            if (to == 'kel') {
                return deg + 273.15;
            }

            return deg;
            
        }

        function farConvert(to, deg){

            if (to == 'cel') {
                return (deg - 32)*5/9;

            }

            if (to == 're') {
                return (4/9)*(deg - 32);
            }

            if (to == 'kel') {
                return ((deg - 32)*5/9)+273.15;
            }

            return deg;
        }

        function reConvert(to, deg){

            if (to == 'cel') {
                return 5/4*deg;

            }

            if (to == 'far') {
                return 9/4*deg+32
            }

            if (to == 'kel') {
                return (5/4*deg)+273.15;
            }

            return deg;
        }

        function kelConvert(to, deg){

            if (to == 'cel') {
                return deg - 273.15;

            }

            if (to == 'far') {
                return (deg - 273.15) * 9/5 + 32;
            }

            if (to == 're') {
                return 4/5*(deg-273)
            }

            return deg;

        }

        $('#celcius').keyup(function(){
            
            var celcius = parseFloat($('#celcius').val());

            $('#farenheit').val(celConvert('far', celcius));
            $('#reamur').val(celConvert('re', celcius));
            $('#kelvin').val(celConvert('kel', celcius));

        })

        $('#farenheit').keyup(function(){
            
            var farenheit = parseFloat($('#farenheit').val());

            $('#celcius').val(farConvert('cel', farenheit));
            $('#reamur').val(farConvert('re', farenheit));
            $('#kelvin').val(farConvert('kel', farenheit));

        })

        $('#reamur').keyup(function(){
            
            var reamur = parseFloat($('#reamur').val());

            $('#celcius').val(reConvert('cel', reamur));
            $('#farenheit').val(reConvert('far', reamur));
            $('#kelvin').val(reConvert('kel', reamur));

        })

        $('#kelvin').keyup(function(){
            
            var kelvin = parseFloat($('#kelvin').val());

            $('#celcius').val(kelConvert('cel', kelvin));
            $('#farenheit').val(kelConvert('far', kelvin));
            $('#reamur').val(kelConvert('re', kelvin));

        })

    </script>

    @endsection

</x-app-layout>