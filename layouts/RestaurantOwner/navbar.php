<!-- ! Body -->

<a class="skip-link sr-only" href="#skip-target">Skip to content</a>
<div class="page-flex">
  <!-- ! Sidebar -->
  <aside class="sidebar">
    <div class="sidebar-start">
        <div class="sidebar-head">
            <a href="/" class="logo-wrapper" title="Home">
                <span class="sr-only">Home</span>
                <span class="icon logo" aria-hidden="true"></span>
                <div class="logo-text">
                    <span class="logo-title"><?php print_r($_SESSION['res_own']['restaurant_name']);?></span>
                    <span class="logo-subtitle"><?php print_r($_SESSION['res_own']['address']);?></span>
                </div>

            </a>
            <button class="sidebar-toggle transparent-btn" title="Menu" type="button">
                <span class="sr-only">Toggle menu</span>
                <span class="icon menu-toggle" aria-hidden="true"></span>
            </button>
        </div>
        <div class="sidebar-body">
            <ul class="sidebar-body-menu">
                <li>
                    <a class="active" href="/"><span class="icon home" aria-hidden="true"></span>Dashboard</a>
                </li>
                <li>
                    <a class="show-cat-btn" href="categories.html">
                        <span class="icon folder" aria-hidden="true"></span>Categories
                        <span class="category__btn transparent-btn" title="Open list">
                            <span class="sr-only">Open list</span>
                            <span class="icon arrow-down" aria-hidden="true"></span>
                        </span>
                    </a>
                    <ul class="cat-sub-menu">
                        <li>
                            <a href="/all_categories">All categories</a>
                        </li>
                    </ul>
                </li>
                <li>
                    <a class="show-cat-btn" href="">
                        <span class="icon folder" aria-hidden="true"></span>Food
                        <span class="category__btn transparent-btn" title="Open list">
                            <span class="sr-only">Open list</span>
                            <span class="icon arrow-down" aria-hidden="true"></span>
                        </span>
                    </a>
                    <ul class="cat-sub-menu">
                        <li>
                            <a href="/all_food">All Food</a>
                        </li>
                    </ul>
                </li>
                <li>
                    <a class="show-cat-btn" href="">
                        <span class="icon folder" aria-hidden="true"></span>Notifications
                        <span class="category__btn transparent-btn" title="Open list">
                            <span class="sr-only">Open list</span>
                            <span class="icon arrow-down" aria-hidden="true"></span>
                        </span>
                    </a>
                    <ul class="cat-sub-menu">
                        <li>
                            <a href="/comment">Comments</a>
                        </li>
                        <li>
                            <a href="/res_order">Order
                            <span class="msg-counter"><?php echo count($padding) ?></span>
                            </a>
                        </li>
                    </ul>
                </li>
            </ul>
        </div>
    </div>
    <div class="sidebar-footer">
        <a href="##" class="sidebar-user">
            <span class="sidebar-user-img">
                <picture><source srcset="../../assets/images/user/<?= $resOwner['user_img'] ?>" type="image/webp"><img src="../../assets/images/user/<?=$resOwner['user_img'];?>"></picture>
            </span>
            <div class="sidebar-user-info">
                <span class="sidebar-user__title"><?=$resOwner['username'];?></span>
                <span class="sidebar-user__subtitle">Restaurant Owner</span>
            </div>
        </a>
    </div>
</aside>