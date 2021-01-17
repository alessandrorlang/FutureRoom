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

        return view('/categories/bedroom', compact('bedroom'));
    }

    public function getLivingRoom()
    {
        $livingroom = room_lists::whereHas('room_categories', function ($id) {
            $id->where('category_name', '=', 'Living Room');
        })->get();

        return view('/categories/livingroom', compact('livingroom'));
    }
    public function getBathroom()
    {
        $bathroom = room_lists::whereHas('room_categories', function ($id) {
            $id->where('category_name', '=', 'Bathroom');
        })->get();

        return view('/categories/bathroom', compact('bathroom'));
    }
    public function getKitchen()
    {
        $kitchen = room_lists::whereHas('room_categories', function ($id) {
            $id->where('category_name', '=', 'Kitchen');
        })->get();

        return view('/categories/kitchen', compact('kitchen'));
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
