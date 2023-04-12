<?php

namespace App\Http\Livewire\Dashboard;

use App\Models\Client;
use Livewire\Component;
use Livewire\WithFileUploads;
use Livewire\WithPagination;

class Clients extends Component
{

    use WithFileUploads;
    use WithPagination;
    private $clients;

    public $image, $img, $id_item;

    public $createIsOpen = false;
    public $updateIsOpen = false;

    public function deleteItem($id)
    {
        Client::find($id)->delete();
    }

    public function addBtn()
    {
        $this->createIsOpen = true;
        $this->updateIsOpen = false;
    }

    public function editBtn($id)
    {
        $client = Client::find($id);
        $this->img = $client->image;
        $this->id_item = $id;
        $this->createIsOpen = false;
        $this->updateIsOpen = true;
    }

    public function submit()
    {
        $this->validate([
            'image' => 'file|required',
        ]);

        $imgLink = saveImage($this->image, 'clients-image');
        Client::create([
            'image' => $imgLink
        ]);
        $this->createIsOpen = false;
        $this->updateIsOpen = false;
        $this->reset(['image']);
        $this->emit('alertSuccess', __("dashboard.operation accomplished successfully"));
    }

    public function update()
    {
        $this->validate([
            'image' => 'file|required',
        ]);

        $image = Client::find($this->id_item);

        $image->image = saveImage($this->image, 'clients-image');

        $image->update();
        $this->createIsOpen = false;
        $this->updateIsOpen = false;
        $this->reset(['image']);
        $this->emit('alertSuccess', __("dashboard.operation accomplished successfully"));
    }

    public function render()
    {
        $this->clients = Client::latest()->paginate(10);
        return view('livewire.dashboard.clients', ['clients' => $this->clients])->layout('layouts.dashboard');
    }
}
