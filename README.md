Ace Editor Widget For Yii2
=======================

About
-----
It is [Ace Editor](https://ace.c9.io/#nav=about) integration for Yii2 framework.

Demo
----
Since this package was created as a part of (Yii2 Starter Kit)[yii2-starter-kit](https://github.com/trntv/yii2-starter-kit) it's demo can be found in starter kit demo [here](http://backend.yii2-starter-kit.terentev.net/widget-menu/create) (login: webmaster, password: webmaster)

Ace Editor demo can be found [here](https://ace.c9.io/#ace_editor_demo=&nav=about)

Installation
------------

The preferred way to install this extension is through [composer](http://getcomposer.org/download/).

Either run

```
php composer.phar require trntv/yii2-aceeditor
```

or add

```
"trntv/yii2-aceeditor": "^2.0.0"
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
