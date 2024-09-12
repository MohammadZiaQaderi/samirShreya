<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CrossTabsController extends Controller
{
    public function handleDepotStacks()
    {
        return view("CrossTabs/depotStocks");
    }

    public function handleMonthEndStocks()
    {
        return view("CrossTabs/monthEndStocks");
    }
    public function handleStockExpiry()
    {
        return view("CrossTabs/stockExpiry");
    }
    
    public function handleDepotDeptors()
    {
        return view("CrossTabs/depotDeptors");
    }

    public function  handlePendingOrders ()
    {
        return view("CrossTabs/pendingOrders ");
    }

    public function  handleDepotCollection  ()
    {
        return view("CrossTabs/depotCollection  ");
    }

    public function   handleAdvanceCollection  ()
    {
        return view("CrossTabs/advanceCollection");
    }
    public function    handleMDDespatches  ()
    {
        return view("CrossTabs/MDDespatches");
    }
   
   
}
