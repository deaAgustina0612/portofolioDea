<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Profil;
use App\Models\Portofolio;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;

class ProfilController extends Controller
{
    //
    function show(){
        $data['profil'] = Profil::all();
        $data['portofolio'] = Portofolio::all();
        return view('portofolio',$data);
    }

    function view(){
        $data['profil'] = Profil::first();
        return view('profil', $data);
    }

    function edit($id){
        $data['profil']=Profil::find($id);
        $data['action']= url('profil/update').'/'.$data['profil']->id;
        // $data['tombol']='update';
        return view('profil',$data);
    }

    function update(Request $req){
        // $this->validate($req ,[
        //     'id' => 'required|numeric',
        //     'nama_lengkap' => 'required|string',
        //     'foto' => 'mimes:jpg,png'
        // ]);

        if($req->file('foto')){
            $profil = Profil::where('id',$req->id)->first();
            Storage::delete($profil->foto);

            $file = $req->file('foto')->store('photo');
        }else{
            $file = DB::raw('foto');
        }
        Profil::where('id',$req->id)->update([
            'id'=>$req->id,
            'nama_lengkap'=>$req->nama_lengkap,
            'tempat_lahir'=>$req->tempat_lahir,
            'tanggal_lahir'=>$req->tanggal_lahir,
            'jenis_kelamin'=>$req->jenis_kelamin,
            'alamat'=>$req->alamat,
            'about'=>$req->about,
            'foto'=>$file
        ]);
        return redirect('profil');      
    }
     
    // function create(Request $req){
    //     // $this->validate($req ,[
    //     //     'id' => 'required|numeric',
    //     //     'nama_lengkap' => 'required|string',
    //     //     'foto' => 'mimes:jpg,png'
    //     // ]);

    //     Profil::create([
    //         'id'=>$req->id,
    //         'nama_lengkap' => $req->nama_lengkap,
    //         'tempat_lahir' => $req->tempat_lahir,
    //         'tanggal_lahir' => $req->tanggal_lahir,
    //         'jenis_kelamin' => $req->jenis_kelamin,
    //         'alamat' => $req->alamat,
    //         'about' => $req->about,
    //         'foto' => $req->file('foto')->store('photo')
    //     ]);
    //     return redirect('profil');
    // }



    
    
}
