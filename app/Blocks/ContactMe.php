<?php

namespace App\Blocks;

use Log1x\AcfComposer\Block;
use StoutLogic\AcfBuilder\FieldsBuilder;

class ContactMe extends Block
{
    /**
     * The block name.
     *
     * @var string
     */
    public $name = 'Mimir Contact Me';

    /**
     * The block description.
     *
     * @var string
     */
    public $description = 'Studio Mimir Contact Me block.';

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
    public $icon = 'email-alt';

    /**
     * The block keywords.
     *
     * @var array
     */
    public $keywords = ['studio', 'mimir', 'contact', 'me'];

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
    public $styles = [];

    /**
     * The block preview example data.
     *
     * @var array
     */
    public $example = [
        'title_field' => 'Contact Me',
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
        ];
    }

    /**
     * The block field group.
     *
     * @return array
     */
    public function fields()
    {
        $contactMe = new FieldsBuilder('contact_me');

        $contactMe
            ->addText('title_field', [
                'label' => 'Contact Form Title',
                'placeholder' => 'Contact Me',
                'prepend' => 'Title:'
            ]);
            

        return $contactMe->build();
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
