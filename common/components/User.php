<?php

namespace common\components;


class User extends \yii\web\User 
{

    public $identityClass = 'common/model/User';

    //logic
    public function checkAccess($operation, $params = [], $allowCaching = true) {
        // Always return true when SuperAdmin user
        if (
            \Yii::$app->user->id == 1
            && \Yii::$app->user->status == 10
        ) {
            return true;
        }
        return parent::can($operation, $params, $allowCaching);
    }

}
