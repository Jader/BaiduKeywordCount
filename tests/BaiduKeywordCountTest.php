<?php
/**
 * @Description :
 *
 * @Date        : 2019/9/12 1:27 下午
 * @Author      : Jade
 */

include __DIR__.'/../vendor/autoload.php';

use BaiduKeywordCount\Handler;
use PHPUnit\Framework\TestCase;

class BaiduKeywordCountTest extends TestCase
{
    private $service;

    public function setUp(): void
    {
        $this->service = new Handler();
        $this->assertNotEmpty($this->service, '初始化服务失败');
    }

    public function testInit()
    {
        $keyword = '慧慧折扣';
        $data = $this->service::init($keyword);
        $this->assertNotEmpty($data, '处理失败');
    }
}