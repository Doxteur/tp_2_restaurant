<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Order;
use App\Models\StockItem;
use App\Models\Employee;

class ReportController extends Controller
{
    // Rapport sur les ventes
    public function getSalesReport()
    {
        $dailySales = Order::selectRaw('DATE(created_at) as date, SUM(total_amount) as total_sales')
                            ->groupBy('date')
                            ->orderBy('date', 'desc')
                            ->get();

        $weeklySales = Order::selectRaw('WEEK(created_at) as week, SUM(total_amount) as total_sales')
                            ->groupBy('week')
                            ->orderBy('week', 'desc')
                            ->get();

        $monthlySales = Order::selectRaw('MONTH(created_at) as month, YEAR(created_at) as year, SUM(total_amount) as total_sales')
                            ->groupBy('month', 'year')
                            ->orderBy('year', 'desc')
                            ->orderBy('month', 'desc')
                            ->get();

        return response()->json([
            'daily_sales' => $dailySales,
            'weekly_sales' => $weeklySales,
            'monthly_sales' => $monthlySales
        ], 200);
    }

    // Rapport sur les stocks
    public function getStockReport()
    {
        $stockReport = StockItem::all();

        return response()->json(['data' => $stockReport], 200);
    }

    // Rapport sur les performances des employés
    public function getEmployeePerformanceReport()
    {
        $employeePerformanceReport = Employee::all();

        return response()->json(['data' => $employeePerformanceReport], 200);
    }
}
