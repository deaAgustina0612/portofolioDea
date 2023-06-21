<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Portofolio;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;

class PortofolioController extends Controller
{
    //
    function show(){
        $data['portofolio'] = Portofolio::all();
        return view('tabel',$data);
    }
    
    function view(){
        return view('portofolio');
    }

    function add(){
        $data=[
            'action'=>url('tabel/create'),
            'tombol'=>'simpan',
            'portofolio'=>(object)[
                'id'=>'',
                'judul'=>'',
                'kategori'=>'',
                'foto'=>'',
                'deskripsi'=>'',
            ],
        ];
        return view('formporto',$data);
    }

    function create(Request $req){
        // $this->validate($req ,[
        //     'id' => 'required|numeric',
        //     'judul' => 'required|string|max:50',
        //     'foto' => 'mimes:jpg,png'
        // ]);

        Portofolio::create([
            'id' => $req->id,
            'judul' => $req->judul,
            'kategori' => $req->kategori,
            'foto' => $req->file('foto')->store('foto'),
            'deskripsi'=> $req->deskripsi,
        ]);
        return redirect('tabel');
    }
    function hapus($item){
        $portofolio = Portofolio::where('id', $item)->first();
        $portofolio->delete();
        Storage::delete($portofolio->foto);
        return redirect('tabel');
    }

    function edit($item){
        $data['portofolio']=Portofolio::find($item);
        $data['action']= url('tabel/update').'/'.$data['portofolio']->id;
        // $data['tombol']='update';
        return view('formporto',$data);
    }

    function update(Request $req){
        // $this->validate($req ,[
        //     'id' => 'required|numeric',
        //     'judul' => 'required|string|max:50',
        //     'foto' => 'mimes:jpg,png'
        // ]);

        if($req->file('foto')){
            $portofolio = Portofolio::where('id',$req->id)->first();
            Storage::delete($portofolio->foto);

            $file = $req->file('foto')->store('foto');
        }else{
            $file = DB::raw('foto');
        }
        Portofolio::where('id',$req->id)->update([
            'id'=>$req->id,
            'judul'=>$req->judul,
            'kategori'=>$req->kategori,
            'foto'=>$file,
            'deskripsi'=>$req->deskripsi,
        ]);
        return redirect('tabel');
    }
}


