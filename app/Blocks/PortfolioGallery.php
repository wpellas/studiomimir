<?php

namespace App\Blocks;

use Log1x\AcfComposer\Block;
use StoutLogic\AcfBuilder\FieldsBuilder;

class PortfolioGallery extends Block
{
    /**
     * The block name.
     *
     * @var string
     */
    public $name = 'Portfolio Gallery';

    /**
     * The block description.
     *
     * @var string
     */
    public $description = 'A simple Portfolio Gallery block.';

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
    public $icon = 'screenoptions';

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
        'multiple' => false,
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
        'portfolio_gallery_field' => '',
    ];

    /**
     * Data to be passed to the block before rendering.
     *
     * @return array
     */
    public function with()
    {
        return [
            'portfolio_gallery_field' => $this->portfolioGalleryField(),
        ];
    }

    /**
     * The block field group.
     *
     * @return array
     */
    public function fields()
    {
        $portfolioGallery = new FieldsBuilder('portfolio_gallery');

        $portfolioGallery
        ->addRelationship('portfolio_gallery_field', [
            'label' => 'Portfolio Image',
            'required' => 1,
            'post_type' => 'portfolio_image',
            'filters' => [],
            'return_format' => 'object',
            'elements' => '',
            'min' => 1
        ]);

        return $portfolioGallery->build();
    }

    /**
     * Return the items field.
     *
     * @return array
     */
    public function portfolioGalleryField()
    {
        return get_field('portfolio_gallery_field') ?: $this->example['portfolio_gallery_field'];
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
