<div class="w-full h-full relative flex flex-wrap justify-center my-4 lg:my-8 {{ $block->classes }} {{is_admin() ? "pointer-events-none" : ""}}">
  <div class="w-lg px-4 lg:px-0 h-full z-10 flex flex-wrap justify-center py-10">
    <h1 class="w-full text-center uppercase font-secondary text-primary text-xl lg:text-4xl py-6">{{esc_html(strip_tags($title_field))}}</h1>
    <form class="relative w-full lg:w-[800px] h-full flex flex-wrap gap-4 font-primary" action="POST">
      <input class="w-full h-12 lg:h-16 px-2 text-lg text-primary border-primary border-2 placeholder:text-primary placeholder:uppercase placeholder:text-base placeholder:lg:text-lg" type="text" name="form_name" id="" placeholder="{{__("namn")}}">
      <input class="w-full h-12 lg:h-16 px-2 text-lg text-primary border-primary border-2 placeholder:text-primary placeholder:uppercase placeholder:text-base placeholder:lg:text-lg" type="text" name="form_email" id="" placeholder="{{__("epost")}}">
      <textarea class="w-full p-2 text-lg text-primary border-primary border-2 placeholder:text-primary placeholder:uppercase resize-none placeholder:text-base placeholder:lg:text-lg" name="form_body" id="form_body" cols="30" rows="10" placeholder="{{__("meddelande")}}" required ></textarea>
      <div class="w-full h-full flex justify-end">
          <button class="bg-primary py-2 lg:py-4 px-4 lg:px-6 uppercase text-secondary font-secondary text-base lg:text-xl hover:animate-pulse" type="submit">{{__("skicka")}}</button>
      </div>
    </form>
  </div>
</div>