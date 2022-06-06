@extends('backend.master')

@section('content')

<div class="col-lg-8">
    <div class="card">
        <div class="card-header"><strong>Add</strong><small> Product</small></div>
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
        
        <form action="{{route('update-product')}}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="card-body card-block">
                  {{-- Select Brand --}}
                  <div class="row form-group">
                    <div class="col col-md-12">
                        <label for="selectLg" class=" form-control-label">Select Brand</label>
                    </div>
                    <div class="col-12 col-md-12">
                        <select name="brand_id" id="brand_id" class="form-control-lg form-control">
                            @foreach ($brands as $brand)
                            <option value="{{$brand->id}}">{{$brand->brand_name}}</option>
                            @endforeach
                        </select>
                    </div>
                </div>

                {{-- Select Category --}}
                <div class="row form-group">
                    <div class="col col-md-12">
                        <label for="selectLg" class=" form-control-label">Select Category</label>
                    </div>
                    <div class="col-12 col-md-12">
                        <select name="category_id" id="category_id" class="form-control-lg form-control">
                            @foreach ($categories as $category)
                            <option value="{{$category->id}}">{{$category->category_name}}</option>
                            @endforeach
                        </select>
                    </div>
                </div>

                {{-- product Name --}}
                <div class="form-group">
                    <label for="product_name" class=" form-control-label">Product Name</label>
                    <input type="text" id="product_name" value="{{$product->product_name}}" name="product_name" placeholder="Enter product name" class="form-control">
                    @error('product_name')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>

                {{-- product Code --}}
                <div class="form-group">
                    <label for="product_code" class=" form-control-label">Product Code</label>
                    <input type="text" id="product_code" name="product_code" value="{{$product->product_code}}" placeholder="Enter product code" class="form-control">
                    @error('product_code')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>

                {{-- product Price --}}
                <div class="form-group">
                    <label for="product_price" class=" form-control-label">Product Price</label>
                    <input type="text" id="product_price" name="product_price" value="{{$product->product_price}}" placeholder="Enter product price" class="form-control">
                    @error('product_price')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>

                {{-- product Quantity --}}
                <div class="form-group">
                    <label for="product_quantity" class=" form-control-label">Product Quantity</label>
                    <input type="text" id="product_quantitye" name="product_quantity" value="{{$product->product_quantity}}" placeholder="Enter product quantity" class="form-control">
                    @error('product_quantity')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>

                {{-- product Short description --}}
                <div class="form-group">
                    <label for="product_short_description" class=" form-control-label">Product Short Description</label>
                    <input type="text" id="product_short_description" name="product_short_description" value="{{$product->product_short_description}}" placeholder="write short description" class="form-control">
                    @error('product_short_description')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>

                {{-- product_long description --}}
                <div class="row form-group">
                    <div class="col col-md-12">
                        <label for="textarea-input" class=" form-control-label">product long Description</label>
                    </div><br/>
                    <div class="col-12 col-md-12">
                        <textarea name="product_long_description" id="product_long_description" value="{{$product->product_long_description}}" rows="4" placeholder="" class="form-control"></textarea>
                        @error('product_long_description')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>
                </div>  

                {{-- product Image --}}
                <div class="row form-group">
                    <div class="col col-md-12">
                        <label for="file-input" class=" form-control-label">product Image</label>
                    </div>
                    <div class="col-12 col-md-12">
                        <input type="file" id="file-input" name="product_image" value="{{$product->product_image}}" class="form-control-file">
                        <img src="{{ asset($product->product_image) }}" alt="" width="60px" height="50px" > @error('product_image')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>
                </div>

                {{-- product SubImage --}}
                <div class="row form-group">
                    <div class="col col-md-12">
                        <label for="file-input" class=" form-control-label">product Sub Images</label>
                    </div>
                    <div class="col-12 col-md-12">
                        <input class="form-control-file" multiple name="file[]" type="file" id="file-input">
                        <?php $productSubImages = \App\Models\SubImage::where('product_id',$product->id)->get(); ?>
                            @foreach ($productSubImages as $item)
                                <img src="{{ asset($item->sub_image) }}" alt="" width="60px" height="50px" border="2px solid green" >
                            @endforeach
                         @error('product_image')
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
                                <input type="radio" id="inline-radio1" name="publication_status" value="1" {{  $product->publication_status == 1 ? 'checked' : ''  }} class="form-check-input">Published
                            </label>
                            <label for="inline-radio2" class="form-check-label ">
                                <input type="radio" id="inline-radio2" name="publication_status" value="0" {{  $product->publication_status == 0 ? 'checked' : ''   }} class="form-check-input">Unpublished
                            </label>

                            @error('publication_status')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror

                        </div>
                    </div>
                </div>
                <button id="payment-button" type="submit" class="btn btn-lg btn-info btn-block">Update Product</button>
            </div>
        </form>
    </div>
</div>
@endsection