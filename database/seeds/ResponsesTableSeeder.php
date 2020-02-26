<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Storage;
use App\Response;

class ResponsesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $string = file_get_contents('phrases.json');
        $json_file = json_decode($string);//truth means array
        $phrases = ($json_file);

        //var_dump($phrases);

        foreach($phrases as $keyword => $phrase){
            

            $obj = new Response();
            
            $obj->keyword = $keyword;
            $obj->response = $phrase;
            $obj->save();

        }



    }
}
