<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" data-theme="dracula">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap">

    <!-- Styles -->
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>
</head>

<body class="font-sans antialiased">

    <div class="hero min-h-screen bg-base-200">
        <div class="flex-col justify-center hero-content lg:flex-row">
            <div class="text-center lg:text-left">
                <h1 class="mb-5 text-5xl font-bold">
                    Hello there
                </h1>
                <p class="mb-5">
                    Provident cupiditate voluptatem et in. Quaerat fugiat ut assumenda excepturi exercitationem quasi.
                    In deleniti eaque aut repudiandae et a id nisi.
                </p>
            </div>

            <div class="card flex-shrink-0 w-full max-w-sm shadow-2xl bg-base-100">
                <div class="card-body">

                    <div class="form-control">
                        <label class="label">
                            <span class="label-text">Email</span>
                        </label>
                        <input type="text" placeholder="email" class="input input-bordered">
                    </div>

                    <div class="form-control">
                        <label class="label">
                            <span class="label-text">Password</span>
                        </label>
                        <input type="text" placeholder="password" class="input input-bordered">
                        <label class="label">
                            <a href="#" class="label-text-alt">Forgot password?</a>
                        </label>
                    </div>

                    <div class="form-control mt-6">
                        <input type="button" value="Login" class="btn btn-primary">
                    </div>
                </div>
            </div>

        </div>
    </div>

    <div class="navbar mb-2 shadow-lg bg-neutral text-neutral-content sticky top-0 z-50">
        <div class="flex-none px-2 mx-2">
            <span class="text-lg font-bold">
                DaisyUI
            </span>
        </div>

        <div class="flex-1 px-2 mx-2">
            <div class="items-stretch hidden lg:flex">
                <a class="btn btn-ghost btn-sm rounded-btn">
                    Home
                </a>
                <a class="btn btn-ghost btn-sm rounded-btn">
                    Portfolio
                </a>
                <a class="btn btn-ghost btn-sm rounded-btn">
                    About
                </a>
                <a class="btn btn-ghost btn-sm rounded-btn">
                    Contact
                </a>
            </div>

            <div class="dropdown">
                <div tabindex="0" class="btn btn-ghost rounded-btn">Dropdown</div>
                <ul class="shadow menu dropdown-content bg-base-100 rounded-box w-52">
                    <li>
                        <a>Item 1</a>
                    </li>
                    <li>
                        <a>Item 2</a>
                    </li>
                    <li>
                        <a>Item 3</a>
                    </li>
                    <li>
                        <a>Item 3</a>
                    </li>
                </ul>
            </div>

        </div>

        <div class="flex-none">
            <button class="btn btn-square btn-ghost">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                    class="inline-block w-6 h-6 stroke-current">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z">
                    </path>
                </svg>
            </button>
        </div>
        <div class="flex-none">
            <button class="btn btn-square btn-ghost">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                    class="inline-block w-6 h-6 stroke-current">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"></path>
                </svg>
            </button>
        </div>

    </div>

    <div class="w-3/4 mx-auto">

        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6 mt-8">

            <div class="card shadow-2xl lg:card-side bg-primary text-primary-content">
                <div class="card-body">
                    <p>Rerum reiciendis beatae tenetur excepturi aut pariatur est eos.</p>
                    <div class="justify-end card-actions">
                        <button class="btn btn-primary">
                            More info

                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                class="inline-block w-6 h-6 ml-2 stroke-current">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7">
                                </path>
                            </svg>
                        </button>
                    </div>
                </div>
            </div>

            <div class="card shadow-2xl lg:card-side bg-secondary text-secondary-content">
                <div class="card-body">
                    <div class="justify-end card-actions">
                        <button class="btn btn-secondary btn-square">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                class="inline-block w-6 h-6 stroke-current">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M6 18L18 6M6 6l12 12">
                                </path>
                            </svg>
                        </button>
                    </div>
                    <p>Rerum reiciendis beatae tenetur excepturi aut pariatur est eos.</p>
                </div>
            </div>

            <div class="card text-center shadow-2xl lg:card-side bg-accent text-accent-content">
                <div class="card-body">
                    <p>Rerum reiciendis beatae tenetur excepturi aut pariatur est eos.</p>
                    <div class="justify-center card-actions">
                        <button class="btn btn-accent">Start now</button>
                        <button class="btn btn-accent">More info</button>
                    </div>
                </div>
            </div>

        </div>

        <div class="flex items-center w-full px-4 py-10 bg-cover card bg-base-200 mt-8"
            style="background-image: url('https://images.unsplash.com/photo-1542831371-29b0f74f9713?ixid=MnwxMjA3fDB8MHxzZWFyY2h8Mnx8cHJvZ3JhbW1pbmd8ZW58MHx8MHx8&ixlib=rb-1.2.1&w=1000&q=80');">
            <div class="card glass lg:card-side text-neutral-content">
                <figure class="p-6">
                    <img src="https://avatars.githubusercontent.com/u/32509276?v=4"
                        class="rounded-full shadow-lg lg:max-h-36">
                </figure>
                <div class="max-w-md card-body">
                    <h2 class="card-title">Glass</h2>
                    <p>Rerum reiciendis beatae tenetur excepturi aut pariatur est eos. Sit sit necessitatibus veritatis
                        sed
                        molestiae voluptates incidunt iure sapiente.</p>
                    <div class="card-actions">
                        <button class="btn glass rounded-full">Get Started</button>
                    </div>
                </div>
            </div>
        </div>


        <div class="border mockup-window border-base-300 mt-8 h-50v bg-white text-black" data-theme="light">
            <div class="flex justify-center px-4 py-16 border-t border-base-300">
                Hello!
            </div>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6 mt-8">

            <div class="card shadow-2xl lg:card-side bg-primary text-primary-content">
                <div class="card-body">
                    <p>Rerum reiciendis beatae tenetur excepturi aut pariatur est eos.</p>
                    <div class="justify-end card-actions">
                        <button class="btn btn-primary">
                            More info

                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                class="inline-block w-6 h-6 ml-2 stroke-current">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7">
                                </path>
                            </svg>
                        </button>
                    </div>
                </div>
            </div>
            <div class="card shadow-2xl lg:card-side bg-secondary text-secondary-content">
                <div class="card-body">
                    <div class="justify-end card-actions">
                        <button class="btn btn-secondary btn-square">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                class="inline-block w-6 h-6 stroke-current">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M6 18L18 6M6 6l12 12">
                                </path>
                            </svg>
                        </button>
                    </div>
                    <p>Rerum reiciendis beatae tenetur excepturi aut pariatur est eos.</p>
                </div>
            </div>
            <div class="card text-center shadow-2xl lg:card-side bg-accent text-accent-content">
                <div class="card-body">
                    <p>Rerum reiciendis beatae tenetur excepturi aut pariatur est eos.</p>
                    <div class="justify-center card-actions">
                        <button class="btn btn-accent">Start now</button>
                        <button class="btn btn-accent">More info</button>
                    </div>
                </div>
            </div>
        </div>

        <div class="grid grid-cols-1 xl:grid-cols-2">

            <div class="border mockup-window border-base-300 mt-8 h-50v bg-white text-black" data-theme="light">
                <div class="flex justify-center px-4 py-16 border-t border-base-300">
                    Hello!
                </div>
            </div>
    
            <div class="mockup-phone bg-white text-black mt-8">
                <div class="camera"></div>
                <div class="display">
                    <div class="artboard phone-1 artboard-demo">
                        Hi.
                    </div>
                </div>
            </div>

        </div>
        
    </div>

</body>

</html>