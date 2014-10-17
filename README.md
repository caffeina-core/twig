Core – Twig View
====

[![Scrutinizer Code Quality](https://scrutinizer-ci.com/g/caffeina-core/twig/badges/quality-score.png?b=master)](https://scrutinizer-ci.com/g/caffeina-core/twig/?branch=master)
[![Build Status](https://scrutinizer-ci.com/g/caffeina-core/twig/badges/build.png?b=master)](https://scrutinizer-ci.com/g/caffeina-core/twig/build-status/master)
[![Total Downloads](https://poser.pugx.org/caffeina-core/twig/downloads.svg)](https://packagist.org/packages/caffeina-core/twig)
[![Latest Stable Version](https://poser.pugx.org/caffeina-core/twig/v/stable.svg)](https://packagist.org/packages/caffeina-core/twig)
[![Latest Unstable Version](https://poser.pugx.org/caffeina-core/twig/v/unstable.svg)](https://packagist.org/packages/caffeina-core/twig)
[![License](https://poser.pugx.org/caffeina-core/twig/license.svg)](https://packagist.org/packages/caffeina-core/twig)



[Twig](http://twig.sensiolabs.org) bridge for [Core](https://github.com/caffeina-core/core) View.

## Installation

Add package to your **composer.json**:

```json
{
  "require": {
    "caffeina-core/core": "*",
    "caffeina-core/twig": "*"
  }
}
```


## Twig

[Twig](http://twig.sensiolabs.org) documentation : http://twig.sensiolabs.org/documentation

## Twig Core\View Extras

### Adding a Twig Filter

```php
View::addFilter('rot13',function($text){
  return str_rot13($text);
});
```

```html
<li>test = {{ test|rot13 }}</li>
```

Outputs :

```html
<li>test = grfg</li>
```

### Adding global constants

```php
View::addGlobals([
  'BASE_URL'     => '/site/',
  'ASSETS_URL'   => '/site/assets/',
]);
```
```html
<script src="{{ ASSETS_URL }}js/main.js"></script>
```
### Adding a Twig Function

```php
View::addFunction('myFunction',function($a,$b,$c){
  return $a + $b + $c;
});
```

```html
Value = <b>{{ myFunction(1,2,3) }}</b>
```

Outputs :

```html
Value = <b>6</b>
```
