<?php

use yii\db\Migration;

/**
 * Class m201024_115001_create_assignment_to_role
 */
class m201024_115001_create_assignment_to_role extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $auth = Yii::$app->authManager;

        $author = $auth->getRole('author');
        $admin = $auth->getRole('admin');
        $superAdmin = $auth->getRole('super-admin');

        $auth->assign($superAdmin,1);
        $auth->assign($admin,2);
        $auth->assign($author,3);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $auth = Yii::$app->authManager;

        $author = $auth->getRole('author');
        $admin = $auth->getRole('admin');
        $superAdmin = $auth->getRole('super-admin');

        $auth->revoke($superAdmin,1);
        $auth->revoke($admin,2);
        $auth->revoke($author,3);

        return true;
        /*
        echo "m201024_115001_create_assignment_to_role cannot be reverted.\n";

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
        echo "m201024_115001_create_assignment_to_role cannot be reverted.\n";

        return false;
    }
    */
}
