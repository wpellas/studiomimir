<?php

namespace App\Blocks;

use Log1x\AcfComposer\Block;
use StoutLogic\AcfBuilder\FieldsBuilder;

class UpcomingEvents extends Block
{
    /**
     * The block name.
     *
     * @var string
     */
    public $name = 'Mimir Upcoming Events';

    /**
     * The block description.
     *
     * @var string
     */
    public $description = 'Studio Mimir Upcoming Events block.';

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
    public $icon = 'calendar';

    /**
     * The block keywords.
     *
     * @var array
     */
    public $keywords = ['studio', 'mimir', 'events', 'sessions', 'schema', 'calendar', 'upcoming'];

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
        'title_field' => 'Schema',
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
        $upcomingEvents = new FieldsBuilder('upcoming_events');

        $upcomingEvents
            ->addText('title_field', [
                'label' => 'Upcoming Events Title',
                'placeholder' => 'Schema',
                'prepend' => 'Title:'
            ]);

        return $upcomingEvents->build();
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
