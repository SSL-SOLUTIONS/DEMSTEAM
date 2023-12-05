<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use PhpParser\Node\Expr\AssignOp\BitwiseOr;

class HomeController extends Controller
{
    public function Index()
    {
        return view('dems.index');
    }
    public function PPC()
    {
        return view('dems.ppc');
    }
    public function Reputation()
    {
        return view('dems.reputation');
    }
    public function web_dev()
    {
        return view('dems.web-dev');
    }
    public function social()
    {
        return view('dems.social-media');
    }
    public function marketing()
    {
        return view('dems.marketing');
    }
    public function contact_us()
    {
        return view('dems.contact_us');
    }
    public function industries()
    {
        return view('dems.industries');
    }
    public function franchise()
    {
        return view('dems.franchise');
    }
    public function ecommerce()
    {
        return view('dems.ecommerce');
    }
    public function crypto()
    {
        return view('dems.crypto');
    }
    public function assisted_living()
    {
        return view('dems.assisted_living');
    }
    public function about()
    {
        return view('dems.about_us');
    }
    public function awards()
    {
        return view('dems.awards');
    }
    public function events()
    {
        return view('dems.events');
    }
    public function other()
    {
        return view('dems.others');
    }
    public function blog()
    {
        return view('dems.blogs');
    }
}
