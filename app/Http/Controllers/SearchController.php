<?php

namespace App\Http\Controllers;

use Exception;
use Illuminate\Http\Request;

class SearchController extends Controller
{
    public function index(Request $request) {
        // return "This is search";
        // $params = \request()->data;
        // $params = $request()->data;
        print_r($request->all());
        // return view('frontend.search-page', compact('params'));
    }

    public function getPage($params = "") {
        if(strpos($params, '$3098') !== false) {
            $url = str_replace("$3098", "/", $params);
            $url = str_replace("$3099", ":", $url);
            //echo $url;die;
        }
        else{
            $url = "https://smartphone.forsalebyweb.com/idx/results/listings?" . $params;
        }
        try{
            $content = file_get_contents($url);
            echo $content;
        }catch(Exception $ex){
            echo "Invalid Listing No. <a onclick='parent.window.close();' id='closeWindow' href='#'>Close.</a>";
        }
    }

    public function parentUrl($params) {
        return redirect('/search?data' . $params);
    }
}
