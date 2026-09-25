<?php

namespace App\Http\Controllers;

use App\Models\Inquiry;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function submit(Request $request)
    {
        // Honeypot check
        if (!empty($request->input('hp_field'))) {
            return response()->json(['status' => 'success', 'message' => 'Inquiry received.']);
        }

        $validated = $request->validate([
            'first_name' => 'required|string|max:100',
            'last_name' => 'nullable|string|max:100',
            'email' => 'required|email|max:150',
            'organization' => 'nullable|string|max:150',
            'inquiry_type' => 'required|string|max:100',
            'message' => 'required|string|max:3000',
        ]);

        $inquiry = Inquiry::create($validated);

        if ($request->ajax() || $request->wantsJson()) {
            return response()->json([
                'status' => 'success',
                'message' => 'Thank you! Your inquiry has been successfully registered.',
                'data' => $inquiry
            ]);
        }

        return redirect()->back()->with('success', 'Thank you! Your inquiry has been sent successfully.');
    }
}
