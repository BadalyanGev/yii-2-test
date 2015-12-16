<?php
use \yii\grid\GridView;
$this->title = 'Home';
echo GridView::widget([
        'dataProvider' => $model,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'parent_id',
            'name:ntext',
            'url:ntext',
            'category_image:ntext',
            // 'created_at',
            // 'updated_at',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]);
?>