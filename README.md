# 百度关键词相关结果计数

[![License](https://img.shields.io/packagist/l/inhere/console.svg)](LICENSE)
[![Php Version](https://img.shields.io/packagist/php-v/jade/baidu-keyword-count)](https://packagist.org/packages/jade/baidu-keyword-count)
[![Latest Stable Version](http://img.shields.io/packagist/v/jade/baidu-keyword-count.svg)](https://packagist.org/packages/jade/baidu-keyword-count)


## 安装

`composer require jade/baidu-keyword-count`

## 使用

```php
use BaiduKeywordCount\Handler;

$keyword = '慧慧折扣';
$data = $servic::init($keyword);
```

## 输出

```
array:2 [
  "keyword" => "慧慧折扣"
  "count" => 417000
]
```