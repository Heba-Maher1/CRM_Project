<x-app-layout>
    <div class="container mt-4">
        <h1 class="mb-4">Create New Contact</h1>
        <form action="{{ route('contacts.update' , $contact->id)}}" method="post" enctype="multipart/form-data">
            @csrf
            @method('put')
            <div class="form-floating mb-3">
                <input type="text" value="{{ $contact->name }}" name="name" class="form-control" id="floatingInput" placeholder="name">
                <label for="floatingInput">Name</label>
              </div>
            <div class="form-floating mb-3">
                <input type="number" value="{{ $contact->age }}" name="age" class="form-control" id="floatingInput" placeholder="age">
                <label for="floatingInput">Age</label>
            </div>
            <div class="form-floating mb-3">
                <input type="text" value="{{ $contact->address }}" name="address" class="form-control" id="floatingInput" placeholder="address">
                <label for="floatingInput">Address</label>
            </div>
            <div class="form-floating mb-3">
                <input type="text" value="{{ $contact->phone }}" name="phone" class="form-control" id="floatingInput" placeholder="phone">
                <label for="floatingInput">Phone</label>
            </div>
            <div class="form-floating mb-3">
                <input type="text" value="{{ $contact->company }}" name="company" class="form-control" id="floatingInput" placeholder="company">
                <label for="floatingInput">Company</label>
            </div>
            <div class="form-floating mb-3">
                <input type="text" value="{{ $contact->job }}" name="job" class="form-control" id="floatingInput" placeholder="job">
                <label for="floatingInput">Job</label>
            </div>
            <div class="form-floating mb-3">
                <input type="file" name="image" class="form-control" id="floatingInput" placeholder="image">
                <label for="floatingInput">image</label>
            </div>

            <button type="submit" class="btn btn-success text-success">Update</button>
        </form>
        
    </div>
    
</x-app-layout>