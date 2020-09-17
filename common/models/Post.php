<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "post".
 *
 * @property int $id
 * @property string $title
 * @property string|null $short_description
 * @property string|null $description
 * @property int|null $is_active
 * @property int|null $created_at
 * @property int|null $created_by
 */
class Post extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'post';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['title'], 'required'],
            [['description'], 'string'],
            [['is_active', 'created_at', 'created_by'], 'integer'],
            [['title'], 'string', 'max' => 250],
            [['short_description'], 'string', 'max' => 400],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'title' => 'Title',
            'short_description' => 'Short Description',
            'description' => 'Description',
            'is_active' => 'Is Active',
            'created_at' => 'Created At',
            'created_by' => 'Created By',
        ];
    }
}
