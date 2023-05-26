<div class="w-full h-full relative flex flex-wrap justify-center my-4 lg:my-8 {{ $block->classes }}">
  <div class="w-[1024px] h-full z-10 flex flex-wrap justify-center py-10">
      <h1 class="text-center w-full text-4xl uppercase font-primary text-primary">
        {{$questionnaire_title_field}}
      </h1>
      <ul class="w-full flex justify-center flex-wrap">
          @fields('questions_field')
          <li id="questionnaire" class="relative w-full border-b-[1px] border-primary my-4 pb-2 text-primary font-primary list-none">
              <h1 class="text-xl">
                @sub('question_title_field')
              </h1>
              @if(!is_admin())
              <span id="questionnaire_arrow" class="material-symbols-outlined absolute right-2 top-0 select-none cursor-pointer text-3xl transition-all duration-300 hover:animate-pulse ease-in-out">
                  keyboard_arrow_down
              </span>
              @endif
              <div id="questionnaire_body" class="{{!is_admin() ? "hidden" : ""}} mt-2 overflow-hidden transition-all duration-300">
                @sub('question_answer_field')
              </div>              
          </li>
          @endfields
      </ul>
  </div>
</div>
