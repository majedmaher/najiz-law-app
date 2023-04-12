<?php

namespace App\Http\Livewire\Dashboard;

use App\Models\Licenses as ModelsLicenses;
use Livewire\Component;
use Livewire\WithFileUploads;
use Livewire\WithPagination;

class Licenses extends Component
{
    use WithFileUploads;
    use WithPagination;
    private $licenses;
    public $searchTerm;

    public $image, $title_ar, $title_en;
    public $id_item, $image_update, $title_ar_update, $title_en_update, $img;

    public $createIsOpen = false;
    public $updateIsOpen = false;

    public function deleteItem($id)
    {
        ModelsLicenses::find($id)->delete();
    }

    public function addBtn()
    {
        $this->createIsOpen = true;
        $this->updateIsOpen = false;
    }

    public function editBtn($id)
    {
        $license = ModelsLicenses::find($id);
        $this->title_ar_update = $license->getTranslation('title', 'ar');
        $this->title_en_update = $license->getTranslation('title', 'en');
        $this->img = $license->image;
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

        $imgLink = saveImage($this->image, 'licenses-image');
        ModelsLicenses::create([
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

        $license = ModelsLicenses::find($this->id_item);

        if ($this->image_update) {
            $license->image = saveImage($this->image_update, 'licenses-image');
        }

        $license->setTranslations('title', ['ar' => $this->title_ar_update, 'en' => $this->title_en_update]);
        $license->update();
        $this->createIsOpen = false;
        $this->updateIsOpen = false;
        $this->reset(['image_update', 'title_ar_update', 'title_en_update']);
        $this->emit('alertSuccess', __("dashboard.operation accomplished successfully"));
    }

    public function render()
    {
        $searchTerm = '%' . $this->searchTerm . '%';
        $this->licenses = ModelsLicenses::where('title->' . app()->getLocale(), 'like', $searchTerm)->latest()->paginate(10);
        return view('livewire.dashboard.licenses', ['licenses' => $this->licenses])->layout('layouts.dashboard');
    }
}
