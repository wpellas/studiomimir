@php($subtitleCheck = "")
@if(get_field('subtitles'))
@php($subtitleCheck = get_field('subtitles')[0]['subtitle'])
@endif

<div class="w-full {{$subtitleCheck == "" ? "h-[66vh]" : "h-[100vh]"}}">
  <div class="w-full {{$subtitleCheck == "" ? "h-full" : "h-2/3"}} bg-cover bg-top" style="background-image: url({{get_the_post_thumbnail_url() ? get_the_post_thumbnail_url() : $thumbnail}})"></div>
  @if(!$subtitleCheck == "")
  @hasfield('subtitles')
  <div class="w-full h-1/3 flex justify-center">
    <div class="w-full lg:w-lg xl:w-xl h-full px-4 lg:px-0 flex flex-wrap justify-center items-center text-center">
      <div class="w-full font-primary">
        <h1 class="text-xl lg:text-4xl w-full pb-4 lg:pb-8 text-primary mt-4 lg:mt-0">@field('heading')</h1>
          @fields('subtitles')
            <p class="w-full text-sm lg:text-xl">
            @sub('subtitle')
            </p>
          @endfields  
        </div>
      </div>
    </div>
    
    @endfield
    @endif
</div>
