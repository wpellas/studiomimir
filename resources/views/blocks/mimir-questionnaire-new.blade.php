<div class="{{ $block->classes }} px-4 lg:px-0 w-full h-full relative flex flex-wrap justify-center">
  <div class="w-full lg:w-lg h-full z-10 flex flex-wrap gap-8 mimir-questionnaire text-center">
    <InnerBlocks
      template="<?php echo esc_attr( wp_json_encode([
        ['core/heading', ['placeholder' => __('Titel för frågeformulär', 'mimir'), 'className' => 'mimir-questionnaire-title']],
        ['acf/mimir-question']
      ])); ?>" 
      allowedBlocks="<?php echo esc_attr(wp_json_encode(['acf/mimir-question'])); ?>" 
    />
  </div>
</div>
