<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Physical_store_channel;
use App\Social_media_channel;
use App\Ecommerce_channel;
use Validator;
use App\Http\Requests\PhysicalRequest;
use Carbon\Carbon;

use PDF;
use App\Exports\ProductDownload;
use App\Imports\ProductUpload;
use Maatwebsite\Excel\Facades\Excel;

class Physical_Store_Controller extends Controller
{
    public function index( Request $req){

        $name = "Nafi";
        $id = "123";

        //return view('home.index', ['name'=> 'xyz', 'id'=>12]);
        // return view('home.index')
        //         ->with('name', 'Nafi')
        //         ->with('id', '12');

        // return view('home.index')
        //         ->withName($name)
        //         ->withId($id);

        return view('system.physicalCreate', compact('id', 'name'));

    }


/* PDF DOWNLOAD */

    public function downloadPDF()
    {
        $data = Physical_store_channel::all();
        view()->share('sales', $data);
        $pdf = PDF::loadView('system.pdf', $data);
        return $pdf->download('Product_Details.pdf');

    }

/*  */

/* EXCELL IMPORT(UPLOAD)-EXPORT(DOWNLOAD) */

    public function uploadExcelview()
    {
    return view('system.uploadExcelview');
    }

    public function upload(Request $req) 
    {
        Excel::import(new ProductUpload, request()->file('file'));
        $req->session()->flash('msg', 'Excel uploaded into database successfully...check it out!');
        return back();
    }

    public function downloadExcel() 
    {
        return Excel::download(new ProductDownload, 'products.xlsx');
    }


/*  */

    public function physicalCreate(){

        return view('system.physicalCreate');

    }

    public function physicalStore(PhysicalRequest $req){
        
    $sales = new Physical_store_channel();

    $sales->customer_name = $req->customer_name;
    $sales->customer_address = $req->customer_address;
    $sales->phone = $req->phone;
    $sales->product_id = $req->product_id;
    $sales->product_name = $req->product_name;
    $sales->unit_price = $req->unit_price;
    $sales->quantity = $req->quantity;
    $sales->total_price = $req->total_price;
    $sales->date_sold = $req->date_sold;
    $sales->payment_type = $req->payment_type;
    $sales->status = $req->status;
    $sales->save();

    $req->session()->flash('msg', 'Stored successfully...check it out!');
    return redirect()->route('system.physicalCreate');
    }

    public function salesLogList(){

        $sevensoldlist = Physical_store_channel::where('date_sold', '>', Carbon::now()->subDays(7))
        ->orderBy('date_sold', 'DESC')
        ->get();

        $thirtysoldlist = Physical_store_channel::where('date_sold', '>', Carbon::now()->subDays(30))
        ->orderBy('date_sold', 'DESC')
        ->get();

        $sevenCount = count($sevensoldlist);
        $thirtyCount = count($thirtysoldlist);

        $Avg = Physical_store_channel::select('unit_price')->where('date_sold', '>', Carbon::now()->subDays(7))->average('unit_price');
        $Max = Physical_store_channel::all()->max('product_name');

        $Avg1 = Physical_store_channel::select('unit_price')->where('date_sold', '>', Carbon::now()->subDays(30))->average('unit_price');
        $Max1 = Physical_store_channel::all()->max('product_name');

        return view('system.salesLog')->with('list', $sevensoldlist)->with('sold', $thirtysoldlist)->with('seven',$sevenCount)->with('thirty',$thirtyCount)->with('avg',$Avg)->with('max',$Max)->with('avg1',$Avg1)->with('max1',$Max1);

        /* $userlist = Customer::all();
        //$userlist = $this->getUserlist();
        return view('home.list')->with('list', $userlist); */
    }

    public function socialMedialist(){
        
        $sevensoldlist = Social_media_channel::where('date_sold', '>', Carbon::now()->subDays(7))
        ->orderBy('date_sold', 'DESC')
        ->get();

        $thirtysoldlist = Social_media_channel::where('date_sold', '>', Carbon::now()->subDays(30))
        ->orderBy('date_sold', 'DESC')
        ->get();

        $sevenCount = count($sevensoldlist);
        $thirtyCount = count($thirtysoldlist);

        $Avg = Social_media_channel::select('unit_price')->where('date_sold', '>', Carbon::now()->subDays(7))->average('unit_price');
        $Max = Social_media_channel::all()->max('product_name');

        $Avg1 = Social_media_channel::select('unit_price')->where('date_sold', '>', Carbon::now()->subDays(30))->average('unit_price');
        $Max1 = Social_media_channel::all()->max('product_name');

        return view('system.socialMedia')->with('list', $sevensoldlist)->with('sold', $thirtysoldlist)->with('seven',$sevenCount)->with('thirty',$thirtyCount)->with('avg',$Avg)->with('max',$Max)->with('avg1',$Avg1)->with('max1',$Max1);
    }

    public function ecommercelist(){
        
        $sevensoldlist = Ecommerce_channel::where('date_sold', '>', Carbon::now()->subDays(7))
        ->orderBy('date_sold', 'DESC')
        ->get();

        $thirtysoldlist = Ecommerce_channel::where('date_sold', '>', Carbon::now()->subDays(30))
        ->orderBy('date_sold', 'DESC')
        ->get();

        $sevenCount = count($sevensoldlist);
        $thirtyCount = count($thirtysoldlist);

        $Avg = Ecommerce_channel::select('unit_price')->where('date_sold', '>', Carbon::now()->subDays(7))->average('unit_price');
        $Max = Ecommerce_channel::all()->max('product_name');

        $Avg1 = Ecommerce_channel::select('unit_price')->where('date_sold', '>', Carbon::now()->subDays(30))->average('unit_price');
        $Max1 = Ecommerce_channel::all()->max('product_name');

        return view('system.ecommerce')->with('list', $sevensoldlist)->with('sold', $thirtysoldlist)->with('seven',$sevenCount)->with('thirty',$thirtyCount)->with('avg',$Avg)->with('max',$Max)->with('avg1',$Avg1)->with('max1',$Max1);
    }

    /*public function getUserlist (){

        return [
                ['id'=>1, 'name'=>'alamin', 'email'=> 'alamin@aiub.edu', 'password'=>'123'],
                ['id'=>2, 'name'=>'abc', 'email'=> 'abc@aiub.edu', 'password'=>'456'],
                ['id'=>3, 'name'=>'xyz', 'email'=> 'xyz@aiub.edu', 'password'=>'789']
            ];
    }*/

}
