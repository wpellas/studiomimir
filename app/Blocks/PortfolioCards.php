<?php

namespace App\Blocks;

use Log1x\AcfComposer\Block;
use StoutLogic\AcfBuilder\FieldsBuilder;

class PortfolioCards extends Block
{
    /**
     * The block name.
     *
     * @var string
     */
    public $name = 'Portfolio Cards';

    /**
     * The block description.
     *
     * @var string
     */
    public $description = 'A simple Portfolio Cards block.';

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
    public $icon = 'editor-ul';

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
        'portfolio_cards_field' => '',
    ];

    /**
     * Data to be passed to the block before rendering.
     *
     * @return array
     */
    public function with()
    {
        return [
            'portfolio_cards_field' => $this->portfolioCardsField(),
        ];
    }

    /**
     * The block field group.
     *
     * @return array
     */
    public function fields()
    {
        $portfolioCards = new FieldsBuilder('portfolio_cards');

        $portfolioCards
            ->addRepeater('portfolio_cards_field', [

            ])
                ->addRelationship('title_field', [
                    'label' => 'Title/Category',
                    'required' => 1,
                    'post_type' => 'portfolio_image',
                    'filters' => [2 => 'taxonomy'],
                    'return_format' => 'object',
                    'elements' => 'featured_image',
                    'min' => 1,
                    'max' => 1,
                ])
            ->endRepeater();

        return $portfolioCards->build();
    }

    /**
     * Return the items field.
     *
     * @return array
     */
    public function portfolioCardsField()
    {
        return get_field('portfolio_cards_field') ?: $this->example['portfolio_cards_field'];
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
