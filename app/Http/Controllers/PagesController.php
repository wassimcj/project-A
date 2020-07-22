<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function home(){
        return view ('pages.home');
    }
    public function chocolats(){
        $data = array(
            'title' => 'Chocolats',
            'chocolats' => ['chocolat noir','chocolat blanc','chocolat au lait']
        );
        return view ('pages.chocolats')->with($data);
    }
    public function perfumes(){
        $data = array(
        'title' => 'Perfumes',
            'perfumes' => ['CK one','blue de chanel','blackXS by pacco']
        );
        return view ('pages.perfumes')->with($data);
    }
    public function flowers(){
        $data = array(
            'title' => 'Flowers',
                'flowers' => ['roses','jassmin','tulip']
            );
        return view ('pages.flowers')->with($data);
    }
}
