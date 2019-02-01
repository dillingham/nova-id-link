## Nova ID Link

[![Latest Version on Github](https://img.shields.io/github/release/dillingham/nova-id-link.svg?style=flat-square)](https://packagist.org/packages/dillingham/nova-id-link)
[![Total Downloads](https://img.shields.io/packagist/dt/dillingham/nova-id-link.svg?style=flat-square)](https://packagist.org/packages/dillingham/nova-id-link)

Nova package that links the ID field

### Install
```
composer require dillingham
```
### Usage

Simply chain `->linked()` to the existing Nova ID field in your resources

```php
public function fields(Request $request)
{
    return [
        ID::make()->linked(),

        Gravatar::make(),
    ];
}
```