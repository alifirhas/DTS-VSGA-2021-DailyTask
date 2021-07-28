<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <span class="text-3xl">Latihan membuat Form Fill-in</span>
                </div>
            </div>
        </div>

        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 mt-8 lg:w-1/3">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <span class="text-3xl">Register</span>
        
                    <hr class="my-4">
        
                    <form method="POST" action="https://www.youtube.com/watch?v=2xx_2XNxxfA">
                        @csrf
        
                        <!-- Name -->
                        <div>
                            <x-label for="name" :value="__('Name')" />
        
                            <x-input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')"
                                required autofocus />
                        </div>
        
                        <!-- Email Address -->
                        <div class="mt-4">
                            <x-label for="email" :value="__('Email')" />
        
                            <x-input id="email" class="block mt-1 w-full" type="email" name="email"
                                :value="old('email')" required />
                        </div>
        
                        <!-- Password -->
                        <div class="mt-4">
                            <x-label for="password" :value="__('Password')" />
        
                            <x-input id="password" class="block mt-1 w-full" type="password" name="password" required
                                autocomplete="new-password" />
                        </div>
        
                        <!-- Confirm Password -->
                        <div class="mt-4">
                            <x-label for="password_confirmation" :value="__('Confirm Password')" />
        
                            <x-input id="password_confirmation" class="block mt-1 w-full" type="password"
                                name="password_confirmation" required />
                        </div>
        
                        <hr class="my-8">
        
                        <p>
                            By creating this you agree to our 
                            <a class="text-blue-400 underline" target="_blank"
                                href="" onclick="window.open('https://www.youtube.com/watch?v=2xx_2XNxxfA', '_blank') ">Terms & Privacy</a>.
                        </p>
                        
                        <div class="flex items-center justify-end mt-4">
                            <a class="underline text-sm text-gray-600 hover:text-gray-900" href="{{ route('login') }}">
                                {{ __('Already registered?') }}
                            </a>
        
                            <x-button class="ml-4 bg-green-400 text-bold hover:bg-green-600">
                                {{ __('Register') }}
                            </x-button>
                        </div>
                    </form>
        
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