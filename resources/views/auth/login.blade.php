@extends('layouts.app')

@section('title', 'Login')

@section('content')

<div class="block mx-auto my-12 p-8 w-1/3 border-2 border-gray-300 shadow-lg rounded-lg ">

    <h1 class="text-3xl text-center">Login</h1>
    <form class="flex flex-col gap-4 mt-4 " method="POST" action="">
        @csrf
        <input type="email" class="border border-gray200 rounder-md bg-gray-200 w-full text-lg"
        placeholder="Email" id="email" name="email">

        <input type="password" class="border border-gray200 rounder-md bg-gray-200 w-full text-lg"
        placeholder="Password" id="password" name="password">
            @error('message')
                <p class="border border-red-500 rounded-md bg-red w-full text-red-600 p-2 my-2">
                    {{$message}}
                </p>
            @enderror
        <button type="submit" class="bg-cyan-500 rounded-lg w-full text-lg text-white p-2 my-3 ">
            Send
        </button>
    </form>
</div>
@endsection
