<?php

class HomeController extends BaseController
{
    public function index()
    {
        return View::make('maintemplate', [
            'title' => 'ChoosePhotos',
            'page' => 'home'
        ]);
    }

}
