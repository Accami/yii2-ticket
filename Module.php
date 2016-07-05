<?php

namespace ricco\ticket;

use ricco\ticket\models\User;
use Yii;

/**
 * ticket module definition class
 */
class Module extends \yii\base\Module
{
    /**
     * @inheritdoc
     */
    public $controllerNamespace = 'ricco\ticket\controllers';

    /** @var bool Уведомление пользователя об ответе на тикет */
    public $mailSendAnswer = false;

    /** @var bool Уведомление пользователя о закрытии тикета */
    public $mailSendClosed = false;

    /** @var string Тема email сообщения когда пользователю приходит ответ */
    public $subjectAnswer = 'Ответ на тикет';

    /** @var string Тема email сообщения когда тикет пользователя закрыт */
    public $subjectCloset = 'Ваш тикет был закрыт';

    /** @var  User */
    public $userModel = false;

    public $qq = [
        'Вопрос  по обмену' => 'Вопрос  по обмену',
        'Пополнению ЛК'     => 'Пополнению ЛК',
        'Вводу средств'     => 'Вводу средств',
        'Выводу средств'    => 'Выводу средств',
        'Другое'            => 'Другое',
    ];

    /**
     * @inheritdoc
     */
    public function init()
    {
        User::$user = ($this->userModel !== false) ? $this->userModel : Yii::$app->user->identityClass;
        parent::init();
    }
}
