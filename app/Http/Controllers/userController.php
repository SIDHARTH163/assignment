<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

use App\Models\Blog;

class userController extends Controller
{
    public function submit(Request $request)
    {
        

        
        $request->validate([
            'head' => 'required',
            'desc' => 'required',
            
        ]);

        
            $product = new Blog([
                "head" => $request->get('head'),
                "desc" => $request->get('desc'),
               
            ]);
            $product->save(); // Finally, save the record.
        

        return redirect('/')->with('message', 'product added!');
    }

    function view()
    {
        $data=  DB::select('select * from blogs ORDER BY `id` DESC  ');

       return view('data',['products'=>$data]);
    }
    public function showData($id){
        $data=Blog::find($id);
        return view('edit',['data'=>$data]);
    }
    public function destroy($id){
        DB::delete('delete from blogs Where id=?',[$id]);
        return redirect('/')->with('message', 'product delted!');
    }
    
}
