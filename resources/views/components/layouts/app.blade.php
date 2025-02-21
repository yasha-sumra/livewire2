<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="icon" href="images/favicon.ico" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css"
        integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />

        <script src="//unpkg.com/alpinejs" defer></script>
    <script src="https://cdn.tailwindcss.com"></script>
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        laravel: "#ef3b2d",
                    },
                },
            },
        };
    </script>
    <title>LaraGigs | Find Laravel Jobs & Projects</title>
    @livewireStyles
</head>

<body class="mb-48">
    <nav class="flex justify-between items-center mb-4">
        <a wire:navigate href="{{url('/')}}"><img class="w-24" src="{{url('/images/logo.png')}}" alt="" class="logo" /></a>
        <ul class="flex space-x-6 mr-6 text-lg">
            @auth
                 <li>
                <span class="bg-red-500 border border-2 border-black rounded-lg px-2">WELCOME {{auth()->user()->name}}</span>
            </li>
             <li>
                <a   wire:navigate href="{{url('/meneage')}}" class="hover:text-laravel"><i class="fa-solid fa-user-plus"></i>Menege</a>
            </li>
            <li>
                <a href="{{url('/logout')}}" class="hover:text-laravel"><i class="fa-solid fa-arrow-right-to-bracket" wire:navigate></i>
                    Logout</a>
            </li>
                @else
                 <li>
                <a  wire:navigate href="{{url('/register')}}" class="hover:text-laravel"><i class="fa-solid fa-user-plus" ></i> Register</a>
            </li>
            <li>
                <a wire:navigate href="{{url('/login')}}" class="hover:text-laravel"><i class="fa-solid fa-arrow-right-to-bracket" ></i>
                    Login</a>
            </li>
            @endauth

        </ul>
    </nav>

    <main>

        {{ $slot }}
    </main>

<livewire:message-card/>
    <footer
        class="fixed bottom-0 left-0 w-full flex items-center justify-start font-bold bg-laravel text-white h-24 mt-24 opacity-90 md:justify-center">
        <p class="ml-2">Copyright &copy; 2022, All Rights reserved</p>

        <a href="{{url('/create')}}" class="absolute top-1/3 right-10 bg-black text-white py-2 px-5" wire:navigate >Post Job</a>
    </footer>


    @livewireScripts
</body>

</html>
