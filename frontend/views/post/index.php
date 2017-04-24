<?php
use frontend\widgets\post\PostWidget;
use frontend\widgets\hot\HotWidget;
use frontend\widgets\tag\TagWidget;
?>
<div class="row">
    <div class="col-lg-9">
        <?=PostWidget::widget()?>
    </div>
    <div class="col-lg-3">
    	<!--创建文章-->
        <!-- 热门浏览 -->
        <?=HotWidget::widget()?>
        <!-- 标签云组件 -->
        <?= TagWidget::widget() ?>
    </div>
</div>
