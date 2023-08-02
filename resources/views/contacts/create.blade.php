<x-app-layout>
    <div class="container mt-4">
        <h1 class="mb-4">Create New Contact</h1>
        <form action="{{ route('contacts.store') }}" method="post" enctype="multipart/form-data">
            @csrf
            <div class="form-floating mb-3">
                <input type="text" name="name" class="form-control" id="name" placeholder="name">
                <label for="name">Name</label>
              </div>
            <div class="form-floating mb-3">
                <input type="text" name="date_birth" class="form-control" id="date_birth" placeholder="date_birth">
                <label for="date_birth">date_birth</label>
            </div>
            <div class="form-floating mb-3">
                <input type="text" name="address" class="form-control" id="address" placeholder="address">
                <label for="address">Address</label>
            </div>
            <div class="form-floating mb-3">
                <input type="text" name="phone" class="form-control" id="phone" placeholder="phone">
                <label for="Phone">Phone</label>
            </div>
            <div class="form-floating mb-3">
                <input type="text" name="company" class="form-control" id="Company" placeholder="company">
                <label for="Company">Company</label>
            </div>
            <div class="form-floating mb-3">
                <input type="text" name="job" class="form-control" id="Job" placeholder="job">
                <label for="Job">Job</label>
            </div>
            <div class="form-floating mb-3">
                <input type="file" name="image" class="form-control" id="floatingInput" placeholder="image">
                <label for="image">image</label>
            </div>


            <button type="submit" class="btn btn-success text-success">Create</button>
        </form>
        
    </div>
    
</x-app-layout>