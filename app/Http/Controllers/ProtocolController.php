<?php

namespace App\Http\Controllers;

use App\Models\Protocol;
use App\Models\SiteSetting;
use Illuminate\Http\Request;

class ProtocolController extends Controller
{
    public function index()
    {
        $settings = SiteSetting::pluck('value', 'key');
        $protocols = Protocol::where('is_active', true)->orderBy('order_index', 'asc')->get();
        return view('pages.protocols', compact('settings', 'protocols'));
    }

    public function show($slug)
    {
        $settings = SiteSetting::pluck('value', 'key');
        $protocol = Protocol::where('slug', $slug)->where('is_active', true)->firstOrFail();
        $allProtocols = Protocol::where('is_active', true)->orderBy('order_index', 'asc')->get();
        return view('pages.protocol_detail', compact('settings', 'protocol', 'allProtocols'));
    }
}
