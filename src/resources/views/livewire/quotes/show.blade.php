<div>
    <div class="w-full mx-auto rounded-lg bg-gray-500 shadow-lg px-5 pt-5 pb-10 text-gray-300" style="max-width: 500px">
      {{--   <div class="w-full pt-1 pb-5">
            <div class="overflow-hidden rounded-full w-20 h-20 -mt-16 mx-auto shadow-lg">
                <img src="https://randomuser.me/api/portraits/men/15.jpg" alt="">
            </div>
        </div> --}}
        <div class="w-full mb-10">
            <div class="text-3xl text-indigo-400 text-left leading-tight h-3">“</div>
            <p class="text-sm text-gray-300 text-center px-5">{{ $quote->text }}</p>
            <div class="text-3xl text-indigo-400 text-right leading-tight h-3 -mt-3">”</div>
        </div>
        <div class="w-full">
            <p class="text-md text-indigo-300 font-bold text-center">{{ $quote->quote_by }}</p>
            <p class="text-xs text-gray-300 text-center">In the {{ $quote->channel_name }} Channel</p>
         	<p class="text-xs text-gray-300 text-center">Submitted by {{ $quote->submitted_by }}</p>
        </div>
    </div>
</div>
