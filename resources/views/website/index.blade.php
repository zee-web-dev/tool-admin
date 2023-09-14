<!DOCTYPE html>
<html lang="en">

<head>

    <title>{{ getSetting('meta_title') }}</title>
    <meta name="description" content="{{ getSetting('meta_description') }}" />
    <meta charset="UTF-8" />
    <meta name="robots" content="follow,index" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta name="theme-color" content="#ffca40" />

    <link rel="canonical" href="https://zeeshandev.com" />

    <meta property="og:type" content="website" />
    <meta property="og:title" content="{{ getSetting('meta_title') }}" />
    <meta property="og:description" content="{{ getSetting('meta_description') }}" />
    <meta property="og:url" content="https://zeeshandev.com" />

    <meta property="og:site_name" content="{{ getSetting('site_name') }}" />
    <meta name="twitter:card" content="summary" />
    <meta name="twitter:site" content="{{ getSetting('site_name') }}" />
    <meta property="twitter:title" content="{{ getSetting('meta_title') }}" />
    <meta property="twitter:description" content="{{ getSetting('meta_description') }}" />

    <link rel="stylesheet" href="{{ asset('website/css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('website/css/app.css') }}">
    <!-- Fontawesome-icons -->
    <link rel="stylesheet" href="{{ asset('admin/vendor/fonts/fontawesome.css') }}">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Jost:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,800;1,900&family=Raleway:wght@200;300;400;500;600;700;800&family=Roboto+Slab:wght@100;200;300;400;500;600;700;800;900&display=swap"
        rel="stylesheet">
    <!-- Link Swiper's CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.css" />

    @if (getSetting('google_script'))
        {!! getSetting('google_script') !!}
    @endif


</head>

<body class="font-jost">

    <!-- Navbar -->
    <nav class="bg-white w-full z-20 top-0 left-0">
        <div class="max-w-screen-xl flex flex-wrap items-center justify-between mx-auto px-4 py-3">
            <a href="#" class="flex items-center">
                <p class="self-center text-2xl font-semibold whitespace-nowrap text-black">
                    Portfolio<span class="text-theme">.</span>
                </p>
            </a>
            <div class="flex md:order-2">

                <a href="{{ getSetting('cv') }}" download="ZeeshanZafarResume.pdf"
                    class="download-cv-btn hidden md:block">Download CV</a>

                <button data-collapse-toggle="navbar-sticky" type="button"
                    class="inline-flex items-center p-2 text-sm text-theme rounded-lg md:hidden hover:bg-theme hover:text-white focus:outline-none focus:ring-2 focus:ring-gray-200"
                    aria-controls="navbar-sticky" aria-expanded="false">
                    <span class="sr-only">Open main menu</span>
                    <svg class="w-6 h-6" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20"
                        xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd"
                            d="M3 5a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 10a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 15a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1z"
                            clip-rule="evenodd"></path>
                    </svg>
                </button>

            </div>
            <div class="items-center justify-between hidden w-full md:flex md:w-auto md:order-1" id="navbar-sticky">
                <ul class="flex flex-col font-medium md:flex-row md:space-x-12 md:mt-0">
                    <li>
                        <a href="#" class="block py-2 pl-3 pr-4 text-theme md:p-0" aria-current="page">Home</a>
                    </li>
                    <li>
                        <a href="#" class="block py-2 pl-3 pr-4 text-black md:p-0 hover:text-theme">About</a>
                    </li>
                    <li>
                        <a href="#" class="block py-2 pl-3 pr-4 text-black md:p-0 hover:text-theme">Services</a>
                    </li>
                    <li>
                        <a href="#" class="block py-2 pl-3 pr-4 text-black md:p-0 hover:text-theme">Projects</a>
                    </li>
                    <li>
                        <a href="#" class="block py-2 pl-3 pr-4 text-black md:p-0 hover:text-theme">Contact</a>
                    </li>
                    <li>
                        <button type="button" class="download-cv-btn  px-0 ml-3 md:hidden">Download CV</button>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <!-- /Navbar -->

    <!-- Header Section -->
    <div class="container grid grid-cols-1 md:grid-cols-2 md:gap-4  py-8 md:py-12">
        <div class="pt-5 md:pt-16 order-last md:order-none">
            <p class="text-theme font-medium leading-3 text-3xl ml-1 mb-2">I'm</p>
            <h1 class="text-[4.5rem] md:text-[7.5rem] font-semibold leading-none table-caption">
                {{ getSetting('user_name') }}</h1>
            <p class="text-xl mt-2 mb-12 md:mb-24 w-full h-8 sm:h-auto">A passionate
                <span class="txt-rotate font-medium text-theme" data-period="2000"
                    data-rotate="{{ json_encode(explode(', ', getSection('prof_text'))) }}"></span>
            </p>
            <p class="text-lg uppercase">Find Me</p>
            <div class="mt-2">
                <div class="inline-block bg-black text-white px-3 py-3 rounded drop-shadow-lg">
                    <a href="{{ getSetting('facebook') ?? '#' }}"
                        class="text-xl text-white transition duration-150 ease-in-out hover:text-theme">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                            fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                            stroke-linejoin="round" class="feather feather-facebook">
                            <path d="M18 2h-3a5 5 0 0 0-5 5v3H7v4h3v8h4v-8h3l1-4h-4V7a1 1 0 0 1 1-1h3z"></path>
                        </svg>
                    </a>
                </div>
                <div class="inline-block mx-4 bg-black text-white px-3 py-3 rounded drop-shadow-lg">
                    <a href="{{ getSetting('twitter') ?? '#' }}"
                        class="text-xl text-white transition duration-150 ease-in-out hover:text-theme">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                            fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                            stroke-linejoin="round" class="feather feather-twitter">
                            <path
                                d="M23 3a10.9 10.9 0 0 1-3.14 1.53 4.48 4.48 0 0 0-7.86 3v1A10.66 10.66 0 0 1 3 4s-4 9 5 13a11.64 11.64 0 0 1-7 2c9 5 20 0 20-11.5a4.5 4.5 0 0 0-.08-.83A7.72 7.72 0 0 0 23 3z">
                            </path>
                        </svg>
                    </a>
                </div>
                <div class="inline-block bg-black text-white px-3 py-3 rounded drop-shadow-lg">
                    <a href="{{ getSetting('linkedin') ?? '#' }}"
                        class="text-xl text-white transition duration-150 ease-in-out hover:text-theme">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                            fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                            stroke-linejoin="round" class="feather feather-linkedin">
                            <path d="M16 8a6 6 0 0 1 6 6v7h-4v-7a2 2 0 0 0-2-2 2 2 0 0 0-2 2v7h-4v-7a6 6 0 0 1 6-6z">
                            </path>
                            <rect x="2" y="9" width="4" height="12"></rect>
                            <circle cx="4" cy="4" r="2"></circle>
                        </svg>
                    </a>
                </div>
            </div>
            <!-- <button class="btn-dark mt-3 md:mt-6">Get in touch</button> -->

        </div>
        <div class="relative py-8 md:p-0">
            <div
                class="absolute top-4 md:left-6 md:top-16 z-50 shadow rounded px-2 py-3 flex bg-white animate-bounceSlow">
                <img src="{{ getSection('tech_icon_1') }}" alt="{{ getSection('tech_title_1') }}" class="w-12">
                <div class="ml-2">
                    <p class="font-medium">{{ getSection('tech_title_1') }}</p>
                    <p>{{ getSection('tech_subtitle_1') }}</p>
                </div>
            </div>
            <div
                class="absolute right-0 top-2/3 md:top-1/3 z-50 shadow rounded px-2 py-3 flex bg-white animate-bounceSlow">
                <img src="{{ getSection('tech_icon_3') }}" alt="{{ getSection('tech_title_3') }}" class="w-12">
                <div class="ml-2">
                    <p class="font-medium">{{ getSection('tech_title_3') }}</p>
                    <p>{{ getSection('tech_subtitle_3') }}</p>
                </div>
            </div>
            <div
                class="absolute bottom-4 md:bottom-12 md:left-1/4 z-50 shadow rounded px-2 py-3 flex w-auto bg-white animate-bounceSlow">
                <img src="{{ getSection('tech_icon_2') }}" alt="{{ getSection('tech_title_2') }}" class="w-12">
                <div class="ml-2">
                    <p class="font-medium">{{ getSection('tech_title_2') }}</p>
                    <p>{{ getSection('tech_subtitle_2') }}</p>
                </div>
            </div>
            <div>
                <img src="{{ getSetting('profile_image') }}" alt="" class="mx-auto">
            </div>
        </div>
    </div>
    <!-- /Header Section -->

    <!-- About Section -->
    <div class="py-16 bg-no-repeat bg-cover bg-fixed bg-center"
        style="background-image: url({{ asset('website/images/about-background.jpg') }})">
        <div class="container grid grid-cols-1 md:grid-cols-2">
            <div class="text-white">
                <p class="font-normal text-xl">About Me</p>
                <h2 class="text-5xl font-semibold mt-2">{!! getSection('about_heading') !!}</h2>
                <p class="text-gray-300 text-lg text-justify mt-5">
                    {{ getSection('about_desc') }}
                </p>
                <div class="w-full flex flex-col md:flex-row mt-8">
                    <div class="md:basis-1/2 md:border-r ">
                        <!-- phone -->
                        <div class="flex items-center justify-center md:justify-start">
                            <img src="{{ asset('website/images/icons/phone-icon.png') }}" width="44px"
                                alt="Mail Icon">
                            <p class="about-phone ml-6">{{ getSetting('contact') }}</p>
                        </div>
                        <!-- mail -->
                        <div class="flex items-center justify-center md:justify-start mt-4">
                            <img src="{{ asset('website/images/icons/mail-icon.png') }}" width="44px"
                                alt="Mail Icon">
                            <p class="about-mail ml-6">{{ getSetting('email') }}</p>
                        </div>
                    </div>
                    <div class="md:basis-1/2 flex items-center justify-center mt-4 md:mt-0">
                        <img src="{{ asset(getSetting('signature')) }}" alt="">
                    </div>
                </div>

            </div>
            <div class="px-8 mt-8 md:mt-0 flex items-center">
                <div class="grid md:grid-cols-2 gap-4 my-auto w-full">
                    <div class="bg-white shadow w-full py-6 ">
                        <p class="text-[52px] stroke-text leading-none ml-9">
                            {{ sprintf('%02d', getSetting('experience')) }}<sup>+</sup>
                        </p>
                        <div class="flex justify-center">
                            <p
                                class="text-xl uppercase ml-10 relative before:absolute before:w-12 before:h-[2px] before:bg-theme before:-left-14 before:top-2">
                                Years of <br> Experience</p>
                        </div>
                    </div>
                    <div class="bg-white shadow w-full py-6 ">
                        <p class="text-[52px] stroke-text leading-none ml-9">
                            {{ sprintf('%02d', getSetting('projects')) }}<sup>+</sup>
                        </p>
                        <div class="flex justify-center">
                            <p
                                class="text-xl uppercase ml-10 relative before:absolute before:w-12 before:h-[2px] before:bg-theme before:-left-14 before:top-2">
                                Completed <br> Projects</p>
                        </div>
                    </div>
                    <div class="bg-white shadow w-full py-6 ">
                        <p class="text-[52px] stroke-text leading-none ml-9">
                            {{ sprintf('%02d', getSetting('clients')) }}<sup>+</sup>
                        </p>
                        <div class="flex justify-center">
                            <p
                                class="text-xl uppercase relative before:absolute before:w-12 before:h-[2px] before:bg-theme before:-left-14 before:top-2">
                                Happy <br> Clients</p>
                        </div>
                    </div>

                    <div class="bg-white shadow w-full py-6 ">
                        <p class="text-[52px] stroke-text leading-none ml-9">
                            {{ sprintf('%02d', getSetting('awards')) }}<sup>+</sup>
                        </p>
                        <div class="flex justify-center">
                            <p
                                class="text-xl uppercase  relative before:absolute before:w-12 before:h-[2px] before:bg-theme before:-left-14 before:top-2">
                                Awards <br> Won</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- /About Section -->

    <!-- Services Section -->
    <div class="container grid grid-cols-1 md:grid-cols-2 gap-4 py-16">
        <div>
            <div class="grid grid-cols-1 md:grid-rows-2 md:grid-cols-2 gap-6">

                <div class="row-span-2 flex items-center">
                    <div class="shadow md:shadow-lg bg-white rounded-lg">
                        <div class="p-8 flex justify-center flex-col">
                            <div class="mt-2 mb-6">
                                <img src="{{ $services[0]->image ?? '' }}"
                                    class="p-2 mx-auto border-solid border-4 border-theme rounded-full"
                                    alt="">
                            </div>
                            <h3 class="text-lg font-medium text-center leading-5 table-caption">
                                {{ $services[0]->title ?? '' }}
                            </h3>
                            <p class="mt-2 font-normal text-sm text-gray-700 text-center">
                                {{ $services[0]->description ?? '' }}
                            </p>
                        </div>
                    </div>
                </div>

                <div>
                    <div class="shadow md:shadow-lg bg-white rounded-lg">
                        <div class="p-8 flex justify-center flex-col">
                            <div class="mt-2 mb-6">
                                <img src="{{ $services[1]->image ?? '' }}"
                                    class="p-2 mx-auto border-solid border-4 border-theme rounded-full"
                                    alt="">
                            </div>
                            <h3 class="text-lg font-medium text-center leading-5 table-caption">
                                {{ $services[1]->title ?? '' }}
                            </h3>
                            <p class="mt-2 font-normal text-sm text-gray-700 text-center">
                                {{ $services[1]->description ?? '' }}
                            </p>
                        </div>
                    </div>
                </div>

                <div>
                    <div class="shadow md:shadow-lg bg-white rounded-lg">
                        <div class="p-8 flex justify-center flex-col">
                            <div class="mt-2 mb-6">
                                <img src="{{ $services[2]->image ?? '' }}"
                                    class="p-2 mx-auto border-solid border-4 border-theme rounded-full"
                                    alt="">
                            </div>
                            <h3 class="text-lg font-medium text-center leading-5 table-caption">
                                {{ $services[2]->title ?? '' }}
                            </h3>
                            <p class="mt-2 font-normal text-sm text-gray-700 text-center">
                                {{ $services[2]->description ?? '' }}
                            </p>
                        </div>
                    </div>
                </div>

            </div>
        </div>

        <div class="flex items-center md:pl-8">
            <div class="w-full">
                <p class="font-normal text-xl text-theme capitalize">Basic info about my services</p>
                <h2 class="text-5xl font-semibold mt-2">{{ getSection('service_heading') }}</h2>
                <p class="text-gray-700 text-justify mt-5">
                    {{ getSection('service_desc') }}
                </p>
                <button class="btn-dark mt-3 md:mt-6">Hire me</button>
            </div>
        </div>
    </div>
    <!-- /Services Section -->

    <!-- Resume -->
    <section class="bg-neutral-50 ">
        <div class="container py-16">
            <h2 class="text-5xl font-semibold mt-2 text-center">My <span class="text-theme">Resume</span></h2>
            <div class="mt-12 mb-4">
                <ul class="flex -mb-px text-center text-gray-500 bg-gray-200 rounded-lg p-1" id="myTab"
                    data-tabs-toggle="#myTabContent" role="tablist">
                    <li class="w-full pr-3" role="presentation">
                        <button class="text-base md:text-lg block w-full py-4 tracking-wide"
                            id="skill-tab">Skills</button>
                    </li>
                    <li class="w-full pl-3" role="presentation">
                        <button class="text-base md:text-lg block w-full py-4 tracking-wide"
                            id="education-tab">Education</button>
                    </li>
                    <li class="w-full pl-3" role="presentation">
                        <button class="text-base md:text-lg lock w-full py-4 tracking-wide"
                            id="experience-tab">Experience</button>
                    </li>
                </ul>
            </div>
            <div id="myTabContent">
                <div class="hidden py-2" id="skill" role="tabpanel" aria-labelledby="skill-tab">

                    <div class="grid grid-cols-1 md:grid-cols-4 gap-6 p-4">

                        @if (!empty($skills))
                            @foreach ($skills as $skill)
                                <div class="flex flex-col justify-center items-center">
                                    <div class="progress-wrapper ">
                                        <div class="box">
                                            <p class="number">
                                                <span class="num">{{ $skill['value'] ?? 0 }}</span>
                                                <span class="sub">%</span>
                                            </p>
                                        </div>
                                        <span class="dots"></span>
                                        <svg class="svg">
                                            <defs>
                                                <linearGradient id="gradientStyle">
                                                    <stop offset="0%" stop-color="#565656" />
                                                    <stop offset="100%" stop-color="#b7b5b5" />
                                                </linearGradient>
                                            </defs>
                                            <circle class="circle" cx="90" cy="90" r="80" />
                                        </svg>
                                    </div>
                                    <p class="text-center uppercase">{{ $skill['name'] ?? 'N/A' }}</p>
                                </div>
                            @endforeach
                        @endif


                        {{-- <div class="flex flex-col justify-center items-center">
                            <div class="progress-wrapper ">
                                <div class="box">
                                    <p class="number">
                                        <span class="num">80</span>
                                        <span class="sub">%</span>
                                    </p>
                                    <!-- <p class="title ">HTML</p> -->
                                </div>
                                <span class="dots"></span>
                                <svg class="svg">
                                    <defs>
                                        <linearGradient id="gradientStyle">
                                            <stop offset="0%" stop-color="#565656" />
                                            <stop offset="100%" stop-color="#b7b5b5" />
                                        </linearGradient>
                                    </defs>
                                    <circle class="circle" cx="90" cy="90" r="80" />
                                </svg>
                            </div>
                            <p class="text-center">HTML</p>
                        </div>


                        <div class="flex justify-center">
                            <div class="progress-wrapper ">
                                <div class="box">
                                    <p class="number">
                                        <span class="num">80</span>
                                        <span class="sub">%</span>
                                    </p>
                                    <p class="title ">HTML</p>
                                </div>
                                <span class="dots"></span>
                                <svg class="svg">
                                    <defs>
                                        <linearGradient id="gradientStyle">
                                            <stop offset="0%" stop-color="#565656" />
                                            <stop offset="100%" stop-color="#b7b5b5" />
                                        </linearGradient>
                                    </defs>
                                    <circle class="circle" cx="90" cy="90" r="80" />
                                </svg>
                            </div>
                        </div>


                        <div class="flex justify-center">
                            <div class="progress-wrapper ">
                                <div class="box">
                                    <p class="number">
                                        <span class="num">80</span>
                                        <span class="sub">%</span>
                                    </p>
                                    <p class="title ">HTML</p>
                                </div>
                                <span class="dots"></span>
                                <svg class="svg">
                                    <defs>
                                        <linearGradient id="gradientStyle">
                                            <stop offset="0%" stop-color="#565656" />
                                            <stop offset="100%" stop-color="#b7b5b5" />
                                        </linearGradient>
                                    </defs>
                                    <circle class="circle" cx="90" cy="90" r="80" />
                                </svg>
                            </div>
                        </div>

                        <div class="flex justify-center">
                            <div class="progress-wrapper ">
                                <div class="box">
                                    <p class="number">
                                        <span class="num">80</span>
                                        <span class="sub">%</span>
                                    </p>
                                    <p class="title ">HTML</p>
                                </div>
                                <span class="dots"></span>
                                <svg class="svg">
                                    <defs>
                                        <linearGradient id="gradientStyle">
                                            <stop offset="0%" stop-color="#565656" />
                                            <stop offset="100%" stop-color="#b7b5b5" />
                                        </linearGradient>
                                    </defs>
                                    <circle class="circle" cx="90" cy="90" r="80" />
                                </svg>
                            </div>
                        </div>

                        <div class="flex justify-center">
                            <div class="progress-wrapper ">
                                <div class="box">
                                    <p class="number">
                                        <span class="num">80</span>
                                        <span class="sub">%</span>
                                    </p>
                                    <p class="title ">HTML</p>
                                </div>
                                <span class="dots"></span>
                                <svg class="svg">
                                    <defs>
                                        <linearGradient id="gradientStyle">
                                            <stop offset="0%" stop-color="#565656" />
                                            <stop offset="100%" stop-color="#b7b5b5" />
                                        </linearGradient>
                                    </defs>
                                    <circle class="circle" cx="90" cy="90" r="80" />
                                </svg>
                            </div>
                        </div> --}}

                    </div>


                </div>

                <div class="hidden py-2" id="education" role="tabpanel" aria-labelledby="education-tab">

                    <div class="grid grid-cols-1 md:grid-cols-2 gap-6 p-4">
                        <div>
                            <ol class="relative border-l border-gray-200 ">
                                @if (!empty($education))
                                    @foreach ($education as $value)
                                        @if ($loop->odd)
                                            <li class="mb-10 ml-6">
                                                <span
                                                    class="absolute flex items-center justify-center w-6 h-6 bg-blue-100 rounded-full -left-3 ring-8 ring-white shadow">
                                                    <svg class="w-2.5 h-2.5 text-blue-800 dark:text-blue-300"
                                                        aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                                                        fill="currentColor" viewBox="0 0 20 20">
                                                        <path
                                                            d="M20 4a2 2 0 0 0-2-2h-2V1a1 1 0 0 0-2 0v1h-3V1a1 1 0 0 0-2 0v1H6V1a1 1 0 0 0-2 0v1H2a2 2 0 0 0-2 2v2h20V4ZM0 18a2 2 0 0 0 2 2h16a2 2 0 0 0 2-2V8H0v10Zm5-8h10a1 1 0 0 1 0 2H5a1 1 0 0 1 0-2Z" />
                                                    </svg>
                                                </span>
                                                <h3 class="flex items-center mb-1 text-lg font-semibold text-gray-900">
                                                    {{ $value['title'] ?? '' }}, <a
                                                        href="{{ $value['link'] ?? '#' }}" rel="nofollow"
                                                        class="font-normal ml-2 text-theme">{{ $value['institute'] ?? '' }}</a>
                                                </h3>
                                                <time
                                                    class="block mb-2 text-sm font-normal leading-none text-gray-400 dark:text-gray-500">
                                                    From
                                                    {{ $value['from'] ? date('M d, Y', strtotime($value['from'])) : '' }}
                                                    {{ $value['to'] ? 'To ' . date('M d, Y', strtotime($value['to'])) : '' }}
                                                </time>
                                                <p class="mb-4 text-base font-normal text-gray-500 dark:text-gray-400">
                                                    {{ $value['description'] ?? '' }}
                                                </p>

                                            </li>
                                        @endif
                                    @endforeach
                                @endif
                            </ol>
                        </div>
                        <div>
                            <ol class="relative border-l border-gray-200 ">
                                @if (!empty($education))
                                    @foreach ($education as $value)
                                        @if ($loop->even)
                                            <li class="mb-10 ml-6">
                                                <span
                                                    class="absolute flex items-center justify-center w-6 h-6 bg-blue-100 rounded-full -left-3 ring-8 ring-white shadow">
                                                    <svg class="w-2.5 h-2.5 text-blue-800 dark:text-blue-300"
                                                        aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                                                        fill="currentColor" viewBox="0 0 20 20">
                                                        <path
                                                            d="M20 4a2 2 0 0 0-2-2h-2V1a1 1 0 0 0-2 0v1h-3V1a1 1 0 0 0-2 0v1H6V1a1 1 0 0 0-2 0v1H2a2 2 0 0 0-2 2v2h20V4ZM0 18a2 2 0 0 0 2 2h16a2 2 0 0 0 2-2V8H0v10Zm5-8h10a1 1 0 0 1 0 2H5a1 1 0 0 1 0-2Z" />
                                                    </svg>
                                                </span>
                                                <h3 class="flex items-center mb-1 text-lg font-semibold text-gray-900">
                                                    {{ $value['title'] ?? '' }}, <a
                                                        href="{{ $value['link'] ?? '#' }}" rel="nofollow"
                                                        class="font-normal ml-2 text-theme">{{ $value['institute'] ?? '' }}</a>
                                                </h3>
                                                <time
                                                    class="block mb-2 text-sm font-normal leading-none text-gray-400 dark:text-gray-500">
                                                    From
                                                    {{ $value['from'] ? date('M d, Y', strtotime($value['from'])) : '' }}
                                                    {{ $value['to'] ? 'To ' . date('M d, Y', strtotime($value['to'])) : '' }}
                                                </time>
                                                <p class="mb-4 text-base font-normal text-gray-500 dark:text-gray-400">
                                                    {{ $value['description'] ?? '' }}
                                                </p>

                                            </li>
                                        @endif
                                    @endforeach
                                @endif
                            </ol>
                        </div>
                    </div>

                </div>


                <div class="hidden rounded-lg py-2 text-gray-600" id="experience" role="tabpanel"
                    aria-labelledby="experience-tab">

                    <div class="grid grid-cols-1 md:grid-cols-2 gap-6 p-4">
                        <div>
                            <ol class="relative border-l border-gray-200 ">
                                @if (!empty($experience))
                                    @foreach ($experience as $value)
                                        @if ($loop->odd)
                                            <li class="mb-10 ml-6">
                                                <span
                                                    class="absolute flex items-center justify-center w-6 h-6 bg-blue-100 rounded-full -left-3 ring-8 ring-white shadow">
                                                    <svg class="w-2.5 h-2.5 text-blue-800 dark:text-blue-300"
                                                        aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                                                        fill="currentColor" viewBox="0 0 20 20">
                                                        <path
                                                            d="M20 4a2 2 0 0 0-2-2h-2V1a1 1 0 0 0-2 0v1h-3V1a1 1 0 0 0-2 0v1H6V1a1 1 0 0 0-2 0v1H2a2 2 0 0 0-2 2v2h20V4ZM0 18a2 2 0 0 0 2 2h16a2 2 0 0 0 2-2V8H0v10Zm5-8h10a1 1 0 0 1 0 2H5a1 1 0 0 1 0-2Z" />
                                                    </svg>
                                                </span>
                                                <h3 class="flex items-center mb-1 text-lg font-semibold text-gray-900">
                                                    {{ $value['title'] ?? '' }}, <a
                                                        href="{{ $value['link'] ?? '#' }}" rel="nofollow"
                                                        class="font-normal ml-2 text-theme">{{ $value['company'] ?? '' }}</a>
                                                </h3>
                                                <time
                                                    class="block mb-2 text-sm font-normal leading-none text-gray-400 dark:text-gray-500">
                                                    From
                                                    {{ $value['from'] ? date('M d, Y', strtotime($value['from'])) : '' }}
                                                    {{ $value['to'] ? 'To ' . date('M d, Y', strtotime($value['to'])) : '' }}
                                                </time>
                                                <p class="mb-4 text-base font-normal text-gray-500 dark:text-gray-400">
                                                    {{ $value['description'] ?? '' }}
                                                </p>

                                            </li>
                                        @endif
                                    @endforeach
                                @endif
                            </ol>
                        </div>
                        <div>
                            <ol class="relative border-l border-gray-200 ">
                                @if (!empty($experience))
                                    @foreach ($experience as $value)
                                        @if ($loop->even)
                                            <li class="mb-10 ml-6">
                                                <span
                                                    class="absolute flex items-center justify-center w-6 h-6 bg-blue-100 rounded-full -left-3 ring-8 ring-white shadow">
                                                    <svg class="w-2.5 h-2.5 text-blue-800 dark:text-blue-300"
                                                        aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                                                        fill="currentColor" viewBox="0 0 20 20">
                                                        <path
                                                            d="M20 4a2 2 0 0 0-2-2h-2V1a1 1 0 0 0-2 0v1h-3V1a1 1 0 0 0-2 0v1H6V1a1 1 0 0 0-2 0v1H2a2 2 0 0 0-2 2v2h20V4ZM0 18a2 2 0 0 0 2 2h16a2 2 0 0 0 2-2V8H0v10Zm5-8h10a1 1 0 0 1 0 2H5a1 1 0 0 1 0-2Z" />
                                                    </svg>
                                                </span>
                                                <h3 class="flex items-center mb-1 text-lg font-semibold text-gray-900">
                                                    {{ $value['title'] ?? '' }}, <a
                                                        href="{{ $value['link'] ?? '#' }}" rel="nofollow"
                                                        class="font-normal ml-2 text-theme">{{ $value['company'] ?? '' }}</a>
                                                </h3>
                                                <time
                                                    class="block mb-2 text-sm font-normal leading-none text-gray-400 dark:text-gray-500">
                                                    From
                                                    {{ $value['from'] ? date('M d, Y', strtotime($value['from'])) : '' }}
                                                    {{ $value['to'] ? 'To ' . date('M d, Y', strtotime($value['to'])) : '' }}
                                                </time>
                                                <p class="mb-4 text-base font-normal text-gray-500 dark:text-gray-400">
                                                    {{ $value['description'] ?? '' }}
                                                </p>

                                            </li>
                                        @endif
                                    @endforeach
                                @endif
                            </ol>
                        </div>
                    </div>


                </div>

            </div>
        </div>
    </section>
    <!-- /Resume -->


    <!-- Projects -->
    <div class="py-16">
        <div class="container">
            <h2 class="text-5xl font-semibold mt-2 text-center">My Recent <span class="text-theme">Project</span></h2>
            <div class="mt-16 swiper mySwiper" style="padding-bottom: 40px;">


                <div class="swiper-wrapper">

                    @if (!empty($projects))
                        @foreach ($projects as $i => $project)
                            <div class="relative swiper-slide">
                                <img src="{{ $project->image ?? '' }}" class="grayscale" alt="">
                                {{-- <div class="absolute bottom-32 md:bottom-0 md:top-1/2 pl-4">
                                    <p class="text-8xl stroke-text">{{ sprintf('%02d', ++$i) }}</p>
                                </div> --}}
                                <div class="pt-4 pb-6">
                                    <p class="text-lg font-medium">{{ $project->category->title ?? '' }}</p>
                                    <h2 class="text-3xl font-semibold mb-3">{{ $project->title ?? '' }}</h2>
                                    <a href="{{ $project->link ?? '' }}" rel="nofollow"
                                        class="uppercase link link-anim">View
                                        Project</a>
                                </div>
                            </div>
                        @endforeach
                    @endif

                </div>

                <!-- If we need navigation buttons -->
                <div class="swiper-button-prev slide-prev-btn">
                    <i class="fas fa-arrow-left"></i>
                </div>
                <div class="swiper-button-next slide-next-btn">
                    <i class="fas fa-arrow-right"></i>
                </div>


            </div>
        </div>
    </div>
    <!--/ Projects -->


    <!-- Contact US -->
    <section class="bg-neutral-50 md:py-16">
        <div class="container grid grid-cols-1 md:grid-cols-3 md:shadow p-0 rounded">
            <div class="py-6">
                <div class="mt-2 mb-6 text-center">
                    <img src="{{ asset('website/images/icons/mail.png') }}"
                        class="p-2 mx-auto border-solid border-4 border-theme rounded-full" alt="">
                    <h4 class="text-2xl mt-2 uppercase">Mail us</h4>
                    <p class="text-gray-600">{{ getSetting('email') }}</p>
                </div>
                <div class="mt-2 mb-6 text-center">
                    <img src="{{ asset('website/images/icons/call.png') }}"
                        class="p-2 mx-auto border-solid border-4 border-theme rounded-full" alt="">
                    <h4 class="text-2xl mt-2 uppercase">Contact Us</h4>
                    <p class="text-gray-600">{{ getSetting('contact') }}</p>
                </div>
                <div class="mt-2 mb-6 text-center">
                    <img src="{{ asset('website/images/icons/address.png') }}"
                        class="p-2 mx-auto border-solid border-4 border-theme rounded-full" alt="">
                    <h4 class="text-2xl mt-2 uppercase">Location</h4>
                    <p class="text-gray-600">{{ getSetting('address') }}</p>
                </div>
            </div>
            <div class="py-8 px-8 md:px-16 col-span-2 flex items-center bg-cover bg-center bg-no-repeat bg-fixed"
                style="background-image: url({{ asset('website/images/form-background.jpg') }})">

                <div class="w-full">

                    <form action="{{ route('home.contact') }}" method="POST">
                        @csrf

                        <div class="grid md:grid-cols-2 md:gap-6 mb-4">
                            <div class="relative z-0 w-full mb-6 group">
                                <input type="text" name="name" id="floating_first_name"
                                    class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer"
                                    placeholder=" " required />
                                <label for="floating_first_name"
                                    class="peer-focus:font-medium absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:left-0 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">
                                    Name</label>
                            </div>
                            <div class="relative z-0 w-full mb-6 group">
                                <input type="email" name="email" id="floating_last_name"
                                    class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer"
                                    placeholder=" " required />
                                <label for="floating_last_name"
                                    class="peer-focus:font-medium absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:left-0 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Email
                                </label>
                            </div>
                        </div>

                        <div class="relative z-0 w-full mb-4 group">
                            <input type="text" name="subject" id="floating_subject"
                                class="block py-4 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer"
                                placeholder=" " required />
                            <label for="floating_subject"
                                class="peer-focus:font-medium absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:left-0 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Subject
                            </label>
                        </div>

                        <div class="relative z-0 w-full mt-8 group">
                            <textarea type="text" name="message" id="floating_subject"
                                class="block py-4 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer"
                                placeholder=" " required></textarea>
                            <label for="floating_subject"
                                class="peer-focus:font-medium absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:left-0 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Message
                            </label>
                        </div>

                        <button type="submit" class="btn-light mt-16">Submit</button>
                    </form>
                </div>

            </div>
        </div>
    </section>
    <!-- /Contact US -->

    <!-- Footer -->
    <!--Footer container-->
    <footer class="flex flex-col items-center bg-black text-center text-white py-6">
        <!--Copyright section-->
        <div class="w-full px-4 py-3 text-center">
            @if (getSetting('footer_text'))
                {{ getSetting('footer_text') }}
            @else
                © 2023 Copyright:
                <a class="text-whitehite" href="#">ZeeshanDev.com</a>
            @endif
        </div>
        <div class="container px-6">
            <div class="flex justify-center">
                <a href="{{ getSetting('facebook') }}" target="_blank"
                    class="my-1 mx-2 h-9 w-9 rounded-full border-2 border-white uppercase leading-normal text-white transition duration-150 ease-in-out  hover:border-theme">
                    <svg xmlns="http://www.w3.org/2000/svg" class="mx-auto h-full w-4" width="24" height="24"
                        viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                        stroke-linecap="round" stroke-linejoin="round" class="feather feather-facebook">
                        <path d="M18 2h-3a5 5 0 0 0-5 5v3H7v4h3v8h4v-8h3l1-4h-4V7a1 1 0 0 1 1-1h3z"></path>
                    </svg>
                </a>

                <a href="{{ getSetting('twitter') }}" target="_blank"
                    class="my-1 mx-2 h-9 w-9 rounded-full border-2 border-white uppercase leading-normal text-white transition duration-150 ease-in-out hover:border-theme"
                    data-te-ripple-init data-te-ripple-color="light">
                    <svg xmlns="http://www.w3.org/2000/svg" class="mx-auto h-full w-4" width="24" height="24"
                        viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                        stroke-linecap="round" stroke-linejoin="round" class="feather feather-twitter">
                        <path
                            d="M23 3a10.9 10.9 0 0 1-3.14 1.53 4.48 4.48 0 0 0-7.86 3v1A10.66 10.66 0 0 1 3 4s-4 9 5 13a11.64 11.64 0 0 1-7 2c9 5 20 0 20-11.5a4.5 4.5 0 0 0-.08-.83A7.72 7.72 0 0 0 23 3z">
                        </path>
                    </svg>
                </a>

                <a href="{{ getSetting('linkedin') }}" target="_blank"
                    class="my-1 mx-2 h-9 w-9 rounded-full border-2 border-white uppercase leading-normal text-white transition duration-150 ease-in-out hover:border-theme"
                    data-te-ripple-init data-te-ripple-color="light">
                    <svg xmlns="http://www.w3.org/2000/svg" class="mx-auto h-full w-4" width="24" height="24"
                        viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                        stroke-linecap="round" stroke-linejoin="round" class="feather feather-linkedin">
                        <path d="M16 8a6 6 0 0 1 6 6v7h-4v-7a2 2 0 0 0-2-2 2 2 0 0 0-2 2v7h-4v-7a6 6 0 0 1 6-6z">
                        </path>
                        <rect x="2" y="9" width="4" height="12"></rect>
                        <circle cx="4" cy="4" r="2"></circle>
                    </svg>
                </a>

                <a href="{{ getSetting('github') }}" target="_blank"
                    class="my-1 mx-2 h-9 w-9 rounded-full border-2 border-white uppercase leading-normal text-white transition duration-150 ease-in-out hover:border-theme"
                    data-te-ripple-init data-te-ripple-color="light">
                    <svg xmlns="http://www.w3.org/2000/svg" class="mx-auto h-full w-4" width="24" height="24"
                        viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                        stroke-linecap="round" stroke-linejoin="round" class="feather feather-github">
                        <path
                            d="M9 19c-5 1.5-5-2.5-7-3m14 6v-3.87a3.37 3.37 0 0 0-.94-2.61c3.14-.35 6.44-1.54 6.44-7A5.44 5.44 0 0 0 20 4.77 5.07 5.07 0 0 0 19.91 1S18.73.65 16 2.48a13.38 13.38 0 0 0-7 0C6.27.65 5.09 1 5.09 1A5.07 5.07 0 0 0 5 4.77a5.44 5.44 0 0 0-1.5 3.78c0 5.42 3.3 6.61 6.44 7A3.37 3.37 0 0 0 9 18.13V22">
                        </path>
                    </svg>
                </a>

            </div>
        </div>


    </footer>
    <!-- /Footer -->

    <!-- scroll top button -->
    {{-- <button class="shadow" onclick="topFunction()" id="scroll_top"><i class="fa-solid fa-arrow-up"></i></button> --}}


    <script src="{{ asset('website/js/flowbite.min.js') }}"></script>
    <script src="{{ asset('website/js/main.js') }}"></script>
    <!-- Swiper JS -->
    <script src="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.js"></script>

    <!-- Initialize Swiper -->
    <script>
        var swiper = new Swiper(".mySwiper", {
            slidesPerView: 3,
            spaceBetween: 30,
            // pagination: {
            //     el: ".swiper-pagination",
            //     clickable: true,
            // },
            breakpoints: {
                // when window width is >= 320px
                320: {
                    slidesPerView: 1,
                },
                // when window width is >= 768px
                768: {
                    slidesPerView: 2,
                },
                // when window width is >= 991px
                991: {
                    slidesPerView: 3,
                }
            },
            // Navigation arrows
            navigation: {
                nextEl: '.swiper-button-next',
                prevEl: '.swiper-button-prev',
            },
        });
    </script>

    {{-- <script>
        //Get the button:
        scrollTopBtn = document.getElementById("scroll_top");

        // When the user scrolls down 20px from the top of the document, show the button
        window.onscroll = function() {
            scrollFunction()
        };

        function scrollFunction() {
            if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
                scrollTopBtn.style.display = "block";
            } else {
                scrollTopBtn.style.display = "none";
            }
        }

        // When the user clicks on the button, scroll to the top of the document
        function topFunction() {
            window.scrollTo({
                top: 0,
                behavior: 'smooth'
            });
            // document.body.scrollTop = 0; // For Safari
            // document.documentElement.scrollTop = 0; // For Chrome, Firefox, IE and Opera
        }
    </script> --}}

    <script>
        @if (session('success'))
            alert('{{ session('success') }}');
        @endif
        @if ($errors->any())
            alert("{{ $errors->first() }}");
        @endif
    </script>

    <script>
        const block = document.querySelectorAll('.progress-wrapper');
        window.addEventListener('load', function() {
            block.forEach(item => {
                let numElement = item.querySelector('.num');
                let num = parseInt(numElement.innerText);
                let count = 0;
                let time = 2000 / num;
                let circle = item.querySelector('.circle');
                setInterval(() => {
                    if (count == num) {
                        clearInterval();
                    } else {
                        count += 1;
                        numElement.innerText = count;
                    }
                }, time)
                circle.style.strokeDashoffset = 503 - (503 * (num / 100));
                let dots = item.querySelector('.dots');
                dots.style.transform =
                    `rotate(${360 * (num / 100)}deg)`;
                if (num == 100) {
                    dots.style.opacity = 0;
                }
            })
        });
    </script>

    @if (getSetting('calendly_script'))
        {!! getSetting('calendly_script') !!}
    @endif

</body>

</html>
