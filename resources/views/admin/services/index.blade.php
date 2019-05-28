@extends('template')
@section('dashboard')
    <div class="container-fluid elements py-4 tabs">
                    <div class="row">
                        <div class="col-sm-12">
                            <h3>Service</h3>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="card border-0">
                                <div class="card-body">
                                    <div class="row">
                                        
                                        <div class="col-sm-12">
                                            <ul class="nav nav-tabs" id="myTab" role="tablist">
                                                <li class="nav-item">
                                                    <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home-icon" role="tab" aria-controls="home" aria-selected="true"><i class="la la-navicon"></i> Services</a>
                                                </li>
                                                <li class="nav-item">
                                                    <a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile-icon" role="tab" aria-controls="profile" aria-selected="false"><i class="la la-pencil-square"></i> Create New Service</a>
                                                </li>
                                                
                                            </ul>
                                            <div class="tab-content" id="myTabContent">
                                                <div class="tab-pane fade show active" id="home-icon" role="tabpanel" aria-labelledby="home-tab">
                                                    <div class="col-sm-12">
                                                        <table class="table">
                                                            <thead>
                                                                <tr>
                                                                <th scope="col">#</th>
                                                                <th scope="col">Category</th>
                                                                <th scope="col">Name</th>
                                                                <th scope="col">Image</th>
                                                                <th scope="col">Description</th>
                                                                <th scope="col">Price</th>
                                                                </tr>
                                                            </thead>
                                                            <tbody>
                                                                @foreach ($services as $service)
                                                                    <tr>
                                                                        <th scope="row">{{$service->id}}</th>
                                                                        <td>{{$service->category->name}}</td>
                                                                        <td>{{$service->name}}</td>
                                                                        <td>{{$service->image}}</td>
                                                                        <td>{{str_limit($category->description, 25)}}</td>
                                                                        <td>{{$service->price}}</td>
                                                                    </tr>
                                                                @endforeach
                                                            </tbody>
                                                        </table>
                                                    </div>
                                                </div>
                                                <div class="tab-pane fade" id="profile-icon" role="tabpanel" aria-labelledby="profile-tab">
                                                    <form role="form" method="POST" action="{{ action('ServiceController@store') }}" enctype="multipart/form-data">
                                                        @csrf
                                                        <div style="margin-top:8px;" class="form-group">
                                                            <label>Name</label>
                                                            <input name="name" type="text" class="form-control" placeholder="Enter ..." required>
                                                        </div>
                                                        <div class="form-group">
                                                            <label>Select Category</label>
                                                            <select name="category_id" class="form-control">
                                                                @foreach ($categories as $category)
                                                                    <option value="{{$category->id}}">{{$category->name}}</option>
                                                                @endforeach
                                                            </select>
                                                        </div>
                                                        <!-- textarea -->
                                                        <div class="form-group">
                                                            <label>Description</label>
                                                            <textarea name="description" class="form-control" rows="3" placeholder="Enter ..." required></textarea>
                                                        </div>
                                                        <div class="form-group">
                                                            <label>Price</label>
                                                            <input name="price" type="number" class="form-control" placeholder="Enter ..." required>
                                                        </div>
                                                        <div class="form-group">
                                                            <label>Image</label><br/>
                                                            <input type="file" name="image" required>
                                                        </div>
                                                        <div class="form-group">
                                                            <button type="submit" class="btn btn-info"> <i class="fa fa-check"></i> Save</button>
                                                        </div>
                                                    </form>
                                                </div>
                                                
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
@endsection
