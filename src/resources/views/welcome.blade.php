
<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="apple-touch-icon" sizes="180x180" href="/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="/favicon-16x16.png">
    <link rel="manifest" href="/site.webmanifest">
    <link rel="mask-icon" href="/safari-pinned-tab.svg" color="#0ed3cf">
    <meta name="msapplication-TileColor" content="#0ed3cf">
    <meta name="theme-color" content="#0ed3cf">

    <meta property="og:image" content="https://tailwindcomponents.com/storage/917/conversions/temp66505-ogimage.jpg?v=2021-03-01 00:16:06" />
    <meta property="og:image:width" content="1280" />
    <meta property="og:image:height" content="640" />
    <meta property="og:image:type" content="image/png" />

    <meta property="og:url" content="https://tailwindcomponents.com/component/landing-page-with-tailwind-css-2/landing" />
    <meta property="og:title" content="Smirkyisms By Th0rn0" />
    <meta property="og:description" content="Inspired by Rickyisms from Trailer Park Boys." />

    <meta name="twitter:card" content="summary_large_image" />
    <meta name="twitter:site" content="@th0rn0" />
    <meta name="twitter:title" content="Smirkyisms By Th0rn0" />
    <meta name="twitter:description" content="Inspired by Rickyisms from Trailer Park Boys." />
    <meta name="twitter:image" content="https://tailwindcomponents.com/storage/917/conversions/temp66505-ogimage.jpg?v=2021-03-01 00:16:06" />

    <title>Smirkyisms</title>
    {{-- <link rel="stylesheet" href="https://unpkg.com/tailwindcss@1.0.4/dist/tailwind.min.css"> --}}
    <link rel="stylesheet" href="{{ mix('css/app.css') }}">
</head>
<body class="bg-gray-200">
  <div>
    <div class="relative bg-gray overflow-hidden">
      <div class="max-w-7xl mx-auto">


        <div class="relative z-10 pb-8 bg-gray sm:pb-16 md:pb-20 lg:max-w-2xl lg:w-full lg:pb-28 xl:pb-32">
         {{--  <svg class="hidden lg:block absolute right-0 inset-y-0 h-full w-48 text-white transform translate-x-1/2" fill="currentColor" viewBox="0 0 100 100" preserveAspectRatio="none" aria-hidden="true">
            <polygon points="50,0 100,0 50,100 0,100" />
          </svg>
 --}}

          <div class="relative pt-6 px-4 sm:px-6 lg:px-8">
            <nav class="relative flex items-center justify-between sm:h-10 lg:justify-start" aria-label="Global">
              <div class="flex items-center flex-grow flex-shrink-0 lg:flex-grow-0">
                <div class="flex items-center justify-between w-full md:w-auto">
                  <a href="/">
                    <span class="sr-only">Workflow</span>
                    <h1 class="font-bold text-xl text-gray-500 hover:text-gray-900">Smirkyisms</h1>
                  </a>
                  <div class="-mr-2 flex items-center md:hidden">
                    <button type="button" class="bg-white rounded-md p-2 inline-flex items-center justify-center text-gray-400 hover:text-gray-500 hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-inset focus:ring-indigo-500" aria-expanded="false">
                      <span class="sr-only">Open main menu</span>
                      <!-- Heroicon name: outline/menu -->
                      <svg class="h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
                      </svg>
                    </button>
                  </div>
                </div>
              </div>
              <div class="hidden md:block md:ml-10 md:pr-4 md:space-x-8 push-right">
                <a href="#howitworks" class="font-medium text-gray-500 hover:text-gray-900">How it Works</a>

                <a href="#about" class="font-medium text-gray-500 hover:text-gray-900">About</a>
                @if (!Auth::user())
                  <a href="{{ route('auth.redirect') }}" class="font-medium text-indigo-600 hover:text-indigo-500">Log in</a>
                @else
                  <a href="{{ route('dashboard') }}" class="font-medium text-indigo-600 hover:text-indigo-500">Dashboard</a>
                @endif
              </div>
            </nav>
          </div>

          <!--
            Mobile menu, show/hide based on menu open state.

            Entering: "duration-150 ease-out"
              From: "opacity-0 scale-95"
              To: "opacity-100 scale-100"
            Leaving: "duration-100 ease-in"
              From: "opacity-100 scale-100"
              To: "opacity-0 scale-95"
          -->
          <div class="absolute top-0 inset-x-0 p-2 transition transform origin-top-right md:hidden">
            <div class="rounded-lg shadow-md bg-white ring-1 ring-black ring-opacity-5 overflow-hidden">
              <div class="px-5 pt-4 flex items-center justify-between">
                <div>
                  <img class="h-8 w-auto" src="https://tailwindui.com/img/logos/workflow-mark-indigo-600.svg" alt="">
                </div>
                <div class="-mr-2">
                  <button type="button" class="bg-white rounded-md p-2 inline-flex items-center justify-center text-gray-400 hover:text-gray-500 hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-inset focus:ring-indigo-500">
                    <span class="sr-only">Close main menu</span>
                    <!-- Heroicon name: outline/x -->
                    <svg class="h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                      <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                    </svg>
                  </button>
                </div>
              </div>
              <div class="px-2 pt-2 pb-3 space-y-1">
                <a href="#howitworks" class="block px-3 py-2 rounded-md text-base font-medium text-gray-700 hover:text-gray-900 hover:bg-gray-50">How it Works</a>

                <a href="#about" class="block px-3 py-2 rounded-md text-base font-medium text-gray-700 hover:text-gray-900 hover:bg-gray-50">About</a>
              </div>
              @if (!Auth::user())
                <a href="{{ route('auth.redirect') }}" class="block w-full px-5 py-3 text-center font-medium text-indigo-600 bg-gray-50 hover:bg-gray-100">
                  Log in
                </a>
              @else
                <a href="{{ route('dashboard') }}" class="block w-full px-5 py-3 text-center font-medium text-indigo-600 bg-gray-50 hover:bg-gray-100">
                  Dashboard
                </a>
              @endif
            </div>
          </div>

          <main class="mt-10 mx-auto max-w-7xl px-4 sm:mt-12 sm:px-6 md:mt-16 lg:mt-20 lg:px-8 xl:mt-28">
            <div class="sm:text-center lg:text-left">
              <h1 class="text-4xl tracking-tight font-extrabold text-gray-900 sm:text-5xl md:text-6xl">
                <span class="block xl:inline">Community Curated</span>
                <span class="block text-indigo-600 xl:inline">Scrap Books</span>
              </h1>
              <p class="mt-3 text-base text-gray-500 sm:mt-5 sm:text-lg sm:max-w-xl sm:mx-auto md:mt-5 md:text-xl lg:mx-0">
                Save, Share and Laugh at all your Discord Community's memes <strong>forever!</strong>
              </p>
              <div class="mt-5 sm:mt-8 sm:flex sm:justify-center lg:justify-start">
                <div class="rounded-md shadow">
                  <a href="{{ route('auth.redirect') }}" class="w-full flex items-center justify-center px-8 py-3 border border-transparent text-base font-medium rounded-md text-white bg-indigo-600 hover:bg-indigo-700 md:py-4 md:text-lg md:px-10">
                    Get started
                  </a>
                </div>
              </div>
            </div>
          </main>
        </div>
      </div>
     {{--  <div class="lg:absolute lg:inset-y-0 lg:right-0 lg:w-1/2">
        <img class="h-56 w-full object-cover sm:h-72 md:h-96 lg:w-full lg:h-full" src="/images/honor.jpg" alt="">
      </div> --}}
    </div>

    <div class="py-12 bg-gray-600">
      <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="lg:text-center">
          <p class="mt-2 text-3xl leading-8 font-extrabold tracking-tight text-indigo-400 sm:text-4xl">
            Live, Laugh, LOL.
          </p>
          <p class="mt-4 max-w-2xl text-xl text-gray-300 lg:mx-auto">
            Upload, Save and Share Images and Quotes from you Discord Server. Have a scrapbook of funny moments on your Discord Server.
          </p>
        </div>

        <div class="mt-10">
          <dl class="space-y-10 md:space-y-0 md:grid md:grid-cols-2 md:gap-x-8 md:gap-y-10">
            <div class="flex">
              <div class="flex-shrink-0">
                <div class="flex items-center justify-center h-12 w-12 rounded-md bg-indigo-400 text-white">    
                  <!-- Heroicon name: outline/globe-alt -->
                  <svg class="h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 12a9 9 0 01-9 9m9-9a9 9 0 00-9-9m9 9H3m9 9a9 9 0 01-9-9m9 9c1.657 0 3-4.03 3-9s-1.343-9-3-9m0 18c-1.657 0-3-4.03-3-9s1.343-9 3-9m-9 9a9 9 0 019-9" />
                  </svg>
                </div>
              </div>
              <div class="ml-4">
                <dt class="text-lg leading-6 font-medium text-gray-300">
                  Discord Bot
                </dt>
                <dd class="mt-2 text-base text-gray-300">
                  The {{ config('app.name') }} Bot allows you to Upload Images & Quotes directly to your Community Scrapbook. You can also call ask it to get a random Image, Quote or Both for a quick laugh.
                </dd>
              </div>
            </div>

            <div class="flex">
              <div class="flex-shrink-0">
                <div class="flex items-center justify-center h-12 w-12 rounded-md bg-indigo-400 text-white">
                  <!-- Heroicon name: outline/scale -->
                  <svg class="h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 6l3 1m0 0l-3 9a5.002 5.002 0 006.001 0M6 7l3 9M6 7l6-2m6 2l3-1m-3 1l-3 9a5.002 5.002 0 006.001 0M18 7l3 9m-3-9l-6-2m0-2v2m0 16V5m0 16H9m3 0h3" />
                  </svg>
                </div>
              </div>
              <div class="ml-4">
                <dt class="text-lg leading-6 font-medium text-gray-300">
                  Images & Text
                </dt>
                <dd class="mt-2 text-base text-gray-300">
                  Multi Message and JPG, JPEG, PNG, BMP, GIF, SVG, WEBP Supported.
                </dd>
              </div>
            </div>

            <div class="flex">
              <div class="flex-shrink-0">
                <div class="flex items-center justify-center h-12 w-12 rounded-md bg-indigo-400 text-white">
                  <!-- Heroicon name: outline/lightning-bolt -->
                  <svg class="h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z" />
                  </svg>
                </div>
              </div>
              <div class="ml-4">
                <dt class="text-lg leading-6 font-medium text-gray-300">
                  Privacy Settings
                </dt>
                <dd class="mt-2 text-base text-gray-300">
                  Full control over who can and who cannot see your Scrapbook incase there is private stuff on there. Full Access, Password Protected, Community or fully Private.
                </dd>
              </div>
            </div>

            <div class="flex">
              <div class="flex-shrink-0">
                <div class="flex items-center justify-center h-12 w-12 rounded-md bg-indigo-400 text-white">
                  <!-- Heroicon name: outline/annotation -->
                  <svg class="h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 8h10M7 12h4m1 8l-4-4H5a2 2 0 01-2-2V6a2 2 0 012-2h14a2 2 0 012 2v8a2 2 0 01-2 2h-3l-4 4z" />
                  </svg>
                </div>
              </div>
              <div class="ml-4">
                <dt class="text-lg leading-6 font-medium text-gray-300">
                  Discord Login
                </dt>
                <dd class="mt-2 text-base text-gray-300">
                  Full OAuth With Discord. No need to make new accounts. Just sign in with your Discord account!
                </dd>
              </div>
            </div>
          </dl>
        </div>
      </div>
    </div>
    <div class="py-12 bg-white">
      <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="lg:text-center">
          <h2 class="text-base text-indigo-600 font-semibold tracking-wide uppercase"><a name="about">About</a></h2>
          <p class="mt-4 max-w-12xl text-base text-gray-500 lg:mx-auto">
            {{ config('app.name') }}, inspired by Rickyisms from Trailer Park Boys and our friend Smirky, start as a bot for my gaming community. We wanted a way to save funny quotes, memes and images in a place where we could pull from it for good memories, like a Scrap Book. From there I had interest and decided to open to more people. So here we are.
          </p>
        </div>
      </div>
    </div>
    <div class="py-12 bg-gray-600">
      <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="lg:text-center">
          <h2 class="text-base text-indigo-400 font-semibold tracking-wide uppercase"><a name="howitworks">How it Works</a></h2>
          <p class="mt-4 max-w-12xl text-base text-gray-300 lg:mx-auto">
            {{ config('app.name') }} works by adding a bot to your chosen Discord Server. You can then ask the bot to 'pin' messages and it will add them to your account. You can set Privacy so your Scrap Books can be private or open to the public.
          </p>
          <p class="mt-4 max-w-12xl text-base text-gray-300 lg:mx-auto">
            As well as viewing images on {{ config('app.name') }} you can also request them via the bot straight to you Discord Server. So whenever you want a quick laugh you can ask the bot for a random Quote, Image or both!
          </p>
        </div>
      </div>
    </div>

    <footer>
      <div class="bg-gray-600">
        <p class="text-center p-4 text-gray-300">
          Created by <a class="border-b text-green-400" href="https://th0rn0.co.uk" target="_blank">Th0rn0</a>. Built with Vodka and Hatred.
        </p>
      </div>
    </footer>
  </div>
</body>
</html>
