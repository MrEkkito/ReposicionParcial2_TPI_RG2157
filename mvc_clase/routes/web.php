<?php

use app\controllers\HomeController;
use app\controllers\DiasController;
use app\controllers\DatosController;
use app\controllers\VisitasController;

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

Route::get("/visitas/form", [VisitasController::class, "form"]);

// Guardar comentario (POST)
Route::post("/visitas/store", [VisitasController::class, "store"]);

// Mostrar todos los comentarios
Route::get("/visitas/comentarios", [VisitasController::class, "index"]);
// Ejecutar el router
Route::dispatch();
