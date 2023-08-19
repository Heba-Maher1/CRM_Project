<x-app-layout>
    
    <div class="container mt-5  px-5">
        <h1 class="fs-2 my-4">Create New Contact</h1>
        <form action="{{ route('contacts.store') }}" method="post" enctype="multipart/form-data">
            @csrf

            @include('contacts._form' , [
                'button_lable' => 'Create '
            ])
        </form>
        
    </div>
    
</x-app-layout>
