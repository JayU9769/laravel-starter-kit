{{-- Sidebar starts here --}}

<?php

$mainNav = Menu::make('MyNavBar', function($menu){

    $menu->add(
        '<i class="tim-icons icon-chart-pie-36"></i> Dashboard',
        [
            'route'  => 'admin.home',
            'id' => 'home'
        ]
    );

    $menu->add(
        '<i class="tim-icons icon-single-02"></i> Users',
        ['route' => 'home']
    )
        ->nickname('mail')
        ->link->attr(['class' => 'nav-link']);

    $menu->add(
        '<i class="tim-icons icon-paper"></i> Category',
        ['route' => 'category.index']
    )
        ->link->attr(['class' => 'nav-link']);

});
?>

<div class="sidebar" data-color="blue">
    <div class="sidebar-wrapper">
        <div class="logo">
            <a href="javascript:void(0)" class="simple-text logo-mini">
                DL
            </a>
            <a href="{{ route('home') }}" class="simple-text logo-normal">
                Droplens Studio
            </a>
        </div>
        <ul class="nav">

            @include(config('laravel-menu.views.bootstrap-items'), ['items' => $mainNav->roots()])
        </ul>
    </div>
</div>
{{-- Sidebar ends here --}}
