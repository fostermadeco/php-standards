# [Visual Chefs](http://www.visualchefs.com/) PHP Standards

* [Coding Standards](#coding-standards)
    * [IDE Configuration](#ide-config)
    * [Special Cases](#special-cases)
    * [Namespaces](#namespaces)
* [Documentation Standards](#documentation-standards)
    * [Class Declaration](#class)
    * [Class Property](#class-property)
    * [Class Method](#class-method)
* [Vetted Libraries/Packages](#vetted)
* [Useful Resources](#useful-resources)

<a name="coding-standards"/>
## Coding Standards

For all projects, developers should follow [PSR-0](https://github.com/php-fig/fig-standards/blob/master/accepted/PSR-0.md), [PSR-1](https://github.com/php-fig/fig-standards/blob/master/accepted/PSR-1-basic-coding-standard.md), [PSR-2](https://github.com/php-fig/fig-standards/blob/master/accepted/PSR-2-coding-style-guide.md) coding standards.

<a name="ide-config"/>
### IDE Configuration Settings

In this repository you will find a `.editorconfig` file.  This helps standardize your IDE to what is suggested by this document.

To use this file:

1. put it in the root of your project.
2. Get the plugin for your IDE: (editorconfig.org)[http://editorconfig.org/#download]

<a name="special-cases"/>
### Special Cases

When working on [ExpressionEngine](http://ellislab.com/expressionengine) or [CodeIgniter](http://ellislab.com/codeigniter) projects, developers should follow the class and method naming conventions specified by the framework, for compatibility reasons.

<a name="namespaces"/>
### Namespaces

All standalone classes should be namespaced for better compatibility and packaging. For ease of writing, the `VC` namespace should be used, or alternatively `VisualChefs` if the first is not available. Secondary namespaces are encouraged, in order to better organize code into modules or packages (example: `VC\Logger\Logger`, `VC\Logger\Handler`).

<a name="documentation-standards"/>
## Documentation Standards

<a name="class"/>
### Class Declaration

```php
    /**
     * desc
     *
     * @author
     * @copyright   (C) 2013. All rights reserved.
     * @version     1.0
     */

    /**
     * desc
     *
     * @category
     * @package
     * @subpackage
     * @since       1.0
     */
   class MyClass
```

<a name="class-properties"/>
### Class Properties

```php
	/**
     * My awesome var does the following thing.
     *
     * @var     boolean
     * @scope   protected
     */
   protected $my_awesome_var;
```

<a name="class-method"/>
### Class Method

```php
    /**
     *
     *
     * @param   string   $my_var    A concise description of my_var
     * @return  boolean
     * @access  public
     * @static
     */
    public static function myMethod($my_var = 'hello world')
```

<a name="vetted"/>
## Vetted Libraries/Packages

* [Guzzle](https://packagist.org/packages/guzzle/guzzle) is a PHP HTTP client
& framework.
* [Monolog](https://packagist.org/packages/monolog/monolog) sends your logs to files, sockets, inboxes, databases and various web services.
* [Swiftmailer](https://packagist.org/packages/swiftmailer/swiftmailer) free feature-rich PHP mailer.

<a name="useful-resources"/>
## Useful Resources

* [PHP the Right Way](http://www.phptherightway.com/)
* [net.tutsplus.com](http://net.tutsplus.com/?s=php)
* [Laravel](http://laravel.com/)
* [Design Patterns PHP](https://github.com/domnikl/DesignPatternsPHP)
* [Debugging Laravel 4 Weirdness - Checklist](https://gist.github.com/bencorlett/5572133)

@TODO more to come
