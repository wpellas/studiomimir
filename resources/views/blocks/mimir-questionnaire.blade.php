<div class="w-full h-full relative flex flex-wrap justify-center my-4 lg:my-8 {{ $block->classes }} {{is_admin() ? "pointer-events-none" : ""}}">
  <div class="w-full lg:w-lg h-full px-4 lg:px-0 z-10 flex flex-wrap justify-center py-10">
    
      <h1 class="text-center w-full text-xl lg:text-4xl uppercase font-secondary text-primary">
        {{$questionnaire_title_field}}
      </h1>

      <ul class="w-full flex justify-center flex-wrap">
          @fields('questions_field')
          <li id="questionnaire" class="relative w-full my-4 pb-2 text-primary font-primary list-none">
              <h1 class="w-full text-base lg:text-2xl bg-white z-20 font-secondary uppercase">
                @sub('question_title_field')
              </h1>

              @if(!is_admin())
              <span id="questionnaire_arrow" class="material-symbols-outlined absolute right-2 top-0 select-none cursor-pointer text-3xl transition-all duration-300 hover:animate-pulse ease-in-out">
                  keyboard_arrow_down
              </span>
              @endif

              <div id="questionnaire_parent" class="{{!is_admin() ? "-translate-y-full" : ""}} relative w-full border-b-[1px] border-primary mt-2 ease-in-out transition-all duration-300 z-10">
                <div id="questionnaire_body" class="{{!is_admin() ? "opacity-0 h-0" : ""}} my-2 overflow-hidden ease-in-out transition-all duration-300 delay-300 text-sm lg:text-lg">
                  @sub('question_answer_field')
                </div>
              </div>
          </li>
          @endfields
      </ul>

  </div>
</div>
