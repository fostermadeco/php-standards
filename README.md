# [Visual Chefs](http://www.visualchefs.com/) PHP Standards

* [Coding Standards](#coding-standards)
    * [IDE Configuration](#ide-config)
    * [Special Cases](#special-cases)
    * [Namespaces](#namespaces)
* [Documentation Standards](#documentation-standards)
* [Useful Resources](#useful-resources)

<a name="coding-standards"/>
## Coding Standards

For all projects, developers should follow [PSR-0](https://github.com/php-fig/fig-standards/blob/master/accepted/PSR-0.md), [PSR-1](https://github.com/php-fig/fig-standards/blob/master/accepted/PSR-1-basic-coding-standard.md), [PSR-2](https://github.com/php-fig/fig-standards/blob/master/accepted/PSR-2-coding-style-guide.md) coding standards.

<a name="ide-config"/>
### IDE Configuration Settings

@TODO

<a name="special-cases"/>
### Special Cases

When working on [ExpressionEngine](http://ellislab.com/expressionengine) or [CodeIgniter](http://ellislab.com/codeigniter) projects, developers should follow the class and method naming conventions specified by the framework, for compatibility reasons.

<a name="namespaces"/>
### Namespaces

All standalone classes should be namespaced for better compatibility and packaging. For ease of writing, the `VC` namespace should be used, or alternatively `VisualChefs` if the first is not available. Secondary namespaces are encouraged, in order to better organize code into modules or packages (example: `VC\Logger\Logger`, `VC\Logger\Handler`).

<a name="documentation-standards"/>
## Documentation Standards

@TODO

<a name="useful-resources"/>
## Useful Resources

* [PHP the Right Way](http://www.phptherightway.com/)
* [net.tutsplus.com](http://net.tutsplus.com/?s=php)
* [Laravel](http://laravel.com/)

@TODO more to come
