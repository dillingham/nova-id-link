## Nova ID Link

[![Latest Version on Github](https://img.shields.io/github/release/dillingham/nova-id-link.svg?style=flat-square)](https://packagist.org/packages/dillingham/nova-id-link)
[![Total Downloads](https://img.shields.io/packagist/dt/dillingham/nova-id-link.svg?style=flat-square)](https://packagist.org/packages/dillingham/nova-id-link)

Nova package that adds `->linked()` to the Nova ID field

![id-link-nova-package](https://user-images.githubusercontent.com/29180903/52097836-96667880-259a-11e9-87d3-44ff0519e7c3.png)

### Install
```
composer require dillingham/nova-id-link
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
