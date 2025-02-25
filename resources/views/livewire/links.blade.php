<div class="">
    <div
        x-data
        x-sortable
        x-on:sorted="$wire.updateOrder($event.detail)"
        class="space-y-3">
        @foreach($links as $link)
            <div class="bg-slate-200 text-gray-700 py-3 px-6 rounded-xl font-medium"
            x-sortable-item="{{$link->id}}"
            >
                {{$link->url}}
            </div>
        @endforeach
        {{$links->links()}}
    </div>

</div>
