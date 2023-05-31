<?php

namespace App\Blocks;

use Log1x\AcfComposer\Block;
use StoutLogic\AcfBuilder\FieldsBuilder;

class Instagram extends Block
{
    /**
     * The block name.
     *
     * @var string
     */
    public $name = 'Mimir Instagram';

    /**
     * The block description.
     *
     * @var string
     */
    public $description = 'Studio Mimir Instagram block.';

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
    public $icon = 'instagram';

    /**
     * The block keywords.
     *
     * @var array
     */
    public $keywords = ['studio', 'mimir', 'instagram', 'feed'];

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
        'title_field' => 'My Instagram Feed',
        'choice_field' => '1'
    ];

    /**
     * Data to be passed to the block before rendering.
     *
     * @return array
     */
    public function with()
    {
        return [
            'title_field' => $this->titleField(),
            'choice_field' => $this->choiceField()
        ];
    }

    /**
     * The block field group.
     *
     * @return array
     */
    public function fields()
    {
        $instagram = new FieldsBuilder('instagram');

        $instagram
            ->addText('title_field')
            ->addSelect('choice_field', [
                'label' => 'Instagram Feed',
                'instructions' => 'Select which Feed to be used. (Instagram Feed Plugin)',
                'required' => 1,
                'choices' => ['1', '2', '3', '4', '5'],
                'default_value' => '1',
                'allow_null' => 0,
                'multiple' => 0
            ]);

        return $instagram->build();
    }

    /**
     * Return the items field.
     *
     * @return array
     */
    public function titleField()
    {
        return get_field('title_field') ?: $this->example['title_field'];
    }

    public function choiceField()
    {
        return get_field('choice_field') ?: $this->example['choice_field'];
    }

    /**
     * Assets to be enqueued when rendering the block.
     *
     * @return void
     */
    public function enqueue(): void
    {
        wp_enqueue_script( 'Instagram', get_template_directory_uri() . '/resources/scripts/blocks/instagram.js', array( 'jquery' ), '1.0', true );
    }
}
