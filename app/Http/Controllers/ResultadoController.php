<?php

namespace App\Http\Controllers;

use App\Models\Resultado;
use App\Models\Apuesta;
use Illuminate\Http\Request;

class ResultadoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $resultados = Resultado::all();
        return view('resultados.index', compact('resultados'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('resultados.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $resultados = new Resultado();

        $resultados->resultado1 = $request->resultado1;
        $resultados->resultado2 = $request->resultado2;



        $resultados->save();



        return redirect()->route('resultados.index')

                        ->with('success','Product created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Resultado  $resultado
     * @return \Illuminate\Http\Response
     */
    public function show(Resultado $resultado)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Resultado  $resultado
     * @return \Illuminate\Http\Response
     */
    public function edit(Resultado $resultado)
    {
        return view('resultados.edit',compact('resultado'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Resultado  $resultado
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Resultado $resultado)
    {
        /*$apuestas = Apuesta::all();
        foreach(Apuesta::all() as $apuesta){
            $puntos = 0;
            $puntos2 = 0;
            $puntos3 = 0;
            $puntos4 = 0;
            $puntos5 = 0;
            $puntos6 = 0;
            $puntos7 = 0;
            $puntos8 = 0;

            $gana1 = 0;
            $gana2 = 0;
            $gana3 = 0;
            $gana4 = 0;
            $pierde = 0;
            $totalganador = 0;
            $totaliguales = 0;

            $gana= 5;
            $totalalta= 0;
            $totalalta2= 0;
            $totalalta3= 0;
            $totalalta4= 0;
            $totalalta5= 0;
            $totalalta6= 0;
            $totalalta7= 0;
            $totalalta8= 0;


            $sumaequipo = $apuesta->apuesta1 + $apuesta->apuesta2;
            $sumaresultado = $apuesta->resultados->resultado1 + $apuesta->resultados->resultado2;
            $sumaequipo2 = $apuesta->apuesta3 + $apuesta->apuesta4;
            $sumaresultado2 = $apuesta->resultados->resultado3 + $apuesta->resultados->resultado4;
            $sumaequipo3 = $apuesta->apuesta5 + $apuesta->apuesta6;
            $sumaresultado3 = $apuesta->resultados->resultado5 + $apuesta->resultados->resultado6;
            $sumaequipo4 = $apuesta->apuesta7 + $apuesta->apuesta8;
            $sumaresultado4 = $apuesta->resultados->resultado7 + $apuesta->resultados->resultado8;
///////////////////ganador apuesta

            //ganador primer juego
            if(isset($apuesta->resultados->resultado1)){
                if($apuesta->resultados->resultado1 > $apuesta->resultados->resultado2){

                    if($apuesta->apuesta1 > $apuesta->apuesta2){
                        $gana1 += 5;
                    }else{
                        $totalganador += 0;
                    }
                    }else if ($apuesta->resultados->resultado1 == $apuesta->resultados->resultado2){

                    if($apuesta->apuesta2 == $apuesta->apuesta1){
                        $gana1 += 5;
                    }else{
                        $totalganador += 0;
                    }
                    }else{

                    if($apuesta->apuesta2 > $apuesta->apuesta1){
                        $gana1 += 5;
                    }else{
                        $totalganador += 0;
                    }
                    }
            }

             //ganador segundo juego
             if(isset($apuesta->resultados->resultado3)){

                if($apuesta->resultados->resultado3 > $apuesta->resultados->resultado4){

                    if($apuesta->apuesta3 > $apuesta->apuesta4){
                        $gana2 += 5;
                    }else{
                        $totalganador += 0;
                    }
                    }else if ($apuesta->resultados->resultado3 == $apuesta->resultados->resultado4){

                    if($apuesta->apuesta4 == $apuesta->apuesta3){
                        $gana2 += 5;
                    }else{
                        $totalganador += 0;
                    }
                    }else{

                    if($apuesta->apuesta4 > $apuesta->apuesta3){
                        $gana2 += 5;
                    }else{
                        $totalganador += 0;
                    }
                    }
             }

             //ganador tercer juego
             if(isset($apuesta->resultados->resultado5)){

                if($apuesta->resultados->resultado5 > $apuesta->resultados->resultado6){

                    if($apuesta->apuesta5 > $apuesta->apuesta6){
                        $gana3 += 5;
                    }else{
                        $totalganador += 0;
                    }
                    }else if ($apuesta->resultados->resultado5 == $apuesta->resultados->resultado6){

                    if($apuesta->apuesta6 == $apuesta->apuesta5){
                        $gana3 += 5;
                    }else{
                        $totalganador += 0;
                    }
                    }else{

                    if($apuesta->apuesta6 > $apuesta->apuesta5){
                        $gana3 += 5;
                    }else{
                        $totalganador += 0;
                    }
                    }

             }

             //ganador tercer juego
             if(isset($apuesta->resultados->resultado7)){

                if($apuesta->resultados->resultado7 > $apuesta->resultados->resultado8){

                    if($apuesta->apuesta7 > $apuesta->apuesta8){
                        $gana4 += 5;
                    }else{
                        $totalganador += 0;
                    }
                    }else if ($apuesta->resultados->resultado7 == $apuesta->resultados->resultado8){

                    if($apuesta->apuesta8 == $apuesta->apuesta7){
                        $gana4 += 5;
                    }else{
                        $totalganador += 0;
                    }
                    }else{

                    if($apuesta->apuesta8 > $apuesta->apuesta7){
                        $gana4 += 5;
                    }else{
                        $totalganador += 0;
                    }
                    }
             }

            $totalganador = $gana1 + $gana2 + $gana3 + $gana4;

///////////////   resultados puntos equipos iguales

             if(isset($apuesta->resultados->resultado1)){
                    if ($apuesta->apuesta1 == $apuesta->resultados->resultado1){
                        $puntos += 5;

                        }else{
                            $totaliguales += 0;
                        }
                }else{

                }

                if(isset($apuesta->resultados->resultado2)){
                    if ($apuesta->apuesta2 == $apuesta->resultados->resultado2){
                        $puntos2 += 5;

                        }else{
                            $totaliguales += 0;
                        }
                }else{

                }

                if(isset($apuesta->resultados->resultado3)){
                    if ($apuesta->apuesta3 == $apuesta->resultados->resultado3){
                        $puntos3 += 5;

                        }else{
                            $totaliguales += 0;
                        }
                }else{

                }

                if(isset($apuesta->resultados->resultado4)){
                    if ($apuesta->apuesta4 == $apuesta->resultados->resultado4){
                        $puntos4 += 5;

                        }else{
                            $totaliguales += 0;
                        }
                }else{

                }

                if(isset($apuesta->resultados->resultado5)){
                    if ($apuesta->apuesta5 == $apuesta->resultados->resultado5){
                        $puntos5 += 5;

                        }else{
                            $totaliguales += 0;
                        }
                }else{

                }

                if(isset($apuesta->resultados->resultado6)){
                    if ($apuesta->apuesta6 == $apuesta->resultados->resultado6){
                        $puntos6 += 5;

                        }else{
                            $totaliguales += 0;
                        }
                }else{

                }

                if(isset($apuesta->resultados->resultado7)){
                    if ($apuesta->apuesta7 == $apuesta->resultados->resultado7){
                        $puntos7 += 5;

                        }else{
                            $totaliguales += 0;
                        }
                }else{

                }

                if(isset($apuesta->resultados->resultado8)){
                    if ($apuesta->apuesta8 == $apuesta->resultados->resultado8){
                        $puntos8 += 5;

                        }else{
                            $totaliguales += 0;
                        }
                }else{

                }


            $totalmarcador= $puntos + $puntos2 + $puntos3 + $puntos4 + $puntos5 + $puntos6 + $puntos7 + $puntos8;

////////////////  alta baja equipos
            if(isset($apuesta->resultados->resultado1)){
                if ($sumaequipo > 2) {
                    $resultado_calculo_sumaequipo = "alta";
                } else {
                    $resultado_calculo_sumaequipo = "baja";
                }
                // alta baja resultado
                if ($sumaresultado >2) {
                    $resultado_calculo_sumaresultado = "alta";
                } else {
                    $resultado_calculo_sumaresultado = "baja";
                }
                // comparamos para ver si es alta o baja
                if (($resultado_calculo_sumaresultado == "alta") and $resultado_calculo_sumaequipo == "alta") {
                    $totalalta = $gana;
                } else {
                }
                if (($resultado_calculo_sumaresultado == "baja") and $resultado_calculo_sumaequipo == "baja") {
                    $totalalta2 = $gana;
                } else {

                }

            }

            if(isset($apuesta->resultados->resultado3)){

                if ($sumaequipo2 > 2) {
                    $resultado_calculo_sumaequipo = "alta";
                } else {
                    $resultado_calculo_sumaequipo = "baja";
                }
                // alta baja resultado
                if ($sumaresultado2 >2) {
                    $resultado_calculo_sumaresultado = "alta";
                } else {
                    $resultado_calculo_sumaresultado = "baja";
                }
                // comparamos para ver si es alta o baja
                if (($resultado_calculo_sumaresultado == "alta") and $resultado_calculo_sumaequipo == "alta") {
                    $totalalta3 = $gana;
                } else {
                }
                if (($resultado_calculo_sumaresultado == "baja") and $resultado_calculo_sumaequipo == "baja") {
                    $totalalta4 = $gana;
                } else {

                }
            }


            if(isset($apuesta->resultados->resultado5)){
                if ($sumaequipo3 > 2) {
                    $resultado_calculo_sumaequipo = "alta";
                } else {
                    $resultado_calculo_sumaequipo = "baja";
                }
                // alta baja resultado
                if ($sumaresultado3 >2) {
                    $resultado_calculo_sumaresultado = "alta";
                } else {
                    $resultado_calculo_sumaresultado = "baja";
                }
                // comparamos para ver si es alta o baja
                if (($resultado_calculo_sumaresultado == "alta") and $resultado_calculo_sumaequipo == "alta") {
                    $totalalta5 = $gana;
                } else {
                }
                if (($resultado_calculo_sumaresultado == "baja") and $resultado_calculo_sumaequipo == "baja") {
                    $totalalta6 = $gana;
                } else {

                }
            }


            if(isset($apuesta->resultados->resultado7)){
                if ($sumaequipo4 > 2) {
                    $resultado_calculo_sumaequipo = "alta";
                } else {
                    $resultado_calculo_sumaequipo = "baja";
                }
                // alta baja resultado
                if ($sumaresultado4 >2) {
                    $resultado_calculo_sumaresultado = "alta";
                } else {
                    $resultado_calculo_sumaresultado = "baja";
                }
                // comparamos para ver si es alta o baja
                if (($resultado_calculo_sumaresultado == "alta") and $resultado_calculo_sumaequipo == "alta") {
                    $totalalta7 = $gana;
                } else {
                }
                if (($resultado_calculo_sumaresultado == "baja") and $resultado_calculo_sumaequipo == "baja") {
                    $totalalta8 = $gana;
                } else {

                }
            }


            $totalaltabaja = $totalalta + $totalalta2 + $totalalta3 + $totalalta4 +$totalalta5 + $totalalta6 + $totalalta7 + $totalalta8;


            $apuesta->total =  $totalganador  +  $totalmarcador +  $totalaltabaja ;
            $apuesta->save();

        }*/

        $resultado->update($request->all());



        return redirect()->route('resultados.index')

                        ->with('success','Product updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Resultado  $resultado
     * @return \Illuminate\Http\Response
     */
    public function destroy(Resultado $resultado)
    {
        //
    }
}
