<?php if (isset($menu)): ?>
    <ul>
        <?php foreach ($menu as $menuItem): ?>
            <li><a href="<?= ROOT_URL . $menuItem['slug']?>"><?= $menuItem['title'] ?></a></li>
        <?php endforeach; ?>
    </ul>
<?php endif; ?>