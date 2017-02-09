Supervisor Bundle
=================

[![Build Status](https://travis-ci.org/OsLab/SupervisorBundle.svg?branch=master)](https://travis-ci.org/OsLab/SupervisorBundle)
[![Scrutinizer Code Quality](https://scrutinizer-ci.com/g/OsLab/SupervisorBundle/badges/quality-score.png?b=master)](https://scrutinizer-ci.com/g/OsLab/SupervisorBundle/?branch=master)
[![Code Coverage](https://scrutinizer-ci.com/g/OsLab/SupervisorBundle/badges/coverage.png?b=master)](https://scrutinizer-ci.com/g/OsLab/SupervisorBundle/?branch=master)
[![Total Downloads](https://poser.pugx.org/oslab/supervisor-bundle/downloads)](https://packagist.org/packages/OsLab/SupervisorBundle)
[![Latest Stable Version](https://poser.pugx.org/oslab/supervisor-bundle/v/stable)](https://packagist.org/packages/OsLab/SupervisorBundle)
[![License](https://poser.pugx.org/oslab/supervisor-bundle/license)](https://packagist.org/packages/OsLab/SupervisorBundle)
[![SensioLabsInsight](https://insight.sensiolabs.com/projects/3c29df13-4d04-4aab-bf37-e70dc278f1e5/mini.png)](https://insight.sensiolabs.com/projects/3c29df13-4d04-4aab-bf37-e70dc278f1e5)

Documentation
-------------

Documentation for this library is stored under `Resources/doc` in this repository.

For documentation see:

[Read the documentation](Resources/doc/index.md)

Installation
------------

## Installation

### Step 1: Download OsLabSupervisorBundle using [Composer](http://getcomposer.org)

Require the bundle with composer:

    $ composer require oslab/supervisor-bundle

### Step 2: Enable the bundle¶

Enable the bundle in the kernel:

``` php
<?php
// app/AppKernel.php

public function registerBundles()
{
    $bundles = array(
        // ...
        new OsLab\SupervisorBundle\OsLabSupervisorBundle(),
        // ...
    );
}

License
-------

This bundle is under the MIT license. See the complete license in the bundle:

```
    Resources/meta/LICENSE
```

Unit Tests
------------

To run unit tests, you'll need a set of dependencies you can install using Composer:
```
php composer.phar install
```

Once installed, just launch the following command:
```
phpunit
```

## Credits

* [All contributors](https://github.com/OsLab/SupervisorBundle/graphs/contributors)

## License

Supervisor is released under the MIT License. See the bundled LICENSE file for details.
