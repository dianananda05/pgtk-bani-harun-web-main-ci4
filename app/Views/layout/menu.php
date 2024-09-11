<div class="sidebar <?= session('sidebar_hidden') ? 'hidden' : ''; ?>" id="sidebar">
    <div class="logo">
        <img src="<?= base_url('assets/img/logo.png') ?>" alt="PGTK Logo">
        <div class="logo-text">PGTK BANI HARUN</div>
        <i class="fas fa-align-justify" id="toggle-sidebar"></i>
    </div>

    <?php if (session()->has('menu')): ?>
        <?php foreach (session('menu') as $item): ?>
            <div class="menu-item">
                <i class="<?= $item['icon'] ?>"></i>
                <a href="<?= base_url($item['url']) ?>"><?= $item['label'] ?></a>
            </div>
        <?php endforeach; ?>
    <?php endif; ?>
</div>
