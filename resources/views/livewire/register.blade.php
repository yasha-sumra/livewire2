<div class="mx-4">
    <div class="bg-gray-50 border border-gray-200 p-10 rounded max-w-lg mx-auto mt-24">
        <header class="text-center">
            <h2 class="text-2xl font-bold uppercase mb-1">
                Register
            </h2>
            <p class="mb-4">Create an account to post gigs</p>
        </header>

        <form wire:submit="create">
            <div class="mb-6">
                <label for="name" class="inline-block text-lg mb-2">
                    Name
                </label>
                <input type="text" class="border border-gray-200 rounded p-2 w-full" name="name"
                    wire:model="name" />
                @error('name')
                    <span class="error bg-red-400 rounded px-1 border border-1 border-black">{{ $message }}</span>
                @enderror
            </div>

            <div class="mb-6">
                <label for="email" class="inline-block text-lg mb-2">Email</label>
                <input type="email" class="border border-gray-200 rounded p-2 w-full" name="email"
                    wire:model="email" />
                <!-- Error Example -->
                <p class="text-red-500 text-xs mt-1">
                    Please enter a valid email
                </p>
                @error('email')
                    <span class="error bg-red-400 rounded px-1 border border-1 border-black">{{ $message }}</span>
                @enderror
            </div>

            <div class="mb-6">
                <label for="password" class="inline-block text-lg mb-2">
                    Password
                </label>
                <input type="password" class="border border-gray-200 rounded p-2 w-full" name="password"
                    wire:model="password" />
                @error('password')
                    <span class="error bg-red-400 rounded px-1 border border-1 border-black">{{ $message }}</span>
                @enderror
            </div>

            <div class="mb-6">
                <label for="password2" class="inline-block text-lg mb-2">
                    Confirm Password
                </label>
                <input type="password" class="border border-gray-200 rounded p-2 w-full" name="cpassword"
                    wire:model="cpassword" />
                @error('cpassword')
                    <span class="error bg-red-400 rounded px-1 border border-1 border-black">{{ $message }}</span>
                @enderror
            </div>

            <div class="mb-6">
                <button type="submit" class="bg-laravel text-white rounded py-2 px-4 hover:bg-black">
                    Sign Up
                </button>
            </div>

            <div class="mt-8">
                <p>
                    Already have an account?
                    <a href="login.html" class="text-laravel">Login</a>
                </p>
            </div>
        </form>
    </div>
</div>
