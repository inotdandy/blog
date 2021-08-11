@extends('layouts.app')

@section('content')

    <div class="background-image grid grid-cols-1 m-auto">

        <div class="text-gray-100 flex pt-10">

            <div class="m-auto pt-4 pb-16  sm:m-auto block text-center w-4/5">
                <h1 class="sm:text-white text-5xl uppercase font-bold text-shadow-md pb-14">
                    Do you want to become a developer?
                </h1>
                <a 
                    href="" 
                    class="text-center bg-gray-50 text-gray-700 py-2 px-4 font-bold text-xl uppercase">
                    Readmore
                </a>

            </div>

        </div>

    </div>

    <div class="sm:grid grid-cols-2 gap-20 w-4/5 mx-auto py-15 border-b border-gray-200">
        <div>
            <img src="https://cdn.pixabay.com/photo/2014/05/03/01/03/laptop-336704_960_720.jpg" width="700">
        </div>
        
        <div class="m-auto sm:m-auto text-left w-4/5 block">
            <h2 class="text-3xl font-extrabold text-gray-600">
                Struggling to be a better web developer?
            </h2>
            <p class="py-8 text-gray-500 text-l">
                Lorem ipsum, dolor sit amet consectetur adipisicing elit. Quasi veniam laudantium vero tempore corporis optio cumque facilis ducimus dolore minima ullam explicabo reprehenderit unde
            </p>
            <p class="font-extrabold text-l text-gray-600 pb-9">
                Lorem ipsum dolor sit, amet consectetur adipisicing elit. Deleniti ex, a, autem nisi repudiandae minima nesciunt quasi tenetur, doloremque dicta excepturi asperiores accusantium molestiae dolore perferendis. Dolor quos perferendis vitae.
            </p>
            <a href="/blog"
                class="uppercase bg-blue-100 text-s font-extrabold py-3 px-8 rounded-3xl"
            >
            Find out more
            </a>
        </div>
    </div>

    <div class="text-center p-15 bg-black text-white">
        <h2 class="text-2xl pb-5 text-l">
            I'm an expert...
        </h2>
        <span class="font-extrabold block text-4xl py-1">
            Ux Design
        </span>
        <span class="font-extrabold block text-4xl py-1">
            Project Management
        </span>
        <span class="font-extrabold block text-4xl py-1">
            Digital Strategy
        </span>
        <span class="font-extrabold block text-4xl py-1">
            Backend Development
        </span>
    </div>

    <div class="text-center py-15">
        <span class="text-s uppercase text-gray-400">
            Blog
        </span>
        <h2 class="text-4xl font-bold py-10">
            Recent Posts
        </h2>
        <p class="m-auto w-4/5 text-gray-500">
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Suscipit aut quasi, quo enim id, fuga ab, sit aspernatur praesentium eius nostrum dicta!.
        </p>
    </div>

    <div class="sm:grid grid-cols-2 w-4/5 m-auto">
        <div class="flex bg-yellow-700 text-gray-100 pt-10">
            <div class="m-auto pt-4 pb-16 sm:m-auto block w-4/5">
                <span class="uppercase text-xs">
                    PHP
                </span>
                <h3 class="text-xl font-bold py-10">
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Assumenda cum distinctio cumque ex exercitationem sint laudantium asperiores labore dicta sed. Esse provident error ratione. Illo maxime reiciendis magnam sint et.
                </h3>
                <a href=""
                   class="uppercase bg-transparent border-2 border-gray-100 text-gray-100 text-xs font-extrabold py-3 px-5 rounded-3xl">
                    Find out more
                </a>
            </div>
        </div>
        <div>
            <img src="https://cdn.pixabay.com/photo/2014/05/03/01/03/laptop-336704_960_720.jpg" width="700">
        </div>
    </div>
@endsection