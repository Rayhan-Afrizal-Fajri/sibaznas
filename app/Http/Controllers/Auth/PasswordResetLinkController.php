<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Password;
use Illuminate\View\View;
use App\Models\User;
use Illuminate\Support\Facades\DB;

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
            'no_hp' => ['required', 'numeric', 'exists:users,no_hp'],
        ]);

        $user = User::where('no_hp', $request->no_hp)->first();

        if (!$user) {
            return back()->withError(['no_hp' =>'Nomor HP tidak ditemukan.']);
        }

        //Generate token reset password
        $token = Password::createToken($user);

        //simpan token dan kirimkan ke nomor HP (bisa pake SMS Gateway atau WhatsApp API)
        DB::table('password_reset_token')->insert([
            'email' => $user->email,
            'token' => $token,
            'created_at' => now(),
        ]);

        return back()->with('status', 'Token reset password telah dikirim ke nomor HP Anda.');

        // We will send the password reset link to this user. Once we have attempted
        // to send the link, we will examine the response then see the message we
        // need to show to the user. Finally, we'll send out a proper response.
        // $status = Password::sendResetLink(
        //     $request->only('no_hp')
        // );

        // return $status == Password::RESET_LINK_SENT
        //             ? back()->with('status', __($status))
        //             : back()->withInput($request->only('no_hp'))
        //                 ->withErrors(['no_hp' => __($status)]);
    }
}
