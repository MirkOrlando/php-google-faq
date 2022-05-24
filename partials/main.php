<main id="site_main">
    <div class="container_google">
        <?php
        foreach ($faqs as $faq) : ?>
            <h4 class="mt-5 lh-sm"><?= $faq['question'] ?></h4>
            <div class="content my-3 lh-sm"><?= $faq['answer'] ?></div>
        <?php endforeach ?>
    </div>
</main>
<!-- /#site_main -->