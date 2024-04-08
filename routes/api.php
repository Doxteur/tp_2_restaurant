<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

// Routes pour la gestion des commandes

Route::post('/orders', [App\Http\Controllers\OrderController::class, 'createOrder']); // Créer une commande
Route::get('/orders/{id}', [App\Http\Controllers\OrderController::class, 'getOrder']); // Obtenir une commande spécifique
Route::put('/orders/{id}', [App\Http\Controllers\OrderController::class, 'updateOrder']); // Mettre à jour une commande
Route::delete('/orders/{id}', [App\Http\Controllers\OrderController::class, 'deleteOrder']); // Supprimer une commande

Route::get('/reservations', [App\Http\Controllers\ReservationController::class, 'getAllReservations']); // Récupération de toutes les réservations
Route::post('/reservations', [App\Http\Controllers\ReservationController::class, 'createReservation']); // Création d'une réservation
Route::put('/reservations/{id}', [App\Http\Controllers\ReservationController::class, 'updateReservation']); // Modification d'une réservation
Route::delete('/reservations/{id}', [App\Http\Controllers\ReservationController::class, 'cancelReservation']); // Annulation d'une réservation
Route::post('/menu/items', [App\Http\Controllers\MenuController::class, 'createMenuItem']); // Ajout d'un article au menu
Route::put('/menu/items/{id}', [App\Http\Controllers\MenuController::class, 'updateMenuItem']); // Modification d'un article du menu
Route::delete('/menu/items/{id}', [App\Http\Controllers\MenuController::class, 'deleteMenuItem']); // Suppression d'un article du menu

// Routes pour la gestion des stocks
Route::get('/stock/items', [App\Http\Controllers\StockController::class, 'getAllStockItems']); // Récupération de tous les articles en stock
Route::get('/stock/items/{id}', [App\Http\Controllers\StockController::class, 'getStockItem']); // Récupération d'un article en stock spécifique
Route::post('/suppliers', [App\Http\Controllers\SupplierController::class, 'createSupplier']); // Ajout d'un fournisseur
Route::put('/suppliers/{id}', [App\Http\Controllers\SupplierController::class, 'updateSupplier']); // Modification des informations d'un fournisseur
Route::delete('/suppliers/{id}', [App\Http\Controllers\SupplierController::class, 'deleteSupplier']); // Suppression d'un fournisseur

// Routes pour la gestion des employés
Route::get('/employees', [App\Http\Controllers\EmployeeController::class, 'getAllEmployees']); // Récupération de tous les employés
Route::post('/employees', [App\Http\Controllers\EmployeeController::class, 'createEmployee']); // Création d'un employé
Route::put('/employees/{id}', [App\Http\Controllers\EmployeeController::class, 'updateEmployee']); // Modification des informations d'un employé
Route::delete('/employees/{id}', [App\Http\Controllers\EmployeeController::class, 'deleteEmployee']); // Suppression d'un employé

// Routes pour la gestion des clients
Route::get('/customers', [App\Http\Controllers\CustomerController::class, 'getAllCustomers']); // Récupération de tous les clients
Route::post('/customers', [App\Http\Controllers\CustomerController::class, 'createCustomer']); // Ajout d'un client
Route::put('/customers/{id}', [App\Http\Controllers\CustomerController::class, 'updateCustomer']); // Modification des informations d'un client
Route::delete('/customers/{id}', [App\Http\Controllers\CustomerController::class, 'deleteCustomer']); // Suppression d'un client

// Routes pour la génération de rapports
Route::get('/reports/sales', [App\Http\Controllers\ReportController::class, 'getSalesReport']); // Rapport sur les ventes
Route::get('/reports/stock', [App\Http\Controllers\ReportController::class, 'getStockReport']); // Rapport sur les stocks
Route::get('/reports/employee-performance', [App\Http\Controllers\ReportController::class, 'getEmployeePerformanceReport']); // Rapport sur les performances des employés
