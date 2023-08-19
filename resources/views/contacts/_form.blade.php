<div class="mb-3 input-icon border-0">
    <span class="input-addon"><i class="fa-solid fa-user"></i></span>
    <input type="text" class="form-control input-border-bottom shadow-sm ps-5 py-3" id="name" name="name" value="{{$contact->name}}" placeholder="Name" required style="border: none;">
</div>        
<div class="mb-3 input-icon border-0">
    <span class="input-addon"><i class="fa-solid fa-location-dot"></i></span>
    <input type="text" class="form-control input-border-bottom shadow-sm ps-5 py-3" id="address" name="address" value="{{$contact->address}}"  placeholder="Address" required style="border: none;">
</div>               
<div class="mb-3 input-icon border-0">
    <span class="input-addon"><i class="fa-solid fa-phone"></i></span>
    <input type="text" class="form-control input-border-bottom shadow-sm ps-5 py-3" id="phone" name="phone" value="{{$contact->phone}}"  placeholder="Phone" required style="border: none;">
</div>        
<div class="mb-3 input-icon border-0">
    <span class="input-addon"><i class="fa-solid fa-building"></i></span>
    <input type="text" class="form-control input-border-bottom shadow-sm ps-5 py-3" id="company" name="company" value="{{$contact->company}}"  placeholder="Company" required style="border: none;">
</div>        
<div class="mb-3 input-icon border-0">
    <span class="input-addon"><i class="fa-solid fa-briefcase"></i></span>
    <input type="text" class="form-control input-border-bottom shadow-sm ps-5 py-3" id="job" name="job" value="{{$contact->job}}" placeholder="Job" style="border: none;">
</div>
<div class="mb-3 input-icon border-0">
    @if($contact->image)
    <img src="{{Storage::disk('public')->url($contact->image)}}" alt="">
    @endif
    <span class="input-addon"><i class="fa-solid fa-image"></i></span>
    <input type="file" class="form-control input-border-bottom shadow-sm ps-5 py-3" id="image" name="image" placeholder="Image" style="border: none;">
</div>
<div class="d-flex justify-content-end">
    <button type="submit" class="btn text-white bg-color">{{$button_lable}}</button>
</div>

<style>
    .input-icon {
    position: relative;
}

.input-addon {
    position: absolute;
    top: 9px;
    left: 0;
    bottom: 0;
    padding: 8px;
    pointer-events: none;
}
</style>