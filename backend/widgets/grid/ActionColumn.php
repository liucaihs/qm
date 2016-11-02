<?php
namespace backend\widgets\grid;

use Yii;
use Closure;
use yii\helpers\Url;
use yii\helpers\Html;
use yii\helpers\ArrayHelper;

class ActionColumn extends  \yii\grid\ActionColumn
{
    public $buttonOptions = ["class"=>"btn btn-default btn-xs"];
    public $template = '{view} {update} {delete}';


    /**
     * Initializes the default button rendering callbacks.
     */
    protected function initDefaultButtons()
    {

        parent::initDefaultButtons();

        if (!isset($this->buttons['create'])) {
            $this->buttons['create'] = function ($url) {
                $options = ArrayHelper::merge([
                    'title' => Yii::t('app', 'Create'),
                    'aria-label' => Yii::t('app', 'Create'),
                    'data-pjax' => '0',
                ], $this->buttonOptions);

                return Html::a('<span class="glyphicon glyphicon-plus"></span>', $url, $options);
            };
        }
        if (!isset($this->buttons['up'])) {
            $this->buttons['up'] = function ($url) {
                $options = ArrayHelper::merge([
                    'title' => Yii::t('app', 'Up'),
                    'aria-label' => Yii::t('app', 'Up'),
                    'data-pjax' => '0',
                ], $this->buttonOptions);

                return Html::a('<span class="glyphicon glyphicon-arrow-up"></span>', $url, $options);
            };
        }
        if (!isset($this->buttons['down'])) {
            $this->buttons['down'] = function ($url) {
                $options = ArrayHelper::merge([
                    'title' => Yii::t('app', 'Down'),
                    'aria-label' => Yii::t('app', 'Down'),
                    'data-pjax' => '0'
                ], $this->buttonOptions);

                return Html::a('<span class="glyphicon glyphicon-arrow-down"></span>', $url, $options);
            };
        }

    }
}
