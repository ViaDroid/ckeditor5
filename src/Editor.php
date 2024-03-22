<?php

namespace Viadroid\CKEditor;

use Encore\Admin\Form\Field\Textarea;

class Editor extends Textarea
{
    protected $view = 'viadroid-ckeditor5::editor';

    protected static $js = [
        'vendor/viadroid/ckeditor5/ckeditor.js',
    ];

    public function render()
    {
        $config = (array) CKEditor::config('config');

        $config = array_merge($config, $this->options);
        $config['simpleUpload']['headers'] = ['X-CSRF-TOKEN' => csrf_token()];
        $config = json_encode($config);

        $this->script = <<<EOT
            ClassicEditor
            .create(document.getElementById('{$this->id}') , $config)
            .catch(error => {
                console.error(error);
            });
        EOT;
        return parent::render();
    }
}
