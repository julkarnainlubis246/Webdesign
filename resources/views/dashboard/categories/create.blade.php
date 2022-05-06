@extends('dashboard.layouts.main')
@section('container')

    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
         <h1 class="h2">Create New Category</h1>
    </div>
{{-- form input --}}
    <div class="col-lg-8">
        <form action="/dashboard/categories" method="post">
                @csrf                
                <label for="slug" class="form-label"></label>
                <input type="hidden" class="form-control" id="slug" name="slug" required value="{{ old('slug') }}">                
            <div class="mb-3">
                <label for="name" class="form-label">Title</label>
                <input value="{{ old('name') }}" type="text" class="form-control @error('name') is-invalid @enderror " id="name" name="name">
                @error('name')
                <div class="invalid-feedback">
                  {{ $message }}
                </div>
                @enderror
            </div>
            <div class="mb-3">
                <label for="keterangan" class="form-label">Keterangan</label>
                <input type="text" class="form-control @error('keterangan') is-invalid @enderror" id="keterangan" name="keterangan" value="{{ old('keterangan') }}">
                @error('keterangan')
                <div class="invalid-feedback">
                  {{ $message }}
                </div>
                @enderror           
            </div>            
            <button type="submit" class="btn btn-primary">Save</button>
        </form>
    </div>
{{-- end form input --}}


<script>

    const title = document.querySelector('#name');
    const slug = document.querySelector('#slug');
    
    title.addEventListener('change', function() {
        fetch('/dashboard/posts/checkSlug?title=' + title.value)
        .then(response => response.json())
        .then(data => slug.value = data.slug)

    });

    document.addEventListener('trix-file-accept', function(e) {
        e.preventDefault();
    })

</script>

@endsection