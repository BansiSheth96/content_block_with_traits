<?php

use Illuminate\Support\Facades\Route;
use App\Models\Page;
use Illuminate\Http\Request;

// Route::get('/', function () {
//     return view('welcome');
// });


Route::get('/page/{id}', function ($id) {
    $page = Page::find($id);
    return view('pages.show', compact('page'));
});

Route::post('/page/{id}/content-block', function (Request $request, $id) {
    $page = Page::find($id);
    $page->addContentBlock($request->type, $request->content);
    return redirect()->back();
});