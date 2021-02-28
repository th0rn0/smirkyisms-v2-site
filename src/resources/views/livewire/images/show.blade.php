<div>
    <div class="w-full mx-auto rounded-lg bg-white shadow-lg px-5 pt-5 pb-10 text-gray-800" style="max-width: 500px">
        <div class="w-full pt-1 pb-5">
            <div class="overflow-hidden rounded-full w-20 h-20 -mt-16 mx-auto shadow-lg">
                <img src="https://randomuser.me/api/portraits/men/15.jpg" alt="">
            </div>
        </div>
        <div class="w-full mb-10">
			<img src="data:image/jpg;base64,{{ $base64 }}" class="img-fluid">
        </div>
        <div class="w-full">
            <p class="text-md text-indigo-500 font-bold text-center">{{ $image->image_by }}</p>
            <p class="text-xs text-gray-500 text-center">In the {{ $image->channel_name }} Channel</p>
         	<p class="text-xs text-gray-500 text-center">Submitted by {{ $image->submitted_by }}</p>
        </div>
    </div>
</div>
