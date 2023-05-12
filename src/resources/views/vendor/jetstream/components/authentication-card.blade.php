<div class="flex flex-col sm:justify-center items-center pt-6 mt-10 sm:pt-0">
    <div>
      	<h2 class="font-semibold text-lg text-gray-400 leading-tight">
            {{ $logo }}
        </h2>
    </div>

    <div class="w-full sm:max-w-md mt-6 px-6 py-4 bg-gray-500 shadow-md overflow-hidden sm:rounded-lg">
        {{ $slot }}
    </div>
</div>
