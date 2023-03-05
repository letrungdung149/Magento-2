# Module Hello World

1.Create the folder of Hello World

`app/code/Mageplaza/HelloWorld`

2.Create etc/module.xml file.
`app/code/Mageplaza/HelloWorld/etc/module.xml`
Contents would be:
```
<?xml version="1.0"?>
<config xmlns:xsi="http://www.w3.org/2001/XMLSchema-instance" xsi:noNamespaceSchemaLocation="urn:magento:framework:Module/etc/module.xsd">
    <module name="Mageplaza_HelloWorld" setup_version="1.0.0">
    </module>
</config>
```
3.Create etc/registration.php file
`app/code/Mageplaza/HelloWorld/registration.php`
Contents would be:
````
<?php
\Magento\Framework\Component\ComponentRegistrar::register(
	\Magento\Framework\Component\ComponentRegistrar::MODULE,
	'Mageplaza_HelloWorld',
	__DIR__
);
````
4: Enable the module

After create the module if you run the command as:
`php bin/magento module:status`

Follow exact guide to enable the module right now, let run the command as:
` php bin/magento module:enable Mageplaza_HelloWorld`

Or other way, you can access the file:
`app/etc/config.php`

You will see a long list of modules there, just add your module as well
````
...
  'Mageplaza_HelloWorld' => 1, 
....
````

Let run the command:
`php bin/magento setup:upgrade`
`php bin/magento setup:static-content:deploy`






