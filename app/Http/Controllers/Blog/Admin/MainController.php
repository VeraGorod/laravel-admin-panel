<?php

    namespace App\Http\Controllers\Blog\Admin;


    use Fomvasss\LaravelMetaTags\Facade as MetaTag;

    /**
     * Class MainController
     * @package App\Http\Controllers\Blog\Admin
     */
    class MainController extends AdminBaseController
    {
        public function index()
        {
            MetaTag::setTags(['title' => 'Админ панель сайта']);
            return view("blog.admin.main.index");
        }



    }
