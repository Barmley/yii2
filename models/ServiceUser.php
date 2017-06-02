<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "ServiceUser".
 *
 * @property integer $UserId
 * @property string $Uname
 * @property string $UEmail
 * @property string $UPass
 * @property string $UCity
 * @property integer $UStatus
 * @property integer $UIsAdmin
 *
 * @property UserProject[] $userProjects
 */
class ServiceUser extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'ServiceUser';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['Uname', 'UEmail', 'UPass', 'UCity'], 'required'],
            [['UStatus', 'UIsAdmin'], 'integer'],
            [['Uname', 'UEmail', 'UPass', 'UCity'], 'string', 'max' => 100],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'UserId' => 'User ID',
            'Uname' => 'Uname',
            'UEmail' => 'Uemail',
            'UPass' => 'Upass',
            'UCity' => 'Ucity',
            'UStatus' => 'Ustatus',
            'UIsAdmin' => 'Uis Admin',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getUserProjects()
    {
        return $this->hasMany(UserProject::className(), ['Userid' => 'UserId']);
    }

    /**
     * @inheritdoc
     * @return ServiceUserQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new ServiceUserQuery(get_called_class());
    }
}
