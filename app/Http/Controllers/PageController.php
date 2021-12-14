<?php

namespace App\Http\Controllers;

use App\Models\City;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PageController extends Controller
{
    public function home()
    {
        $city = City::all()->take(5);

        return view('home',[
            'title' => 'Comfy',
            'city' => $city,
        ]);
    }

    public function search(Request $request)
    {
        if($request->ajax()){
            
            $keyword = $request->lokasi;
            if(empty($keyword)){
                $data = City::all()->take(5);

                $output = '';
                if(count($data) > 0){
                    $output ='
                            <div class="w-full h-40 overflow-auto bg-white shadow-md border rounded-md relative -mt-24" id="location">
                            ';
                foreach($data as $item){
                    $output .= '
                        <div class="flex h-auto w-full py-2 items-center pl-6 border cursor-pointer hover:bg-blue-50">
                            <span>'.$item->city.',</span>
                            <span>&nbsp;'.$item->country.'</span>
                        </div>
                    ';
                }

                $output .= '</div>';
                }

                return $output;
            }else{
                $data = City::where('city', 'like', '%'.$request->lokasi.'%')
                ->orwhere('country', 'like', '%'.$request->lokasi.'%')
                ->get();

                $output = '';
                if(count($data) > 0){
                    $output ='
                    <div class="w-full h-40 overflow-auto bg-white shadow-md border rounded-md relative -mt-24" id="location">
                    ';
                    foreach($data as $item){
                        $output .= '
                            <div class="flex h-auto w-full py-2 items-center pl-6 border cursor-pointer hover:bg-blue-50" id="place">
                                <span id="kota">'.$item->city.',</span>
                                <span>&nbsp;</span>
                                <span id="negara">'.$item->country.'</span>
                            </div>
                            <script>
                            var kota = document.querySelector("#kota").innerHTML
                            var negara = document.querySelector("#negara").innerHTML
                            document.querySelector("#place").addEventListener("click", function(){
                                // console.log(kota+negara)
                                document.querySelector("#lokasi").value = kota+" "+negara
                            });
                            </script>
                        ';
                    }

                    $output .= '</div>';
                } else{
                    $output .= 'No Result';
                }

                return $output;
            }
        }
    }
}
