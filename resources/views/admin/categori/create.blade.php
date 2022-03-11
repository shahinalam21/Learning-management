@extends('admin.layout.layout')

@section('categori')
<div class="container-fluid">
    <div class="row">
        <div class="col-md-4">
            <h2 class="btn btn-info">Add Category</h2>
        </div>
        <div class="col-md-8">
            <div class="card">
                <div class="card-body">
                    <form>
                        <div class="form-group">
                          <label for="category">Category</label>
                          <input type="text" name="category" class="form-control" placeholder="Enter category">
                        
                        </div>
                        <button type="submit" class="btn btn-primary">Submit</button>
                      </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection