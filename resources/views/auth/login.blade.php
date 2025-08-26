<x-guest-layout>
    <!-- Header -->
    <div class="text-center mb-6">
        <h1 class="text-2xl font-bold text-gray-800">Welcome Back 👋</h1>
        <p class="text-gray-500 text-sm">
            Login to continue to <span class="font-semibold">Product Manager</span>
        </p>
    </div>

    <!-- Status -->
    @if (session('status'))
        <div class="mb-4 text-sm text-green-600">
            {{ session('status') }}
        </div>
    @endif

    <!-- Form -->
    <form method="POST" action="{{ route('login') }}" class="space-y-4">
        @csrf

        <!-- Email -->
        <div>
            <label for="email" class="block text-sm font-medium text-gray-700">Email</label>
            <input id="email" type="email" name="email" value="{{ old('email') }}" required autofocus
                class="w-full rounded-lg bg-gray-100 text-gray-800 border border-gray-300 px-3 py-2 mt-1 focus:border-yellow-500 focus:ring-yellow-500">
            @error('email')
                <p class="text-sm text-red-600 mt-2">{{ $message }}</p>
            @enderror
        </div>

        <!-- Password -->
        <div>
            <label for="password" class="block text-sm font-medium text-gray-700">Password</label>
            <input id="password" type="password" name="password" required
                class="w-full rounded-lg bg-gray-100 text-gray-800 border border-gray-300 px-3 py-2 mt-1 focus:border-yellow-500 focus:ring-yellow-500">
            @error('password')
                <p class="text-sm text-red-600 mt-2">{{ $message }}</p>
            @enderror
        </div>

        <!-- Remember me + Forgot -->
        <div class="flex items-center justify-between">
            <label for="remember_me" class="flex items-center text-sm text-gray-600">
                <input id="remember_me" type="checkbox" name="remember"
                    class="rounded border-gray-300 text-yellow-500 focus:ring-yellow-500">
                <span class="ml-2">Remember me</span>
            </label>

            @if (Route::has('password.request'))
                <a href="{{ route('password.request') }}" class="text-sm text-yellow-600 hover:underline">
                    Forgot your password?
                </a>
            @endif
        </div>

        <!-- Button -->
        <div class="flex justify-center">
            <button type="submit"
                class="bg-yellow-500 hover:bg-yellow-600 text-white font-semibold px-8 py-2 rounded-full shadow-md">
                Log in
            </button>
        </div>
    </form>

    <!-- Register link -->
    <p class="mt-6 text-center text-sm text-gray-600">
        Don’t have an account?
        <a href="{{ route('register') }}" class="text-yellow-600 font-medium hover:underline">Register</a>
    </p>
</x-guest-layout>
