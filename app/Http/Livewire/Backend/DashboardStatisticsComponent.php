<?php

namespace App\Http\Livewire\Backend;

use App\Models\Order;
use App\Models\Product;
use App\Models\Category;
use App\Models\User;
use Livewire\Component;

class DashboardStatisticsComponent extends Component
{
    public $users = 0;
    public $products = 0;
    public $categories = 0;

    // public $currentAnnualEarning = 0;
    // public $currentMonthOrderNew = 0;
    // public $currentMonthOrderFinished = 0;


    public function mount()
    {
        $this->users = User::get();
        $this->products = Product::get();
        $this->categories = Category::get();
        // $this->currentAnnualEarning = Order::whereOrderStatus(Order::FINISHED)->whereYear('created_at', date('Y'))->sum('total');
        // $this->currentMonthOrderNew = Order::whereOrderStatus(Order::NEW_ORDER)->whereMonth('created_at', date('m'))->count();
        // $this->currentMonthOrderFinished = Order::whereOrderStatus(Order::FINISHED)->whereMonth('created_at', date('m'))->count();
    }

    public function render()
    {
        return view('livewire.backend.dashboard-statistics-component');
    }
}
