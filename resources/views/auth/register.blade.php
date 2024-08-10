@extends('layouts.guest')


@section('content')
    <div class="min-h-screen flex items-center justify-center bg-gray-900 py-12 px-4 sm:px-6 lg:px-8">
        <div class="max-w-md w-full space-y-8">
            <div>
                <h2 class="mt-6 text-center text-3xl font-extrabold text-gray-100">
                    Créer un compte
                </h2>
            </div>
            <form class="mt-8 space-y-6" action="{{ route('register') }}" method="POST">
                @csrf
                <div class="rounded-md shadow-sm -space-y-px">
                    <div>
                        <label for="username" class="sr-only">Identifiant</label>
                        <input id="username" name="username" type="text" value="{{ old('username') }}" required 
                            class="appearance-none rounded-none relative block w-full px-3 py-2 border border-gray-700 bg-gray-800 placeholder-gray-400 text-gray-100 rounded-t-md focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 focus:z-10 sm:text-sm" 
                            placeholder="Identifiant">
                    </div>
                    <div>
                        <label for="email" class="sr-only">Adresse email</label>
                        <input id="email" name="email" type="email" value="{{ old('email') }}" required 
                            class="appearance-none rounded-none relative block w-full px-3 py-2 border border-gray-700 bg-gray-800 placeholder-gray-400 text-gray-100 focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 focus:z-10 sm:text-sm" 
                            placeholder="Adresse email">
                    </div>
                    <div>
                        <label for="password" class="sr-only">Mot de passe</label>
                        <input id="password" name="password" type="password" required 
                            class="appearance-none rounded-none relative block w-full px-3 py-2 border border-gray-700 bg-gray-800 placeholder-gray-400 text-gray-100 focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 focus:z-10 sm:text-sm" 
                            placeholder="Mot de passe">
                    </div>
                    <div>
                        <label for="password_confirmation" class="sr-only">Confirmer le mot de passe</label>
                        <input id="password_confirmation" name="password_confirmation" type="password" required 
                            class="appearance-none rounded-none relative block w-full px-3 py-2 border border-gray-700 bg-gray-800 placeholder-gray-400 text-gray-100 rounded-b-md focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 focus:z-10 sm:text-sm" 
                            placeholder="Confirmer le mot de passe">
                    </div>
                </div>

                @error('username')
                    <div class="mt-2 text-sm text-red-600">
                        {{ $message }}
                    </div>
                @enderror
                @error('email')
                    <div class="mt-2 text-sm text-red-600">
                        {{ $message }}
                    </div>
                @enderror
                @error('password')
                    <div class="mt-2 text-sm text-red-600">
                        {{ $message }}
                    </div>
                @enderror

                <div>
                    <button type="submit" 
                        class="group relative w-full flex justify-center py-2 px-4 border border-transparent text-sm font-medium rounded-md text-white bg-indigo-600 hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                        Créer le compte
                    </button>
                </div>
                <a href="{{ route('login') }}" class=" text-sky-400 text-sm text-center cursor-pointer underline">J'ai déjà un compte ? Se connecter</a>

            </form>
        </div>
    </div>
@endsection
