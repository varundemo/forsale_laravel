<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use App\Listing;
use DB;
use Session;

class SlipStreamController extends Controller
{
    private $token;
    public $endpoint;

    public function __construct() {
        // dd(public_path());
        // $token = file_get_contents(public_path() . '\.token3098_config');
        $token = file_get_contents(public_path() . '/.token3098_config');
        $this->token = $token;

        // dd($tokenFile);
        // die();
    }

    public function generateNewToken() {
        $cURLConnection = curl_init();

        $url = "https://slipstream-test.homejunction.com/ws/api/authenticate?license=3815-7AF7-8250-BBBC";
        curl_setopt($cURLConnection, CURLOPT_URL, $url);
        curl_setopt($cURLConnection, CURLOPT_RETURNTRANSFER, true);

        $authResponse = curl_exec($cURLConnection);
        curl_close($cURLConnection);

        $authResponseArray = json_decode($authResponse, true);

        //check if error
        if($authResponseArray['success']) {
            $newToken = $authResponseArray['result']['token'];
            //save token to file
            $fp = fopen('.token3098_config', 'w');
            fwrite($fp, $newToken);
            fclose($fp);

            return $newToken;
        }
        else {
            die("Something went wrong. Please contact support.");
        }
    }

    public function index() {

        if(empty($this->token)) {
            $token = $this->generateNewToken();
            $this->token = $token;
        }
        else {
            //check if token has expired
            $cURLConnection = curl_init();
           

            curl_setopt($cURLConnection, CURLOPT_HTTPHEADER, array("HJI-Slipstream-Token: $this->token",
            ));

            $url = "https://slipstream-test.homejunction.com";
            //$endpoint = "/ws/listings/get?market=northstar&id=5155027&images=true&details=true";
            $endpoint = "/ws/listings/search?market=northstar&address.city=Adams&images=true&details=true";
            curl_setopt($cURLConnection, CURLOPT_URL, $url . $endpoint);
            curl_setopt($cURLConnection, CURLOPT_RETURNTRANSFER, true);

            $listings = curl_exec($cURLConnection);
            curl_close($cURLConnection);

            $jsonArrayResponse = json_decode($listings, true);

            //check if error
            // if(!$jsonArrayResponse['success']) {
            if($jsonArrayResponse['success']) {
                $token = $this->generateNewToken();
                $this->token = $token;
                print_r($token);
            }
        }

        dd($jsonArrayResponse);
        // return view('fsbw-layout.search-results', ['listings' => $jsonArrayResponse['result']['listings']]);
    }

    public function search(Request $request,$id) {
    	// print_r($request->all());
    	session(['city_select'=>$request->city_select]);
    	session(['propertyType'=>$request->propertyType]);
    	session(['sortBy'=>$request->sortBy]);
    	session(['beds'=>$request->beds]);
    	session(['baths'=>$request->baths]);
    	session(['minPrice'=>$request->minPrice]);
    	session(['maxPrice'=>$request->maxPrice]);
    	// session(['endvalue'=>$request->minPrice]);
    	// die();
        if(empty($this->token)) {
            $token = $this->generateNewToken();
            $this->token = $token;
        }
        else {
            // dd($this->token);
            $data = array("HJI-Slipstream-Token: $this->token",
        );
            dd($data);

            //check if token has expired
            $cURLConnection = curl_init();

           

            curl_setopt($cURLConnection, CURLOPT_HTTPHEADER, array("HJI-Slipstream-Token: $this->token",
            ));

            $url = "https://slipstream-test.homejunction.com";
            // $url = "https://slipstream.homejunction.com/#/ws/areas/trends";
            //$endpoint = "/ws/listings/get?market=northstar&id=5155027&images=true&details=true";
            //prepare search parameters
            $searchParams = "images=true&details=true&";
            if(isset($request->city_select) && !empty($request->city_select) && $request->city_select != "Any") {
                $searchParams .= "address.city={$request->city_select}&";
            }
            if(isset($request->propertyType) && !empty($request->propertyType)) {
                $searchParams .= "listingType={$request->propertyType}&";
            }
            if(isset($request->beds) && !empty($request->beds) && $request->beds != "Any") {
                $searchParams .= "beds={$request->beds}&";
            }
            if(isset($request->baths) && !empty($request->baths) && $request->baths != "Any") {
                $searchParams .= "baths.total={$request->baths}&";
            }
            if(
                (isset($request->minPrice) && !empty($request->minPrice) && is_numeric($request->minPrice))
                &&
                (isset($request->maxPrice) && !empty($request->maxPrice) && is_numeric($request->maxPrice))
            ) {
                $searchParams .= "listprice={$request->minPrice}:{$request->maxPrice}&";
            }
            else if(isset($request->minPrice) && !empty($request->minPrice) && is_numeric($request->minPrice)) {
                $searchParams .= "listprice=>{$request->minPrice}&";
            }
            else if(isset($request->maxPrice) && !empty($request->maxPrice) && is_numeric($request->maxPrice)) {
                $searchParams .= "listprice=<{$request->minPrice}&";
            }

            if($searchParams == "images=true&details=true&") {
                $searchParams = "images=true&details=true&features=true&listprice=>0";
            }
            $id = $id;

            $this->endpoint = "/ws/listings/search?market=northstar&" . $searchParams;
            // $this->endpoint = "/ws/listings/search?market=calrets&" . $searchParams;
            curl_setopt($cURLConnection, CURLOPT_URL, $url . $this->endpoint.'&pageNumber='.$id);
            // curl_setopt($cURLConnection, CURLOPT_HTTPHEADER, ['Authorization: s9-c18d37e9-b2d2-4bab-98f8-0799a20cd365']);
            curl_setopt($cURLConnection, CURLOPT_RETURNTRANSFER, true);


            $listings = curl_exec($cURLConnection);
            curl_close($cURLConnection);


            $jsonArrayResponse = json_decode($listings, true);
            // dd($jsonArrayResponse);

            //check if error
            if(!$jsonArrayResponse['success']) {
                $token = $this->generateNewToken();
                $this->token = $token;
                // print_r($token);
            }
        }

        $userid = session('userid');
        $listdata = DB::table('saved_listings')->where('user_id',$userid)->pluck('listing_no');
        $savelists = $listdata->all();

        if($jsonArrayResponse['result']['paging']['count']){
            $totalpage = $jsonArrayResponse['result']['paging']['count'];
        }
        // echo $url . $endpoint;
        return view('fsbw-layout.search-results', ['listings' => $jsonArrayResponse['result']['listings'],'id'=>$id,'totalpage'=>$totalpage,'savelists'=>$savelists]);
        // dd($jsonArrayResponse);
        // print_r($totalpage);
         // $list_arr = $jsonArrayResponse['result']['listings'];
         
        // $newarraynama = rtrim($arraynama, ", ");
        // echo "<pre>";
        // print_r($list_arr);
        // print_r($jsonArrayResponse->all());
    }

    public function nextpage(Request $request){
    	if($request->nextp){
    		$id = $request->nextp;
    		$newid = ($id+1);
    	}
    	else if($request->prevp){
    		if($request->prevp == 1){
    			return redirect()->back();
    		}
    		else{
    			$id = $request->prevp;
    		$newid = ($id-1);	
    		}
    	}
    	// // return $newid;
    	// $this->endpoint = "new one";
    	// return $this->endpoint;
    	// return "new page";
    	$city =  session('city_select');
    	$propertyType =  session('propertyType');
    	$sortBy =  session('sortBy');
    	$beds =  session('beds');
    	$baths =  session('baths');
    	$minPrice =  session('minPrice');
    	$maxPrice =  session('maxPrice');
    	// return $city." ".$propertyType." ".$sortBy." ".$beds." ".$baths." ".$minPrice." ".$maxPrice;

    	if(empty($this->token)) {
            $token = $this->generateNewToken();
            $this->token = $token;
        }

        else {
            //check if token has expired
            $cURLConnection = curl_init();

            curl_setopt($cURLConnection, CURLOPT_HTTPHEADER, array("HJI-Slipstream-Token: $this->token",
            ));

            $url = "https://slipstream-test.homejunction.com";
            // $url = "https://slipstream.homejunction.com/#/ws/areas/trends";
            //$endpoint = "/ws/listings/get?market=northstar&id=5155027&images=true&details=true";
            //prepare search parameters
            $searchParams = "images=true&details=true&";
            if(isset($city) && !empty($city) && $city != "Any") {
                $searchParams .= "address.city={$city}&";
            }
            if(isset($propertyType) && !empty($propertyType)) {
                $searchParams .= "listingType={$propertyType}&";
            }
            if(isset($beds) && !empty($beds) && $beds != "Any") {
                $searchParams .= "beds={$beds}&";
            }
            if(isset($baths) && !empty($baths) && $baths != "Any") {
                $searchParams .= "baths.total={$baths}&";
            }
            if(
                (isset($minPrice) && !empty($minPrice) && is_numeric($minPrice))
                &&
                (isset($maxPrice) && !empty($maxPrice) && is_numeric($maxPrice))
            ) {
                $searchParams .= "listprice={$minPrice}:{$maxPrice}&";
            }
            else if(isset($minPrice) && !empty($minPrice) && is_numeric($minPrice)) {
                $searchParams .= "listprice=>{$minPrice}&";
            }
            else if(isset($maxPrice) && !empty($maxPrice) && is_numeric($maxPrice)) {
                $searchParams .= "listprice=<{$minPrice}&";
            }

            if($searchParams == "images=true&details=true&") {
                $searchParams = "images=true&details=true&listprice=>0";
            }
            

            $this->endpoint = "/ws/listings/search?market=northstar&" . $searchParams;
            curl_setopt($cURLConnection, CURLOPT_URL, $url . $this->endpoint.'&pageNumber='.$newid);
            // curl_setopt($cURLConnection, CURLOPT_HTTPHEADER, ['Authorization: s9-c18d37e9-b2d2-4bab-98f8-0799a20cd365']);
            curl_setopt($cURLConnection, CURLOPT_RETURNTRANSFER, true);


            $listings = curl_exec($cURLConnection);
            curl_close($cURLConnection);

            $jsonArrayResponse = json_decode($listings, true);

            //check if error
            if(!$jsonArrayResponse['success']) {
                $token = $this->generateNewToken();
                $this->token = $token;
                print_r($token);
            }
        }

        $userid = session('userid');
        $listdata = DB::table('saved_listings')->where('user_id',$userid)->pluck('listing_no');
        $savelists = $listdata->all();

        $totalpage = $jsonArrayResponse['result']['paging']['count'];

        // echo $url . $endpoint;
        return view('fsbw-layout.search-results', ['listings' => $jsonArrayResponse['result']['listings'],'id'=>$newid,'totalpage'=>$totalpage,'savelists'=>$savelists]);
    	
    }




    public function photogal(Request $request){
    	$id = $request->photogal;
    	$ch = curl_init();
    	curl_setopt($ch, CURLOPT_URL, 'https://slipstream-test.homejunction.com/ws/listings/search?market=northstar&images=true&details=true&listprice=%3E0&id='.$id.'&pageNumber=3');
    	curl_setopt($ch, CURLOPT_HTTPHEADER, array("HJI-Slipstream-Token: $this->token",
            ));
    	curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    	$response = curl_exec($ch);
    	$decode = json_decode($response,TRUE);
    	// $newdata = $decode['result']['listings'][0]['images'];
        if(isset($decode['result']['listings'][0]['images'])){
    	$newdata = $decode['result']['listings'][0]['images'];
            return view('fsbw-layout.photo-gal', ['photo' => $newdata]);
        }else{
            return view('fsbw-layout.photo-gal');
        }
    	
		// foreach ($newdata as $key => $value) {
		// 	# code...
		// 	echo '<img src="'.$value.'" style="width=50px; height:50px;" >';
		// }
    }

    public function saveprop(Request $request){
            $userid = session('userid');
    		$id = $request->dataval;
            if($userid == ""){
                return "unable to save";
                // return redirect('/login');
            }
            else{
            $ch = curl_init();
            curl_setopt($ch, CURLOPT_URL, 'https://slipstream-test.homejunction.com/ws/listings/search?market=northstar&images=true&details=true&id='.$id);
            curl_setopt($ch, CURLOPT_HTTPHEADER, array("HJI-Slipstream-Token: $this->token",
            ));
            curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
            $response = curl_exec($ch);
            $decode = json_decode($response,TRUE);
            $newdata = $decode['result']['listings'][0]['address']['city'];

            $list = new Listing;
            $list->listing_no = $id;
            $list->address = $newdata;
            $list->user_id = $userid;
            $list->created_at = date('Y-m-d h:i:s');
            $is_saved = $list->save();
                if($is_saved){
                    return "data saved";
                }
            }

            // return $userid;
    		// return $getdata;
    }

    public function savesearch(){
          $userid = session('userid');
          if(!isset($userid)){
            return redirect('/login');
          }
          else{

          $listdata = Listing::where('user_id', $userid)->get();
          $list_id = "";
        foreach($listdata as $list){
            $list_id .= $list->listing_no.",";
        }
        $newlist = substr_replace($list_id, "", -1);
        $ch = curl_init();

        curl_setopt($ch, CURLOPT_URL, 'https://slipstream-test.homejunction.com/ws/listings/search?market=northstar&images=true&details=true&id='.$newlist);                    
        // curl_setopt($ch, CURLOPT_URL, 'https://slipstream-test.homejunction.com/ws/listings/search?market=northstar&images=true&details=true&id=');
            curl_setopt($ch, CURLOPT_HTTPHEADER, array("HJI-Slipstream-Token: $this->token",
            ));
            curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
            $response = curl_exec($ch);
             $decode = json_decode($response,TRUE);
            $list_arr = $decode['result']['listings'];
         
        // $newarraynama = rtrim($arraynama, ", ");
        // echo "<pre>";
        // print_r($list_arr);
        return view("fsbw-layout.save-search",['listings'=>$list_arr]);
          }

    }

    public function viewdetail(Request $request){
        session(['viewdetail'=>$request->viewdetail]);
        $reqid = session('viewdetail');
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, 'https://slipstream.homejunction.com/ws/listings/get?market=northstar&images=true&details=true&features=true&id='.$reqid);
        curl_setopt($ch, CURLOPT_HTTPHEADER, ['Authorization: s9-c18d37e9-b2d2-4bab-98f8-0799a20cd365']);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        $response = curl_exec($ch);
        $decode = json_decode($response, TRUE);
        $detail = $decode['result']['listings'][0];

        $userid = session('userid');
        $listdata = DB::table('saved_listings')->where('user_id',$userid)->pluck('listing_no');
        $savelists = $listdata->all();
        // echo "<pre>";
        // print_r($decode);
        // echo "</pre>";
        return view("fsbw-layout.view-detail",['detail'=>$detail,'savelists'=>$savelists]);
    }

    public function removeprop(Request $request){
        $id = session('userid');
        $listing = $request->dataval;
        // $value = 1;
        // return $userid." = ".$id;
        $value = DB::table('saved_listings')->where('listing_no',$listing)->where('user_id',$id)->delete();

      // DB::delete('delete from student where listing_no = ?, user_id = ?',[$listing]);
        if($value){
            return "value deleted";
        }
        else{
            return "unable to delete";
        }
        // return $value;
    }

    public function listpage(){
        if(!session('userid')){
            return redirect('/login');
        }
        else{
            $id = 1;
            $city =  session('city_select');
        $propertyType =  session('propertyType');
        $sortBy =  session('sortBy');
        $beds =  session('beds');
        $baths =  session('baths');
        $minPrice =  session('minPrice');
        $maxPrice =  session('maxPrice');
        // return $city." ".$propertyType." ".$sortBy." ".$beds." ".$baths." ".$minPrice." ".$maxPrice;

        if(empty($this->token)) {
            $token = $this->generateNewToken();
            $this->token = $token;
        }

        else {
            //check if token has expired
            $cURLConnection = curl_init();

            curl_setopt($cURLConnection, CURLOPT_HTTPHEADER, array("HJI-Slipstream-Token: $this->token",
            ));

            $url = "https://slipstream-test.homejunction.com";
            $searchParams = "images=true&details=true&";
            if(isset($city) && !empty($city) && $city != "Any") {
                $searchParams .= "address.city={$city}&";
            }
            if(isset($propertyType) && !empty($propertyType)) {
                $searchParams .= "listingType={$propertyType}&";
            }
            if(isset($beds) && !empty($beds) && $beds != "Any") {
                $searchParams .= "beds={$beds}&";
            }
            if(isset($baths) && !empty($baths) && $baths != "Any") {
                $searchParams .= "baths.total={$baths}&";
            }
            if(
                (isset($minPrice) && !empty($minPrice) && is_numeric($minPrice))
                &&
                (isset($maxPrice) && !empty($maxPrice) && is_numeric($maxPrice))
            ) {
                $searchParams .= "listprice={$minPrice}:{$maxPrice}&";
            }
            else if(isset($minPrice) && !empty($minPrice) && is_numeric($minPrice)) {
                $searchParams .= "listprice=>{$minPrice}&";
            }
            else if(isset($maxPrice) && !empty($maxPrice) && is_numeric($maxPrice)) {
                $searchParams .= "listprice=<{$minPrice}&";
            }

            if($searchParams == "images=true&details=true&") {
                $searchParams = "images=true&details=true&listprice=>0";
            }
            

            $this->endpoint = "/ws/listings/search?market=northstar&" . $searchParams;
            curl_setopt($cURLConnection, CURLOPT_URL, $url . $this->endpoint.'&pageNumber='.$id);
            curl_setopt($cURLConnection, CURLOPT_RETURNTRANSFER, true);
            $listings = curl_exec($cURLConnection);
            curl_close($cURLConnection);

            $jsonArrayResponse = json_decode($listings, true);

            //check if error
            if(!$jsonArrayResponse['success']) {
                $token = $this->generateNewToken();
                $this->token = $token;
                print_r($token);
            }
        }

        $userid = session('userid');
        $listdata = DB::table('saved_listings')->where('user_id',$userid)->pluck('listing_no');
        $savelists = $listdata->all();

        $totalpage = $jsonArrayResponse['result']['paging']['count'];

     

            return view('fsbw-layout.search-results', ['listings' => $jsonArrayResponse['result']['listings'],'id'=>$id,'totalpage'=>$totalpage,'savelists'=>$savelists]);
        }
    }


    public function api(){

    	$id = 'NST5489908';
    	$ch = curl_init();
		// curl_setopt($ch, CURLOPT_URL, 'https://slipstream.homejunction.com/ws/listings/get?listingDate=<=2/22/2021');
        // curl_setopt($ch, CURLOPT_URL, 'https://slipstream.homejunction.com/ws/areas/search?circle=45.0846,-94.3135,25&sortField=distance&sortOrder=asc&admission=public');
        // curl_setopt($ch, CURLOPT_URL, "https://slipstream.homejunction.com/ws/sales/get?market=northstar&id=NST5489908");
        // …/ws/sales/get?market=SDMLS&id=100000209
        // ws/sales/get?market=SDMLS&id=100000209
		// curl_setopt($ch, CURLOPT_URL, 'https://slipstream.homejunction.com/ws/markets/get?id=NST4836836');
		// curl_setopt($ch, CURLOPT_URL, 'https://slipstream.homejunction.com/ws/listings/inactive/get?market=SDMLS&id=100000209');
		// curl_setopt($ch, CURLOPT_URL, 'https://slipstream-test.homejunction.com/ws/listings/search?market=northstar&images=true&details=true&listprice=%3E0&id=NST5631967&pageNumber=3');
		// curl_setopt($ch, CURLOPT_URL, 'https://slipstream-test.homejunction.com/ws/listings/search?market=northstar&images=true&details=true&listprice=%3E0&id='.$id.'&pageNumber=3');
        //Area Api
        // curl_setopt($ch, CURLOPT_URL, 'https://slipstream-test.homejunction.com/ws/areas/trends/stats?id=c1e9dab28f3824944fcb3c31c286b218&interval=month&market=northstar');
        // curl_setopt($ch, CURLOPT_URL, 'https://slipstream-test.homejunction.com/ws/areas/trends/stats?id=221ec825e89d13d7969b8dd4b5f57d27&interval=month&market=northstar');
        
		// curl_setopt($ch, CURLOPT_URL, 'https://slipstream-test.homejunction.com/ws/listings/search?market=northstar&images=true&details=true&listprice=%3E0/paging?number=2');
		curl_setopt($ch, CURLOPT_URL, 'https://slipstream.homejunction.com/ws/listings/get?market=northstar&id=180048970');

		curl_setopt($ch, CURLOPT_HTTPHEADER, ['Authorization: s9-c18d37e9-b2d2-4bab-98f8-0799a20cd365']);
		// curl_setopt($ch, CURLOPT_HTTPHEADER, array("HJI-Slipstream-Token: $this->token",
            // ));
		curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
		$response = curl_exec($ch);
		$decode = json_decode($response,TRUE);
		// $newdata = $decode['result']['listings'][0]['images'];
		// foreach ($newdata as $key => $value) {
		// 	# code...
		// 	echo $value;
		// }
		echo "<pre>";
		// print_r($newdata);
		print_r($decode);
		echo "</pre>";
		die();
    }
}
