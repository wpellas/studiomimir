<?php

namespace App\Blocks;

use Log1x\AcfComposer\Block;
use StoutLogic\AcfBuilder\FieldsBuilder;

class MimirTextImage extends Block
{
    /**
     * The block name.
     *
     * @var string
     */
    public $name = 'Mimir Text Image';

    /**
     * The block description.
     *
     * @var string
     */
    public $description = 'A simple Mimir Text Image block.';

    /**
     * The block category.
     *
     * @var string
     */
    public $category = 'formatting';

    /**
     * The block icon.
     *
     * @var string|array
     */
    public $icon = 'id';

    /**
     * The block keywords.
     *
     * @var array
     */
    public $keywords = [];

    /**
     * The block post type allow list.
     *
     * @var array
     */
    public $post_types = ['page'];

    /**
     * The parent block type allow list.
     *
     * @var array
     */
    public $parent = [];

    /**
     * The default block mode.
     *
     * @var string
     */
    public $mode = 'preview';

    /**
     * The default block alignment.
     *
     * @var string
     */
    public $align = '';

    /**
     * The default block text alignment.
     *
     * @var string
     */
    public $align_text = '';

    /**
     * The default block content alignment.
     *
     * @var string
     */
    public $align_content = '';

    /**
     * The supported block features.
     *
     * @var array
     */
    public $supports = [
        'align' => false,
        'align_text' => false,
        'align_content' => false,
        'full_height' => false,
        'anchor' => false,
        'mode' => false,
        'multiple' => true,
        'jsx' => true,
    ];

    /**
     * The block styles.
     *
     * @var array
     */
    public $styles = [];

    /**
     * The block preview example data.
     *
     * @var array
     */
    public $example = [
        'choice_field' => 'Left',
        'text_block_field' => '',
        'image_field' => '',
    ];

    /**
     * Data to be passed to the block before rendering.
     *
     * @return array
     */
    public function with()
    {
        return [
            'choice_field' => $this->choiceField(),
            'text_block_field' => $this->textBlockField(),
            'image_field' => $this->imageField(),
        ];
    }

    /**
     * The block field group.
     *
     * @return array
     */
    public function fields()
    {
        $mimirTextImage = new FieldsBuilder('mimir_text_image');

        $mimirTextImage
            ->addRadio('choice_field', [
                'label' => 'Image Side',
                'instructions' => 'Determine which side that the image appears on. Note that this only works on desktop / large view of the website.',
                'choices' => ['Left', 'Right'],
                'allow_null' => 0,
                'default_value' => 'Left',
                'return_format' => 'value'
            ])
            ->addWysiwyg('text_block_field', [
                'label' => 'Text Body',
                'tabs' => 'visual',
                'media_upload' => 0,
            ])
            ->addImage('image_field');

        return $mimirTextImage->build();
    }

    /**
     * Return the items field.
     *
     * @return array
     */
    public function choiceField()
    {
        return get_field('choice_field') ?: $this->example['choice_field'];
    }


    public function textBlockField()
    {
        return get_field('text_block_field') ?: $this->example['text_block_field'];
    }

    public function imageField()
    {
        return get_field('image_field') ?: $this->example['image_field'];
    }

    /**
     * Assets to be enqueued when rendering the block.
     *
     * @return void
     */
    public function enqueue()
    {
        //
    }
}
