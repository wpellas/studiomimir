<?php

namespace App\Blocks;

use Log1x\AcfComposer\Block;
use StoutLogic\AcfBuilder\FieldsBuilder;

class WhoAmI extends Block
{
    /**
     * The block name.
     *
     * @var string
     */
    public $name = 'Mimir Who Am I';

    /**
     * The block description.
     *
     * @var string
     */
    public $description = 'Studio Mimir Who Am I block. Showcase yourself in this block.';

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
    public $icon = 'id-alt';

    /**
     * The block keywords.
     *
     * @var array
     */
    public $keywords = ['studio', 'mimir', 'who', 'am', 'i'];

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
        'title_field' => 'About Me',
        'body_field' => 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Dolores nemo fuga ipsa quod praesentium, consectetur ex. Deserunt unde officia incidunt reiciendis ipsam velit nostrum ad tempora ducimus totam quia, exercitationem vel, beatae vitae a eligendi, dolore accusantium consequuntur sunt veritatis voluptatem! Sint molestiae aperiam non culpa natus eligendi consequatur a?',
        'image_field' => ''
    ];
    /**
     * Data to be passed to the block before rendering.
     *
     * @return array
     */
    public function with()
    {
        return [
            'title_field' => $this->title(),
            'body_field' => $this->body(),
            'image_field' => $this->image()
        ];
    }

    /**
     * The block field group.
     *
     * @return array
     */
    public function fields()
    {
        $whoAmI = new FieldsBuilder('who_am_i');

        $whoAmI
            ->addText('title_field', [
                'label' => 'Title Text'
            ])
            ->addWysiwyg('body_field', [
                'label' => 'Body Text',
                'instructions' => 'Write the content in this field.',
                'tabs' => 'visual',
                'toolbar' => 'basic',
                'media_upload' => 0,
            ])
            ->addImage('image_field');

        return $whoAmI->build();
    }

    /**
     * Return the items field.
     *
     * @return array
     */
    public function title()
    {
        return get_field('title_field') ?: $this->example['title_field'];
    }

    public function body()
    {
        return get_field('body_field') ?: $this->example['body_field'];
    }

    public function image()
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
