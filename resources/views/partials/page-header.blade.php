@if(empty($thumbnail))
  @php($thumbnail = get_the_post_thumbnail_url(get_the_ID(), 'hero'))
@endif

@if(empty($identifier))
  @php($identifier = null)
@endif

@if(!empty(get_field('subtitles')[0]['subtitle']) OR !empty(get_field('heading')) OR !empty(get_field('subtitles', $identifier)[0]['subtitle']) OR !empty(get_field('heading', $identifier)))
  @php($subtitleCheck = true)
@else
  @php($subtitleCheck = false)
@endif

<div class="w-full {{$subtitleCheck ? "h-[50svh] lg:h-[100vh]" : "h-[50svh] lg:h-[75svh]"}}">
  <img width="2560" height="1440" class="w-full {{$subtitleCheck ? "h-2/4 lg:h-3/4" : "h-full"}} object-cover object-top" src="{{$thumbnail}}" loading="eager" alt="hero-image">
  @if($subtitleCheck)
  <div class="w-full h-1/4 flex justify-center">
    <div class="w-full lg:w-lg h-full px-4 lg:px-0 flex flex-wrap justify-center items-center text-center">
      <div class="w-full">

          <h1 class="text-2xl lg:text-4xl w-full pb-4 lg:pb-8 text-primary font-secondary mt-4 lg:mt-0">{{get_field('heading', $identifier)}}</h1>

          @fields('subtitles', $identifier)
            <p class="w-full text-sm lg:text-xl font-primary lg:!leading-8">
            @sub('subtitle')
            </p>
          @endfields

        </div>
      </div>
    </div>
    @endif
</div>
