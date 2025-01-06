<?php
declare(strict_types=1);

namespace Think\Component\Lang\Facade;

use Think\Component\Container\Facade;

/**
 * @see \Think\Component\Lang\Lang
 * @package think\facade
 * @mixin \Think\Component\Lang\Lang
 * @method static void setLangSet(string $lang) 设置当前语言
 * @method static string getLangSet() 获取当前语言
 * @method static string defaultLangSet() 获取默认语言
 * @method static void switchLangSet(string $langset) 切换语言
 * @method static array load(string|array $file, string $range = '') 加载语言定义(不区分大小写)
 * @method static array parse(string $file) 解析语言文件
 * @method static bool has(string|null $name, string $range = '') 判断是否存在语言定义(不区分大小写)
 * @method static mixed get(string|null $name = null, array $vars = [], string $range = '') 获取语言定义(不区分大小写)
 */
class Lang extends Facade
{
    /**
     * 获取当前Facade对应类名（或者已经绑定的容器对象标识）
     * @access protected
     * @return string
     */
    protected static function getFacadeClass()
    {
        return 'Think\Component\Lang\Lang';
    }
}