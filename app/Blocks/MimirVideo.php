<?php

namespace App\Blocks;

use Log1x\AcfComposer\Block;
use StoutLogic\AcfBuilder\FieldsBuilder;

class MimirVideo extends Block
{
    /**
     * The block name.
     *
     * @var string
     */
    public $name = 'Mimir Video';

    /**
     * The block description.
     *
     * @var string
     */
    public $description = 'A simple Mimir Video block.';

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
    public $styles = [];

    /**
     * The block preview example data.
     *
     * @var array
     */
    public $example = [
        'video_field' => '',
    ];

    /**
     * Data to be passed to the block before rendering.
     *
     * @return array
     */
    public function with()
    {
        return [
            'video_field' => $this->videoField(),
        ];
    }

    /**
     * The block field group.
     *
     * @return array
     */
    public function fields()
    {
        $mimirVideo = new FieldsBuilder('mimir_video');

        $mimirVideo
            ->addText('video_field', [
                'label' => 'Video URL ID',
                'instructions' => 'Only add the end of the video (the unique part). Example below: <br /> <del>https://www.youtube.com/watch?v=</del><strong>dm3dTNcok4E</strong>',
                'placeholder' => 'dm3dTNcok4E'
            ]);


        return $mimirVideo->build();
    }

    /**
     * Return the items field.
     *
     * @return array
     */
    public function videoField()
    {
        return get_field('video_field') ?: $this->example['video_field'];
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
