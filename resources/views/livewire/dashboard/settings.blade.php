<div class="mt-100 w-100">
    <div class="card p-20">

        <h3>{{__('dashboard.settings')}}</h3>
        <h4>{{__('dashboard.settings description')}}</h4>
        <div class="card m-10 p-50-100 md-p-20 shadow">
            <form class="w-100 d-flex flex-column gap-50" method="POST" wire:submit.prevent='updateSetting'>
                <div class="d-grid grid-template-2 sm-grid-template-1 grid-gap-20">
                    <div class="grid-column-full">
                        <h4>{{__('dashboard.main section')}}</h4>
                    </div>
                    <div class="form-group">
                        <label for="logo">{{__('dashboard.logo')}}</label>
                        <input type="file" name="logo" wire:model.defer='logo' id="logo" accept="image/png, image/jpg, image/gif, image/jpeg, image/webp"/>
                        <div wire:loading wire:target="logo">Uploading...</div>
                    </div>
                    <div class="form-group text-center">
                        <img src="{{asset($logo_img)}}" alt="{{$main_title_ar}}">
                    </div>
                    <div class="form-group">
                        <label  @error('main_title_ar') class="error" @enderror for="main-title-arabic">{{__('dashboard.main title')}} ({{__('dashboard.arabic')}})</label>
                        <input type="text" name="main-title-arabic" @error('main_title_ar') class="is-invalid" @enderror wire:model.defer='main_title_ar' id="main-title-arabic">
                        @error('main_title_ar') <span class="error">{{ __('dashboard.required') }}</span> @enderror
                    </div>
                    <div class="form-group">
                        <label @error('main_title_en') class="error" @enderror for="main-title-english">{{__('dashboard.main title')}} ({{__('dashboard.english')}})</label>
                        <input type="text" name="main-title-english" @error('main_title_en') class="is-invalid" @enderror wire:model.defer='main_title_en' id="main-title-english">
                        @error('main_title_en') <span class="error">{{ __('dashboard.required') }}</span> @enderror
                    </div>

                    <div class="form-group">
                        <label @error('main_description_ar') class="error" @enderror for="description-main-arabic">{{__('dashboard.description main')}} ({{__('dashboard.arabic')}})</label>
                        <input type="text" name="description-main-arabic" @error('main_description_ar') class="is-invalid" @enderror wire:model.defer='main_description_ar' id="description-main-arabic">
                        @error('main_description_ar') <span class="error">{{ __('dashboard.required') }}</span> @enderror
                    </div>
                    <div class="form-group">
                        <label @error('main_description_en') class="error" @enderror for="description-main-english">{{__('dashboard.description main')}} ({{__('dashboard.english')}})</label>
                        <input type="text" name="description-main-english" @error('main_description_en') class="is-invalid" @enderror wire:model.defer='main_description_en' id="description-main-english">
                        @error('main_description_en') <span class="error">{{ __('dashboard.required') }}</span> @enderror
                    </div>
                </div>
                <div class="d-grid grid-template-2 sm-grid-template-1 grid-gap-20">
                    <div class="grid-column-full">
                        <h4>{{__('dashboard.who are we section')}}</h4>
                    </div>
                    <div class="form-group">
                        <label @error('who_are_we_title_ar') class="error" @enderror for="who-are-we-title-arabic">{{__('dashboard.who are we title')}} ({{__('dashboard.arabic')}})</label>
                        <input type="text" name="who-are-we-title-arabic" @error('who_are_we_title_ar') class="is-invalid" @enderror wire:model.defer='who_are_we_title_ar' id="who-are-we-title-arabic">
                        @error('who_are_we_title_ar') <span class="error">{{ __('dashboard.required') }}</span> @enderror
                    </div>
                    <div class="form-group">
                        <label @error('who_are_we_title_en') class="error" @enderror for="who-are-we-title-english">{{__('dashboard.who are we title')}} ({{__('dashboard.english')}})</label>
                        <input type="text" name="who-are-we-title-english" @error('who_are_we_title_en') class="is-invalid" @enderror wire:model.defer='who_are_we_title_en' id="who-are-we-title-english">
                        @error('who_are_we_title_en') <span class="error">{{ __('dashboard.required') }}</span> @enderror
                    </div>
                    
                    <div class="form-group">
                        <label for="image-who-are-we">{{__('dashboard.image who are we')}}</label>
                        <input type="file" name="image-who-are-we" wire:model.defer='image_who_ar_we' id="image-who-are-we" accept="image/png, image/jpg, image/gif, image/jpeg, image/webp"/>
                    </div>
                    <div class="form-group text-center">
                        <img src="{{asset($img)}}" alt="{{$description_who_are_we_ar}}">
                    </div>

                    <div class="form-group grid-column-full">
                        <label @error('description_who_are_we_ar') class="error" @enderror for="description-who-are-we-arabic">{{__('dashboard.description who are we')}} ({{__('dashboard.arabic')}})</label>
                        <textarea name="description-who-are-we-arabic" id="description-who-are-we-arabic" @error('description_who_are_we_ar') class="is-invalid" @enderror wire:model.defer='description_who_are_we_ar' cols="30" rows="6"></textarea>
                        @error('description_who_are_we_ar') <span class="error">{{ __('dashboard.required') }}</span> @enderror
                    </div>
                    <div class="form-group grid-column-full">
                        <label @error('description_who_are_we_en') class="error" @enderror for="description-who-are-we-english">{{__('dashboard.description who are we')}} ({{__('dashboard.english')}})</label>
                        <textarea name="description-who-are-we-english" wire:model.defer='description_who_are_we_en' @error('description_who_are_we_en') class="is-invalid" @enderror id="description-who-are-we-english" cols="30" rows="6"></textarea>
                        @error('description_who_are_we_en') <span class="error">{{ __('dashboard.required') }}</span> @enderror
                    </div>
                </div>

                <div class="d-grid grid-template-2 sm-grid-template-1 grid-gap-20">
                    <div class="grid-column-full">
                        <h4>{{__('dashboard.footer section')}}</h4>
                    </div>
                    
                    <div class="form-group grid-column-full">
                        <label @error('description_footer_ar') class="error" @enderror for="description-footer-arabic">{{__('dashboard.description footer') . ' (' . __('dashboard.arabic') . ')'}}</label>
                        <textarea name="description-footer-arabic" wire:model.defer='description_footer_ar' @error('description_footer_ar') class="is-invalid" @enderror id="description-footer-arabic" cols="30" rows="4"></textarea>
                        @error('description_footer_ar') <span class="error">{{ __('dashboard.required') }}</span> @enderror
                    </div>
                    <div class="form-group grid-column-full">
                        <label @error('description_footer_en') class="error" @enderror for="description-footer-english">{{__('dashboard.description footer') . ' (' . __('dashboard.english') . ')'}}</label>
                        <textarea name="description-footer-english" wire:model.defer='description_footer_en' @error('description_footer_en') class="is-invalid" @enderror id="description-footer-english" cols="30" rows="4"></textarea>
                        @error('description_footer_en') <span class="error">{{ __('dashboard.required') }}</span> @enderror
                    </div>
                </div>

                <div class="d-grid grid-template-3 sm-grid-template-1 grid-gap-20">
                    <div class="grid-column-full">
                        <h4>{{__('dashboard.social media accounts')}}</h4>
                    </div>
                    
                    <div class="form-group">
                        <label @error('whatsapp') class="error" @enderror for="whatsapp">{{__('dashboard.whatsapp account')}}</label>
                        <input type="text" wire:model.defer='whatsapp' @error('whatsapp') class="is-invalid" @enderror name="whatsapp" id="whatsapp">
                        @error('whatsapp') <span class="error">{{ __('dashboard.required') }}</span> @enderror
                    </div>
                    <div class="form-group">
                        <label @error('twitter') class="error" @enderror for="twitter">{{__('dashboard.twitter account')}}</label>
                        <input type="text" wire:model.defer='twitter' @error('twitter') class="is-invalid" @enderror name="twitter" id="twitter">
                        @error('twitter') <span class="error">{{ __('dashboard.required') }}</span> @enderror
                    </div>
                    <div class="form-group">
                        <label @error('linkedin') class="error" @enderror for="linkedin">{{__('dashboard.linkedin account')}}</label>
                        <input type="text" wire:model.defer='linkedin' @error('linkedin') class="is-invalid" @enderror name="linkedin" id="linkedin">
                        @error('linkedin') <span class="error">{{ __('dashboard.required') }}</span> @enderror
                    </div>
                </div>

                <div class="d-grid grid-template-2 sm-grid-template-1 grid-gap-20">
                    <div class="grid-column-full">
                        <h4>{{__('dashboard.the address')}}</h4>
                    </div>

                    <div class="form-group">
                        <label @error('address_ar') class="error" @enderror for="address-arabic">{{__('dashboard.the address is in arabic')}}</label>
                        <input type="text" wire:model.defer='address_ar' @error('address_ar') class="is-invalid" @enderror name="address-arabic" id="address-arabic">
                        @error('address_ar') <span class="error">{{ __('dashboard.required') }}</span> @enderror
                    </div>

                    <div class="form-group">
                        <label @error('address_en') class="error" @enderror for="address-english">{{__('dashboard.the address is in english')}}</label>
                        <input type="text" wire:model.defer='address_en' @error('address_en') class="is-invalid" @enderror name="address-english" id="address-english">
                        @error('address_en') <span class="error">{{ __('dashboard.required') }}</span> @enderror
                    </div>
                </div>

                <div class="d-grid grid-template-2 sm-grid-template-1 grid-gap-20">
                    <div class="grid-column-full">
                        <h4>{{__('dashboard.contact information')}}</h4>
                    </div>

                    <div class="form-group">
                        <label @error('phone_number') class="error" @enderror for="phone-number">{{__('dashboard.phone number')}}</label>
                        <input type="text" wire:model.defer='phone_number' @error('phone_number') class="is-invalid" @enderror name="phone-number" id="phone-number">
                        @error('phone_number') <span class="error">{{ __('dashboard.required') }}</span> @enderror
                    </div>

                    <div class="form-group">
                        <label @error('email_address') class="error" @enderror for="email-address">{{__('dashboard.email address')}}</label>
                        <input type="text" wire:model.defer='email_address' @error('email_address') class="is-invalid" @enderror name="email" id="email-address">
                        @error('email_address') <span class="error">{{ __('dashboard.required') }}</span> @enderror
                    </div>

                </div>
                <div class="d-grid grid-template-2 sm-grid-template-1 grid-gap-20">
                    <div class="grid-column-full">
                        <h4>{{__('dashboard.worktime')}}</h4>
                    </div>

                    <div class="form-group">
                        <label @error('worktime_ar') class="error" @enderror for="arabic-worktime">{{__('dashboard.worktime is in arabic')}}</label>
                        <input type="text" wire:model.defer='worktime_ar' @error('worktime_ar') class="is-invalid" @enderror name="arabic-worktime" id="arabic-worktime">
                        @error('worktime_ar') <span class="error">{{ __('dashboard.required') }}</span> @enderror
                    </div>

                    <div class="form-group">
                        <label @error('worktime_en') class="error" @enderror for="english-worktime">{{__('dashboard.worktime is in english')}}</label>
                        <input type="text" wire:model.defer='worktime_en' @error('worktime_en') class="is-invalid" @enderror name="english-worktime" id="english-worktime">
                        @error('worktime_en') <span class="error">{{ __('dashboard.required') }}</span> @enderror
                    </div>
                </div>

                <div class="d-grid grid-template-2 sm-grid-template-1 grid-gap-20">
                    <div class="grid-column-full">
                        <h4>{{__('dashboard.the location on the map')}}</h4>
                    </div>

                    <div class="form-group">
                        <label @error('latitude') class="error" @enderror for="latitude">{{__('dashboard.latitude')}}</label>
                        <input type="text" wire:model.defer='latitude' @error('latitude') class="is-invalid" @enderror name="latitude" id="latitude">
                        @error('latitude') <span class="error">{{ __('dashboard.required') }}</span> @enderror
                    </div>

                    <div class="form-group">
                        <label @error('longitude') class="error" @enderror for="longitude">{{__('dashboard.longitude')}}</label>
                        <input type="text" wire:model.defer='longitude' @error('longitude') class="is-invalid" @enderror name="longitude" id="longitude">
                        @error('longitude') <span class="error">{{ __('dashboard.required') }}</span> @enderror
                    </div>
                </div>
<hr />
                <div class="d-grid grid-template-1 sm-grid-template-1 grid-gap-20">
                    <div class="grid-column-full">
                        <h3>SEO</h3>
                    </div>

                    <div class="form-group">
                        <label for="description-arabic">{{__('dashboard.description') . ' (' . __('dashboard.arabic') . ')'}}</label>
                        <textarea wire:model.defer='description_ar' name="description-arabic" id="description-arabic" cols="30" rows="3"></textarea>
                    </div>
                    <div class="form-group">
                        <label for="description-english">{{__('dashboard.description') . ' (' . __('dashboard.english') . ')'}}</label>
                        <textarea wire:model.defer='description_en' name="description-english" id="description-english" cols="30" rows="3"></textarea>
                    </div>

                    <div class="form-group">
                        <label for="keywords-arabic">{{__('dashboard.keywords') . ' (' . __('dashboard.arabic') . ')'}}</label>
                        <input type="text" wire:model.defer='keywords_ar' name="keywords-arabic" id="keywords-arabic" data-role="tagsinput">
                    </div>
                    <div class="form-group">
                        <label for="keywords-english">{{__('dashboard.keywords') . ' (' . __('dashboard.english') . ')'}}</label>
                        <input type="text" wire:model.defer='keywords_en' name="keywords-english" id="keywords-english" data-role="tagsinput">
                    </div>
                </div>
                <div class="d-flex justify-content-center">
                    <div class="save">
                        <button type="submit">{{__('dashboard.save the changes')}}</button>
                    </div>

                </div>
            </form>
            
        </div>
    </div>
</div>

@push('styles')
<link rel="stylesheet" href="{{asset('assets/dashboard/tagsinput.css')}}" /> 
@endpush

@push('scripts')
<script src="https://code.jquery.com/jquery-3.6.4.min.js" integrity="sha256-oP6HI9z1XaZNBrJURtCoUT5SUnxFr8s3BzRl+cbzUq8=" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-tagsinput/0.6.0/bootstrap-tagsinput.min.js" integrity="sha512-SXJkO2QQrKk2amHckjns/RYjUIBCI34edl9yh0dzgw3scKu0q4Bo/dUr+sGHMUha0j9Q1Y7fJXJMaBi4xtyfDw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
@endpush