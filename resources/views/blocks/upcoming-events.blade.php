@query([
    'post_type' => 'upcoming_events',
    'posts_per_page' => -1,
    'order' => 'ASC',
    'orderby' => 'meta_value',
    'meta_key' => 'start_date',
    'meta_type' => 'DATETIME'
])
<div class="w-full h-full relative flex flex-wrap justify-center my-4 lg:my-8 {{ $block->classes }}">
    <div class="w-full lg:w-lg xl:w-xl h-full px-4 lg:px-0 z-10">
        <h1 class="text-4xl text-center font-primary text-primary pb-8 uppercase">{{esc_html(strip_tags($title_field))}}</h1>
        <ul class="w-full h-full flex flex-wrap justify-center items-center gap-4 lg:gap-8">
        @posts

        @php($id = get_the_ID())
        @php($startDate = get_field('start_date', $id))
        @php($expiredDate = get_field('end_date', $id))
        @php($body = get_field('event_description', $id))
        
        @if($startDate > date('Y-m-d'))
            @php($timestamp = strtotime($startDate))
            
            <li class="w-full h-full lg:h-36 py-6 lg:py-0 flex flex-wrap lg:flex-nowrap justify-center gap-2 lg:gap-4 font-primary text-center lg:text-left border-b-[1px] lg:border-b-0 border-primary">
                <div class="min-w-[256px] border-r-0 lg:border-r-[1px] lg:border-primary">

                    <h1 class="w-full text-center uppercase text-xl text-primary font-bold">@title</h1>
                    <br/>
                    <p class="w-full text-center font-primary text-xl">{{date('F j, H:i', $timestamp)}} - {{$expiredDate}}</p>
                    <br/>
                </div>
                <div class="w-full eventBody text-base lg:text-xl">
                    {!! strip_tags($body, '<div>, <a>') !!}
                </div>
            </li>
        @endif
        
        @endposts
        </ul>
    </div>
</div>