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

```
{{ test|rot13 }}
```

Outputs :

```
grfg
```

### Adding global constants

```php
View::addGlobals([
  'BASE_URL'     => '/site/',
  'ASSETS_URL'   => '/site/assets/',
]);
```
```
<script src="{{ ASSETS_URL }}js/main.js"></script>
```
