<?php

namespace App\Http\Controllers;

use App\Models\ShopItem;
use Illuminate\Http\Request;

class ShopItemController extends Controller
{
    public function index()
    {
        return ShopItem::all();
    }

    public function show(ShopItem $shopItem)
    {
        return $shopItem;
    }
}
