    <?= $this->include('Default/elements/header') ?>
    <?= $this->include('Default/elements/menu') ?>

    <img class="img-fluid w-100" src="/<?= $page->featured_image?>" alt="<?= $page->title ?>">
    <nav aria-label="breadcrumb">
    <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="/">Home</a></li>
        <li class="breadcrumb-item active" aria-current="page"><?= $page->title ?></li>
    </ol>
    </nav>
    <section class="w3l-destinations-1">
        <div class="destionation-innf py-5">
            <div class="container py-lg-5">
                <div class="title-content mb-5">
                    <span class="sub-title">Find Your</span>
                    <h1 class="display-4 hny-title mb-0">Destinations</h1>
                    <p>You are now free to move about the country.</p>
                </div>
                <!--/destinations-grids-->
                <?= $page->content ?>
                <!--//destinations-grids-->
            </div>
        </div>
    </section>

	<!-- //feature with photo1 -->
        <?= $this->include('Default/elements/footer') ?>