<?php

namespace mamadali;

use mamadali\base\AparatBase;
use mamadali\models\Login;
use mamadali\models\Pagination;
use mamadali\models\Profile;
use mamadali\models\ProfileCategories;
use mamadali\models\Video;
use mamadali\base\Model;
use mamadali\models\VideoList;

/**
 * This is just an example.
 */
class Aparat extends AparatBase
{

    /**
     *   @var Array
     *   sample
     *   Yii::$app->aparat->login([
     *       'luser' => 'username',
     *       'lpass' => 'password',
     *   ]);
     */
    public function login(array $params)
    {
        $body = $this->send('login', $params);
        if(isset($body['profile'])) $response = new Profile($body['profile']);
        if(isset($body['login'])) $response = new Login($body['login']);
        return $response;
    }

    /**
     *   @var Array
     *   sample
     *   Yii::$app->aparat->profile([
     *       'username' => 'username',
     *   ]);
     */
    public function profile(array $params)
    {
        $body = $this->send('profile', $params);
        $response = new Profile($body['profile']);
        return $response;
    }

    /**
     *   @var Array
     *   sample
     *   Yii::$app->aparat->userBySearch([
     *       'text' => url_encode('search'),
     *       'perpage' => 10,
     *   ]);
     */
    public function userBySearch(array $params)
    {
        $body = $this->send('userBySearch', $params);
        return $body;
    }

    /**
     *   @var Array
     *   sample
     *   Yii::$app->aparat->profilecategories([
     *       'username' => 'username',
     *   ]);
     */
    public function profilecategories(array $params)
    {
        $body = $this->send('profilecategories', $params);
        $model = [new ProfileCategories()];
        $model = Model::createMultiple(ProfileCategories::className(),$body['profilecategories']);
        Model::loadMultiple($model, $body['profilecategories'],'');
        return $model;
    }

    /**
     *   @var Array
     *   sample
     *   Yii::$app->aparat->video([
     *       'videohash' => 'qeyLD',
     *   ]);
     */
    public function video(array $params)
    {
        $body = $this->send('video', $params);
        $response = new Video($body['video']);
        return $response;
    }


    /**
     *   @var Array
     *   sample
     *   Yii::$app->aparat->categoryVideos([
     *       'perpage' => 10,
     *       'cat' => 12345,
     *   ]);
     */
    public function categoryVideos(array $params = null)
    {
        $body = $this->send('categoryVideos', $params);
        $model = [new VideoList()];
        $model = Model::createMultiple(VideoList::className(),$body['categoryvideos']);
        Model::loadMultiple($model, $body['categoryvideos'],'');

        $pagination = new Pagination($body['ui']);
        return [
            'categoryvideos' => $model,
            'ui' => $pagination,
        ];
    }


    /**
     *   @var Array
     *   sample
     *   Yii::$app->aparat->categoryVideos([
     *       'username' => 'username',
     *       'perpage' => 10,
     *   ]);
     */
    public function videoByUser(array $params)
    {
        $body = $this->send('videoByUser', $params);
        $model = [new VideoList()];
        $model = Model::createMultiple(VideoList::className(),$body['videobyuser']);
        Model::loadMultiple($model, $body['videobyuser'],'');

        $pagination = new Pagination($body['ui']);
        return [
            'videobyuser' => $model,
            'ui' => $pagination,
        ];
    }


    /**
     *   @var Array
     *   sample
     *   Yii::$app->aparat->videoBySearch([
     *       'text' => 'search',
     *       'perpage' => 10,
     *   ]);
     */
    public function videoBySearch(array $params)
    {
        $body = $this->send('videoBySearch', $params);
        $model = [new VideoList()];
        $model = Model::createMultiple(VideoList::className(),$body['videobysearch']);
        Model::loadMultiple($model, $body['videobysearch'],'');

        $pagination = new Pagination($body['ui']);
        return [
            'videobysearch' => $model,
            'ui' => $pagination,
        ];
    }

    /**
     *   @var Array
     *   sample
     *   Yii::$app->aparat->videoBySearch([
     *       'text' => 'search',
     *       'perpage' => 10,
     *   ]);
     */
    public function videobytag(array $params)
    {
        $body = $this->send('videobytag', $params);
        $model = [new VideoList()];
        $model = Model::createMultiple(VideoList::className(),$body['videobytag']);
        Model::loadMultiple($model, $body['videobytag'],'');

        $pagination = new Pagination($body['ui']);
        return [
            'videobytag' => $model,
            'ui' => $pagination,
        ];
    }

}
