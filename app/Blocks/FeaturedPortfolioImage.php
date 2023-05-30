<?php

namespace App\Blocks;

use Log1x\AcfComposer\Block;
use StoutLogic\AcfBuilder\FieldsBuilder;

class FeaturedPortfolioImage extends Block
{
    /**
     * The block name.
     *
     * @var string
     */
    public $name = 'Featured Portfolio Image';

    /**
     * The block description.
     *
     * @var string
     */
    public $description = 'A simple Featured Portfolio Image block.';

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
    public $icon = 'images-alt2';

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
        'featured_title_field' => 'Feature Portfolio Images',
        'featured_images_field' => '',
    ];

    /**
     * Data to be passed to the block before rendering.
     *
     * @return array
     */
    public function with()
    {
        return [
            'featured_title_field' => $this-> featuredTitleField(),
            'featured_images_field' => $this->featuredImagesField(),
        ];
    }

    /**
     * The block field group.
     *
     * @return array
     */
    public function fields()
    {
        $featuredPortfolioImage = new FieldsBuilder('featured_portfolio_image');

        $featuredPortfolioImage
        ->addText('featured_title_field', [
            'label' => 'Featured Images Title',
            'placeholder' => 'Featured Images'
        ])
        ->addRepeater('featured_images_field', [
            'min' => 1,
            'max' => 1
            ])
                ->addRelationship('featured_image_field', [
                    'label' => 'Featured Images',
                    'required' => 1,
                    'post_type' => 'portfolio_image',
                    'filters' => [2 => 'taxonomy'],
                    'return_format' => 'object',
                    'elements' => 'featured_image',
                    'min' => 1,
                    'max' => 4,
                ])
            ->endRepeater();

        return $featuredPortfolioImage->build();
    }

    /**
     * Return the items field.
     *
     * @return array
     */
    public function featuredImagesField()
    {
        return get_field('featured_images_field') ?: $this->example['featured_images_field'];
    }

    public function featuredTitleField()
    {
        return get_field('featured_title_field') ?: $this->example['featured_title_field'];
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
