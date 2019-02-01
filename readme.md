## Nova ID Link

[![Latest Version on Github](https://img.shields.io/github/release/dillingham/nova-id-link.svg?style=flat-square)](https://packagist.org/packages/dillingham/nova-id-link)
[![Total Downloads](https://img.shields.io/packagist/dt/dillingham/nova-id-link.svg?style=flat-square)](https://packagist.org/packages/dillingham/nova-id-link)

Nova package that links the Nova ID field

![id-link-nova-package](https://user-images.githubusercontent.com/29180903/52097836-96667880-259a-11e9-87d3-44ff0519e7c3.png)

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
