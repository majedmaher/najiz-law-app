<?php

namespace App\Http\Livewire\Dashboard;

use App\Models\Service;
use Livewire\Component;
use Livewire\WithFileUploads;
use Livewire\WithPagination;

class Services extends Component
{
    use WithFileUploads;
    use WithPagination;
    private $services;
    public $searchTerm;

    public $image, $title_ar, $title_en;
    public $id_item, $image_update, $title_ar_update, $title_en_update, $img;

    public $createIsOpen = false;
    public $updateIsOpen = false;

    public function deleteItem($id)
    {
        Service::find($id)->delete();
    }

    public function addBtn()
    {
        $this->createIsOpen = true;
        $this->updateIsOpen = false;
    }

    public function editBtn($id)
    {
        $service = Service::find($id);
        $this->title_ar_update = $service->getTranslation('title', 'ar');
        $this->title_en_update = $service->getTranslation('title', 'en');
        $this->img = $service->image;
        $this->id_item = $id;
        $this->createIsOpen = false;
        $this->updateIsOpen = true;
    }

    public function submit()
    {
        $this->validate([
            'title_ar' => 'string|required',
            'title_en' => 'string|required',
            'image' => 'file|required',
        ]);

        $imgLink = saveImage($this->image, 'services-image');
        Service::create([
            'title' => [
                'ar' => $this->title_ar,
                'en' => $this->title_en,
            ],
            'image' => $imgLink
        ]);
        $this->createIsOpen = false;
        $this->updateIsOpen = false;
        $this->reset(['image', 'title_ar', 'title_en']);
        $this->emit('alertSuccess', __("dashboard.operation accomplished successfully"));
    }

    public function update()
    {
        $this->validate([
            'id_item' => 'required',
            'title_ar_update' => 'string|required',
            'title_en_update' => 'string|required',
            'image_update' => 'file|nullable',
        ]);

        $service = Service::find($this->id_item);

        if ($this->image_update) {
            $service->image = saveImage($this->image_update, 'services-image');
        }

        $service->setTranslations('title', ['ar' => $this->title_ar_update, 'en' => $this->title_en_update]);
        $service->update();
        $this->createIsOpen = false;
        $this->updateIsOpen = false;
        $this->reset(['image_update', 'title_ar_update', 'title_en_update']);
        $this->emit('alertSuccess', __("dashboard.operation accomplished successfully"));
    }

    public function render()
    {
        $searchTerm = '%' . $this->searchTerm . '%';
        $this->services = Service::where('title->' . app()->getLocale(), 'like', $searchTerm)->latest()->paginate(10);
        return view('livewire.dashboard.services', ['services' => $this->services])->layout('layouts.dashboard');
    }
}
