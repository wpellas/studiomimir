{{--
  Title: Email Form
  Description: Studiomimir Email Form
  Category: formatting
  Icon: instagram
  Keywords: instagram feed 
  Mode: view
  Align: center
  PostTypes: page
  SupportsAlign: false
  SupportsMode: false
  SupportsMultiple: true
  EnqueueStyle: styles/style.css
  EnqueueScript: scripts/script.js
  EnqueueAssets: path/to/asset
--}}

<div data-{{ $block['id'] }} class="w-full h-full relative flex flex-wrap justify-center my-4 lg:my-8 {{ $block['classes'] }}">
    <div class="w-[1024px] h-full z-10 flex flex-wrap justify-center py-10">
    <h1 class="uppercase font-primary text-primary text-4xl py-6">Kontakta Mig</h1>
    <form class="relative w-[800px] h-full flex flex-wrap gap-4 font-primary" action="POST">
        <input class="w-full h-16 px-2 text-lg text-primary border-primary border-2 placeholder:text-primary placeholder:uppercase" type="text" name="form_name" id="" placeholder="{{__("namn")}}">
        <input class="w-full h-16 px-2 text-lg text-primary border-primary border-2 placeholder:text-primary placeholder:uppercase" type="text" name="form_email" id="" placeholder="{{__("epost")}}">
        <textarea class="w-full p-2 text-lg text-primary border-primary border-2 placeholder:text-primary placeholder:uppercase resize-none" name="form_body" id="form_body" cols="30" rows="10" placeholder="{{__("meddelande")}}" required ></textarea>
        <div class="w-full h-full flex justify-end">
            <button class="bg-primary py-4 px-6 uppercase text-secondary text-xl hover:animate-pulse" type="submit">{{__("skicka")}}</button>
        </div>
    </form>
    </div>
</div>
