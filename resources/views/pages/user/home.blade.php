@extends('layouts.user')
@section('title', 'Home')
@section('hero')
    <div class="hero min-h-screen" style="background-image: url(https://wallpaperaccess.com/full/253418.jpg);">
        <div class="hero-overlay bg-black bg-opacity-50"></div>
        <div class="hero-content text-center text-neutral-content">
            <div class="max-w-lg">
                <h1 class="mb-5 text-xl font-semibold text-white md:text-3xl lg:text-4xl">Welcome to Library App</h1>
                <p class="mb-5 text-sm text-white md:text-base">Choose from a wide range of popular books from all the
                    categories you want here.</p>
                <a href="#" class="btn btn-sm bg-gray-800 text-white">Check Our Books</a>
            </div>
        </div>
    </div>
@endsection
@section('content')
    <main>
        <section class="w-full py-12 bg-gray-50">
            <div class="max-w-screen-lg mx-auto px-4">
                <h2 class="text-2xl font-bold uppercase mb-2 text-center">Categories</h2>
                <p class="text-center text-gray-600 mb-10">Explore various genres and find your next favorite
                    book!</p>
                <div class="grid grid-cols-2 sm:grid-cols-3 lg:grid-cols-5 gap-6 min-h-72">
                    <div
                        class="bg-white p-6 rounded-md shadow-lg text-center hover:bg-gray-100 transition-transform duration-300 transform hover:scale-105">
                        <i class="fas fa-user fa-3x mb-4 text-gray-700"></i>
                        <h3 class="font-medium text-xl text-gray-900 mb-2">Biography</h3>
                        <p class="text-sm text-gray-600 mb-6">Discover the lives of famous personalities and
                            their
                            journeys.</p>
                        <a href="#"
                            class="inline-block px-4 py-2 bg-gray-800 text-white rounded-md text-sm font-medium transition-all duration-300 hover:bg-gray-700 absolute bottom-6 left-10">View
                            Books</a>
                    </div>
                    <div
                        class="bg-white p-6 rounded-md shadow-lg text-center hover:bg-gray-100 transition-transform duration-300 transform hover:scale-105">
                        <i class="fas fa-book fa-3x mb-4 text-gray-700"></i>
                        <h3 class="font-medium text-xl text-gray-900 mb-2">Novel</h3>
                        <p class="text-sm text-gray-600 mb-6">Dive into captivating stories and characters.</p>
                        <a href="#"
                            class="inline-block px-4 py-2 bg-gray-800 text-white rounded-md text-sm font-medium transition-all duration-300 hover:bg-gray-700 absolute bottom-6 left-10">View
                            Books</a>
                    </div>
                    <div
                        class="bg-white p-6 rounded-md shadow-lg text-center hover:bg-gray-100 transition-transform duration-300 transform hover:scale-105">
                        <i class="fas fa-book-open fa-3x mb-4 text-gray-700"></i>
                        <h3 class="font-medium text-xl text-gray-900 mb-2">Encyclopedia</h3>
                        <p class="text-sm text-gray-600 mb-6">Explore a world of knowledge across various
                            subjects.</p>
                        <a href="#"
                            class="inline-block px-4 py-2 bg-gray-800 text-white rounded-md text-sm font-medium transition-all duration-300 hover:bg-gray-700 absolute bottom-6 left-10">View
                            Books</a>
                    </div>
                    <div
                        class="bg-white p-6 rounded-md shadow-lg text-center hover:bg-gray-100 transition-transform duration-300 transform hover:scale-105">
                        <i class="fas fa-magic fa-3x mb-4 text-gray-700"></i>
                        <h3 class="font-medium text-xl text-gray-900 mb-2">Fantasy</h3>
                        <p class="text-sm text-gray-600 mb-6">Escape into magical worlds and epic adventures.
                        </p>
                        <a href="#"
                            class="inline-block px-4 py-2 bg-gray-800 text-white rounded-md text-sm font-medium transition-all duration-300 hover:bg-gray-700 absolute bottom-6 left-10">View
                            Books</a>
                    </div>
                    <div
                        class="bg-white p-6 rounded-md shadow-lg text-center hover:bg-gray-100 transition-transform duration-300 transform hover:scale-105">
                        <i class="fas fa-fire fa-3x mb-4 text-gray-700"></i>
                        <h3 class="font-medium text-xl text-gray-900 mb-2">Comics</h3>
                        <p class="text-sm text-gray-600 mb-6">Enjoy a wide range of comic books from nowhere
                        </p>
                        <a href="#"
                            class="inline-block px-4 py-2 bg-gray-800 text-white rounded-md text-sm font-medium transition-all duration-300 hover:bg-gray-700 absolute bottom-6 left-10">View
                            Books</a>
                    </div>
                </div>
            </div>
        </section>
        <section class="w-full py-12 bg-gray-50">
            <div class="max-w-screen-lg mx-auto px-4">
                <div class="flex justify-between items-center mb-6">
                    <h2 class="text-2xl font-bold uppercase">Our Books</h2>
                    <p class="text-sm text-gray-500 cursor-pointer hover:text-gray-800">Show more >></p>
                </div>
                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                    <div class="bg-white p-6 rounded-md shadow-lg hover:shadow-xl transition-shadow duration-300">
                        <img src="{{ asset('assets/img/image1.png') }}" alt="Book Title"
                            class="w-full h-56 object-contain mb-4 rounded-md transition-transform duration-300 transform hover:scale-105">
                        <h3 class="font-bold text-xl text-gray-800 mb-2">Kala Senja Menyapa</h3>
                        <p class="text-sm text-gray-600 mb-4">Rosa Maria Aguado</p>
                        <p class="text-gray-700 mb-4">This is a brief description of the book. It provides an
                            overview
                            of what
                            the book is about, the genre, and why it might be interesting to read.</p>
                        <a href="#"
                            class="inline-block px-4 py-2 bg-gray-800 text-white rounded-md text-sm font-medium transition-all duration-300 hover:bg-gray-700">Read
                            More</a>
                    </div>

                    <div class="bg-white p-6 rounded-md shadow-lg hover:shadow-xl transition-shadow duration-300">
                        <img src="{{ asset('assets/img/image2.png') }}" alt="Book Title"
                            class="w-full h-56 object-contain mb-4 rounded-md transition-transform duration-300 transform hover:scale-105">
                        <h3 class="font-bold text-xl text-gray-800 mb-2">Soul</h3>
                        <p class="text-sm text-gray-600 mb-4">Olivia Wilson</p>
                        <p class="text-gray-700 mb-4">This is a brief description of the book. It provides an
                            overview
                            of what
                            the book is about, the genre, and why it might be interesting to read.</p>
                        <a href="#"
                            class="inline-block px-4 py-2 bg-gray-800 text-white rounded-md text-sm font-medium transition-all duration-300 hover:bg-gray-700">Read
                            More</a>
                    </div>

                    <div class="bg-white p-6 rounded-md shadow-lg hover:shadow-xl transition-shadow duration-300">
                        <img src="{{ asset('assets/img/image3.png') }}" alt="Book Title"
                            class="w-full h-56 object-contain mb-4 rounded-md transition-transform duration-300 transform hover:scale-105">
                        <h3 class="font-bold text-xl text-gray-800 mb-2">A Million To One</h3>
                        <p class="text-sm text-gray-600 mb-4">Tonny Faggioli</p>
                        <p class="text-gray-700 mb-4">This is a brief description of the book. It provides an
                            overview
                            of what
                            the book is about, the genre, and why it might be interesting to read.</p>
                        <a href="#"
                            class="inline-block px-4 py-2 bg-gray-800 text-white rounded-md text-sm font-medium transition-all duration-300 hover:bg-gray-700">Read
                            More</a>
                    </div>
                    <div class="bg-white p-6 rounded-md shadow-lg hover:shadow-xl transition-shadow duration-300">
                        <img src="{{ asset('assets/img/image7.png') }}" alt="Book Title"
                            class="w-full h-56 object-contain mb-4 rounded-md transition-transform duration-300 transform hover:scale-105">
                        <h3 class="font-bold text-xl text-gray-800 mb-2">Lone Wolf Adventure</h3>
                        <p class="text-sm text-gray-600 mb-4">Ermengard Nausicaa</p>
                        <p class="text-gray-700 mb-4">This is a brief description of the book. It provides an
                            overview
                            of what
                            the book is about, the genre, and why it might be interesting to read.</p>
                        <a href="#"
                            class="inline-block px-4 py-2 bg-gray-800 text-white rounded-md text-sm font-medium transition-all duration-300 hover:bg-gray-700">Read
                            More</a>
                    </div>
                    <div class="bg-white p-6 rounded-md shadow-lg hover:shadow-xl transition-shadow duration-300">
                        <img src="{{ asset('assets/img/image4.png') }}" alt="Book Title"
                            class="w-full h-56 object-contain mb-4 rounded-md transition-transform duration-300 transform hover:scale-105">
                        <h3 class="font-bold text-xl text-gray-800 mb-2">The Killer Poison</h3>
                        <p class="text-sm text-gray-600 mb-4">Frank Drowl</p>
                        <p class="text-gray-700 mb-4">This is a brief description of the book. It provides an
                            overview
                            of what
                            the book is about, the genre, and why it might be interesting to read.</p>
                        <a href="#"
                            class="inline-block px-4 py-2 bg-gray-800 text-white rounded-md text-sm font-medium transition-all duration-300 hover:bg-gray-700">Read
                            More</a>
                    </div>
                    <div class="bg-white p-6 rounded-md shadow-lg hover:shadow-xl transition-shadow duration-300">
                        <img src="{{ asset('assets/img/image5.png') }}" alt="Book Title"
                            class="w-full h-56 object-contain mb-4 rounded-md transition-transform duration-300 transform hover:scale-105">
                        <h3 class="font-bold text-xl text-gray-800 mb-2">Walk Into The Shadow</h3>
                        <p class="text-sm text-gray-600 mb-4">Estelle Darcy</p>
                        <p class="text-gray-700 mb-4">This is a brief description of the book. It provides an
                            overview
                            of what
                            the book is about, the genre, and why it might be interesting to read.</p>
                        <a href="#"
                            class="inline-block px-4 py-2 bg-gray-800 text-white rounded-md text-sm font-medium transition-all duration-300 hover:bg-gray-700">Read
                            More</a>
                    </div>
                </div>
            </div>

        </section>
    </main>
@endsection
@push('scripts')
    <script>
        document.addEventListener('DOMContentLoaded', () => {
            const navButton = document.getElementById('navButton');
            const navMenu = document.getElementById('navMenu');
            navButton.addEventListener('click', () => {
                navMenu.classList.toggle('hidden');
                navMenu.classList.toggle('flex');
            });
        });
    </script>
@endpush
