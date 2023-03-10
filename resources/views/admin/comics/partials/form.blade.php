@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
            <li>
                {{$error}}
            </li>
            @endforeach
        </ul>
    </div>
@endif

<form action="{{ route($route, $comic->id) }}" id="{{$isCreateForm}}" method="POST">
    @csrf
    @method($methodRoute)
    
    <div class="mb-3">
        <label for="title" class="form-label">Title</label>
        <input type="text" class="form-control" id="title" name="title" value="{{ old('title') ?? $comic->title }}">
    </div>
    <div class="mb-3">
        <label for="description" class="form-label">description</label>
        <textarea class="form-control" id="description" name="description">{{  old('description') ?? $comic->description}}</textarea>           
    </div>
    <div class="mb-3">
        <label for="thumb" class="form-label">Thumb</label>
        <textarea class="form-control" id="thumb" name="thumb" >{{  old('thumb') ?? $comic->thumb}}</textarea>           
    </div>
    <div class="mb-3">
        <label for="price" class="form-label">Price</label>
        <input type="number" step="0.01" class="form-control" id="price" name="price" value="{{  old('price') ?? $comic->price}}">
    </div>
    <div class="mb-3">
        <label for="series" class="form-label">Series</label>
        <input type="text" class="form-control" id="series" name="series" value="{{ old('series') ?? $comic->series}}">
    </div>
    <div class="mb-3">
        <label for="sale_date" class="form-label">Sale Date</label>
        <input type="date" class="form-control" id="sale_date" name="sale_date" value="{{  old('sale_date') ?? $comic->sale_date}}">
    </div>
    <div class="mb-3">
        <label for="type" class="form-label">Type</label>
        <input type="text" class="form-control" id="type" name="type" value="{{  old('type') ?? $comic->type}}">
    </div>

    <a href="{{ route('admin.comic.index')}}" class="btn btn-dark">Go Back</a>
    <button type="submit" class="btn btn-primary {{$btnClass}}">Submit</button>
</form>

@vite('resources/js/createComicPopUp.js')
@vite('resources/js/hiddenUpdateBtn.js')
