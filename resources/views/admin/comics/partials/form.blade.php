@foreach ($errors->all() as $error)
    @dump($error)
@endforeach

<form action="{{ route($route, $comic->id) }}" method="POST">
    @csrf
    @method($methodRoute)
    
    <div class="mb-3">
        <label for="title" class="form-label">Title</label>
        <input type="text" class="form-control" id="title" name="title" value="{{$comic->title}}">
    </div>
    <div class="mb-3">
        <label for="description" class="form-label">description</label>
        <textarea class="form-control" id="description" name="description" >{{$comic->description}}</textarea>           
    </div>
    <div class="mb-3">
        <label for="thumb" class="form-label">Thumb</label>
        <textarea class="form-control" id="thumb" name="thumb" >{{$comic->thumb}}</textarea>           
    </div>
    <div class="mb-3">
        <label for="price" class="form-label">Price</label>
        <input type="number" step="0.01" class="form-control" id="price" name="price" value="{{$comic->price}}">
    </div>
    <div class="mb-3">
        <label for="series" class="form-label">Series</label>
        <input type="text" class="form-control" id="series" name="series" value="{{$comic->series}}">
    </div>
    <div class="mb-3">
        <label for="sale_date" class="form-label">Sale Date</label>
        <input type="date" class="form-control" id="sale_date" name="sale_date" value="{{$comic->sale_date}}">
    </div>
    <div class="mb-3">
        <label for="type" class="form-label">Type</label>
        <input type="text" class="form-control" id="type" name="type" value="{{$comic->type}}">
    </div>

    <button type="submit" class="btn btn-primary">Submit</button>
</form>