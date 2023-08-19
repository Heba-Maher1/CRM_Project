<x-app-layout>
    <div class="container mt-5 px-5">
        <div class="d-flex justify-content-between align-items-center border-bottom ">
             <div class="py-3 d-flex align-items-center">
                @if($contact->image)
                 <img src="{{ Storage::url($contact->image) }}" class="rounded-circle me-3" style="width:100px;height:100px">
                @else
                    <img src="https://ui-avatars.com/api/?name={{ $contact->name }}" class="rounded-circle me-3" width="100" height="100" alt="{{ $contact->name }}"> 
                @endif                <div>
                    <p class="fs-2 font-weight-bold">{{ $contact->name }}</p> 
                    <p class="fs-5 text-secondary">{{ $contact->address }} - {{ $contact->job }}</p> 
                </div>
             </div>
             <a href="{{ route('contacts.edit' , $contact->id )}}" class="btn text-white bg-color">Edit</a>
        </div>

        <div class="mt-5">
            <div class="row mb-5">
                <div class="col-6">
                    <div class="d-flex align-items-center">
                        <label for="" class="me-3">Name:</label>
                         <p class="p-2 rounded w-100 bg-white">{{ $contact->name }}</p>
                    </div>
                </div>
                <div class="col-6">
                    <div class="d-flex align-items-center">
                        <label for="" class="me-3">Address:</label>
                         <p class="p-2 rounded w-100 bg-white">{{ $contact->address }}</></p>
                    </div>
                </div>
            </div>
            <div class="row  mb-5">
                <div class="col-6">
                    <div class="d-flex align-items-center">
                        <label for="" class="me-3">Phone:</label>
                         <p class="p-2 rounded w-100 bg-white">{{ $contact->phone }}</p>
                    </div>
                </div>
                <div class="col-6">
                    <div class="d-flex align-items-center">
                        <label for="" class="me-3">Company:</label>
                         <p class="p-2 rounded w-100 bg-white">{{ $contact->company }}</></p>
                    </div>
                </div>
            </div>
            <div class="row mb-5">
                <div class="col-12">
                    <div class="d-flex align-items-center">
                        <label for="" class="me-3">Job:</label>
                         <p class="p-2 rounded w-100 bg-white">{{ $contact->job }}</p>
                    </div>
                </div>
            </div>
        </div>
    </div>    
    
</x-app-layout>
