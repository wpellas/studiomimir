<?php

namespace App\Blocks;

use Log1x\AcfComposer\Block;
use StoutLogic\AcfBuilder\FieldsBuilder;

class Questionnaire extends Block
{
    /**
     * The block name.
     *
     * @var string
     */
    public $name = 'Mimir Questionnaire';

    /**
     * The block description.
     *
     * @var string
     */
    public $description = 'Studio Mimir Questionnaire block.';

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
    public $keywords = ['studio', 'mimir', 'questionnaire', 'qa', 'faq', 'answer', 'question', 'questions'];

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
        'questionnaire_title_field' => 'Questionnaire Title',
        'questions_field' => ''
    ];

    /**
     * Data to be passed to the block before rendering.
     *
     * @return array
     */
    public function with()
    {
        return [
            'questionnaire_title_field' => $this->questionnaireTitleField(),
            'questions_field' => $this->questionsField()
        ];
    }

    /**
     * The block field group.
     *
     * @return array
     */
    public function fields()
    {
        $questionnaire = new FieldsBuilder('questionnaire', ['position' => 'normal']);

        $questionnaire
            ->addText('questionnaire_title_field')
            ->addRepeater('questions_field', [
                'layout' => 'block'
            ])
                ->addText('question_title_field', [
                    'label' => 'Question'
                ])
                ->addWysiwyg('question_answer_field', [
                    'label' => 'Answer',
                    'tabs' => 'visual',
                    'toolbar' => 'basic',
                    'media_upload' => 0,
                ])
            ->endRepeater();

        return $questionnaire->build();
    }

    /**
     * Return the items field.
     *
     * @return array
     */
    public function questionnaireTitleField()
    {
        return get_field('questionnaire_title_field') ?: $this->example['questionnaire_title_field'];
    }

    public function questionsField()
    {
        return get_field('questions_field') ?: $this->example['questions_field'];
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
