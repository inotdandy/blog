@extends('layouts.app')

@section('content')
    <div class="m-auto text-left w-4/5">
        <div class="py-15">
            <h1 class="text-6xl">
                Blog Post
            </h1>
        </div>
    </div>

    

    <div class="w-4/5 m-auto pt-20">
        
        <span class="text-gray-500">
            By <span class="font-bold italic text-gray-800">
                {{ $blog->user->name }}
            </span>, Created on {{ $blog->created_at->diffForHumans() }}
        </span>

        <p class="text-xl text-gray-800 pt-8 pb-10 leading-9 font-light">
            {{ $blog->description }}
        </p>
    </div>
@endsection