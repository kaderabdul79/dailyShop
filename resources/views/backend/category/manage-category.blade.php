@extends('backend.master')

@section('content')
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
                    @foreach ($categories as $category)
                     <tr>
                        <td>{{$i++}}</td>
                        <td>{{$category->category_name}}</td>
                        <td>{{Str::limit($category->category_description, 40)}}</td>
                        <td><img src="{{ asset($category->category_image) }}" alt="" width="60px" height="50px" ></td>
                        <td class="process">{{  $category->publication_status == 1 ? 'Published' : 'Unpublished'   }}</td>
                        <td>
                            <a href="{{route('edit-category',$category->id)}}"><button class="item mr-2" data-toggle="tooltip" data-placement="top" title="Edit">
                                <i class="zmdi zmdi-edit"></i>
                            </button></a>
                            <a href="{{route('delete-category',$category->id)}}"><button class="item" data-toggle="tooltip" data-placement="top" title="Delete">
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
