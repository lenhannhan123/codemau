<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\BookModel;
use Illuminate\Support\Facades\DB;

class BookController extends Controller
{
    public function Viewbook()
    {
        $ds = BookModel::all();
        return view('book.admin.index',compact('ds'));
       
    }


    public function Delete($id)
    {
       DB::table('tbbook')->where('id',$id)->delete();
       return redirect()->route('viewbook');
    }



    public function create()
    {
        return view('book.admin.create',['mess'=>'']);
    }

    public function createbook(Request $request)
    {

       $idimage= DB::table('tbbook')->max('id');
       $idimage+=1;
        $bookname=$request->input(key:'bookname');
        $Author=$request->input(key:'Author');
        $Description=$request->input(key:'Description');

        if($request->hasFile('filename'))
            {
                $file=$request->file('filename');
                $extension = $file->getClientOriginalExtension();
                if($extension != 'jpg' && $extension != 'png' && $extension !='jpeg'&&$extension != 'JPG' && $extension != 'PNG' && $extension !='JPEG' )
                      {
                      return view('book.admin.create',['mess'=>'Loi vui long up load file anh']);
                     }
                 $imageName = "{$idimage}.{$extension}";
                 $file->move("images",$imageName);
            }
            else
            {
                 $imageName = null;
            }
            DB::table('tbbook')->insert([
                'bookname'=>$bookname,
                'author'=> $Author,
                'description'=>$Description,
                'image'=>$imageName
                ]);
                return $this->Viewbook(); 
    }

    public function updateview($id)
    {
       $ds= DB::table('tbbook')->where('id',$id)->get()->first();


       return view('book.admin.update',['mess'=>'','ds'=>$ds]);

    }


    public function update(Request $request)
    {
        
         $id=$request->input(key:'bookid');
         $bookname=$request->input(key:'bookname');
         $Author=$request->input(key:'Author');
         $Description=$request->input(key:'Description');
         
         $ds1= DB::table('tbbook')->where('id',$id)->get()->first();


         if($request->hasFile('filename'))
         {
             $file=$request->file('filename');
             $extension = $file->getClientOriginalExtension();
             if($extension != 'jpg' && $extension != 'png' && $extension !='jpeg' && $extension !='jpg')
                   {
                   return view('book.admin.update',['mess'=>'Loi vui long up load file anh']);
                  }
              $imageName = "{$id}.{$extension}";
              $file->move("images",$imageName);
         }
         else
         {
            
              $imageName = $ds1->image;
         }

         DB::table('tbbook')->where('id',$id)->update(['bookname'=>$bookname,'author'=>$Author,'description'=>$Description,'image'=>$imageName]);

         return redirect()->route('viewbook');

    }


    public function userindex(){
        $ds = BookModel::all();
        return view('book.user.index',compact('ds'));
    }

}
