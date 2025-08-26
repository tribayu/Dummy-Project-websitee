<x-guest-layout>
    <div class="text-center mb-6">
        <h1 class="text-2xl font-bold text-gray-800">Create Account ✨</h1>
        <p class="text-gray-500 text-sm">
            Register to continue to <span class="font-semibold">Product Manager</span>
        </p>
    </div>

    <form method="POST" action="{{ route('register') }}" class="space-y-4">
        @csrf

        <!-- Name -->
        <div>
            <label for="name" class="block text-sm font-medium text-gray-700">Name</label>
            <input id="name" type="text" name="name" value="{{ old('name') }}" required autofocus
                class="w-full rounded-lg bg-gray-100 text-gray-800 border border-gray-300 px-3 py-2 mt-1
                       focus:border-yellow-500 focus:ring-yellow-500">
            @error('name')
                <p class="text-sm text-red-600 mt-2">{{ $message }}</p>
            @enderror
        </div>

        <!-- Email -->
        <div>
            <label for="email" class="block text-sm font-medium text-gray-700">Email</label>
            <input id="email" type="email" name="email" value="{{ old('email') }}" required
                class="w-full rounded-lg bg-gray-100 text-gray-800 border border-gray-300 px-3 py-2 mt-1
                       focus:border-yellow-500 focus:ring-yellow-500">
            @error('email')
                <p class="text-sm text-red-600 mt-2">{{ $message }}</p>
            @enderror
        </div>

        <!-- Password -->
        <div>
            <label for="password" class="block text-sm font-medium text-gray-700">Password</label>
            <input id="password" type="password" name="password" required
                class="w-full rounded-lg bg-gray-100 text-gray-800 border border-gray-300 px-3 py-2 mt-1
                       focus:border-yellow-500 focus:ring-yellow-500">
            @error('password')
                <p class="text-sm text-red-600 mt-2">{{ $message }}</p>
            @enderror
        </div>

        <!-- Confirm Password -->
        <div>
            <label for="password_confirmation" class="block text-sm font-medium text-gray-700">Confirm Password</label>
            <input id="password_confirmation" type="password" name="password_confirmation" required
                class="w-full rounded-lg bg-gray-100 text-gray-800 border border-gray-300 px-3 py-2 mt-1
                       focus:border-yellow-500 focus:ring-yellow-500">
            @error('password_confirmation')
                <p class="text-sm text-red-600 mt-2">{{ $message }}</p>
            @enderror
        </div>

        <!-- Button -->
        <div class="flex justify-center">
            <button type="submit"
                class="bg-yellow-500 hover:bg-yellow-600 text-white font-semibold px-8 py-2 rounded-full shadow-md">
                Register
            </button>
        </div>
    </form>

    <!-- Link ke Login -->
    <p class="mt-6 text-center text-sm text-gray-600">
        Already have an account?
        <a href="{{ route('login') }}" class="text-yellow-600 font-medium hover:underline">Login</a>
    </p>
</x-guest-layout>
