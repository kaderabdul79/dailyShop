@extends('backend.master')

@section('content')

<div class="col-lg-8">
    <div class="card">
        <div class="card-header"><strong>Add</strong><small> Category</small></div>
        {{-- <?php  $a = Session::get('message')     ?>
        <script>
            setInterval(() => {
                let msg = document.getElementById('#show-message');
                msg.text = $a
            }, 3000);
        </script>
        <p id="show-message" class="bg-info"></p> --}}
        {{-- <p class="bg-info">{{ Session::get('message')}}</p> --}}
        @if (Session::has('message'))
        <div class="sufee-alert alert with-close alert-primary alert-dismissible fade show">
            <span class="badge badge-pill badge-primary">Success</span>
            {{ Session::get('message')}}
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">×</span>
            </button>
        </div>
        @endif
        
        <form action="{{route('new-category')}}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="card-body card-block">
                {{-- Category Name --}}
                <div class="form-group">
                    <label for="category_name" class=" form-control-label">Category Name</label>
                    <input type="text" id="category_name" name="category_name" placeholder="Enter category name" class="form-control">
                    @error('category_name')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
                {{-- category_description --}}
                <div class="row form-group">
                    <div class="col col-md-12">
                        <label for="textarea-input" class=" form-control-label">Category Description</label>
                    </div><br/>
                    <div class="col-12 col-md-12">
                        <textarea name="category_description" id="category_description" rows="4" placeholder="" class="form-control"></textarea>
                        @error('category_description')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>
                </div>
                {{-- Category Image --}}
                <div class="row form-group">
                    <div class="col col-md-12">
                        <label for="file-input" class=" form-control-label">Category Image</label>
                    </div>
                    <div class="col-12 col-md-12">
                        <input type="file" id="file-input" name="category_image" class="form-control-file">
                        @error('category_image')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
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
                                <input type="radio" id="inline-radio1" name="publication_status" value="1" class="form-check-input">Published
                            </label>
                            <label for="inline-radio2" class="form-check-label ">
                                <input type="radio" id="inline-radio2" name="publication_status" value="0" class="form-check-input">Unpublished
                            </label>

                            @error('publication_status')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                            
                        </div>
                    </div>
                </div>
                <button id="payment-button" type="submit" class="btn btn-lg btn-info btn-block">Add Category</button>
            </div>
        </form>
    </div>
</div>

@endsection