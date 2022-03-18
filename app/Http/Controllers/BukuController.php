<?php


namespace App\Http\Controllers;


use Illuminate\Http\Request;


use DB;


use App\models\Buku;


class BukuController extends Controller


{


/**


     * Display a listing of the resource.


     *


     * @return \Illuminate\Http\Response


     */


public function index()


{


$buku = DB::table('buku')


->select('buku.id','buku.judul', 'buku.author', 


'buku.sinopsis', 'buku.penerbit', 'buku.cover_img')


->get();


// return $buku;


return view('buku.index', compact('buku'));


}


/**


     * Show the form for creating a new resource.


     *


     * @return \Illuminate\Http\Response


     */


public function create()


{



return view('buku.create');


}


/**


     * Store a newly created resource in storage.


     *


     * @param  \Illuminate\Http\Request  $request


     * @return \Illuminate\Http\Response


     */


public function store(Request $request)


{


$this->validate($request, [


'judul' => 'required',


'sinopsis'  => 'required',


]);




$file = $request->file('cover_img');


$buku = new Buku;


$buku->judul = $request->judul;


$buku->author  = $request->author;


$buku->sinopsis   = $request->sinopsis;


$buku->penerbit   = $request->penerbit;


$buku->cover_img  = $file->getClientOriginalName();




$tujuan_upload = 'image';


        $file->move($tujuan_upload,$file->getClientOriginalName());


$buku->save();


return redirect('buku')->with('msg','Data Berhasil di Simpan');


}


/**


     * Display the specified resource.


     *


     * @param  int  $id


     * @return \Illuminate\Http\Response


     */


public function show($id)


{


$buku = Buku::where('id', $id)->first();


return $buku;


}


/**


     * Show the form for editing the specified resource.


     *


     * @param  int  $id


     * @return \Illuminate\Http\Response


     */


public function edit($id)


{


//


}


/**


     * Update the specified resource in storage.


     *


     * @param  \Illuminate\Http\Request  $request


     * @param  int  $id


     * @return \Illuminate\Http\Response


     */


public function update(Request $request, $id)


{


//


}


/**


     * Remove the specified resource from storage.


     *


     * @param  int  $id


     * @return \Illuminate\Http\Response


     */


public function destroy($id)


{


    $buku = Buku::find($id);
    $buku->delete();
    return back()->with('success',' Penghapusan berhasil.');

}


}
