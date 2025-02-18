<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\Pengguna;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Password;
use Illuminate\View\View;
use App\Models\User;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Log;

class PasswordResetLinkController extends Controller
{
    /**
     * Display the password reset link request view.
     */
    public function create(): View
    {
        return view('auth.forgot-password');
    }

    /**
     * Handle an incoming password reset link request.
     *
     * @throws \Illuminate\Validation\ValidationException
     */
    public function store(Request $request): RedirectResponse
    {
        $request->validate([
            'nohp' => ['required', 'exists:pengguna,nohp'],
        ]);

        $user = Pengguna::where('nohp', $request->nohp)->first();


        //generate token
        $token = Str::random(60);
        DB::table('password_reset_tokens')->updateOrInsert(
            ['email' => $user->email],
            ['token' => Hash::make($token), 'created_at' => now()], 
        );

        //Link reset password
        $resetLink = url("/reset-password/$token");

        //pesan whatsapp
        $message = "BAZNAS CILACAP - NOTIFIKASI\n\n"
        . "Assalamualaikum,\nSilahkan klik link berikut untuk reset password akun SIBAZNAS anda.\n\n"
        . "Link: $resetLink\n\n"
        . "Klik link di atas dan masukkan password baru anda.\n\n"
        . "1️⃣ Ini adalah pesan otomatis by sistem\n"
        . "2️⃣ Jika bukan anda yang mengajukan reset password, abaikan pesan ini\n"
        . "3️⃣ Hub. Cs. Admin SIBAZNAS jika ada kendala/error\n\n"
        . "Cs. Admin SIBAZNAS\n+62 858-4271-6803";

        //kirim whatsapp melalui api
        $response = Http::post("http://103.23.198.175:3125/send", [
            'nohp' => '62' + substr($user->nohp, 1),
            'message' => $message
        ]);
        
        dd($response, $response->body());
        
        return back()->with('status', 'Token reset password telah dikirim ke nomor HP Anda.');
    }
}
