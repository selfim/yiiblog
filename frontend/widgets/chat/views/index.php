<?php
use yii\helpers\Url;
?>
<div class="panel">
<div class="panel-title box-title">
    <span><strong>只言片语</strong></span>
    <span class="pull-right"><a href="#" class="font-12">更多>></a></span>
</div>

<div class="panel-body">
    <form id="w0" action="/" method="post">
        <div class="form-group input-group field-feed-content required">
            <textarea id="feed-content" class="form-control" name="content" placeholder="我想说"></textarea>
            <span class="input-group-btn">
                <button type="button" data-url="<?= Url::to(['site/add-feed']) ?>" class="btn btn-feed btn-success j-feed">发布</button>
            </span>
        </div>
    </form>


    <?php if (!empty($data['feed'])): ?>
        <ul class="media-list media-feed feed-index ps-container ps-active-y">
            <?php foreach ($data['feed'] as $list): ?>
            <li class="media">
                <div class="media-left">
                    <a href="#" rel="author" data-oringinal-title="" title="">
                        <img alt="" class="media-object" src="<?='/statics/images/avatar/small.jpg'?>"/>
                    </a>
                </div>
                <div class="media-body">
                    <div class="media-content">
                        <a href="#" rel="author" data-oringinal-title="" title="">
                            <?=$list['user']['username']?>
                        </a>
                        <span>：<?=$list['content']?></span>
                    </div>
                    <div class="media-action">
                        <?= date('Y-m-d h:i:s', $list['created_at']) ?>
                    </div>
                </div>
            </li>
            <?php endforeach; ?>
        </ul>
    <?php endif; ?>
</div>
</div>