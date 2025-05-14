@extends('layout')

@section('title', 'Tentang Kami - AnalyZis')

@section('content')
    <!-- Add the banner image here with Tailwind classes for responsiveness -->
    <div class="w-full overflow-hidden mb-8">
        <img src="{{ asset('images/about-banner.png') }}" alt="About AnalyZis" class="w-full h-auto md:h-[500px] object-cover">
    </div>

    <div class="container my-5">
        

        <!-- Rest of the content remains unchanged -->
        
        <section class="max-w-7xl mx-auto">
            <h2 class="text-2xl font-extrabold text-blue-800 mb-2">
                Our Team
            </h2>
            <p class="text-gray-400 mb-8 max-w-4xl">
                Worem ipsum dolor sit amet, consectetur adipiscing elit. Nunc vulputate libero et velit interdum, ac aliquet odio mattis.
            </p>
            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6">
                <!-- Card 1 -->
                <article class="bg-white rounded-lg overflow-hidden text-black shadow-md">
                    <img alt="Team Member 1" class="w-full object-cover rounded-t-lg" height="300" src="{{ asset('images/about-member1.png') }}" width="400"/>
                    <div class="p-4">
                        <h3 class="font-bold text-blue-900 mb-1 text-base sm:text-lg">
                            Bonnie Green
                        </h3>
                        <p class="text-gray-600 text-sm mb-3">
                            Senior Front-end Developer
                        </p>
                        <p class="text-gray-600 text-sm mb-4">
                            Worem ipsum dolor sit amet, consectetur adipiscing elit. Nunc vulputate libero et velit interdum, ac aliquet odio mattis.
                        </p>
                        <div class="flex space-x-4 text-gray-600 text-sm">
                            <a aria-label="Facebook" class="hover:text-gray-800" href="#">
                                <i class="fab fa-facebook-f"></i>
                            </a>
                            <a aria-label="Twitter" class="hover:text-gray-800" href="#">
                                <i class="fab fa-twitter"></i>
                            </a>
                            <a aria-label="Dribbble" class="hover:text-gray-800" href="#">
                                <i class="fab fa-dribbble"></i>
                            </a>
                            <a aria-label="GitHub" class="hover:text-gray-800" href="#">
                                <i class="fab fa-github"></i>
                            </a>
                        </div>
                    </div>
                </article>
                <!-- Card 2 -->
                <article class="bg-white rounded-lg overflow-hidden text-black shadow-md">
                    <img alt="Team Member 2" class="w-full object-cover rounded-t-lg" height="300" src="{{ asset('images/about-member2.png') }}" width="400"/>
                    <div class="p-4">
                        <h3 class="font-bold text-blue-900 mb-1 text-base sm:text-lg">
                            Thomas Lean
                        </h3>
                        <p class="text-gray-600 text-sm mb-3">
                            Senior Front-end Developer
                        </p>
                        <p class="text-gray-600 text-sm mb-4">
                            Worem ipsum dolor sit amet, consectetur adipiscing elit. Nunc vulputate libero et velit interdum, ac aliquet odio mattis.
                        </p>
                        <div class="flex space-x-4 text-gray-600 text-sm">
                            <a aria-label="Facebook" class="hover:text-gray-800" href="#">
                                <i class="fab fa-facebook-f"></i>
                            </a>
                            <a aria-label="Twitter" class="hover:text-gray-800" href="#">
                                <i class="fab fa-twitter"></i>
                            </a>
                            <a aria-label="Dribbble" class="hover:text-gray-800" href="#">
                                <i class="fab fa-dribbble"></i>
                            </a>
                            <a aria-label="GitHub" class="hover:text-gray-800" href="#">
                                <i class="fab fa-github"></i>
                            </a>
                        </div>
                    </div>
                </article>
                <!-- Card 3 -->
                <article class="bg-white rounded-lg overflow-hidden text-black shadow-md">
                    <img alt="Team Member 3" class="w-full object-cover rounded-t-lg" height="300" src="{{ asset('images/about-member3.png') }}" width="400"/>
                    <div class="p-4">
                        <h3 class="font-bold text-blue-900 mb-1 text-base sm:text-lg">
                            Jese Leos
                        </h3>
                        <p class="text-gray-600 text-sm mb-3">
                            Senior Front-end Developer
                        </p>
                        <p class="text-gray-600 text-sm mb-4">
                            Worem ipsum dolor sit amet, consectetur adipiscing elit. Nunc vulputate libero et velit interdum, ac aliquet odio mattis.
                        </p>
                        <div class="flex space-x-4 text-gray-600 text-sm">
                            <a aria-label="Facebook" class="hover:text-gray-800" href="#">
                                <i class="fab fa-facebook-f"></i>
                            </a>
                            <a aria-label="Twitter" class="hover:text-gray-800" href="#">
                                <i class="fab fa-twitter"></i>
                            </a>
                            <a aria-label="Dribbble" class="hover:text-gray-800" href="#">
                                <i class="fab fa-dribbble"></i>
                            </a>
                            <a aria-label="GitHub" class="hover:text-gray-800" href="#">
                                <i class="fab fa-github"></i>
                            </a>
                        </div>
                    </div>
                </article>
            </div>
        </section>
    </div>

    <!-- Include Tailwind CSS -->
    <script src="https://cdn.tailwindcss.com"></script>
@endsection
