yii2-device-detect
==============
[![Latest Stable Version](https://poser.pugx.org/i4erkasov/yii2-device-detect/v/stable)](https://packagist.org/packages/i4erkasov/yii2-device-detect)
[![Total Downloads](https://poser.pugx.org/i4erkasov/yii2-device-detect/downloads)](https://packagist.org/packages/i4erkasov/yii2-device-detect)
[![License](https://poser.pugx.org/i4erkasov/yii2-device-detect/license)](https://packagist.org/packages/i4erkasov/yii2-device-detect)

Device Detect extension for Yii2"

Installation
------------

The preferred way to install this extension is through [composer](http://getcomposer.org/download/).

Either run

```
php composer.phar require --prefer-dist i4erkasov/yii2-device-detect "*"
```

or add

```
"i4erkasov/yii2-device-detect": "*"
```

to the require section of your `composer.json` file.


Usage
-----

Once the extension is installed, simply use it in your code by  :

1. Add `mobileDetect` component to your [Yii2 configuration](http://www.yiiframework.com/doc-2.0/guide-concept-configurations.html#application-configurations)
like this:

    ```php
    'components' => [
        'device' => [
            'class' => '\i4erkasov\devicedetect\DeviceDetect'
        ]
    ]
    ```

2. Use `DeviceDetect` component as [Mobile_Detect](http://mobiledetect.net/) PHP class:

    ```php
    echo \Yii::$app->device->isMobile();
    echo \Yii::$app->device->isTablet();
    echo \Yii::$app->device->isDesktop();
