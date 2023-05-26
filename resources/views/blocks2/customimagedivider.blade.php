{{--
  Title: Image Divider (Custom Images)
  Description: Image Divider with random posts spanning from a category of your choice.
  Category: formatting
  Icon: images-alt2
  Keywords: image divider
  Mode: edit
  Align: center
  PostTypes: page
  SupportsAlign: false
  SupportsMode: false
  SupportsMultiple: false
  EnqueueStyle: styles/style.css
  EnqueueScript: scripts/script.js
  EnqueueAssets: path/to/asset
--}}

<div class="w-full h-96 relative hidden lg:flex justify-between gap-2 lg:gap-4 py-4 lg:py-8">
    @fields('image_divider_images')
        <div class="h-full w-full bg-center bg-cover" style="background-image: url(@sub('image_divider_image'))"></div>
    @endposts
</div>

