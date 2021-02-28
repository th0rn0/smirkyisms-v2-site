<div>
    <div class="w-full mx-auto rounded-lg bg-white shadow-lg px-5 pt-5 pb-10 text-gray-800" style="max-width: 500px">
        <div class="w-full pt-1 pb-5">
            <div class="overflow-hidden rounded-full w-20 h-20 -mt-16 mx-auto shadow-lg">
                <img src="https://randomuser.me/api/portraits/men/15.jpg" alt="">
            </div>
        </div>
        <div class="w-full mb-10">
            <div class="text-3xl text-indigo-500 text-left leading-tight h-3">“</div>
            <p class="text-sm text-gray-600 text-center px-5">{{ $quote->text }}</p>
            <div class="text-3xl text-indigo-500 text-right leading-tight h-3 -mt-3">”</div>
        </div>
        <div class="w-full">
            <p class="text-md text-indigo-500 font-bold text-center">{{ $quote->quote_by }}</p>
            <p class="text-xs text-gray-500 text-center">In the {{ $quote->channel_name }} Channel</p>
         	<p class="text-xs text-gray-500 text-center">Submitted by {{ $quote->submitted_by }}</p>
        </div>
    </div>
{{-- 
       <blockquote class="blockquote text-right mb-0">
        <footer class="blockquote-footer">
          posted by {{ submitted_by }}
          <span v-if="type === 'discord'">
            via Discord 
            <span v-if="discord_server_name">
              - <cite :title="discord_server_name">#{{ discord_channel_name }} on {{ discord_server_name }}</cite>
            </span>
          </span>
        </footer>
        <a v-if="id && hyperlink" class="stretched-link" :href="'/images/' + id"></a>
      </blockquote> --}}
</div>
