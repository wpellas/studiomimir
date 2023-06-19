<div class="px-4 lg:px-0 w-full h-full relative flex flex-wrap justify-center {{ $block->classes }} {{is_admin() ? "pointer-events-none" : ""}}">
  <div class="w-lg h-full z-10 flex flex-wrap justify-center py-8">
    <h1 class="w-full text-center  font-secondary text-primary text-2xl lg:text-4xl py-4">{{esc_html(strip_tags($title_field))}}</h1>
    @hasfield('contact_form_field')
    <h5 class="font-primary normal-case">{{__("Currently using")}}: <span class="text-black">{{$contact_form_field[0]->post_title}}</span>. {{__("This message is only visible in the editor", 'mimir')}}.</h5>
    <form class="relative w-full lg:w-[800px] h-full flex flex-wrap gap-4 font-primary" action="POST">
      <input class="w-full h-12 lg:h-16 px-2 text-lg text-primary border-primary border-2 placeholder:text-primary placeholder:uppercase placeholder:text-base placeholder:lg:text-lg" type="text" name="form_name" id="" placeholder="{{__("namn", 'mimir')}}">
      <input class="w-full h-12 lg:h-16 px-2 text-lg text-primary border-primary border-2 placeholder:text-primary placeholder:uppercase placeholder:text-base placeholder:lg:text-lg" type="text" name="form_email" id="" placeholder="{{__("epost", 'mimir')}}">
      <textarea class="w-full p-2 text-lg text-primary border-primary border-2 placeholder:text-primary placeholder:uppercase resize-none placeholder:text-base placeholder:lg:text-lg" name="form_body" id="form_body" cols="30" rows="10" placeholder="{{__("meddelande", 'mimir')}}" required ></textarea>
      <div class="w-full h-full flex justify-end">
          <button class="bg-primary py-2 lg:py-4 px-4 lg:px-6  text-secondary font-secondary text-base lg:text-xl hover:animate-pulse" type="submit">{{__("skicka", 'mimir')}}</button>
      </div>
    </form>
    @endfield
  </div>
</div>