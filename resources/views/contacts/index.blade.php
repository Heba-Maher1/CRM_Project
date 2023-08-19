<x-app-layout>
    <div class="container mt-5 px-5">
        <div class="col-12 text-center my-4">
          <form action="{{ URL::current() }}" method="get">
            <div class="input-group mb-3">
              <input
                type="text"
                class="form-control border-0 shadow-sm p-3 rounded"
                placeholder="search contact"
                aria-label="search"
                aria-describedby="button-addon2"
                name="search"
              />
              <button class="btn text-color" type="button" id="button-addon2" data-mdb-ripple-color="dark" style="position: absolute;right: 0;top: 11px;">
                <i class="fa-solid fa-magnifying-glass"></i>
              </button>
            </div>
          </form>
        </div>

        <x-alert name='success' id="sucess" class="alert-success"/>

        <div class="d-flex justify-content-between align-items-center">
            <h1 class="fs-2">All Contacts</h1>
            <a href="{{route('contacts.create')}}" class="btn text-white bg-color">Create</a>
        </div>
        <p class="m-0 p-0 text-secondary">contacts ({{ $count }})</p>
        <ul>
          @foreach ($contacts as $contact)
            <li class="contact-item d-flex align-items-center justify-content-between border-bottom mb-3 p-3">
              <div class="d-flex align-items-center">
                  @if($contact->image)
                    <img src="{{ Storage::url($contact->image) }}" class="rounded-circle me-3" style="width:30px;height:30px">
                  @else
                    <img src="https://ui-avatars.com/api/?name={{ $contact->name }}" class="rounded-circle me-3" width="30" height="30" alt="{{ $contact->name }}"> 
                  @endif
                    <p class="text-bold">{{ $contact->name }}</p> 
              </div>
              <div class="dropdown">
                  <button class="border-0 dropdown-toggle" type="button" id="postMenu{{ $contact->id }}" data-bs-toggle="dropdown" aria-expanded="false">
                      <i class="fas fa-ellipsis-v"></i>
                  </button>
                    <ul class="dropdown-menu" aria-labelledby="postMenu{{ $contact->id }}">
                      <li><a class="dropdown-item" href="{{ route('contacts.edit', $contact->id) }}">Edit</a></li>
                      <li><a class="dropdown-item" href="{{ route('contacts.show', $contact->id) }}">show</a></li>
                      <li>
                          <form action="{{ route('contacts.destroy', $contact->id) }}" method="post">
                              @csrf
                              @method('delete')
                              <button type="submit" class="dropdown-item">Delete</button>
                          </form>   
                      </li>     
                    </ul>
              </div>
            </li>
          @endforeach
        </ul>
    </div>    
</x-app-layout>

<style>
  .dropdown-toggle::after {
    display: none;
    margin-left: 0.255em;
    vertical-align: 0.255em;
    content: "";
    border-top: 0.3em solid;
    border-right: 0.3em solid transparent;
    border-bottom: 0;
    border-left: 0.3em solid transparent;
    }
    .contact-item {
        transition: background-color 0.3s;
        position: relative;
    }

    .contact-item:hover {
      background: #ab92d3;
      border-radius: 5px;
    }

    .contact-item .dropdown-toggle {
        opacity: 0;
        transition: opacity 0.3s;
        position: absolute;
        right: 0;
    }

    .contact-item:hover .dropdown-toggle {
        opacity: 1;
    }

</style>