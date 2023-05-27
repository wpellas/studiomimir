@query([
    'post_type' => 'upcoming_events',
    'posts_per_page' => -1,
    'order' => 'ASC',
    'orderby' => 'meta_value',
    'meta_key' => 'start_date',
    'meta_type' => 'DATETIME'
])
<div class="w-full h-full relative flex flex-wrap justify-center my-4 lg:my-8 {{ $block->classes }}">
    <div class="w-[1024px] h-full z-10">
        <h1 class="text-4xl text-center font-primary text-primary pb-8 uppercase">{{esc_html(strip_tags($title_field))}}</h1>
        <ul class="w-full h-full flex flex-wrap justify-center items-center gap-4 lg:gap-8">
        @posts

        @php($id = get_the_ID())
        @php($startDate = get_field('start_date', $id))
        @php($expiredDate = get_field('end_date', $id))
        @php($body = get_field('event_description', $id))

        @if($startDate >= date('j F, Y H:i'))
            <li class="w-full h-36 flex justify-center gap-2 lg:gap-4 font-primary">
                <p class="min-w-[256px] font-primary text-xl">{{$startDate}} - {{$expiredDate}}</p>
                <br/>
                <h1 class="min-w-[256px] text-center uppercase text-xl">@title</h1>
                <br/>
                <div class="w-full eventBody">
                    {!! strip_tags($body, '<div>, <a>') !!}
                </div>
            </li>
        @endif
        
        @endposts
        </ul>
    </div>
</div>