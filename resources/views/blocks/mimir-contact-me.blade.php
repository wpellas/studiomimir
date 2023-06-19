<div class="px-4 lg:px-0 w-full h-full relative flex flex-wrap justify-center {{ $block->classes }} {{is_admin() ? "pointer-events-none" : ""}}">
  <div class="h-full w-full lg:w-lg z-10 flex flex-wrap justify-center">
    <h1 class="w-full text-center  font-secondary text-primary text-2xl lg:text-4xl py-4">{{esc_html(strip_tags($title_field))}}</h1>
    @hasfield('contact_form_field')
      [contact-form-7 id="{{$contact_form_field[0]->ID}}" title="{{$contact_form_field[0]->post_title}}"]
    @endfield
    <a class="w-full lg:w-[800px] text-xs text-black pt-2 italic" href="{{get_privacy_policy_url()}}" aria-label="{{__('Länk till Användarvillkor', 'mimir')}}">{{__('Användarvillkor och behandlingen av uppgifter samt övrig information om hur hemsidan används hittar du', 'mimir')}} <span class="text-primary">{{__('här', 'mimir')}}</span>.</a>
  </div>
</div>