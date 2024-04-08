<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Employee;

class EmployeeController extends Controller
{
    // Récupérer tous les employés
    public function getAllEmployees()
    {
        $employees = Employee::all();

        return response()->json(['data' => $employees], 200);
    }

    // Créer un nouvel employé
    public function createEmployee(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'address' => 'required',
            'phone' => 'required',
            'role' => 'required',
            // Ajoutez d'autres validations si nécessaire
        ]);

        $employee = Employee::create($request->all());

        return response()->json(['message' => 'Employee created successfully', 'data' => $employee], 201);
    }

    // Mettre à jour les informations d'un employé
    public function updateEmployee(Request $request, $id)
    {
        $employee = Employee::findOrFail($id);

        $request->validate([
            'name' => 'required',
            'address' => 'required',
            'phone' => 'required',
            'role' => 'required',
            // Ajoutez d'autres validations si nécessaire
        ]);

        $employee->update($request->all());

        return response()->json(['message' => 'Employee updated successfully', 'data' => $employee], 200);
    }

    // Supprimer un employé
    public function deleteEmployee($id)
    {
        $employee = Employee::findOrFail($id);
        $employee->delete();

        return response()->json(['message' => 'Employee deleted successfully'], 200);
    }
}
