<?php
    $request = \Config\Services::request();    
    
    $menu = service('webly')->getMenu('Main Menu');
    
    function getChildren($items, &$str) {
        $path = \Config\Services::request()->getUri()->getRoutePath();

        if(!empty($items)) {
            $str .= "<ul class='dropdown-menu'>";
            foreach($items as $item) {
                $active = strpos($path, $item->slug) === 0 ? 'active' : '';

                $str .= "<li class='{$active}'>";
                $str .= "<a class='dropdown-item' href='/{$item->slug}'>{$item->value}</a>";
                getChildren($item->children, $str);
                $str .= "</li>";
            }
            $str .= "</ul>";
        } else {
            return false;
        }
    }

    $path = \Config\Services::request()->getUri()->getRoutePath();
    $path = empty($path) ? '/' : $path;

    $str = '';
    foreach($menu as $item) {
        $active = strpos($path, $item->slug) === 0 ? 'active' : '';
        $item->slug = $item->slug == "/" ? '/' : "/{$item->slug}";
        $item->slug = $item->slug == "/#" ? "#" : $item->slug;
        if(!$item->children) {
            $str .= "<li class='nav-item {$active}'>";
            $str .= "<a class='nav-link  {$active}' href='{$item->slug}'>{$item->value}</a>";
            $str .= "</li>";   
        } else {
            $str .= "<li class='nav-item dropdown {$active}'>";
            $str .= "<a href='{$item->slug}' class='nav-link dropdown-toggle  {$active}' data-toggle='dropdown'>{$item->value} <i class='fa fa-caret-down'></i></a>";
            getChildren($item->children, $str);
            $str .= "</li>";   
        }
    }

    // debug($str);
?>
<!-- Headers-4 block -->
<section class="w3l-header-4 mobile-header">
		<div class="header-tophny">
			<div class="container-fluid">
				<header class="top-headerhny">
					<!--/nav-->
					<nav class="navbar navbar-expand-lg navbar-light">
					
                    <a class="navbar-brand" href="/">
                        <img src="/<?= setting('App.logo') ?>" alt="Swaraj Travels Pvt. Ltd." title="Swaraj Travels Pvt. Ltd." style="height:90px" >
                    </a>
						<button class="navbar-toggler" type="button" data-toggle="collapse"
							data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
							aria-expanded="false" aria-label="Toggle navigation">
							<span class="navbar-toggler-icon"></span>
						</button>

						<div class="collapse navbar-collapse" id="navbarSupportedContent">
							<ul class="navbar-nav ml-auto">
                            <?= $str ?>
								<!-- <li class="nav-item active">
									<a class="nav-link" href="#">Home</a>
								</li>
								<li class="nav-item">
									<a class="nav-link" href="#">About Us</a>
								</li>
								<li class="nav-item">
									<a class="nav-link" href="#">Tour packages</a>
								</li>
								<li class="nav-item">
									<a class="nav-link" href="#">Services</a>
								</li>
								<li class="nav-item">
									<a class="nav-link" href="#">Contact Us</a>
								</li> -->
							</ul>

						</div>


					</nav>
					<!--//nav-->
				</header>
			</div>
		</div>
	</section>

	<!-- Headers-4 block -->