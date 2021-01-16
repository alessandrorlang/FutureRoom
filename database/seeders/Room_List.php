<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

use Illuminate\Support\Facades\DB;

class Room_List extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('room_lists')->insert([
            [
                'room_categoryID' => 1,
                'room_name' => 'Bedroom 1',
                'photo' => 'images\roomcategories\bedroom\bedroom-1.jpg',
                'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec nec fringilla metus, quis volutpat magna. Pellentesque imperdiet sodales orci, at imperdiet nulla accumsan et. Maecenas id molestie augue. Nunc laoreet mauris leo, vitae dignissim lectus commodo quis. Nunc massa leo, efficitur pretium velit et, tempor blandit eros. Sed condimentum accumsan posuere.',
                'designer' => 'Kevin Susanto'
            ],
            [
                'room_categoryID' => 1,
                'room_name' => 'Bedroom 2',
                'photo' => 'images\roomcategories\bedroom\bedroom-2.jpg',
                'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec nec fringilla metus, quis volutpat magna. Pellentesque imperdiet sodales orci, at imperdiet nulla accumsan et. Maecenas id molestie augue. Nunc laoreet mauris leo, vitae dignissim lectus commodo quis. Nunc massa leo, efficitur pretium velit et, tempor blandit eros. Sed condimentum accumsan posuere.',
                'designer' => 'Bruno Fernandes'
            ],
            [
                'room_categoryID' => 1,
                'room_name' => 'Bedroom 3',
                'photo' => 'images\roomcategories\bedroom\bedroom-3.jpg',
                'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec nec fringilla metus, quis volutpat magna. Pellentesque imperdiet sodales orci, at imperdiet nulla accumsan et. Maecenas id molestie augue. Nunc laoreet mauris leo, vitae dignissim lectus commodo quis. Nunc massa leo, efficitur pretium velit et, tempor blandit eros. Sed condimentum accumsan posuere.',
                'designer' => 'Luke Shaw'
            ],
            [
                'room_categoryID' => 1,
                'room_name' => 'Bedroom 4',
                'photo' => 'images\roomcategories\bedroom\bedroom-4.jpg',
                'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec nec fringilla metus, quis volutpat magna. Pellentesque imperdiet sodales orci, at imperdiet nulla accumsan et. Maecenas id molestie augue. Nunc laoreet mauris leo, vitae dignissim lectus commodo quis. Nunc massa leo, efficitur pretium velit et, tempor blandit eros. Sed condimentum accumsan posuere.',
                'designer' => 'Dennis Luko'
            ],
            [
                'room_categoryID' => 2,
                'room_name' => 'Living Room 1',
                'photo' => 'images\roomcategories\livingroom\livingroom-1.jpg',
                'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec nec fringilla metus, quis volutpat magna. Pellentesque imperdiet sodales orci, at imperdiet nulla accumsan et. Maecenas id molestie augue. Nunc laoreet mauris leo, vitae dignissim lectus commodo quis. Nunc massa leo, efficitur pretium velit et, tempor blandit eros. Sed condimentum accumsan posuere.',
                'designer' => 'Andersen Lo'
            ],
            [
                'room_categoryID' => 2,
                'room_name' => 'Living Room 2',
                'photo' => 'images\roomcategories\livingroom\livingroom-2.jpg',
                'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec nec fringilla metus, quis volutpat magna. Pellentesque imperdiet sodales orci, at imperdiet nulla accumsan et. Maecenas id molestie augue. Nunc laoreet mauris leo, vitae dignissim lectus commodo quis. Nunc massa leo, efficitur pretium velit et, tempor blandit eros. Sed condimentum accumsan posuere.',
                'designer' => 'Susanti Sang'
            ],
            [
                'room_categoryID' => 2,
                'room_name' => 'Living Room 3',
                'photo' => 'images\roomcategories\livingroom\livingroom-3.jpg',
                'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec nec fringilla metus, quis volutpat magna. Pellentesque imperdiet sodales orci, at imperdiet nulla accumsan et. Maecenas id molestie augue. Nunc laoreet mauris leo, vitae dignissim lectus commodo quis. Nunc massa leo, efficitur pretium velit et, tempor blandit eros. Sed condimentum accumsan posuere.',
                'designer' => 'Cindy Pricilia'
            ],
            [
                'room_categoryID' => 2,
                'room_name' => 'Living Room 4',
                'photo' => 'images\roomcategories\livingroom\livingroom-4.jpg',
                'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec nec fringilla metus, quis volutpat magna. Pellentesque imperdiet sodales orci, at imperdiet nulla accumsan et. Maecenas id molestie augue. Nunc laoreet mauris leo, vitae dignissim lectus commodo quis. Nunc massa leo, efficitur pretium velit et, tempor blandit eros. Sed condimentum accumsan posuere.',
                'designer' => 'Agatha Lukman'
            ],
            [
                'room_categoryID' => 3,
                'room_name' => 'Bathroom 1',
                'photo' => 'images\roomcategories\bathroom\bathroom-1.jpg',
                'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec nec fringilla metus, quis volutpat magna. Pellentesque imperdiet sodales orci, at imperdiet nulla accumsan et. Maecenas id molestie augue. Nunc laoreet mauris leo, vitae dignissim lectus commodo quis. Nunc massa leo, efficitur pretium velit et, tempor blandit eros. Sed condimentum accumsan posuere.',
                'designer' => 'Monica Dwelling'
            ],
            [
                'room_categoryID' => 3,
                'room_name' => 'Bathroom 2',
                'photo' => 'images\roomcategories\bathroom\bathroom-4.jpg',
                'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec nec fringilla metus, quis volutpat magna. Pellentesque imperdiet sodales orci, at imperdiet nulla accumsan et. Maecenas id molestie augue. Nunc laoreet mauris leo, vitae dignissim lectus commodo quis. Nunc massa leo, efficitur pretium velit et, tempor blandit eros. Sed condimentum accumsan posuere.',
                'designer' => 'Alberto Moreno'
            ],
            [
                'room_categoryID' => 3,
                'room_name' => 'Bathroom 3',
                'photo' => 'images\roomcategories\bathroom\bathroom-3.jpg',
                'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec nec fringilla metus, quis volutpat magna. Pellentesque imperdiet sodales orci, at imperdiet nulla accumsan et. Maecenas id molestie augue. Nunc laoreet mauris leo, vitae dignissim lectus commodo quis. Nunc massa leo, efficitur pretium velit et, tempor blandit eros. Sed condimentum accumsan posuere.',
                'designer' => 'Kevin Havertz'
            ],
            [
                'room_categoryID' => 3,
                'room_name' => 'Bathroom 4',
                'photo' => 'images\roomcategories\bathroom\bathroom-2.jpg',
                'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec nec fringilla metus, quis volutpat magna. Pellentesque imperdiet sodales orci, at imperdiet nulla accumsan et. Maecenas id molestie augue. Nunc laoreet mauris leo, vitae dignissim lectus commodo quis. Nunc massa leo, efficitur pretium velit et, tempor blandit eros. Sed condimentum accumsan posuere.',
                'designer' => 'Bernd Saka'
            ],
            [
                'room_categoryID' => 4,
                'room_name' => 'Kitchen 1',
                'photo' => 'images\roomcategories\kitchen\kitchen-1.jpg',
                'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec nec fringilla metus, quis volutpat magna. Pellentesque imperdiet sodales orci, at imperdiet nulla accumsan et. Maecenas id molestie augue. Nunc laoreet mauris leo, vitae dignissim lectus commodo quis. Nunc massa leo, efficitur pretium velit et, tempor blandit eros. Sed condimentum accumsan posuere.',
                'designer' => 'McTominay Gwen'
            ],
            [
                'room_categoryID' => 4,
                'room_name' => 'Kitchen 2',
                'photo' => 'images\roomcategories\kitchen\kitchen-2.jpg',
                'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec nec fringilla metus, quis volutpat magna. Pellentesque imperdiet sodales orci, at imperdiet nulla accumsan et. Maecenas id molestie augue. Nunc laoreet mauris leo, vitae dignissim lectus commodo quis. Nunc massa leo, efficitur pretium velit et, tempor blandit eros. Sed condimentum accumsan posuere.',
                'designer' => 'Rebic Rangke'
            ],
            [
                'room_categoryID' => 4,
                'room_name' => 'Kitchen 3',
                'photo' => 'images\roomcategories\kitchen\kitchen-3.jpg',
                'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec nec fringilla metus, quis volutpat magna. Pellentesque imperdiet sodales orci, at imperdiet nulla accumsan et. Maecenas id molestie augue. Nunc laoreet mauris leo, vitae dignissim lectus commodo quis. Nunc massa leo, efficitur pretium velit et, tempor blandit eros. Sed condimentum accumsan posuere.',
                'designer' => 'Susan Blair'
            ],
            [
                'room_categoryID' => 4,
                'room_name' => 'Kitchen 4',
                'photo' => 'images\roomcategories\kitchen\kitchen-4.jpg',
                'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec nec fringilla metus, quis volutpat magna. Pellentesque imperdiet sodales orci, at imperdiet nulla accumsan et. Maecenas id molestie augue. Nunc laoreet mauris leo, vitae dignissim lectus commodo quis. Nunc massa leo, efficitur pretium velit et, tempor blandit eros. Sed condimentum accumsan posuere.',
                'designer' => 'Raffi Louis'
            ],
        ]);
    }
}
