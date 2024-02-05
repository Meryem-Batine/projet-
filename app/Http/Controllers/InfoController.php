<?php

namespace App\Http\Controllers;

use App\Models\Info;
use Illuminate\Http\Request;

class InfoController extends Controller
{
    //
    public function index()
    {
        $infos = Info::all();
        return view("info.info", compact("infos"));
    }


    public function store(Request $request)
    {
        // request()->validate([
        //     "demandeur"=>["required"] ,
        //     "contact"=>["required"] ,
        //     "dob"=>["required"],
        //     "heure"=>["required"] ,
        //     "nature"=>["required"] ,
        //     "desc"=>["required"],
        //     "moyen"=>["required"] ,
        //     "cout"=>["required"] ,
        //     "techn"=>["required"],
        //     "trv"=>["required"] ,
        //     "rpn"=>["required"] ,
        //     "date"=>["required"],
        //     "debut"=>["required"],
        //     "fin"=>["required"],
        // ]);
        $data = [
            "demandeur" => $request->demandeur,
            "contact" => $request->contact,
            "dob" => $request->dob,
            "heure" => $request->heure,
            "nature" => $request->nature,
            "desc" => $request->desc,
            "moyen" => $request->moyen,
            "cout" => $request->cout,
            "techn" => $request->techn,
            "trv" => $request->trv,
            "rpn" => $request->rpn,
            "date" => $request->date,
            "debut" => $request->debut,
            "fin" => $request->fin,
        ];
        Info::create($data);
        return redirect()->back();
    }
}
