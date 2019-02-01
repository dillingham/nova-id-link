## Nova ID Link

[![Latest Version on Github](https://img.shields.io/github/release/dillingham/nova-id-link.svg?style=flat-square)](https://packagist.org/packages/dillingham/nova-id-link)
[![Total Downloads](https://img.shields.io/packagist/dt/dillingham/nova-id-link.svg?style=flat-square)](https://packagist.org/packages/dillingham/nova-id-link)

Nova package that links the Nova ID field for a quicker click-through from the left side menu.

![nova-id](https://user-images.githubusercontent.com/29180903/52130630-b0d73b00-2608-11e9-8e86-8dcda1c65636.png)

### Install
```
composer require dillingham/nova-id-link
```
### Usage

You can globally link all ID fields in your **NovaServiceProvider**:
```php
use Laravel\Nova\Fields\ID;
```
```php
public function boot()
{
    ID::useComponent('nova-id-link');
}
```

or chain `->linked()` to the existing Nova ID field in your **resources**:

```php
public function fields(Request $request)
{
    return [
        ID::make()->linked(),
    ];
}
```
