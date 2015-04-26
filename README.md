Ace Editor Widget For Yii2
=======================

Demo
----
Since this package was created as a part of [yii2-starter-kit](https://github.com/trntv/yii2-starter-kit) it's demo can be found in starter kit demo [here](http://backend.yii2-starter-kit.terentev.net/widget-menu/create)

Installation
------------

The preferred way to install this extension is through [composer](http://getcomposer.org/download/).

Either run

```
php composer.phar require trntv/yii2-aceeditor "*"
```

or add

```
"trntv/yii2-aceeditor": "*"
```

to the require section of your `composer.json` file.

Usage
-----------------------

Using model

```php
trntv\aceeditor\AceEditor::widget([
	// You can either use it for model attribute
	'model' => $my_model,
	'attribute' => 'my_field',

	// or just for input field
	'name' => 'my_input_name',

    'mode'=>'html', // programing language mode. Default "html"
    'theme'=>'github' // editor theme. Default "github"
]);
```

With active field

```php
$form->field($model, 'field')->widget(
        'trntv\aceeditor\AceEditor',
        [
            'mode'=>'html', // programing language mode. Default "html"
			'theme'=>'github' // editor theme. Default "github"
        ]
    )
```
Lists of all available modes and themes see [here](https://github.com/ajaxorg/ace)
