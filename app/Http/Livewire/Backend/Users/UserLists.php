<?php

namespace App\Http\Livewire\Backend\Users;

use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Livewire\Component;

class UserLists extends Component
{
    public $state = [];
    public $user;
    public $userIdRemoved = null;


    public function create()
    {

        $this->state = [];
        $this->dispatchBrowserEvent('user-create-modal');
    }

    public function store()
    {
        $validatedData = Validator::make($this->state, [
            'name' => 'required',
            'email' => 'required|email|unique:users',
            'password' => 'required|confirmed'
        ])->validate();

        $validatedData['password'] = bcrypt($validatedData['password']);

        User::create($validatedData);

//       session()->flash('message','Kullanıcı başarılı bir şekilde eklendi');

        $this->dispatchBrowserEvent('hide-form', ['message' => 'Kayıt başarılı bir şekilde eklendi']);
    }

    public function edit(User $user)
    {
        $this->user = $user;

        $this->state = $user->toArray();

        $this->dispatchBrowserEvent('user-edit-modal');
    }

    public function update()
    {
        $validatedData = Validator::make($this->state, [
            'name' => 'required',
            'email' => 'required|email|unique:users,email,' . $this->user->id,
            'password' => 'sometimes|confirmed'
        ])->validate();

        if (!empty($validatedData['password'])) {
            $validatedData['password'] = bcrypt($validatedData['password']);
        }


        $this->user->update($validatedData);

//       session()->flash('message','Kullanıcı başarılı bir şekilde eklendi');

        $this->dispatchBrowserEvent('hide-form', ['message' => 'Kayıt başarılı bir şekilde güncellendi']);
    }

    public function destroyID($userId)
    {
        $this->userIdRemoved = $userId;

        $this->dispatchBrowserEvent('user-delete-modal');
    }

    public function destroy()
    {
        $user = User::findOrFail($this->userIdRemoved);
        $user->delete();
        $this->dispatchBrowserEvent('hide-form', ['message' => 'Kayıt başarılı bir şekilde silindi']);
    }

    public function render()
    {
        $users = User::paginate(7);

        return view('livewire.backend.users.user-lists', [
            'users' => $users,
        ]);
    }
}
