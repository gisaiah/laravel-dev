<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;

class PagesController extends Controller
{
    public function getAbout()
    {
        $companyName = "Gladys Company";
        $isUserRegistered = false;
        $users = array("Gladys", "Isaiah", "Sai", "Glads");

        return view('pages.about')
                ->with("companyName", $companyName)
                ->with("isUserRegistered", $isUserRegistered)
                ->with("users", $users);
    }

    public function getContact()
    {
        return view('pages.contact');
    }

    public function getHelp()
    {
        return view('pages.help');
    }

  
}