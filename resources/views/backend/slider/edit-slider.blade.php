{{-- @extends('backend.master')

@section('content')

<div class="col-lg-8">
    <div class="card">
        <div class="card-header"><strong>Edit</strong><small> slider</small></div>
        {{-- <?php  $a = Session::get('message')     ?>
        <script>
            setInterval(() => {
                let msg = document.getElementById('#show-message');
                msg.text = $a
            }, 3000);
        </script>
        <p id="show-message" class="bg-info"></p> --}}
        {{-- <p class="bg-info">{{ Session::get('message')}}</p> --}}
        <form action="{{route('update-slider')}}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="card-body card-block">
                <input name="slider_id" value="{{$slider->id}}" type="hidden" class="form-control" id="exampleFormControlInput1">
                {{-- slider Name --}}
                <div class="form-group">
                    <label for="slider_name" class=" form-control-label">slider Name</label>
                    <input type="text" id="slider_name" value="{{$slider->slider_name}}" name="slider_name" placeholder="Enter slider name" class="form-control">
                </div>
                {{-- slider_description --}}
                <div class="row form-group">
                    <div class="col col-md-12">
                        <label for="textarea-input" class=" form-control-label">slider Description</label>
                    </div><br/>
                    <div class="col-12 col-md-12">
                        <textarea name="slider_description" value="{{$slider->slider_description}}" id="slider_description" rows="4" placeholder="" class="form-control"></textarea>
                    </div>
                </div>
                {{-- slider Image --}}
                <div class="row form-group">
                    <div class="col col-md-12">
                        <label for="file-input" class=" form-control-label">slider Image</label>
                    </div>
                    <div class="col-12 col-md-12">
                        <input type="file" id="file-input" value="{{$slider->slider_image}}" name="slider_image" class="form-control-file">
                        <img src="{{ asset($slider->slider_image) }}" alt="" width="60px" height="50px" >
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
                                <input type="radio" id="inline-radio1" name="publication_status" value="1" {{  $slider->publication_status == 1 ? 'checked' : ''  }} class="form-check-input">Published
                            </label>
                            <label for="inline-radio2" class="form-check-label ">
                                <input type="radio" id="inline-radio2" name="publication_status" value="0" {{  $slider->publication_status == 0 ? 'checked' : ''   }} class="form-check-input">Unpublished
                            </label>
                        </div>
                    </div>
                </div>
                <button id="payment-button" type="submit" class="btn btn-lg btn-info btn-block">Add slider</button>
            </div>
        </form>
    </div>
</div>

@endsection --}}