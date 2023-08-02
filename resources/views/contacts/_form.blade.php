
    <x-form.form-floating name="name" placeholder="Name">
        <x-form.input name="name" :value="$contact->name" placeholder="Name" />
    </x-form.form-floating>

    <x-form.form-floating name="date_birth" placeholder="date_birth">
        <x-form.input name="date_birth" :value="$contact->date_birth" placeholder="date_birth" />
    </x-form.form-floating>
    
    <x-form.form-floating name="address" placeholder="address">
        <x-form.input name="address" :value="$contact->address" placeholder="address" />
    </x-form.form-floating>


    <x-form.form-floating name="phone" placeholder="phone">
        <x-form.input name="phone" :value="$contact->phone" placeholder="phone" />
    </x-form.form-floating>

    <x-form.form-floating name="company" placeholder="company">
        <x-form.input name="company" :value="$contact->company" placeholder="company" />
    </x-form.form-floating>

    <x-form.form-floating name="job" placeholder="job">
        <x-form.input name="job" :value="$contact->job" placeholder="job" />
    </x-form.form-floating>


    <div class="form-floating mb-3">
        @if($contact->image)
        <img src="{{Storage::disk('public')->url($contact->image)}}" alt="">
        @endif
        <input type="file"  @class(['form-control' , 'is-invalid' => $errors->has('image')]) name="image" id="image" placeholder="image">
        <label for="image">image</label> 
    </div>
    
    <button type="submit" class="btn btn-outline-primary">{{$button_lable}}</button>

    