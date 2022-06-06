@extends('backend.master')

@section('content')
<div class="row">
    <div class="col-md-12">
        <div class="overview-wrap"><h2></h2>
            <a href="{{route('add-product')}}"><button class="au-btn au-btn-icon au-btn--blue"><i class="zmdi zmdi-plus"></i>Add product</button>
            </a>
        </div>
    </div>
</div>
<div class="row m-t-10">
    
    <div class="col-md-12">
        <!-- DATA TABLE-->
        <div class="table-responsive m-b-40">
            <table class="table table-borderless table-data3">
                <thead>
                    <tr>
                        <th>Serial No.</th>
                        <th>Name</th>
                        <th>Description</th>
                        <th>Image</th>
                        <th>Publication status</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    @php
                       $i=1; 
                    @endphp
                    @foreach ($products as $product)
                     <tr>
                        <td>{{$i++}}</td>
                        <td>{{$product->product_name}}</td>
                        <td>{{Str::limit($product->product_description, 40)}}</td>
                        <td><img src="{{ asset($product->product_image) }}" alt="product image" width="60px" height="50px" ></td>
                        <td class="process">{{  $product->publication_status == 1 ? 'Published' : 'Unpublished'   }}</td>
                        <td>
                            <a href="{{route('edit-product',$product->id)}}"><button class="item mr-2" data-toggle="tooltip" data-placement="top" title="Edit">
                                <i class="zmdi zmdi-edit"></i>
                            </button></a>
                            <a href="{{route('delete-product',$product->id)}}"><button class="item" data-toggle="tooltip" data-placement="top" title="Delete">
                                <i class="zmdi zmdi-delete"></i>
                            </button></a>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
        <!-- END DATA TABLE-->
    </div>
</div>
@endsection
