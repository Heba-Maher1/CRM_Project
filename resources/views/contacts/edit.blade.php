<x-app-layout>
    
    <div class="container mt-5  px-5">
        <h1 class="fs-2 my-4">Update Contact , {{$contact->id}}</h1>
        <form action="{{ route('contacts.update' , $contact->id)}}" method="post" enctype="multipart/form-data">
            @csrf
            @method('put')
            @include('contacts._form' , [
                'button_lable' => 'Edit '
            ])
        </form>
        
    </div>
    
</x-app-layout>