<?php
/**
 * @Description :
 *
 * @Date        : 2019/9/12 11:36 上午
 * @Author      : Jade
 */

namespace BaiduKeywordCount;

use QL\QueryList;
use QL\Ext\Baidu;

class Handler
{
    /**
     * @var QueryList
     */
    protected $ql;

    /**
     * @var
     */
    protected $baidu;

    /**
     * BaiduKeywordCount constructor.
     */
    public function __construct()
    {
        $this->ql = QueryList::getInstance();
        $this->ql->use(Baidu::class,'baidu');
        $this->baidu = $this->ql->baidu(1);
    }

    /**
     * @param $keyword
     * @return array
     */
    public static function init($keyword)
    {
        $result = [];
        try {
            $server = new Handler();
            $searcher = $server->baidu->search($keyword);
            $count = $searcher->getCount();
            $result = [
                'keyword' => $keyword,
                'count' => $count
            ];
        } catch (\Exception $e) {

        }
        return $result;
    }
}