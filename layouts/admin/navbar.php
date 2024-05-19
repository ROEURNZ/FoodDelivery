<?php
require_once "database/database.php"; 
require_once "models/employee.model.php";
require_once "models/admin.model.php"; 
$users = getAllUsers();
$adminPf = showPf($_SESSION['userid']);


?>

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
                        <span class="logo-title">Admin</span>
                        <span class="logo-subtitle">Dashboard</span>
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
                </ul>
                <span class="system-menu__title">system</span>
                <ul class="sidebar-body-menu">
                    <li>
                        <a class="show-cat-btn" href="##">
                            <span class="icon user-3" aria-hidden="true"></span>All users
                            <span class="category__btn transparent-btn" title="Open list">
                                <span class="sr-only">Open list</span>
                                <span class="icon arrow-down" aria-hidden="true"></span>
                            </span>
                        </a>
                        <ul class="cat-sub-menu">
                            <li>
                                <a href="/delivery">Runners</a>
                            </li>
                            <li>
                                <a href="/customer">Customers</a>
                            </li>
                            <li>
                                <a href="/res_onwer">Owners</a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="##"><span class="icon setting" aria-hidden="true"></span>Settings</a>
                    </li>
                </ul>
            </div>
        </div>
        
    </aside>