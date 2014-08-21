Core View Module – Twig
====

Twig bridge for [Core](https://github.com/caffeina-core/core) View.

## Twig

Twig documentation : http://twig.sensiolabs.org/documentation

## Twig Core\View Extras

### Adding a Twig Filter

```php
View::addFilter('rot13',function($text){
  return rot13($text);
});
```

```html
<li>test = {{ test|rot13 }}</li>
```

Outputs :

```
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
