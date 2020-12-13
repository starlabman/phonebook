<div>
    <h1>Find a Contact </h1>

    @if(session()->has('message'))
        <div class="alert alert-info">
            {{ session('message')}}
        </div>
        
    @endif

    <form wire:submit.prevent="searchByName">
        <div class="input-group mb-3">
            <input type="text"wire:model="name" class="form-control" placeholder="Friend's username" aria-label="Friend's username" aria-describedby="basic-addon2" autocomplete="off">
            <div class="input-group-append">
                <span class="input-group-text" id="basic-addon2">&#128216;</span>
            </div>
        </div>
    </form>

    <div wire:loading wire:target="searchByName">
            Loading ...
    </div>


    @if(count($contacts)>0)
    <div class="list-group mt-2">
        @foreach($contacts as $contact)
            <div class="list-group-item list-group-item-action">
                <div class="d-flex w-100 justify-content-between">
                    <h5 class="mb-1"> {{$contact['name']}} </h5>
                    <small class="text-muted">{{$contact['email']}}</small>
                </div>
                <p class="mb-1"> {{$contact['city']}} </p>
                    <small class="text-muted">{{$contact['city']}}</small>
            </div>
        @endforeach
    </div>
</div>

