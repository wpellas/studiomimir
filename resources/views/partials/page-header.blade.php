@if(empty($thumbnail))
  @php($thumbnail = get_the_post_thumbnail_url())
@endif

@if(empty($identifier))
  @php($identifier = null)
@endif

@if(!empty(get_field('subtitles')[0]['subtitle']) OR !empty(get_field('heading')) OR !empty(get_field('subtitles', $identifier)[0]['subtitle']) OR !empty(get_field('heading', $identifier)))
  @php($subtitleCheck = true)
@else
  @php($subtitleCheck = false)
@endif

<div class="w-full {{$subtitleCheck ? "h-[100vh]" : "h-[66vh]"}}">
  <div class="w-full {{$subtitleCheck ? "h-2/3" : "h-full"}} bg-cover bg-top" style="background-image: url({{$thumbnail}})"></div>
  <div class="w-full h-1/3 flex justify-center">
    <div class="w-full lg:w-lg h-full px-4 lg:px-0 flex flex-wrap justify-center items-center text-center">
      <div class="w-full">

          <h1 class="text-2xl lg:text-4xl w-full pb-4 lg:pb-8 text-primary font-secondary mt-4 lg:mt-0">{{get_field('heading', $identifier)}}</h1>

          @fields('subtitles', $identifier)
            <p class="w-full text-sm lg:text-xl font-primary">
            @sub('subtitle')
            </p>
          @endfields

        </div>
      </div>
    </div>
</div>
