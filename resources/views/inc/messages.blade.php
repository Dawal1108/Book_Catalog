{{-- success --}}
@if ($message = Session::get('success'))
    <div class="alert alert-success alert-dismissible fade show" role="alert">
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    
        <strong>Success!</strong> {{ $message }}
    </div>
    
@endif

{{-- info --}}
@if ($message = Session::get('info'))
    <div class="alert alert-info alert-dismissible fade show" role="alert">
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    
        <strong>Info!</strong> {{ $message }}
    </div>
    
@endif

{{-- warning --}}
@if ($message = Session::get('warning'))
    <div class="alert alert-warning alert-dismissible fade show" role="alert">
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    
        <strong>Warning!</strong> {{ $message }}
    </div>
    
@endif

{{-- danger --}}
@if ($message = Session::get('danger'))
    <div class="alert alert-danger alert-dismissible fade show" role="alert">
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    
        <strong>Danger!</strong> {{ $message }}
    </div>
    
@endif

{{-- any other errors --}}
@if ($errors->any())
    <div class="alert alert-danger alert-dismissible fade show" role="alert">
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    
        <strong>Error!</strong> Oops something went wrong 
    </div>
    
@endif