<div class="mt-100 w-100">
    <div class="card p-20">

        <h3>{{__('dashboard.our clients')}}</h3>
        <h4>{{__('dashboard.page description', ['name'=> __('dashboard.our clients')])}}</h4>
        <div class="card m-10 p-50-100 md-p-20 shadow">            
            @if ($createIsOpen)
            <form class="w-100 d-flex flex-column gap-50 mt-50" method="POST" wire:submit.prevent='submit'>
                <div class="d-grid grid-template-2 sm-grid-template-1 grid-gap-20">
                    <div class="grid-column-full">
                        <h4>{{__('dashboard.add item', ['name'=> __('dashboard.our clients')])}}</h4>
                    </div>
                    <div class="form-group grid-column-full">
                        <label @error('image') class="error" @enderror for="image">{{__('dashboard.image')}}</label>
                        <input type="file" name="image" wire:model.defer='image' id="image" accept="image/png, image/jpg, image/gif, image/jpeg, image/webp"/>
                        <div wire:loading wire:target="image">Uploading...</div>
                        @error('image') <span class="error">{{ __('dashboard.required') }}</span> @enderror
                    </div>
                </div>
    
                <div class="d-flex justify-content-center">
                    <div class="save">
                        <button type="submit">{{__('dashboard.save and add')}}</button>
                    </div>
    
                </div>
            </form>
            @else
            <div class="save">
                <button wire:click='addBtn'>{{__('dashboard.add item', ['name' => __('dashboard.client')])}}</button>
            </div>
            @endif

            @if ($updateIsOpen)
            <form class="w-100 d-flex flex-column gap-50 mt-50" method="POST" wire:submit.prevent='update'>
                <input type="hidden" name="id" wire:model.defer='id_item'>
                <div class="d-grid grid-template-2 sm-grid-template-1 grid-gap-20">
                    <div class="grid-column-full">
                        <h4>{{__('dashboard.update item', ['name'=> __('dashboard.client')])}}</h4>
                    </div>
                    <div class="form-group">
                        <label @error('image') class="error" @enderror for="image-update">{{__('dashboard.image')}}</label>
                        <input type="file" name="image_update" wire:model.defer='image' id="image-update" accept="image/png, image/jpg, image/gif, image/jpeg, image/webp"/>
                        <div wire:loading wire:target="image">Uploading...</div>
                        @error('image') <span class="error">{{ __('dashboard.required') }}</span> @enderror
                    </div>
                    <div class="form-group">
                        <img src="{{asset($img)}}" alt="img" width="100" height="100">
                    </div>
                </div>
    
                <div class="d-flex justify-content-center">
                    <div class="save">
                        <button type="submit">{{__('dashboard.save the changes')}}</button>
                    </div>
    
                </div>
            </form>
            @endif
            <div class="mt-50" style="overflow-x:auto;">
                <table>
                  <tr>
                    <th>#</th>
                    <th>{{__('dashboard.image')}}</th>
                    <th>{{__('dashboard.actions')}}</th>
                  </tr>
                  @if(!empty($clients) && $clients->count())
                    @foreach($clients as $key => $client)
                        <tr>
                            <td>{{ ++$key }}</td>
                            <td><img src="{{ asset($client->image) }}" alt="{{$client->title}}" width="50" height="50"></td>
                            <td>
                                <div class="actions">
                                    <button wire:click='editBtn({{$client->id}})' class="btn btn-info">Edit</button>
                                    <button wire:click='deleteItem({{$client->id}})' onclick="return confirm('{{__('dashboard.confirmation message')}}');" class="btn btn-danger">Delete</button>
                                </div>
                            </td>
                        </tr>
                    @endforeach
                    @else
                        <tr>
                            <td colspan="10">{{__('dashboard.no data')}}</td>
                        </tr>
                    @endif
                </table>
                @if ($clients->links()->paginator->hasPages())
                    <div class="mt-4 p-4 d-flex flex-justify-between">
                        {{ $clients->onEachSide(1)->links('layouts.paginate') }}
                    </div>
                @endif
              </div>
        </div>
    </div>
</div>
