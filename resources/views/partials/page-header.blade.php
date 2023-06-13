@if(function_exists('is_woocommerce') && (is_woocommerce() || is_cart() || is_checkout() || is_account_page()))

@else
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
  
  <div class="page-header w-full mt-20 lg:mt-0">
  <img width="100%" height="100%" class="!h-[50svh] lg:!h-[75svh] w-full object-cover object-top" src="{{$thumbnail ? $thumbnail : get_template_directory_uri() . '/resources/images/hero.webp'}}" loading="eager" alt="hero-image">
  @if($subtitleCheck)
  <div class="w-full flex justify-center py-8">
    <div class="w-full lg:w-lg h-full px-4 lg:px-0 flex flex-wrap justify-center items-center text-center">
      <div class="w-full flex flex-wrap gap-4 lg:gap-8">

        <h1 class="text-3xl lg:text-4xl w-full text-primary font-secondary mt-4 lg:mt-0">{{get_field('heading', $identifier)}}</h1>
        @hasfields('subtitles', $identifier)
        <div class="w-full text-center">
          @fields('subtitles', $identifier)
          <p class="w-full text-lg lg:text-xl font-primary lg:!leading-8">
            @sub('subtitle')
          </p>
          @endfields
        </div>
        @endhasfields
        </div>
      </div>
    </div>
    @endif
  </div>
@endif