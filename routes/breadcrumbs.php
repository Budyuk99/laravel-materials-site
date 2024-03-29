<?php // routes/breadcrumbs.php

// Note: Laravel will automatically resolve `Breadcrumbs::` without
// this import. This is nice for IDE syntax and refactoring.
use Diglactic\Breadcrumbs\Breadcrumbs;

// This import is also not required, and you could replace `BreadcrumbTrail $trail`
//  with `$trail`. This is nice for IDE type checking and completion.
use Diglactic\Breadcrumbs\Generator as BreadcrumbTrail;

Breadcrumbs::for('home', function (BreadcrumbTrail $trail) {
    $trail->push('Главная', route('home'));
});

// Breadcrumbs::for('about-company', function (BreadcrumbTrail $trail) {
//     $trail->push('О компании', route('about-company'));
// });

Breadcrumbs::for('about-company', function (BreadcrumbTrail $trail) {
    $trail->parent('home');
    $trail->push('О компании', route('about-company'));
});


