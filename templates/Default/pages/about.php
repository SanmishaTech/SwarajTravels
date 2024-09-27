    <?= $this->include('Default/elements/header') ?>
    <?= $this->include('Default/elements/menu') ?>

    <img class="img-fluid w-100" src="/<?= $page->featured_image?>" alt="Image - <?= $page->title ?>">
    <nav aria-label="breadcrumb">
    <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="/">Home</a></li>
        <li class="breadcrumb-item active" aria-current="page"><?= $page->title ?></li>
    </ol>
    </nav>

    <section class="w3l-feature-with-photo-1">
    <h1 class="text-center display-4 mt-3 text-danger"><?= $page->title ?></h1>
		<div class="feature-with-photo-hny py-2">   
		<div class="container">
        <?= $page->content ?>
		</div>
		</div>
	</section>
	<!-- //feature with photo1 -->
        <?= $this->include('Default/elements/footer') ?>