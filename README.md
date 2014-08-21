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

```jade
{{ test|rot13 }}
```

```
grfg
```
