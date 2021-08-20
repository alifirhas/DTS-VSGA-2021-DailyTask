<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Hari 11') }}
        </h2>
    </x-slot>

    <div class="py-4">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <span class="text-3xl text-black">Printer</span>
                    <a href="#my-modal" class="btn btn-primary btn-sm float-right">Tambah baru</a>


                    <hr class="my-4">
                    {{-- 
                        nama merek -> input text
                        warna -> select
                        jumlah -> integer
                        --}}

                    @if (session()->has('error'))

                    <div class="alert alert-error">
                        <div class="flex-1">
                            <label>
                                {{ session('error') }}
                            </label>
                        </div>
                        <div class="flex-none">
                            <svg class="fill-current h-6 w-6 text-red-500" role="button" id="alertClose"
                                xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                                <title>Close</title>
                                <path
                                    d="M14.348 14.849a1.2 1.2 0 0 1-1.697 0L10 11.819l-2.651 3.029a1.2 1.2 0 1 1-1.697-1.697l2.758-3.15-2.759-3.152a1.2 1.2 0 1 1 1.697-1.697L10 8.183l2.651-3.031a1.2 1.2 0 1 1 1.697 1.697l-2.758 3.152 2.758 3.15a1.2 1.2 0 0 1 0 1.698z" />
                            </svg>
                        </div>
                    </div>
                    @endif

                    @if (session()->has('success'))

                    <div class="alert alert-info">
                        <div class="flex-1">
                            <label>
                                {{ session('success') }}
                            </label>
                        </div>
                        <div class="flex-none">
                            <svg class="fill-current h-6 w-6 text-blue-500" role="button" id="alertClose"
                                xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                                <title>Close</title>
                                <path
                                    d="M14.348 14.849a1.2 1.2 0 0 1-1.697 0L10 11.819l-2.651 3.029a1.2 1.2 0 1 1-1.697-1.697l2.758-3.15-2.759-3.152a1.2 1.2 0 1 1 1.697-1.697L10 8.183l2.651-3.031a1.2 1.2 0 1 1 1.697 1.697l-2.758 3.152 2.758 3.15a1.2 1.2 0 0 1 0 1.698z" />
                            </svg>
                        </div>
                    </div>

                    @endif

                    <div class="overflow-x-auto">
                        <table class="table w-full table-zebra table-compact">
                            <thead>
                                <tr>
                                    <th>no.</th>
                                    <th>Merek</th>
                                    <th>Warna</th>
                                    <th>Jumlah</th>
                                    <th>menu</th>
                                </tr>
                            </thead>
                            <tbody>

                                @php
                                $i = ($printers->currentpage()-1)* $printers->perpage() + 1;
                                @endphp
                                @if ($printers->count())
                                @foreach ($printers as $printer)

                                <tr class="group">
                                    <th class="group-hover:bg-gray-100">{{ $i }}</th>
                                    <form action="{{ route('day.eleven.update', $printer) }}" method="POST"
                                        id="updatePrinter{{ $printer->id }}">
                                        @method('PUT')
                                        @csrf
                                        <td class="group-hover:bg-gray-100">
                                            <input type="text" required id="merek" name="merek" placeholder="Merek"
                                                class="input focus:input-bordered border-0 bg-transparent"
                                                list="listMerek" value="{{ $printer->merek }}">
                                            @error('*')
                                            <div class="text-red-500 mt-2 text-sm">
                                                {{ $message }}
                                            </div>
                                            @enderror
                                        </td>
                                        <td class="group-hover:bg-gray-100">
                                            <select required id="warna" name="warna"
                                                class="select focus:select-bordered border-0 bg-transparent">
                                                <option disabled="disabled" selected="selected">Pilih warna</option>

                                                @foreach ($colors as $color)

                                                <option @if ($printer->color->id == $color->id) selected @endif
                                                    value="{{ $color->id }}">{{ $color->warna }}</option>

                                                @endforeach
                                            </select>
                                        </td>
                                        <td class="group-hover:bg-gray-100">
                                            <input type="number" required id="jumlah" name="jumlah" placeholder="Jumlah"
                                                class="input focus:input-bordered border-0 bg-transparent"
                                                value="{{ $printer->jumlah }}">
                                        </td>
                                    </form>
                                    {{-- <td>{{ $printer->merek }}</td> --}}
                                    {{-- <td>{{ $printer->color->warna }}</td>
                                    <td>{{ $printer->jumlah }}</td> --}}
                                    <td class="group-hover:bg-gray-100">
                                        <form action="{{ route('day.eleven.delete', $printer) }}" method="POST"
                                            id="hapusPrinter{{ $printer->id }}">
                                            @method('DELETE')
                                            @csrf
                                        </form>
                                        <div class="">
                                            <button form="updatePrinter{{ $printer->id }}"
                                                class="btn btn-sm btn-outline">Update</button>
                                            <button form="hapusPrinter{{ $printer->id }}"
                                                class="btn btn-sm btn-secondary"
                                                onclick="return confirm('yakin dihapus?')">Hapus</button>
                                        </div>
                                    </td>
                                </tr>

                                @php
                                $i++
                                @endphp
                                @endforeach
                                @else
                                <tr>
                                    <td colspan="5" class="text-center">Masih belum ada data</td>
                                </tr>
                                @endif

                        </table>

                        <div class="my-4">
                            
                            {{ $printers->links() }}
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>

    <div id="my-modal" class="modal">
        <div class="indicator">
            <div class="indicator-item">
                <a href="#" class="btn bg-red-600 border-red-600 hover:bg-red-400 hover:border-red-400">X</a>
            </div>
            <div class="modal-box">
                <form action="{{ route('day.eleven.index') }}" method="POST">
                    @csrf
                    <div class="form-control">
                        <label class="label">
                            <span class="label-text">Merek</span>
                        </label>
                        <input type="text" required autofocus autocomplete="off" id="merek" name="merek" placeholder="Merek"
                            class="input input-bordered" list="listMerek" value="{{ old('merek') }}">

                        @error('merek')
                        <div class="text-red-500 mt-2 text-sm">
                            {{ $message }}
                        </div>
                        @enderror
                    </div>

                    <div class="form-control">
                        <label class="label">
                            <span class="label-text">Warna</span>
                        </label>
                        <select required id="warna" name="warna" class="select select-bordered w-full">
                            <option disabled="disabled" selected="selected">Pilih warna</option>

                            @foreach ($colors as $color)

                            <option @if (old('warna')==$color->id) selected @endif
                                value="{{ $color->id }}">{{ $color->warna }}</option>

                            @endforeach
                        </select>

                        @error('warna')
                        <div class="text-red-500 mt-2 text-sm">
                            {{ $message }}
                        </div>
                        @enderror
                    </div>

                    <div class="form-control">
                        <label class="label">
                            <span class="label-text">Jumlah</span>
                        </label>
                        <input type="number" required id="jumlah" name="jumlah" maxlength="3"
                            oninput="this.value=this.value.slice(0,this.maxLength)" placeholder="Jumlah"
                            class="input input-bordered" value="{{ old('jumlah') }}">

                        @error('jumlah')
                        <div class="text-red-500 mt-2 text-sm">
                            {{ $message }}
                        </div>
                        @enderror
                    </div>

                    <div class="mt-4 grid grid-cols-2 gap-2">

                        <button class="btn btn-outline btn-primary w-full order-last" type="submit">
                            <img src="https://image.flaticon.com/icons/png/512/2983/2983818.png"
                                class="inline-block w-4 h-4 stroke-current md:w-6 md:h-6" alt="">
                        </button>
                        <button class="btn btn-outline btn-secondary" title="reset" type="reset">
                            <img src="https://image.flaticon.com/icons/png/512/126/126502.png"
                                class="inline-block w-4 h-4 stroke-current md:w-6 md:h-6" alt="">
                        </button>
                    </div>

                </form>
            </div>
        </div>
    </div>

    <datalist id="listMerek">
        @foreach ($merekList as $merek)
        <option value="{{ $merek->merek }}" />
        @endforeach
    </datalist>

    @section('head')

    <link rel="stylesheet" href="https://fontawesome.com/releases/v5.10.0/css/all.css"
        integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous" />

    @endsection

    @section('script')

    <script src="https://code.jquery.com/jquery-3.6.0.js"
        integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
    <script>


        $('.alert').click(function(){

            $(this).hide()
        })

    </script>

    @endsection

    {{-- 
        tempat ngumpulkan : https://drive.google.com/drive/folders/1sojG3n-stsgfv3P0QkDJfkKm6VLhCaTK
        --}}
</x-app-layout>