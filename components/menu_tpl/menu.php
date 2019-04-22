<li>
    <a class="cat" href="<?= \yii\helpers\Url::to(['category/view', 'id' => $category['id']])?>">
        <?= $category['name']?>
        <?php if (isset($category['childs'])):?>
            <span class="cat"></span>
        <?php endif; ?>
    </a>
</li>   
