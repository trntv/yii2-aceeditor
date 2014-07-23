Ace Editor Widget For Yii2
=======================

Usage
-----------------------

Using model

```php
trntv\aceeditor\Widget::widget([
	// You can either use it for model attribute
	'model' => $my_model,
	'attribute' => 'my_field',

	// or just for input field
	'name' => 'my_input_name',

    'mode'=>'mode' // programing language mode. Default "html"
    'mode'=>'mode' // editor theme. Default "github"

	// Editor container options
	'conatinerOptions' => [
		'toolbar' => false,
		'css' => 'wym.css',
	],
]);
```

With active field

```php
$form->field($model, 'field', ['enableClientValidation'=>false])
    ->widget(
        'trntv\aceeditor\Widget',
        [
            'mode' => 'mode',
            ...
        ]
    )
```

Installation
------------

The preferred way to install this extension is through [composer](http://getcomposer.org/download/).

Either run

```
php composer.phar require devlity/yii2-aceeditor "*"
```

or add

```
"devlity/yii2-aceeditor": "*"
```

to the require section of your `composer.json` file.