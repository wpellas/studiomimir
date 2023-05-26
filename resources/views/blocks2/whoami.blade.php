{{--
  Title: Who am I?
  Description: Simple about me card with a title and body text.
  Category: formatting
  Icon: id-alt
  Keywords: about me card info who am i
  Mode: edit
  Align: center
  PostTypes: page
  SupportsAlign: left right
  SupportsMode: true
  SupportsMultiple: true
  EnqueueStyle: styles/style.css
  EnqueueScript: scripts/script.js
  EnqueueAssets: path/to/asset
--}}

<div data-{{ $block['id'] }} class="w-full h-full relative flex flex-wrap justify-center my-4 lg:my-8 {{ $block['classes'] }}">
    <div class="w-[1024px] h-full z-10 flex py-10 gap-8 font-primary">
        <div class="h-[512px] w-full lg:w-1/2 py-2 lg:py-10 text-center flex flex-wrap justify-center items-stretch gap-4 text-lg">
            <h1 class="text-lg lg:text-2xl xl:text-3xl uppercase text-primary">@field('whoami_title')</h1>
            @field('whoami_body')
        </div>
        <div class="h-[512px] w-full lg:w-1/2 bg-cover bg-center" style="background-image: url(@field('whoami_image'))"></div>
    </div>
</div>