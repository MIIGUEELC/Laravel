@extends('layouts.log')

@section('content')
    <div class="w-full max-w-md mx-auto bg-white p-6 rounded-lg shadow-md">
        <h2 class="text-2xl font-bold text-center mb-6">Register</h2>

        @if ($errors->any())
            <div class="mb-4 text-red-600">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <form method="POST" action="{{ route('create.user') }}" onsubmit="return checkPasswordMatch()">
            @csrf

            <div class="mb-4">
                <label for="name" class="block text-gray-700">Name</label>
                <input type="text" name="name" id="name" class="w-full px-4 py-2 border rounded-lg" required>
            </div>

            <div class="mb-4">
                <label for="email" class="block text-gray-700">Email</label>
                <input type="email" name="email" id="email" class="w-full px-4 py-2 border rounded-lg" required>
            </div>

            <div class="mb-4">
                <label for="password" class="block text-gray-700">Password</label>
                <input type="password" name="password" id="password" class="w-full px-4 py-2 border rounded-lg" required>
            </div>

            <div class="mb-4">
                <label for="password_confirmation" class="block text-gray-700">Confirme password</label>
                <input type="password" name="password_confirmation" id="password_confirmation"
                    class="w-full px-4 py-2 border rounded-lg" oninput="validatePassword()" required>
                <p id="passwordError" class="text-red-500 text-sm mt-1 hidden">Password do not match</p>
            </div>

            <button type="submit" class="w-full bg-blue-500 text-white py-2 rounded-lg hover:bg-blue-600">
                Register
            </button>
        </form>

        <p class="mt-4 text-center">
            ¿You alrealdy have an account? <a href="{{ route('login') }}" class="text-blue-500">Log in</a>
        </p>
    </div>

    <script>
        function validatePassword() {
            let password = document.getElementById("password").value;
            let confirmPassword = document.getElementById("password_confirmation").value;
            let errorText = document.getElementById("passwordError");

            if (password !== confirmPassword && confirmPassword.length > 0) {
                errorText.classList.remove("hidden");
            } else {
                errorText.classList.add("hidden");
            }
        }

        function checkPasswordMatch() {
            let password = document.getElementById("password").value;
            let confirmPassword = document.getElementById("password_confirmation").value;
            if (password !== confirmPassword) {
                alert("Las contraseñas no coinciden.");
                return false;
            }
            return true;
        }
    </script>
@endsection
