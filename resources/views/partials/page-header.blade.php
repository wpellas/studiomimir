@php($subtitleCheck = get_field('subtitles')[0]['subtitle'])
<div class="w-full {{$subtitleCheck == "" ? "h-[66vh]" : "h-[100vh]"}}">
  <div class="w-full {{$subtitleCheck == "" ? "h-full" : "h-2/3"}} bg-cover bg-top" style="background-image: url({{get_the_post_thumbnail_url() ? get_the_post_thumbnail_url() : $thumbnail}})"></div>
  @if(!$subtitleCheck == "")
  @hasfield('subtitles')
  <div class="w-full h-1/3 flex justify-center">
    <div class="w-[1024px] h-full flex flex-wrap justify-center items-center text-center">
      <div class="w-full font-primary">
        <h1 class="text-4xl w-full pb-4 lg:pb-8 text-primary">@field('heading')</h1>
          @fields('subtitles')
            <p class="w-full">
            @sub('subtitle')
            </p>
          @endfields  
        </div>
      </div>
    </div>
    
    @endfield
    @endif
</div>
