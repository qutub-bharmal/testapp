<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use Illuminate\Http\Request;
use Config;
use Redirect;
use Response;
use DateTime;
use App;
use Auth;
use Log;
use View;
use Validator;
use File;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest');
    }

    /**
     * Show the application dashboard.
     *
     * @return Response
     */
    public function temp()
    {

        $fileName = public_path().'ProductsDetails.json';
        if(!file_exists($fileName)){
            $fp = fopen($fileName,'w');
        }
        $fp = fopen($fileName,'r');

        $count=0;
        $result = file_get_contents($fileName);
        $result = (json_decode($result));

        if(sizeof($result)> 0){
            foreach ($result as $value) {
                $count += $value->totalValue;
            }
            $result = array_reverse($result);
        }


        return View::make('testForm', compact(['result', 'count'])) ;
    }

    public function postForm(Request $request)
    {
        // get Input
        $input = $request->all();

        $productName = $input['product_name'];
        $quantity = $input['quantity'];
        $price = $input['price'];

        $totalValue = $quantity * $price;
        $date = date("Y/m/d h:i:s");

        // build json
        $contents = ([
                        'productName' => $productName,
                        'quantity' => $quantity,
                        'price' => $price,
                        'totalValue' => $totalValue,
                        'date' => $date,
                    ]);

        // Create json file
        $fileName = public_path().'ProductsDetails.json';
        $fp = fopen($fileName,'a');

        $oldJson = file_get_contents($fileName);
        $oldData = json_decode($oldJson);
        $oldData[] = $contents;

        file_put_contents($fileName, json_encode($oldData ));

        $result = file_get_contents($fileName);

        $finalData = array_reverse(json_decode($result));

        fclose($fp);

        return Redirect::to('/test')->with('result',$finalData);


    }
}
