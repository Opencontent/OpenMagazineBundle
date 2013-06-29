OpenMagazineBundle
==================

eZPublish 5 OpenMagazine bundle

Requirements
------------

* eZ Publish 5.0+
* eZ Publish Legacy Stack with legacy eZ OpenMagazine 1.1+ installed and configured

Installation steps
------------------

### Use Composer

Add the following to your composer.json and run `php composer.phar update` to refresh dependencies:

```json
"require": {
    "opencontent/openmagazinebundle": "dev-master"
}
```

### Activate the bundle

Activate the bundle in `ezpublish\EzPublishKernel.php` file.

```php
use OpenContent\OpenMagazineBundle\OpenContentOpenMagazineBundle;

...

public function registerBundles()
{
   $bundles = array(
       new FrameworkBundle(),
       ...
       new OpenContentOpenMagazineBundle(),
   );

   ...
}
```

Clear eZ Publish 5 caches.

```bash
php ezpublish/console cache:clear
```