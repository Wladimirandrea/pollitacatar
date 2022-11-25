<?php

namespace App\Http\Controllers;

use App\Models\Apuesta;
use Illuminate\Http\Request;

class ApuestaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        /* $apuestas = Apuesta::all(); */
        $apuestas = Apuesta::orderBy('total','DESC')->get();
        foreach(Apuesta::all() as $apuesta){
            $puntos = 0;
            $puntos2 = 0;
            $puntos3 = 0;
            $puntos4 = 0;
            $puntos5 = 0;
            $puntos6 = 0;
            $puntos7 = 0;
            $puntos8 = 0;

            $puntos9 = 0;
            $puntos10 = 0;
            $puntos11 = 0;
            $puntos12 = 0;
            $puntos13 = 0;
            $puntos14 = 0;
            $puntos15 = 0;
            $puntos16 = 0;

            $gana1 = 0;
            $gana2 = 0;
            $gana3 = 0;
            $gana4 = 0;
            $gana5 = 0;
            $gana6 = 0;
            $gana7 = 0;
            $gana8 = 0;
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
            $totalalta9= 0;
            $totalalta10= 0;
            $totalalta11= 0;
            $totalalta12= 0;
            $totalalta13= 0;
            $totalalta14= 0;
            $totalalta15= 0;
            $totalalta16= 0;


            $sumaequipo = $apuesta->apuesta1 + $apuesta->apuesta2;
            $sumaresultado = $apuesta->resultados->resultado1 + $apuesta->resultados->resultado2;
            $sumaequipo2 = $apuesta->apuesta3 + $apuesta->apuesta4;
            $sumaresultado2 = $apuesta->resultados->resultado3 + $apuesta->resultados->resultado4;
            $sumaequipo3 = $apuesta->apuesta5 + $apuesta->apuesta6;
            $sumaresultado3 = $apuesta->resultados->resultado5 + $apuesta->resultados->resultado6;
            $sumaequipo4 = $apuesta->apuesta7 + $apuesta->apuesta8;
            $sumaresultado4 = $apuesta->resultados->resultado7 + $apuesta->resultados->resultado8;

            $sumaequipo5 = $apuesta->apuesta9 + $apuesta->apuesta10;
            $sumaresultado5 = $apuesta->resultados->resultado9 + $apuesta->resultados->resultado10;
            $sumaequipo6 = $apuesta->apuesta11 + $apuesta->apuesta12;
            $sumaresultado6 = $apuesta->resultados->resultado11 + $apuesta->resultados->resultado12;
            $sumaequipo7 = $apuesta->apuesta13 + $apuesta->apuesta14;
            $sumaresultado7 = $apuesta->resultados->resultado13 + $apuesta->resultados->resultado14;
            $sumaequipo8 = $apuesta->apuesta15 + $apuesta->apuesta16;
            $sumaresultado8 = $apuesta->resultados->resultado15 + $apuesta->resultados->resultado16;
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

             //ganador cuarto juego
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


             //ganador quinto juego
            if(isset($apuesta->resultados->resultado9)){
                if($apuesta->resultados->resultado9 > $apuesta->resultados->resultado10){

                    if($apuesta->apuesta9 > $apuesta->apuesta10){
                        $gana5 += 5;
                    }else{
                        $totalganador += 0;
                    }
                    }else if ($apuesta->resultados->resultado9 == $apuesta->resultados->resultado10){

                    if($apuesta->apuesta10 == $apuesta->apuesta9){
                        $gana5 += 5;
                    }else{
                        $totalganador += 0;
                    }
                    }else{

                    if($apuesta->apuesta10 > $apuesta->apuesta9){
                        $gana5 += 5;
                    }else{
                        $totalganador += 0;
                    }
                    }
            }

             //ganador sexto juego
             if(isset($apuesta->resultados->resultado11)){

                if($apuesta->resultados->resultado11 > $apuesta->resultados->resultado12){

                    if($apuesta->apuesta11 > $apuesta->apuesta12){
                        $gana6 += 5;
                    }else{
                        $totalganador += 0;
                    }
                    }else if ($apuesta->resultados->resultado11 == $apuesta->resultados->resultado12){

                    if($apuesta->apuesta12 == $apuesta->apuesta11){
                        $gana6 += 5;
                    }else{
                        $totalganador += 0;
                    }
                    }else{

                    if($apuesta->apuesta12 > $apuesta->apuesta11){
                        $gana6 += 5;
                    }else{
                        $totalganador += 0;
                    }
                    }
             }

             //ganador septimo juego
             if(isset($apuesta->resultados->resultado13)){

                if($apuesta->resultados->resultado13 > $apuesta->resultados->resultado14){

                    if($apuesta->apuesta13 > $apuesta->apuesta14){
                        $gana7 += 5;
                    }else{
                        $totalganador += 0;
                    }
                    }else if ($apuesta->resultados->resultado13 == $apuesta->resultados->resultado14){

                    if($apuesta->apuesta14 == $apuesta->apuesta13){
                        $gana7 += 5;
                    }else{
                        $totalganador += 0;
                    }
                    }else{

                    if($apuesta->apuesta14 > $apuesta->apuesta13){
                        $gana7 += 5;
                    }else{
                        $totalganador += 0;
                    }
                    }

             }

             //ganador octavo juego
             if(isset($apuesta->resultados->resultado15)){

                if($apuesta->resultados->resultado15 > $apuesta->resultados->resultado16){

                    if($apuesta->apuesta15 > $apuesta->apuesta16){
                        $gana8 += 5;
                    }else{
                        $totalganador += 0;
                    }
                    }else if ($apuesta->resultados->resultado15 == $apuesta->resultados->resultado16){

                    if($apuesta->apuesta16 == $apuesta->apuesta15){
                        $gana8 += 5;
                    }else{
                        $totalganador += 0;
                    }
                    }else{

                    if($apuesta->apuesta16 > $apuesta->apuesta15){
                        $gana8 += 5;
                    }else{
                        $totalganador += 0;
                    }
                    }
             }


            $totalganador = $gana1 + $gana2 + $gana3 + $gana4 + $gana5 + $gana6 + $gana7 + $gana8;
            $apuesta->ptsg = $gana1;
            $apuesta->ptsg2 = $gana2;
            $apuesta->ptsg3 = $gana3;
            $apuesta->ptsg4 = $gana4;
            $apuesta->ptsg5 = $gana5;
            $apuesta->ptsg6 = $gana6;
            $apuesta->ptsg7 = $gana7;
            $apuesta->ptsg8 = $gana8;

///////////////   resultados puntos equipos iguales
                // equipo 1
                if(isset($apuesta->resultados->resultado1)){
                    if ($apuesta->apuesta1 == $apuesta->resultados->resultado1){
                        $puntos += 5;

                        }else{
                            $totaliguales += 0;
                        }
                }else{

                }
                // equipo 2
                if(isset($apuesta->resultados->resultado2)){
                    if ($apuesta->apuesta2 == $apuesta->resultados->resultado2){
                        $puntos2 += 5;

                        }else{
                            $totaliguales += 0;
                        }
                }else{

                }
                // equipo 3
                if(isset($apuesta->resultados->resultado3)){
                    if ($apuesta->apuesta3 == $apuesta->resultados->resultado3){
                        $puntos3 += 5;

                        }else{
                            $totaliguales += 0;
                        }
                }else{

                }
                // equipo 4

                if(isset($apuesta->resultados->resultado4)){
                    if ($apuesta->apuesta4 == $apuesta->resultados->resultado4){
                        $puntos4 += 5;

                        }else{
                            $totaliguales += 0;
                        }
                }else{

                }
                // equipo 5
                if(isset($apuesta->resultados->resultado5)){
                    if ($apuesta->apuesta5 == $apuesta->resultados->resultado5){
                        $puntos5 += 5;

                        }else{
                            $totaliguales += 0;
                        }
                }else{

                }
                // equipo 6
                if(isset($apuesta->resultados->resultado6)){
                    if ($apuesta->apuesta6 == $apuesta->resultados->resultado6){
                        $puntos6 += 5;

                        }else{
                            $totaliguales += 0;
                        }
                }else{

                }
                // equipo 7
                if(isset($apuesta->resultados->resultado7)){
                    if ($apuesta->apuesta7 == $apuesta->resultados->resultado7){
                        $puntos7 += 5;

                        }else{
                            $totaliguales += 0;
                        }
                }else{

                }
                // equipo 8
                if(isset($apuesta->resultados->resultado8)){
                    if ($apuesta->apuesta8 == $apuesta->resultados->resultado8){
                        $puntos8 += 5;

                        }else{
                            $totaliguales += 0;
                        }
                }else{

                }

                 // equipo 9
                 if(isset($apuesta->resultados->resultado9)){
                    if ($apuesta->apuesta9 == $apuesta->resultados->resultado9){
                        $puntos9 += 5;

                        }else{
                            $totaliguales += 0;
                        }
                }else{

                }
                // equipo 10
                if(isset($apuesta->resultados->resultado10)){
                    if ($apuesta->apuesta10 == $apuesta->resultados->resultado10){
                        $puntos10 += 5;

                        }else{
                            $totaliguales += 0;
                        }
                }else{

                }
                // equipo 11
                if(isset($apuesta->resultados->resultado11)){
                    if ($apuesta->apuesta11 == $apuesta->resultados->resultado11){
                        $puntos11 += 5;

                        }else{
                            $totaliguales += 0;
                        }
                }else{

                }
                // equipo 12

                if(isset($apuesta->resultados->resultado12)){
                    if ($apuesta->apuesta12 == $apuesta->resultados->resultado12){
                        $puntos12 += 5;

                        }else{
                            $totaliguales += 0;
                        }
                }else{

                }
                // equipo 13
                if(isset($apuesta->resultados->resultado13)){
                    if ($apuesta->apuesta13 == $apuesta->resultados->resultado13){
                        $puntos13 += 5;

                        }else{
                            $totaliguales += 0;
                        }
                }else{

                }
                // equipo 14
                if(isset($apuesta->resultados->resultado14)){
                    if ($apuesta->apuesta14 == $apuesta->resultados->resultado14){
                        $puntos14 += 5;

                        }else{
                            $totaliguales += 0;
                        }
                }else{

                }
                // equipo 15
                if(isset($apuesta->resultados->resultado15)){
                    if ($apuesta->apuesta15 == $apuesta->resultados->resultado15){
                        $puntos15 += 5;

                        }else{
                            $totaliguales += 0;
                        }
                }else{

                }
                // equipo 16
                if(isset($apuesta->resultados->resultado16)){
                    if ($apuesta->apuesta16 == $apuesta->resultados->resultado16){
                        $puntos16 += 5;

                        }else{
                            $totaliguales += 0;
                        }
                }else{

                }

            $apuesta->ptsi1 = $puntos;
            $apuesta->ptsi2 = $puntos2;
            $apuesta->ptsi3 = $puntos3;
            $apuesta->ptsi4 = $puntos4;
            $apuesta->ptsi5 = $puntos5;
            $apuesta->ptsi6 = $puntos6;
            $apuesta->ptsi7 = $puntos7;
            $apuesta->ptsi8 = $puntos8;
            $apuesta->ptsi9 = $puntos9;
            $apuesta->ptsi10 = $puntos10;
            $apuesta->ptsi11 = $puntos11;
            $apuesta->ptsi12 = $puntos12;
            $apuesta->ptsi13 = $puntos13;
            $apuesta->ptsi16 = $puntos16;
            $apuesta->ptsi15 = $puntos15;
            $apuesta->ptsi16 = $puntos16;

            $totalmarcador= $puntos + $puntos2 + $puntos3 + $puntos4 + $puntos5 + $puntos6 + $puntos7 + $puntos8 + $puntos9 + $puntos10 + $puntos11 + $puntos12 + $puntos13 + $puntos14 + $puntos15 + $puntos16;

////////////////  alta baja equipos

            // alta baja primer juego
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


            // alta baja segundo juego
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

            // alta baja tercer juego
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

            // alta baja cuarto juego
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

            // alta baja quinto juego
            if(isset($apuesta->resultados->resultado9)){
                if ($sumaequipo5 > 2) {
                    $resultado_calculo_sumaequipo = "alta";
                } else {
                    $resultado_calculo_sumaequipo = "baja";
                }
                // alta baja resultado
                if ($sumaresultado5 >2) {
                    $resultado_calculo_sumaresultado = "alta";
                } else {
                    $resultado_calculo_sumaresultado = "baja";
                }
                // comparamos para ver si es alta o baja
                if (($resultado_calculo_sumaresultado == "alta") and $resultado_calculo_sumaequipo == "alta") {
                    $totalalta9 = $gana;
                } else {
                }
                if (($resultado_calculo_sumaresultado == "baja") and $resultado_calculo_sumaequipo == "baja") {
                    $totalalta10 = $gana;
                } else {

                }

            }


            // alta baja sexto juego
            if(isset($apuesta->resultados->resultado11)){

                if ($sumaequipo6 > 2) {
                    $resultado_calculo_sumaequipo = "alta";
                } else {
                    $resultado_calculo_sumaequipo = "baja";
                }
                // alta baja resultado
                if ($sumaresultado6 >2) {
                    $resultado_calculo_sumaresultado = "alta";
                } else {
                    $resultado_calculo_sumaresultado = "baja";
                }
                // comparamos para ver si es alta o baja
                if (($resultado_calculo_sumaresultado == "alta") and $resultado_calculo_sumaequipo == "alta") {
                    $totalalta11 = $gana;
                } else {
                }
                if (($resultado_calculo_sumaresultado == "baja") and $resultado_calculo_sumaequipo == "baja") {
                    $totalalta12 = $gana;
                } else {

                }
            }

            // alta baja septimo juego
            if(isset($apuesta->resultados->resultado13)){
                if ($sumaequipo7 > 2) {
                    $resultado_calculo_sumaequipo = "alta";
                } else {
                    $resultado_calculo_sumaequipo = "baja";
                }
                // alta baja resultado
                if ($sumaresultado7 >2) {
                    $resultado_calculo_sumaresultado = "alta";
                } else {
                    $resultado_calculo_sumaresultado = "baja";
                }
                // comparamos para ver si es alta o baja
                if (($resultado_calculo_sumaresultado == "alta") and $resultado_calculo_sumaequipo == "alta") {
                    $totalalta13 = $gana;
                } else {
                }
                if (($resultado_calculo_sumaresultado == "baja") and $resultado_calculo_sumaequipo == "baja") {
                    $totalalta14 = $gana;
                } else {

                }
            }

            // alta baja octavo juego
            if(isset($apuesta->resultados->resultado15)){
                if ($sumaequipo8 > 2) {
                    $resultado_calculo_sumaequipo = "alta";
                } else {
                    $resultado_calculo_sumaequipo = "baja";
                }
                // alta baja resultado
                if ($sumaresultado8 >2) {
                    $resultado_calculo_sumaresultado = "alta";
                } else {
                    $resultado_calculo_sumaresultado = "baja";
                }
                // comparamos para ver si es alta o baja
                if (($resultado_calculo_sumaresultado == "alta") and $resultado_calculo_sumaequipo == "alta") {
                    $totalalta15 = $gana;
                } else {
                }
                if (($resultado_calculo_sumaresultado == "baja") and $resultado_calculo_sumaequipo == "baja") {
                    $totalalta16 = $gana;
                } else {

                }
            }

            $totalaltabaja = $totalalta + $totalalta2 + $totalalta3 + $totalalta4 +$totalalta5 + $totalalta6 + $totalalta7 + $totalalta8 + $totalalta9 + $totalalta10 + $totalalta11 + $totalalta12 +$totalalta13 + $totalalta14 + $totalalta15 + $totalalta16;
            $apuesta->ptsab = $totalalta + $totalalta2;
            $apuesta->ptsab2 = $totalalta3 + $totalalta4;
            $apuesta->ptsab3 = $totalalta5 + $totalalta6;
            $apuesta->ptsab4 = $totalalta7 + $totalalta8;
            $apuesta->ptsab5 = $totalalta9 + $totalalta10;
            $apuesta->ptsab6 = $totalalta11 + $totalalta12;
            $apuesta->ptsab7 = $totalalta13 + $totalalta14;
            $apuesta->ptsab8 = $totalalta15 + $totalalta16;





            $apuesta->total =  $totalganador  +  $totalmarcador +  $totalaltabaja ;
            $apuesta->save();

        }
        return view('apuestas.index', compact('apuestas'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('apuestas.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([

            'apuesta1' => 'required',

            'apuesta2' => 'required',

        ]);



        $apuestas = new Apuesta();
        $apuestas->name = auth()->user()->name;
        $apuestas->apuesta1 = $request->apuesta1;
        $apuestas->apuesta2 = $request->apuesta2;
        $apuestas->apuesta3 = $request->apuesta3;
        $apuestas->apuesta4 = $request->apuesta4;
        $apuestas->apuesta5 = $request->apuesta5;
        $apuestas->apuesta6 = $request->apuesta6;
        $apuestas->apuesta7 = $request->apuesta7;
        $apuestas->apuesta8 = $request->apuesta8;
        $apuestas->apuesta9 = $request->apuesta9;
        $apuestas->apuesta10 = $request->apuesta10;
        $apuestas->apuesta11 = $request->apuesta11;
        $apuestas->apuesta12 = $request->apuesta12;
        $apuestas->apuesta13 = $request->apuesta13;
        $apuestas->apuesta14 = $request->apuesta14;
        $apuestas->apuesta15 = $request->apuesta15;
        $apuestas->apuesta16 = $request->apuesta16;
        $apuestas->id_resultado = $request->id_resultado;
        $apuestas->total = $request->total;


        $apuestas->save();



        return redirect()->route('apuestas.index')

                        ->with('success','Product created successfully.');

    }


    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Apuesta  $apuesta
     * @return \Illuminate\Http\Response
     */
    public function show(Apuesta $apuesta)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Apuesta  $apuesta
     * @return \Illuminate\Http\Response
     */
    public function edit(Apuesta $apuesta)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Apuesta  $apuesta
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Apuesta $apuesta)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Apuesta  $apuesta
     * @return \Illuminate\Http\Response
     */
    public function destroy(Apuesta $apuesta)
    {
        //
    }
}
