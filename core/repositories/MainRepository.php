<?php


namespace core\repositories;


class MainRepository
{
    /**
     * @param string $key ключ в кеше
     * @param callable $request запрос, который добавить в кеш
     * @return mixed
     */
    protected static function checkCache($key, $request)
    {
        $cache = \Yii::$app->cache;
        return $cache->getOrSet($key, $request, 3600);
    }

    protected static function clearCache()
    {
        $cache = \Yii::$app->cache;
        return $cache->flush();
    }

    protected static function clearCacheByKey($key)
    {
        return \Yii::$app->cache->delete(['yii\widgets\FragmentCache', $key]);
    }

}