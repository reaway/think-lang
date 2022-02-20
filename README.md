# think-lang

## 安装
```bash
composer require reaway/think-lang
```

## 用法
```php
use Think\Component\Lang\Facade\Lang;

require __DIR__ . DIRECTORY_SEPARATOR . 'vendor' . DIRECTORY_SEPARATOR . 'autoload.php';

// load
Lang::load(__DIR__ . DIRECTORY_SEPARATOR . 'zh-cn.php');

Lang::get('name');
```