<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use GuzzleHttp\Exception\GuzzleException; 
use Illuminate\Support\Facades\Http;

class PetController extends Controller
{
    public function randonPet(){

        $response = Http::get('https://api.thedogapi.com/v1/images/search');
        $data = json_decode($response->body());
        
        //dd($data);

        return view('/pets/show', ['data'=> $data[0]]);
    } 
    
    public function breedPet(){
        $response_breed = Http::get('https://api.thedogapi.com/v1/breeds');
        $data_breed = json_decode($response_breed->body());
        
        //dd($data_breed);

        return view('/pets/breeds', ['data_breed'=> $data_breed]);
    }
}
