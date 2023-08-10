<div class="{{ $block->classes }}">
  <InnerBlocks 
    template="<?php echo esc_attr( wp_json_encode([['core/heading', ['placeholder' => __('About Me', 'mimir')]], ['core/paragraph', ['placeholder' => __('Lorem, ipsum dolor sit amet consectetur adipisicing elit. Aperiam harum fugit et in iste, cumque praesentium rem nihil odit consectetur deleniti quod ex eos, necessitatibus reprehenderit non earum eum numquam dolore maiores id. Quam nostrum, dignissimos eius esse optio iusto quae, molestiae, eligendi cumque voluptatum alias voluptas. Qui, iste ipsam.', 'mimir')]]])); ?>" 
    allowedBlocks="<?php echo esc_attr(wp_json_encode([])); ?>" 
    templateLock="<?php echo esc_attr(wp_json_encode(['contentOnly'])); ?>"
  />
</div>
