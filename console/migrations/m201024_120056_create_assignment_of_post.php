<?php

use yii\db\Migration;

/**
 * Class m201024_120056_create_assignment_of_post
 */
class m201024_120056_create_assignment_of_post extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $auth = Yii::$app->authManager;

        $auth->init();
        $author = $auth->getRole('author');
        $admin= $auth->getRole('admin');
        $superadmin= $auth->getRole('super-admin');
        $auth->assign($author, 1);
        $auth->assign($superadmin, 2);
        return true;

    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $auth = Yii::$app->authManager;
        
        $auth->init();
        $author = $auth->getRole('author');
        $admin= $auth->getRole('admin');
        $superadmin= $auth->getRole('super-admin');
        $auth->revoke($admin, 2);
        return true;

        /*
        echo "m201024_120056_create_assignment_of_post cannot be reverted.\n";

        return false;
        */
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m201024_120056_create_assignment_of_post cannot be reverted.\n";

        return false;
    }
    */
}
