@extends('backend.master')

@section('content')

<div class="col-lg-8">
    <div class="card">
        <div class="card-header"><strong>Add</strong><small> brand</small></div>
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
        
        <form action="{{route('new-brand')}}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="card-body card-block">
                {{-- brand Name --}}
                <div class="form-group">
                    <label for="brand_name" class=" form-control-label">brand Name</label>
                    <input type="text" id="brand_name" name="brand_name" onblur="getbrandName()" placeholder="Enter brand name" class="form-control">
                    @error('brand_name')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
                {{-- brand_description --}}
                <div class="row form-group">
                    <div class="col col-md-12">
                        <label for="textarea-input" class=" form-control-label">brand Description</label>
                    </div><br/>
                    <div class="col-12 col-md-12">
                        <textarea name="brand_description" id="brand_description" rows="4" placeholder="" class="form-control"></textarea>
                        @error('brand_description')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>
                </div>
                {{-- brand Image --}}
                <div class="row form-group">
                    <div class="col col-md-12">
                        <label for="file-input" class=" form-control-label">brand Image</label>
                    </div>
                    <div class="col-12 col-md-12">
                        <input type="file" id="file-input" name="brand_image" class="form-control-file">
                        @error('brand_image')
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
                <button id="payment-button" type="submit" class="btn btn-lg btn-info btn-block">Add brand</button>
            </div>
        </form>
    </div>
</div>
{{-- <script>
    function getbrandName(){
        var brand_name = $('#brand_name').val();
        var brandName = "";

        $.ajax({
            url: "get-brand-name/"+brand_name,
            method: "GET",
            dataType: "JSON",
            success: function(response){
                // brandName = response;
                // console.log(response);
                var brandName = response.brand_name;
                if(brandName == brand_name){
                    console.log("similar");
                }else{
                    console.log(":ok");
                }
                // $('#productCode').val(result);
                // console.log(a);
            }
            // alert(brandName);
        })
    }
</script>  --}}
@endsection