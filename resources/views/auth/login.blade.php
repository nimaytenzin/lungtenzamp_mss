@extends('layouts.app')

@section('content')
    {{-- <div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Login') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('login') }}">
                        @csrf

                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <div class="col-md-6 offset-md-4">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                    <label class="form-check-label" for="remember">
                                        {{ __('Remember Me') }}
                                    </label>
                                </div>
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-8 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Login') }}
                                </button>

                                @if (Route::has('password.request'))
                                    <a class="btn btn-link" href="{{ route('password.request') }}">
                                        {{ __('Forgot Your Password?') }}
                                    </a>
                                @endif
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div> --}}

    <style>
        .bg-image {
            background-image: url(https://scontent.fpbh1-1.fna.fbcdn.net/v/t1.6435-9/182005018_1179823702480492_2425216859100156818_n.jpg?_nc_cat=102&ccb=1-5&_nc_sid=730e14&_nc_ohc=M5kQ8qdDorEAX-6Me-I&_nc_ht=scontent.fpbh1-1.fna&oh=43f5efae37505e004591fd251ab3b898&oe=618FF6F9);
           
            object-fit: fill;
           
        }

        .backdrop {
            backdrop-filter: blur(2px);
        }

    </style>

    <div class="h-screen w-full flex justify-center items-center">
        <div
            class="bg-image w-full sm:w-1/2 md:w-9/12 lg:w-1/2 mx-3 md:mx-5 lg:mx-0  flex flex-col md:flex-row items-center rounded-md  border-gray-100 z-10 overflow-hidden bg-center bg-cover bg-blue-600 shadow-lg ">
            <div class="w-full md:w-1/2 pt-4 pb-4 flex flex-col justify-center items-center bg-opacity-25 bg-blue-600 backdrop">
                <h1 class="text-3xl md:text-4xl font-extrabold text-white my-2 md:my-0">
                    LMSS
                </h1>
                <p class="mb-2 text-white hidden md:block font-mono">
                    Honesty & Perseverance
                </p>
            </div>
            <div class="w-full md:w-1/2 flex flex-col items-center bg-white py-5 md:py-8 px-4">
                <img src="logo.jpeg" alt="" class="w-10 h-10">

                <h3 class="mb-4 font-bold text-3xl flex items-center" style="color: #2E72B0">
                    Login
                </h3>
                {{-- <form  method="POST" action="{{ route('login') }}" class="px-3 flex flex-col justify-center items-center w-full gap-3"> --}}

                <form  class="px-3 flex flex-col justify-center items-center w-full gap-3">
                    <input type="email" placeholder="email.." name="email"
                        class="px-4 py-2 w-full rounded border border-gray-300 shadow-sm text-base placeholder-gray-500 placeholder-opacity-50 focus:outline-none focus:border-blue-500">
                    <input type="password" placeholder="password.." name="password"
                        class="px-4 py-2 w-full rounded border border-gray-300 shadow-sm text-base placeholder-gray-500 placeholder-opacity-50 focus:outline-none focus:border-blue-500">
                    <button
                        class="flex justify-center items-center text-white focus:outline-none focus:ring rounded px-3 py-1" style="background-color: #2E72B0">
                        <svg class="w-5 h-5 inline" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                            xmlns="http://www.w3.org/2000/svg">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M11 16l-4-4m0 0l4-4m-4 4h14m-5 4v1a3 3 0 01-3 3H6a3 3 0 01-3-3V7a3 3 0 013-3h7a3 3 0 013 3v1">
                            </path>
                        </svg>
                        <a href="/admin">
                            <p class="ml-1 text-lg">
                                Login
                            </p>
                        </a>
                    </button>
                </form>
            </div>
        </div>
    </div>
@endsection
