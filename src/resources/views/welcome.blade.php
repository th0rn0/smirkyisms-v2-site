
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
    <meta property="og:title" content="Landing Page with Tailwind CSS 2 by mithicher" />
    <meta property="og:description" content="Inspired from a dribble shot by https://dribbble.com/shots/8807920-Quickpay-Hero-section/attachments/1015863?mode=media &amp;bull; https://codepen.io/mithicher/pen/JjorVyb" />

    <meta name="twitter:card" content="summary_large_image" />
    <meta name="twitter:site" content="@TwComponents" />
    <meta name="twitter:title" content="Landing Page with Tailwind CSS 2 by mithicher" />
    <meta name="twitter:description" content="Inspired from a dribble shot by https://dribbble.com/shots/8807920-Quickpay-Hero-section/attachments/1015863?mode=media &amp;bull; https://codepen.io/mithicher/pen/JjorVyb" />
    <meta name="twitter:image" content="https://tailwindcomponents.com/storage/917/conversions/temp66505-ogimage.jpg?v=2021-03-01 00:16:06" />

    <title>Smirkyisms</title>

    <link rel="stylesheet" href="https://unpkg.com/tailwindcss@1.0.4/dist/tailwind.min.css">
</head>
<body class="bg-gray-200">
<div>
    <div class="bg-indigo-900 px-4 py-4">
      <div
        class="md:max-w-6xl md:mx-auto md:flex md:items-center md:justify-between"
      >
        <div class="flex justify-between items-center">
          <a href="#" class="inline-block py-2 text-white text-xl font-bold"
            >Smirkyisms</a
          >
          <div
            class="inline-block cursor-pointer md:hidden">
            <div class="bg-gray-400 w-8 mb-2" style="height: 2px;"></div>
            <div class="bg-gray-400 w-8 mb-2" style="height: 2px;"></div>
            <div class="bg-gray-400 w-8" style="height: 2px;"></div>
          </div>
        </div>
        
        <div>
          <div class="hidden md:block">
            <a
              href="{{ route('howitworks') }}"
              class="inline-block py-1 md:py-4 text-gray-100 mr-6 font-bold"
              >How it Works</a
            >
            <a
              href="{{ route('about') }}"
              class="inline-block py-1 md:py-4 text-gray-500 hover:text-gray-100 mr-6"
              >About</a
            >
          </div>
        </div>
        <div class="hidden md:block">
          <a
            href="{{ route('auth.redirect') }}"
            class="inline-block py-1 md:py-4 text-gray-500 hover:text-gray-100 mr-6"
            >Login</a
          >
          <a
            href="{{ route('auth.redirect') }}"
            class="inline-block py-2 px-4 text-gray-700 bg-white hover:bg-gray-100 rounded-lg"
            >Sign Up</a
          >
        </div>
      </div>
    </div>

    <div class="bg-indigo-900 md:overflow-hidden">
      <div class="px-4 py-20 md:py-4">
        <div class="md:max-w-6xl md:mx-auto">
          <div class="md:flex md:flex-wrap">
            <div class="md:w-1/2 text-center md:text-left md:pt-16">
              <h1
                class="font-bold text-white text-2xl md:text-5xl leading-tight mb-4"
              >
                Community Curated Scrap Books
              </h1>

              <p class="text-indigo-200 md:text-xl md:pr-48">
                Save, Share and Laugh at all your Discord Community's memes <strong>forever!</strong>
              </p>

              <a
                href="{{ route('auth.redirect') }}"
                class="mt-6 mb-12 md:mb-0 md:mt-10 inline-block py-3 px-8 text-white bg-red-500 hover:bg-red-600 rounded-lg shadow"
                >Add to Discord</a
              >
               <a
                href="{{ route('auth.redirect') }}"
                class="mt-6 mb-12 md:mb-0 md:mt-10 inline-block py-3 px-8 text-white bg-red-500 hover:bg-red-600 rounded-lg shadow"
                >Features</a
              >
            </div>
            <div class="md:w-1/2 relative">
              <div class="hidden md:block">
                <div
                  class="-ml-24 -mb-40 absolute left-0 bottom-0 w-40 bg-white rounded-lg shadow-lg px-6 py-8"
                  style="transform: rotate(-8deg);"
                >
                  <div
                    class="bg-indigo-800 mx-auto rounded-lg px-2 pb-2 relative mb-8"
                  >
                    <div class="mb-1">
                      <span
                        class="w-1 h-1 bg-indigo-100 rounded-full inline-block"
                        style="margin-right: 1px;"
                      ></span
                      ><span
                        class="w-1 h-1 bg-indigo-100 rounded-full inline-block"
                        style="margin-right: 1px;"
                      ></span
                      ><span
                        class="w-1 h-1 bg-indigo-100 rounded-full inline-block"
                      ></span>
                    </div>
                    <div class="h-1 w-12 bg-indigo-100 rounded mb-1"></div>
                    <div class="h-1 w-10 bg-indigo-100 rounded mb-2"></div>

                    <div class="flex">
                      <div class="w-6 h-3 rounded bg-indigo-100 mr-1"></div>
                      <div class="w-6 h-3 rounded bg-indigo-100"></div>
                    </div>

                    <div
                      class="-mr-2 -mb-4 absolute bottom-0 right-0 h-16 w-10 rounded-lg bg-green-700 border-2 border-white"
                    ></div>
                    <div
                      class="w-2 h-2 rounded-full bg-green-800 mx-auto absolute bottom-0 right-0 mr-2 -mb-2 z-10 border-2 border-white"
                    ></div>
                  </div>

                  <div class="text-gray-800 text-center">
                    Quotes
                  </div>
                </div>

                <div
                  class="ml-24 mb-16 absolute left-0 bottom-0 w-40 bg-white rounded-lg shadow-lg px-6 py-8"
                  style="transform: rotate(-8deg); z-index: 2;"
                >
                  <div
                    class="bg-indigo-800 mx-auto rounded-lg relative mb-8 py-2 w-20 border-2 border-white"
                  >
                    <div
                      class="h-8 bg-green-700 w-8 rounded absolute left-0 top-0 -mt-3 ml-4"
                      style="transform: rotate(-45deg); z-index: -1;"
                    ></div>
                    <div
                      class="h-8 bg-green-800 w-8 rounded absolute left-0 top-0 -mt-3 ml-8"
                      style="transform: rotate(-12deg); z-index: -2;"
                    ></div>

                    <div
                      class="flex items-center justify-center h-6 bg-indigo-800 w-6 rounded-l-lg ml-auto border-4 border-white -mr-1"
                    >
                      <div
                        class="h-2 w-2 rounded-full bg-indigo-800 border-2 border-white"
                      ></div>
                    </div>

                    <div
                      class="w-8 h-8 bg-green-700 border-4 border-white rounded-full -ml-3 -mb-5"
                    ></div>
                  </div>

                  <div class="text-gray-800 text-center">
                    Images
                  </div>
                </div>

                <div
                  class="ml-32 absolute left-0 bottom-0 w-48 bg-white rounded-lg shadow-lg px-10 py-8"
                  style="transform: rotate(-8deg); z-index: 2; margin-bottom: -220px;"
                >
                  <div
                    class="bg-indigo-800 mx-auto rounded-lg pt-4 mb-16 relative"
                  >
                    <div class="h-4 bg-white"></div>

                    <div class="text-right my-2 pb-1">
                      <div
                        class="inline-flex w-3 h-3 rounded-full bg-white -mr-2"
                      ></div>
                      <div
                        class="inline-flex w-3 h-3 rounded-full bg-indigo-800 border-2 border-white mr-2"
                      ></div>
                    </div>

                    <div
                      class="-ml-4 -mb-6 absolute left-0 bottom-0 w-16 bg-green-700 mx-auto rounded-lg pb-2 pt-3"
                    >
                      <div class="h-2 bg-white mb-2"></div>
                      <div class="h-2 bg-white w-6 ml-auto rounded mr-2"></div>
                    </div>
                  </div>

                  <div class="text-gray-800 text-center">
                    Memes
                  </div>
                </div>

                <div
                  class="mt-10 w-full absolute right-0 top-0 flex rounded-lg bg-white overflow-hidden shadow-lg"
                  style="transform: rotate(-8deg); margin-right: -250px; z-index: 1;"
                >
                  <div class="w-32 bg-gray-200" style="height: 560px;"></div>
                  <div class="flex-1 p-6">
                    <h2 class="text-lg text-gray-700 font-bold mb-3">
                      Community Quotes
                    </h2>
                    <div class="flex mb-5">
                      <div class="w-16 rounded-full bg-gray-100 py-2 px-4 mr-2">
                        <div class="p-1 rounded-full bg-gray-300"></div>
                      </div>
                      <div class="w-16 rounded-full bg-gray-100 py-2 px-4 mr-2">
                        <div class="p-1 rounded-full bg-gray-300"></div>
                      </div>
                      <div class="w-16 rounded-full bg-gray-100 py-2 px-4 mr-2">
                        <div class="p-1 rounded-full bg-gray-300"></div>
                      </div>
                      <div class="w-16 rounded-full bg-gray-100 py-2 px-4">
                        <div class="p-1 rounded-full bg-gray-300"></div>
                      </div>
                    </div>

                    <div class="flex flex-wrap -mx-4 mb-5">
                      <div class="w-1/3 px-4">
                        <div class="h-40 rounded-lg bg-white shadow-lg p-6">
                          <div
                            class="w-16 h-16 rounded-full bg-gray-200 mb-6"
                          ></div>
                          <div
                            class="h-2 w-16 bg-gray-200 mb-2 rounded-full"
                          ></div>
                          <div class="h-2 w-10 bg-gray-200 rounded-full"></div>
                        </div>
                      </div>
                      <div class="w-1/3 px-4">
                        <div class="h-40 rounded-lg bg-white shadow-lg p-6">
                          <div
                            class="w-16 h-16 rounded-full bg-gray-200 mb-6"
                          ></div>
                          <div
                            class="h-2 w-16 bg-gray-200 mb-2 rounded-full"
                          ></div>
                          <div class="h-2 w-10 bg-gray-200 rounded-full"></div>
                        </div>
                      </div>
                      <div class="w-1/3 px-4">
                        <div class="h-40 rounded-lg bg-white shadow-lg p-6">
                          <div
                            class="w-16 h-16 rounded-full bg-gray-200 mb-6"
                          ></div>
                          <div
                            class="h-2 w-16 bg-gray-200 mb-2 rounded-full"
                          ></div>
                          <div class="h-2 w-10 bg-gray-200 rounded-full"></div>
                        </div>
                      </div>
                    </div>

                    <h2 class="text-lg text-gray-700 font-bold mb-3">
                      Community Images
                    </h2>

                    <div
                      class="w-full flex flex-wrap justify-between items-center border-b-2 border-gray-100 py-3"
                    >
                      <div class="w-1/3">
                        <div class="flex">
                          <div class="h-8 w-8 rounded bg-gray-200 mr-4"></div>
                          <div>
                            <div
                              class="h-2 w-16 bg-gray-200 mb-1 rounded-full"
                            ></div>
                            <div
                              class="h-2 w-10 bg-gray-100 rounded-full"
                            ></div>
                          </div>
                        </div>
                      </div>
                      <div class="w-1/3">
                        <div
                          class="w-16 rounded-full bg-green-100 py-2 px-4 mx-auto"
                        >
                          <div class="p-1 rounded-full bg-green-200"></div>
                        </div>
                      </div>
                      <div class="w-1/3">
                        <div
                          class="h-2 w-10 bg-gray-100 rounded-full mx-auto"
                        ></div>
                      </div>
                    </div>

                    <div
                      class="flex flex-wrap justify-between items-center border-b-2 border-gray-100 py-3"
                    >
                      <div class="w-1/3">
                        <div class="flex">
                          <div class="h-8 w-8 rounded bg-gray-200 mr-4"></div>
                          <div>
                            <div
                              class="h-2 w-16 bg-gray-200 mb-1 rounded-full"
                            ></div>
                            <div
                              class="h-2 w-10 bg-gray-100 rounded-full"
                            ></div>
                          </div>
                        </div>
                      </div>
                      <div class="w-1/3">
                        <div
                          class="w-16 rounded-full bg-orange-100 py-2 px-4 mx-auto"
                        >
                          <div class="p-1 rounded-full bg-orange-200"></div>
                        </div>
                      </div>
                      <div class="w-1/3">
                        <div
                          class="h-2 w-16 bg-gray-100 rounded-full mx-auto"
                        ></div>
                      </div>
                    </div>

                    <div
                      class="flex flex-wrap justify-between items-center border-b-2 border-gray-100 py-3"
                    >
                      <div class="w-1/3">
                        <div class="flex">
                          <div class="h-8 w-8 rounded bg-gray-200 mr-4"></div>
                          <div>
                            <div
                              class="h-2 w-16 bg-gray-200 mb-1 rounded-full"
                            ></div>
                            <div
                              class="h-2 w-10 bg-gray-100 rounded-full"
                            ></div>
                          </div>
                        </div>
                      </div>
                      <div class="w-1/3">
                        <div
                          class="w-16 rounded-full bg-blue-100 py-2 px-4 mx-auto"
                        >
                          <div class="p-1 rounded-full bg-blue-200"></div>
                        </div>
                      </div>
                      <div class="w-1/3">
                        <div
                          class="h-2 w-8 bg-gray-100 rounded-full mx-auto"
                        ></div>
                      </div>
                    </div>
                  </div>
                </div>

                <div
                  class="w-full absolute left-0 bottom-0 ml-1"
                  style="transform: rotate(-8deg); z-index: 1; margin-bottom: -360px;"
                >
                  <div class="grid--gray h-48 w-48"></div>
                </div>
              </div>

              <div
                class="md:hidden w-full absolute right-0 top-0 flex rounded-lg bg-white overflow-hidden shadow"
              >
                <div
                  class="h-4 bg-gray-200 absolute top-0 left-0 right-0 rounded-t-lg flex items-center"
                >
                  <span
                    class="h-2 w-2 rounded-full bg-red-500 inline-block mr-1 ml-2"
                  ></span>
                  <span
                    class="h-2 w-2 rounded-full bg-orange-400 inline-block mr-1"
                  ></span>
                  <span
                    class="h-2 w-2 rounded-full bg-green-500 inline-block mr-1"
                  ></span>
                </div>
                <div class="w-32 bg-gray-100 px-2 py-8" style="height: 340px;">
                  <div class="h-2 w-16 bg-gray-300 rounded-full mb-4"></div>
                  <div class="flex items-center mb-4">
                    <div
                      class="h-5 w-5 rounded-full bg-gray-300 mr-3 flex-shrink-0"
                    ></div>
                    <div>
                      <div class="h-2 w-10 bg-gray-300 rounded-full"></div>
                    </div>
                  </div>

                  <div class="h-2 w-16 bg-gray-200 rounded-full mb-2"></div>
                  <div class="h-2 w-10 bg-gray-200 rounded-full mb-2"></div>
                  <div class="h-2 w-20 bg-gray-200 rounded-full mb-2"></div>
                  <div class="h-2 w-6 bg-gray-200 rounded-full mb-2"></div>
                  <div class="h-2 w-16 bg-gray-200 rounded-full mb-2"></div>
                  <div class="h-2 w-10 bg-gray-200 rounded-full mb-2"></div>
                  <div class="h-2 w-20 bg-gray-200 rounded-full mb-2"></div>
                  <div class="h-2 w-6 bg-gray-200 rounded-full mb-2"></div>
                </div>
                <div class="flex-1 px-4 py-8">
                  <h2 class="text-xs text-gray-700 font-bold mb-1">
                    Popular Payments
                  </h2>
                  <div class="flex mb-5">
                    <div class="p-2 w-12 rounded-full bg-gray-100 mr-2"></div>
                    <div class="p-2 w-12 rounded-full bg-gray-100 mr-2"></div>
                    <div class="p-2 w-12 rounded-full bg-gray-100 mr-2"></div>
                    <div class="p-2 w-12 rounded-full bg-gray-100 mr-2"></div>
                  </div>

                  <div class="flex flex-wrap -mx-2 mb-5">
                    <div class="w-1/3 px-2">
                      <div class="p-3 rounded-lg bg-white shadow">
                        <div
                          class="w-6 h-6 rounded-full bg-gray-200 mb-2"
                        ></div>
                        <div
                          class="h-2 w-10 bg-gray-200 mb-1 rounded-full"
                        ></div>
                        <div class="h-2 w-6 bg-gray-200 rounded-full"></div>
                      </div>
                    </div>
                    <div class="w-1/3 px-2">
                      <div class="p-3 rounded-lg bg-white shadow">
                        <div
                          class="w-6 h-6 rounded-full bg-gray-200 mb-2"
                        ></div>
                        <div
                          class="h-2 w-10 bg-gray-200 mb-1 rounded-full"
                        ></div>
                        <div class="h-2 w-6 bg-gray-200 rounded-full"></div>
                      </div>
                    </div>
                    <div class="w-1/3 px-2">
                      <div class="p-3 rounded-lg bg-white shadow">
                        <div
                          class="w-6 h-6 rounded-full bg-gray-200 mb-2"
                        ></div>
                        <div
                          class="h-2 w-10 bg-gray-200 mb-1 rounded-full"
                        ></div>
                        <div class="h-2 w-6 bg-gray-200 rounded-full"></div>
                      </div>
                    </div>
                  </div>

                  <h2 class="text-xs text-gray-700 font-bold mb-1">
                    Popular Payments
                  </h2>

                  <div
                    class="w-full flex flex-wrap justify-between items-center border-b-2 border-gray-100 py-3"
                  >
                    <div class="w-1/3">
                      <div class="flex">
                        <div
                          class="h-5 w-5 rounded-full bg-gray-200 mr-3 flex-shrink-0"
                        ></div>
                        <div>
                          <div
                            class="h-2 w-16 bg-gray-200 mb-1 rounded-full"
                          ></div>
                          <div class="h-2 w-10 bg-gray-100 rounded-full"></div>
                        </div>
                      </div>
                    </div>
                    <div class="w-1/3">
                      <div
                        class="w-16 rounded-full bg-green-100 py-2 px-4 mx-auto"
                      >
                        <div class="p-1 rounded-full bg-green-200"></div>
                      </div>
                    </div>
                    <div class="w-1/3">
                      <div
                        class="h-2 w-10 bg-gray-100 rounded-full mx-auto"
                      ></div>
                    </div>
                  </div>

                  <div class="flex flex-wrap justify-between items-center py-3">
                    <div class="w-1/3">
                      <div class="flex">
                        <div
                          class="h-5 w-5 rounded-full bg-gray-200 mr-3 flex-shrink-0"
                        ></div>
                        <div>
                          <div
                            class="h-2 w-16 bg-gray-200 mb-1 rounded-full"
                          ></div>
                          <div class="h-2 w-10 bg-gray-100 rounded-full"></div>
                        </div>
                      </div>
                    </div>
                    <div class="w-1/3">
                      <div
                        class="w-16 rounded-full bg-orange-100 py-2 px-4 mx-auto"
                      >
                        <div class="p-1 rounded-full bg-orange-200"></div>
                      </div>
                    </div>
                    <div class="w-1/3">
                      <div
                        class="h-2 w-16 bg-gray-100 rounded-full mx-auto"
                      ></div>
                    </div>
                  </div>
                </div>
              </div>

              <div
                class="mr-3 md:hidden absolute right-0 bottom-0 w-40 bg-white rounded-lg shadow-lg px-10 py-6"
                style="z-index: 2; margin-bottom: -380px;"
              >
                <div
                  class="bg-indigo-800 mx-auto rounded-lg w-20 pt-3 mb-12 relative"
                >
                  <div class="h-3 bg-white"></div>

                  <div class="text-right my-2">
                    <div
                      class="inline-flex w-3 h-3 rounded-full bg-white -mr-2"
                    ></div>
                    <div
                      class="inline-flex w-3 h-3 rounded-full bg-indigo-800 border-2 border-white mr-2"
                    ></div>
                  </div>

                  <div
                    class="-ml-4 -mb-6 absolute left-0 bottom-0 w-16 bg-green-700 mx-auto rounded-lg pb-2 pt-3"
                  >
                    <div class="h-2 bg-white mb-2"></div>
                    <div class="h-2 bg-white w-6 ml-auto rounded mr-2"></div>
                  </div>
                </div>

                <div class="text-gray-800 text-center text-sm">
                  Payment for <br />Internet
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <svg
        class="fill-current text-white hidden md:block"
        xmlns="http://www.w3.org/2000/svg"
        viewBox="0 0 1440 320"
      >
        <path fill-opacity="1" d="M0,224L1440,32L1440,320L0,320Z"></path>
      </svg>
    </div>

    <p class="text-center p-4 text-gray-600 pt-10">
      Created by
      <a
        class="border-b text-blue-500"
        href="https://twitter.com/mithicher"
        target="_blank"
        >@Th0rn0</a
      >. Built with Vodka and Hatred.
</p>
</div>
</body>
</html>
