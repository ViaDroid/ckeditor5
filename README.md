CKEditor 5 : A extension of Laravel-admin
======

## Installation

- Add dependency
```bash
composer require viadroid/ckeditor5
```

- Publish static resources
```bash
php artisan vendor:publish --tag=viadroid-ckeditor5
```

## Config

```php
'extensions' => [
    'ckeditor' => [
        'enable' => true,
        'config' => [
            "language" => 'zh-cn',
            "height" => 200,
            "simpleUpload" => [
                "uploadUrl" => '/api/fileUpload/image'
            ],
            "fontSize" => [
                "options" => [
                    9,
                    11,
                    13,
                    'default',
                    17,
                    19,
                    21
                ]
            ],
            "toolbar" => [
                    "items" => [
                        'undo',
                        'redo',
                        'heading',
                        'bold',
                        'italic',
                        'underline',
                        'highlight',
                        'alignment',
                        'bulletedList',
                        'numberedList',
                        'todoList',
                        'outdent',
                        'indent',
                        '|',
                        'insertTable',
                        'link',
                        'imageInsert',
                        'mediaEmbed',
                        'blockQuote',
                        'codeBlock',
                        '|',
                        'fontFamily',
                        'fontSize',
                        'fontColor',
                        'fontBackgroundColor',
                        'specialCharacters',
                        '|',
                        'code',
                        'horizontalLine',
                        'htmlEmbed',
                        'showBlocks',
                        'findAndReplace',
                        'sourceEditing'
                    ]
                ],
            'image' => [
                'toolbar' => ['imageTextAlternative', '|', 'imageStyle:alignLeft', 'imageStyle:full', 'imageStyle:alignRight'],
                'resizeUnit' => 'px',
                'styles' => [
                    // This option is equal to a situation where no style is applied.
                    'full',
                    'side',
                    // This represents an image aligned to the left.
                    'alignLeft',
                    'alignCenter',
                    // This represents an image aligned to the right.
                    'alignRight'
                ]
            ],
            "table" => [
                'contentToolbar' => [
                    'tableColumn',
                    'tableRow',
                    'mergeTableCells',
                    'tableCellProperties',
                    'tableProperties'
                ]
            ],
        ],
    ],
]
```