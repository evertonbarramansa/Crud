<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ApiController extends Controller
{
    public function getAllcarros() {
        // logic to get all carross goes here
      }
  
      public function createcarros(Request $request) {
        $carros = new carros;
    $carros->modelo = $request->modelo;
    $carros->ano_lancamento = $request->ano_lancamento;
    $carros->valor = $request->valor;
    $carros->save();

    return response()->json([
        "message" => "carros record created"
    ], 201);
      }
  
      public function getcarros($id) {
        // logic to get a carros record goes here
      }
  
      public function updatecarros(Request $request, $id) {
        // logic to update a carros record goes here
      }
  
      public function deletecarros ($id) {
        // logic to delete a carros record goes here
      }
  }
