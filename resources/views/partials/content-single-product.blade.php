@php($product = wc_get_product(get_the_ID()))
{{$title}}
{!!wc_price($product->get_price())!!}

@php($gallery_image_ids = $product->get_gallery_image_ids())
<div class="flex">
    @foreach($gallery_image_ids as $image_id)
    <img src="{{wp_get_attachment_url($image_id)}}" alt="" class="" style="width: 300px; height: 300px; border-radius: 5px;">
    @endforeach
</div>