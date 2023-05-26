<div class="w-full h-96 relative hidden lg:flex justify-between gap-2 lg:gap-4 py-4 lg:py-8">
  @if($dividerImages)
    @foreach ($dividerImages as $image)
      <div class="h-full w-full bg-center bg-cover" style="background-image: url({{$image['image']['url']}})"></div>
    @endforeach
  @endif
</div>