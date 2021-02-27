<?php

  namespace App\Http\Controllers\Blog;


  use App\Models\BlogPost;
  use Illuminate\Http\Request;

  class PostController extends BaseController {
    /**
     * Показать список ресурса.
     *
     * @return \Illuminate\Http\Response
     */
    public function index() {

      $items = BlogPost::all();

      return view('blog.posts.index', compact('items'));
    }

    /**
     * Показать форму для создания нового ресурса.
     *
     * @return \Illuminate\Http\Response
     */
    public function create() {
      //
    }

    /**
     * Сохраните вновь созданный ресурс в хранилище.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request) {
      //
    }

    /**
     * Отобразить указанный ресурс.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id) {
      //
    }

    /**
     * Показать форму редактирования указанного ресурса.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id) {
      //
    }

    /**
     * Обновить указанный ресурс в хранилище.
     *
     * @param \Illuminate\Http\Request $request
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id) {
      //
    }

    /**
     * Удалить указанный ресурс из хранилища.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id) {
      //
    }
  }
