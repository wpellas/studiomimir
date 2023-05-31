<?php

namespace App\Blocks;

use Log1x\AcfComposer\Block;
use StoutLogic\AcfBuilder\FieldsBuilder;

class ImageDivider extends Block
{
    /**
     * The block name.
     *
     * @var string
     */
    public $name = 'Mimir Image Divider';

    /**
     * The block description.
     *
     * @var string
     */
    public $description = 'Studio Mimir Image Divider block.';

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
    public $icon = 'ellipsis';

    /**
     * The block keywords.
     *
     * @var array
     */
    public $keywords = ['studio', 'mimir', 'divider', 'image'];

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
    public $styles = [
        [
            'name' => 'light',
            'label' => 'Light',
            'isDefault' => true,
        ],
        [
            'name' => 'dark',
            'label' => 'Dark',
        ]
    ];

    /**
     * The block preview example data.
     *
     * @var array
     */
    public $example = [
        'field_image_type' => true,
        'dividerImages' => ''
    ];

    /**
     * Data to be passed to the block before rendering.
     *
     * @return array
     */
    public function with()
    {
        return [
            'field_image_type' => $this->imageType(),
            'dividerImages' => $this->dividerImages()
        ];
    }

    /**
     * The block field group.
     *
     * @return array
     */
    public function fields()
    {
        $imageDivider = new FieldsBuilder('image_divider');

        $imageDivider
            ->addRepeater('dividerImages', [
                'label' => 'Custom Divider Images',
                'instructions' => 'Leave empty for random portfolio images.',
                'button_label' => 'Add Image',
                'min' => 1,
                'max' => 5
            ])
                ->addImage('image', [
                    'label' => 'Image',
                    'instructions' => 'Select image.'
                ])
            ->endRepeater();

        return $imageDivider->build();
    }

    /**
     * Return the dividerImages field.
     *
     * @return array
     */
    public function dividerImages()
    {
        return get_field('dividerImages') ?: $this->example['dividerImages'];
    }

    public function imageType()
    {
        return get_field('field_image_type') ?: $this->example['field_image_type'];
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
