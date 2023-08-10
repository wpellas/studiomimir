<div class="{{ $block->classes }} mimir-question relative text-left">
  @if(!is_admin())
    <i id="questionnaire_arrow" class="fa-solid fa-chevron-down text-primary absolute right-2 top-0 select-none cursor-pointer text-2xl transition-all duration-300 hover:animate-pulse ease-in-out" aria-label="{{__('Visa svaret till frågan', 'mimir')}}: @sub('question_title_field')"></i>
  @endif
    <InnerBlocks
      template="<?php echo esc_attr( wp_json_encode([
        ['core/heading', ['placeholder' => __('Fråga', 'mimir'), 'className' => 'mimir-question-title border-b-[1px] border-primary']], 
        ['core/paragraph', ['placeholder' => __('Svar på frågan', 'mimir'),'className' => 'mimir-question-body my-2 overflow-hidden ease-in-out transition-all duration-300 delay-300 text-sm lg:text-lg text-black']]
      ])); ?>" 
      allowedBlocks="<?php echo esc_attr(wp_json_encode([])); ?>" 
      templateLock="<?php echo esc_attr(wp_json_encode(['contentOnly'])); ?>"
    />
</div>
