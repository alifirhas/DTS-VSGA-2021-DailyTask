<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Hari 2') }}
        </h2>
    </x-slot>

    <div class="py-12">

        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 mt-4 lg:w-1/3">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <span class="text-3xl text-black">
                        <center>Pesanan</center>
                    </span>

                    <hr class="my-4">

                    @foreach ($items as $item)
                        <div class="mb-2">

                            <span class="btn text-justify btn-xs md:btn-sm lg:btn-md xl:btn-lg w-full order-btn normal-case" 
                                id="order-btn" 
                                dataprice="{{ $item['harga'] }}">
                                <div class="grid grid-cols-2 w-full">
                                    <span class="text-left capitalize">{{ $item['title'] }}</span>
                                    <span class="text-right">Rp{{ $item['harga'] }}</span>
                                </div>
                                
                            </span>

                            {{-- <input type="checkbox" name="item-{{ $i }}" id="item-{{ $i }}" class="hidden"> --}}
                        </div>
                    @endforeach

                    <hr>

                    <table class="table w-full">
                        <tr>
                            <td>Total</td>
                            <td>:</td>
                            <td class="text-right">
                                <span class="btn btn-primary btn-lg normal-case">
                                    Rp<span id="total">0</span>
                                </span>
                            </td>
                        </tr>
                    </table>

                </div>
            </div>
        </div>

    </div>

    @section('script')

    <script src="https://code.jquery.com/jquery-3.6.0.js"
        integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>

    <script>

        $('#dudu').click(function(){
            alert('hello');
        })

        $('[id^="order-btn"]').click(function(){
            $(this).toggleClass('btn-accent');

            var price = $(this).attr("dataprice");    
            var total = $('#total').text();

            if($(this).hasClass('btn-accent')){
    
                var newTotal = parseInt(total) + parseInt(price);
        
                $('#total').text(newTotal);
            }else{
                var newTotal = parseInt(total) - parseInt(price);
    
                $('#total').text(newTotal);

            }

        })




    </script>

    @endsection

</x-app-layout>