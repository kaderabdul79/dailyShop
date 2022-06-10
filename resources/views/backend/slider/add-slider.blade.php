@extends('backend.master')

@section('content')

<div class="col-lg-8">
    <div class="card">
        <div class="card-header"><strong>Add</strong><small> slider</small></div>
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
        
        <form action="{{route('new-slider')}}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="card-body card-block">
                {{-- slider title --}}
                <div class="form-group">
                    <label for="slider_name" class=" form-control-label">slider Title</label>
                    <input type="text" id="slider_name" name="title" placeholder="Enter slider name" class="form-control">
                    @error('title')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>

                {{-- slider subtitle --}}
                <div class="form-group">
                    <label for="slider_subtitle" class=" form-control-label">Slider Subtitle</label>
                    <input type="text" id="slider_subtitle" name="subtitle" placeholder="Enter slider subtitle" class="form-control">
                    @error('subtitle')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>

               {{-- slider Image --}}
                <div class="row form-group">
                    <div class="col col-md-12">
                        <label for="file-input" class="form-control-label">slider Image</label>
                    </div>
                    <div class="col-12 col-md-12">
                        <input type="file" id="file-input" name="image" class="form-control-file">
                        @error('image')
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
                <button id="payment-button" type="submit" class="btn btn-lg btn-info btn-block">Add slider</button>
            </div>
        </form>
    </div>
</div>
{{-- <script>
    function getsliderName(){
        var slider_name = $('#slider_name').val();
        var sliderName = "";

        $.ajax({
            url: "get-slider-name/"+slider_name,
            method: "GET",
            dataType: "JSON",
            success: function(response){
                // sliderName = response;
                // console.log(response);
                var sliderName = response.slider_name;
                if(sliderName == slider_name){
                    console.log("similar");
                }else{
                    console.log(":ok");
                }
                // $('#productCode').val(result);
                // console.log(a);
            }
            // alert(sliderName);
        })
    }
</script>  --}}
@endsection