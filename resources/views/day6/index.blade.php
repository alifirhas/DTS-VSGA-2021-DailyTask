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
                    <span class="text-3xl text-black">Register</span>

                    <hr class="my-4">

                    <form method="POST" action="{{ route('day.six.view') }}">
                        @csrf
                        {{-- Nama, alamat, tempat, jenis kelamin, dan usia --}}
                        <!-- Name -->

                        <div class="form-control">
                            <label class="label" for="nama">
                                <span class="label-text">Nama</span>
                            </label>
                            <input name="nama" type="text" placeholder="Nama" id="nama" class="input input-bordered"
                                value="{{ old('nama') }}" required autofocus>
                            @error('nama')
                            <span class="text-xs text-red-600 dark:text-red-400 mt-2">
                                {{ $message }}
                            </span>
                            @enderror
                        </div>

                        <div class="form-control mt-2">
                            <label class="label" for="alamat">
                                <span class="label-text">Alamat</span>
                            </label>
                            <textarea name="alamat" class="textarea h-24 textarea-bordered" placeholder="Alamat"
                                id="alamat" class="input input-bordered" required> {{ old('alamat') }} </textarea>
                            @error('alamat')
                            <span class="text-xs text-red-600 dark:text-red-400 mt-2">
                                {{ $message }}
                            </span>
                            @enderror
                        </div>

                        <div class="form-control mt-2">
                            <label class="label" for="tempat">
                                <span class="label-text">Tempat</span>
                            </label>
                            <input name="tempat" type="text" placeholder="tempat" id="tempat"
                                class="input input-bordered" value="{{ old('tempat') }}" required>
                            @error('tempat')
                            <span class="text-xs text-red-600 dark:text-red-400 mt-2">
                                {{ $message }}
                            </span>
                            @enderror
                        </div>

                        <div class="form-control mt-2">
                            <label class="label" for="jkl">
                                <span class="label-text">Jenis Kelamin</span>
                            </label>
                            <div class="">
                                <div class="form-control">
                                    <label class="cursor-pointer">
                                        <input type="radio" name="jkl" class="radio" value="laki-laki" required>
                                        <span class="label-text">Laki-Laki</span>
                                    </label>
                                </div>
                                <div class="form-control mt-2">
                                    <label class="cursor-pointer">
                                        <input type="radio" name="jkl" class="radio" value="perempuan" required>
                                        <span class="label-text">Perempuan</span>
                                    </label>
                                </div>
                                <div class="form-control mt-2">
                                    <label class="cursor-pointer">
                                        <input type="radio" name="jkl" class="radio" value="lainnya"
                                            class="inline-block" required>
                                        <span class="label-text inline-block">Lainnya</span>
                                    </label>
                                </div>

                            </div>

                            <div class="form-control mt-2">
                                <label class="label" for="usia">
                                    <span class="label-text">usia</span>
                                </label>
                                <input name="usia" type="number" placeholder="usia" id="usia"
                                    class="input input-bordered" value="{{ old('usia') }}" maxlength="2" required>
                                @error('usia')
                                <span class="text-xs text-red-600 dark:text-red-400 mt-2">
                                    {{ $message }}
                                </span>
                                @enderror
                            </div>

                            <div class="flex items-center justify-end mt-4">

                                <button class="btn btn-succes" type="submit">
                                    Register
                                </button>
                            </div>
                    </form>

                </div>
            </div>
        </div>


    </div>

</x-app-layout>