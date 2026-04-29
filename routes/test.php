<?php

use Illuminate\Support\Facades\Route;

Route::get('/tabler-icons-demo', function () {
    // Get all icons and paginate them
    $allIcons = TablerIcon::all();
    $perPage = 50;
    $page = request()->get('page', 1);
    $search = request()->get('search', '');

    // Filter icons if search is provided
    if ($search) {
        $allIcons = TablerIcon::search($search);
    }

    // Simple pagination
    $total = count($allIcons);
    $offset = ($page - 1) * $perPage;
    $icons = array_slice($allIcons, $offset, $perPage);

    $pagination = [
        'current_page' => $page,
        'per_page' => $perPage,
        'total' => $total,
        'last_page' => ceil($total / $perPage),
        'has_prev' => $page > 1,
        'has_next' => $page < ceil($total / $perPage),
        'prev_page' => $page > 1 ? $page - 1 : null,
        'next_page' => $page < ceil($total / $perPage) ? $page + 1 : null,
    ];

    return view('tabler-icons::icons-list', compact('icons', 'pagination', 'search', 'total'));
})->name('tabler-icons.list');

Route::get('/tabler-icons-test', function () {
    return view('tabler-icons::test');
})->name('tabler-icons.details');
