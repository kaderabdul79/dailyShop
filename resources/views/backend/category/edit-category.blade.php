@extends('backend.master')

@section('content')

<div class="col-lg-8">
    <div class="card">
        <div class="card-header"><strong>Edit</strong><small> Category</small></div>
        {{-- <?php  $a = Session::get('message')     ?>
        <script>
            setInterval(() => {
                let msg = document.getElementById('#show-message');
                msg.text = $a
            }, 3000);
        </script>
        <p id="show-message" class="bg-info"></p> --}}
        {{-- <p class="bg-info">{{ Session::get('message')}}</p> --}}
        <form action="{{route('update-category')}}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="card-body card-block">
                <input name="category_id" value="{{$category->id}}" type="hidden" class="form-control" id="exampleFormControlInput1">
                {{-- Category Name --}}
                <div class="form-group">
                    <label for="category_name" class=" form-control-label">Category Name</label>
                    <input type="text" id="category_name" value="{{$category->category_name}}" name="category_name" placeholder="Enter category name" class="form-control">
                </div>
                {{-- category_description --}}
                <div class="row form-group">
                    <div class="col col-md-12">
                        <label for="textarea-input" class=" form-control-label">Category Description</label>
                    </div><br/>
                    <div class="col-12 col-md-12">
                        <textarea name="category_description" value="{{$category->category_description}}" id="category_description" rows="4" placeholder="" class="form-control"></textarea>
                    </div>
                </div>
                {{-- Category Image --}}
                <div class="row form-group">
                    <div class="col col-md-12">
                        <label for="file-input" class=" form-control-label">Category Image</label>
                    </div>
                    <div class="col-12 col-md-12">
                        <input type="file" id="file-input" value="{{$category->category_image}}" name="category_image" class="form-control-file">
                        <img src="{{ asset($category->category_image) }}" alt="" width="60px" height="50px" >
                    </div>
                </div>
                {{-- Publication Status --}}
                <div class="row form-group">
                    <div class="col col-md-12">
                        <label class=" form-control-label">Publication Status</label>
                    </div>
                    <div class="col col-md-12">
                        <div class="form-check-inline form-check">
                            <label for="inline-radio1" class="form-check-label">
                                <input type="radio" id="inline-radio1" name="publication_status" value="1" {{  $category->publication_status == 1 ? 'checked' : ''  }} class="form-check-input">Published
                            </label>
                            <label for="inline-radio2" class="form-check-label ">
                                <input type="radio" id="inline-radio2" name="publication_status" value="0" {{  $category->publication_status == 0 ? 'checked' : ''   }} class="form-check-input">Unpublished
                            </label>
                        </div>
                    </div>
                </div>
                <button id="payment-button" type="submit" class="btn btn-lg btn-info btn-block">Add Category</button>
            </div>
        </form>
    </div>
</div>

@endsection