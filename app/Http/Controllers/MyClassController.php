<?php

namespace App\Http\Controllers;

use App\MyClass\Poli;
use App\MyClass\PoliAnak;
use App\MyClass\PoliGigi;
use App\MyClass\RumahSakit;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;


class MyClassController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $Rumahskt = [
            ['nama' => 'RS KESEHATAN 1', 'address' => 'JL. KALIMALANG NO.56', 'telp'=>'02125678'],
            ['nama' => 'RS BUNDAR KES 1', 'address' => 'JL. UTARA NO.02', 'telp'=>'081123456'],
            ['nama' => 'RS JUANG 14', 'address' => 'JL. TERATAI NO.566', 'telp' =>'085276485']
        ];

        $Poli = [
            ['lantai' => '2'],
            ['lantai' => '3'],
            ['lantai' => '1']
        ];

        $PoliAnak = [
            ['ruanga' => 'RAO12'],
            ['ruanga' => 'RA003'],
            ['ruanga' => 'RA001']
        ];

        $PoliGigi = [
            ['ruangg' => 'RG103'],
            ['ruangg' => 'RG104'],
            ['ruangg' => 'RG145']
        ];

        $rowRs = [];
        foreach($Rumahskt as $rs){
            $rumahs = new RumahSakit();
            $rumahs->setNama($rs['nama']);
            $rumahs->setAddress($rs['address']);
            $rumahs->setTelp($rs['telp']);
            Log::info($rumahs->greeting());
            $rowRs[]=[
                'greeting'=>$rumahs->greeting()
            ];
        }
        
        $rowPoli = [];
        foreach($Poli as $pol){
            $poli = new Poli();
            $poli->setLantai($pol['lantai']);
            Log::info($poli->greeting());
            $rowPoli[]=[
                'greeting'=>$poli->greeting()
            ];
        }

        $rowPoliA = [];
        foreach($PoliAnak as $polA){
            $poliA = new PoliAnak();
            $poliA->setKeteranganAnak($polA['ruanga']);
            Log::info($poliA->greeting());
            $rowPoliA[]=[
                'greeting'=>$poliA->greeting()
            ];
        }

        $rowPoliG = [];
        foreach($PoliGigi as $polG){
            $poliG = new PoliGigi();
            $poliG->setKeteranganGigi($polG['ruangg']);
            Log::info($poliG->greeting());
            $rowPoliG[]=[
                'greeting'=>$poliG->greeting()
            ];
        }

        return response()->json([
            'Rumah_Sakit'=>$rowRs,
            'Poli'=>$rowPoli,
            'Poli_Anak'=>$rowPoliA,
            'Poli_Gigi'=>$rowPoliG
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
