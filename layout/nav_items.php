<div class="nav_items">
    <ul class="d-flex p-0 m-0">
        <?php
        foreach ($nav_items as $nav_item) : ?>
            <li class="mx-3 py-1 border-bottom border-3 <?= $nav_item['is_active'] ? 'border-primary text-primary' : 'border-light' ?>">
                <a href="<?= $nav_item['is_active'] ?>">
                    <?= $nav_item['text']; ?>
                </a>
            </li>
        <?php endforeach ?>
    </ul>
</div>