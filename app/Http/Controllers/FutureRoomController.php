<?php

namespace App\Http\Controllers;

use App\Models\Homepage;
use App\Models\room_categories;
use App\Models\room_lists;
use App\Models\mainFeatures;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class FutureRoomController extends Controller
{
    public function getIndex()
    {
        $bedroom = room_lists::whereHas('room_categories', function ($id) {
            $id->where('category_name', '=', 'Bedroom');
        })->paginate(3);

        $livingroom = room_lists::whereHas('room_categories', function ($id) {
            $id->where('category_name', '=', 'Living Room');
        })->paginate(3);

        $bathroom = room_lists::whereHas('room_categories', function ($id) {
            $id->where('category_name', '=', 'Bathroom');
        })->paginate(3);

        $kitchen = room_lists::whereHas('room_categories', function ($id) {
            $id->where('category_name', '=', 'Kitchen');
        })->paginate(3);


        return view('roomDesigns', compact('bedroom', 'livingroom', 'bathroom', 'kitchen'));
    }

    public function getBedroom()
    {
        $bedroom = room_lists::whereHas('room_categories', function ($id) {
            $id->where('category_name', '=', 'Bedroom');
        })->get();

        $total = room_lists::whereHas('room_categories', function ($id) {
            $id->where('category_name', '=', 'Bedroom');
        })->count();

        return view('bedroom', compact('bedroom', 'total'));
    }

    public function getLivingRoom()
    {
        $livingroom = room_lists::whereHas('room_categories', function ($id) {
            $id->where('category_name', '=', 'Living Room');
        })->get();

        $total = room_lists::whereHas('room_categories', function ($id) {
            $id->where('category_name', '=', 'Living Room');
        })->count();

        return view('livingroom', compact('livingroom', 'total'));
    }
    public function getBathroom()
    {
        $bathroom = room_lists::whereHas('room_categories', function ($id) {
            $id->where('category_name', '=', 'Bathroom');
        })->get();

        $total = room_lists::whereHas('room_categories', function ($id) {
            $id->where('category_name', '=', 'Bathroom');
        })->count();

        return view('bathroom', compact('bathroom', 'total'));
    }
    public function getKitchen()
    {
        $kitchen = room_lists::whereHas('room_categories', function ($id) {
            $id->where('category_name', '=', 'Kitchen');
        })->get();

        $total = room_lists::whereHas('room_categories', function ($id) {
            $id->where('category_name', '=', 'Kitchen');
        })->count();

        return view('kitchen', compact('kitchen', 'total'));
    }

    public function getRoomCategories(room_categories $room_categories)
    {
        return view('roomDesigns', compact('room_categories'));
    }

    public function getRoomLists(room_lists $room_lists)
    {
        return view('roomDesigns', compact('room_lists'));
    }

    public function getHomepage()
    {
        $homepage = DB::table('homepage')->get();

        return view('welcome', ['homepageData' => $homepage]);
    }

    public function getMainFeatures()
    {
        $mainfeatures = DB::table('mainFeatures')->get();

        return view('mainFeatures', ['mainFeaturesData' => $mainfeatures]);
    }
}
