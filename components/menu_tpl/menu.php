<li>
    <a class="cat" href="#">
        <?= $category['name']?>
        <?php if (isset($category['childs'])):?>
            <span class="cat"></span>
        <?php endif; ?>
    </a>
        <?php if (isset($category['childs'])):?>
    <ul>
        <?= $this->getMenuHnml($category['childs']); ?>
    </ul>
        <?php endif; ?>
</li>