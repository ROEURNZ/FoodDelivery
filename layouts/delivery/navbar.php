<?php
// session_start();
// require_once "database/database.php"; // Include database connection
require_once "models/admin.model.php"; // Include admin model file once
require "models/foodOrder.model.php";

$responseOrder = deliverFood(3);
$responseOrderConfirm = deliverFood(4);

$users = getAllUsers();
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
                        <span class="logo-title">Delivery Page</span>
                        <span class="logo-subtitle">fast delivery</span>
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
                        <a href="/"><span class="icon home" aria-hidden="true"></span>Costomer Orders</a>
                    </li>
                    <li>
                        <a href="/map"><span class="icon home" aria-hidden="true"></span>Direct location:</a>
                    </li>
                    <li>
                        <a href="/response"><span class="icon home" aria-hidden="true"></span>Response</a>
                    </li>
                        
                </ul>
            </div>
        </div>
        
    </aside>