<?php

use app\controllers\HomeController;
use app\controllers\DiasController;
use app\controllers\DatosController;
use lib\Route;

// Home
Route::get("/Home", [HomeController::class,"index"]);

// CRUD estudiantes
Route::get("/Datos", [DatosController::class,"index"]);
Route::post("/Datos", [DatosController::class,"index"]); // <-- permitir POST
// Eliminar estudiante
Route::get("/Datos/delete/:id", [DatosController::class, "delete"]);
Route::get("/dias/lunes", [DiasController::class, "lunes"]);
Route::get("/dias/martes", [DiasController::class, "martes"]);
Route::get("/dias/miercoles", [DiasController::class, "miercoles"]);
Route::get("/dias/jueves", [DiasController::class, "jueves"]);
Route::get("/dias/viernes", [DiasController::class, "viernes"]);

// Ejecutar el router
Route::dispatch();
