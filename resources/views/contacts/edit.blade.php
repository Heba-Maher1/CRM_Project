<x-app-layout>
    <div class="container mt-4">
        <h1 class="mb-4">Update Contact</h1>
        <form action="{{ route('contacts.update' , $contact->id)}}" method="post" enctype="multipart/form-data">
            @csrf
            @method('put')
            @include('contacts._form' , [
                'button_lable' => 'Edit '
            ])
        </form>
        
    </div>
    
</x-app-layout>