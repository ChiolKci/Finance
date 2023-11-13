<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Slide;
use App\Models\Contact;
use App\Models\About;


class HomeController extends Controller
{
    public function slide(Request $request)
        {

            $data =[];

            $data['ishome'] = false;


            $data['slide'] = Slide::orderBy('id', 'DESC')
                ->first();

            if($data['slide'])
            {

                $data['title'] = $data['slide']->title;
                $data['text'] = $data['slide']->text;
                $data['picture'] = $data['slide']->picture;
            }
            else
            {
                $data['title'] = $data['slide']->title;
                $data['text'] = $data['slide']->text;
                $data['picture'] = $data['slide']->picture;
            }
            return view('welcome', $data);
        }


        public function contact(Request $request)
        {

            $data =[];

            $data['ishome'] = false;


            $data['contact'] = Contact::orderBy('id', 'DESC')
                ->first();

            if($data['contact'])
            {

                $data['map'] = $data['contact']->map;
                $data['address'] = $data['contact']->address;
                $data['phone'] = $data['contact']->phone;
                $data['email'] = $data['contact']->email;
                $data['time'] = $data['contact']->time;
            }
            else
            {
                $data['map'] = $data['contact']->map;
                $data['address'] = $data['contact']->address;
                $data['phone'] = $data['contact']->phone;
                $data['email'] = $data['contact']->email;
                $data['time'] = $data['contact']->time;
            }
            return view('contact', $data);
        }

        public function about(Request $request)
        {

            $data =[];

            $data['ishome'] = false;


            $data['about'] = About::orderBy('id', 'DESC')
                ->first();

            if($data['about'])
            {

                $data['title'] = $data['about']->title;
                $data['text'] = $data['about']->text;
                $data['picture'] = $data['about']->picture;
            }
            else
            {
                $data['title'] = $data['about']->title;
                $data['text'] = $data['about']->text;
                $data['picture'] = $data['about']->picture;
            }
            return view('about', $data);
        }

}
