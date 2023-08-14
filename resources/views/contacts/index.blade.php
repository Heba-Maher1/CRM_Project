<x-app-layout>
    <div class="container mt-5">
        <x-alert name='success' id="sucess" class="alert-success"/>
        <div class="d-flex justify-content-between align-items-center mb-4">
            <h1 class="fs-2">All Contacts</h1>
            <a href="{{route('contacts.create')}}" class="btn btn-success">Create</a>
        </div>
        <div class="col-12 text-center my-4">
          <form action="{{ URL::current() }}" method="get">
            <div class="input-group mb-3">
              <input
                type="text"
                class="form-control border-0 shadow-sm p-3"
                placeholder="search username..."
                aria-label="search"
                aria-describedby="button-addon2"
              />
              <button class="btn btn-outline-primary" type="button" id="button-addon2" data-mdb-ripple-color="dark">
                <i class="fa-solid fa-magnifying-glass"></i>
              </button>
            </div>
        </form>
        </div>

        @foreach ($contacts as $contact)
        <div class="accordion mb-3" id="accordionExample">
            <div class="accordion-item">
              <h2 class="accordion-header" id="headingOne">
                <button
                  class="accordion-button"
                  type="button"
                  data-mdb-toggle="collapse"
                  data-mdb-target="#collapseOne"
                  aria-expanded="true"
                  aria-controls="collapseOne"
                >
                  Name: {{ $contact->name }}
                </button>
              </h2>
              <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-mdb-parent="#accordionExample">
                <div class="accordion-body">
                  <img src="{{ Storage::url($contact->image) }}" class="rounded-circle" style="width:100px;height:100px">
                    Date Of Birth: {{$contact->date_birth}}<br>
                    Address:{{ $contact->address }}<br>
                    Phone:{{ $contact->phone }}<br>
                    Company:{{ $contact->company }}<br>
                    Job:{{ $contact->job }}<br>

                  <div class="d-flex justify-content-center">
                    <a href="{{route('contacts.edit' , $contact->id)}}" class="btn btn-outline-primary me-2">Edit</a>
                    <a href="{{route('contacts.show' , $contact->id)}}" class="btn btn-outline-primary me-2">Show</a>
                    <form action="{{route('contacts.destroy' , $contact->id)}}" method="post">
                      @csrf
                      @method('delete')
                      <button type="submit" class="btn btn-outline-primary me-2">Delete</button>
                    </form>
                  </div> 
                </div>
              </div>

            </div>
        </div>
        @endforeach
    </div>    
</x-app-layout>