# panglongxia/pangunit-laravel

这里是对于框架的介绍

# 对于框架的要求

Laravel >= 5.1 & PHP >= 7.1.3

# 安装方式
```yml
composer require "panglongxia/pangunit-laravel"
```

# 配置方式
5.5 手动配置laravel对于junit 服务放到config/app.php中

路由解释
```php
<?php
Route::get('/', 'JunitController@index');
Route::post('/', 'JunitController@store')->name('junit.store');
//测试路由
Route::get('test', 'TestController@index');
```