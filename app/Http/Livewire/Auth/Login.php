<?php

namespace App\Http\Livewire\Auth;

use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Livewire\Component;

use function PHPUnit\Framework\isEmpty;

class Login extends Component
{
    public $name, $password;

    public function submit()
    {
        if (isset($this->name) || isset($this->password)) {
            $user = User::where('name', $this->name)->first();
            if ($user) {
                if (Hash::check($this->password, $user->password)) {
                    auth()->login($user);
                    return redirect()->route('dashboard.settings');
                } else {
                    $this->emit('alertError', __("auth.error login"));
                }
            } else {
                $this->emit('alertError', __("auth.error login"));
            }
        } else {
            $this->emit('alertError', __("auth.error empty login"));
        }
    }

    public function render()
    {
        return view('livewire.auth.login')->layout('layouts.auth');
    }
}
