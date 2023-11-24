@extends('layout.app')
@section('css')
    <link rel="stylesheet" href="{{asset('css/users/index.css')}}">
@endsection
@section('content')
    <div class="d-flex justify-content-between align-items-center">
        <div class="title">
            <h2>Users</h2>
        </div>
        <div>
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item">
                        <i class='bx bx-home-smile' style="color: #556EE6"></i>
                        <a href="#">Home</a>
                    </li>
                    <li class="breadcrumb-item active" aria-current="page">
                        <i class="bx bx-user" style="color: #556EE6"></i>
                        Users
                    </li>
                </ol>
            </nav>
        </div>
    </div>
    {{-- start Card --}}
    <div class="card-app">
        <div class="row d-flex justify-content-between align-items-baseline">
            <div class="col-md-4">
                <h3> Users (5,300) </h3>
            </div>
            <div class="col-md-6 d-flex justify-content-end">
                <a class="btn btn-success">
                    <i class="bx bx-user"></i>
                    Create User
                </a>
            </div>
        </div>

        <div class="detailsTable table-responsive">
            <table class="table overScroll">
                <thead>
                <tr>
                    <th># </th>
                    <th>User Name</th>
                    <th>Date</th>
                    <th>user Status</th>
                    <th>Actions</th>
                </tr>
                </thead>

                <tbody>
                    <tr>
                        <td>1</td>
                        <td>Neal Matthews</td>
                        <td>07 Oct, 2019</td>
                        <td> <span class="green">active</span> </td>
                        <td class="have-links">
                            <a href="#">
                                <i class='bx bx-dots-vertical-rounded' style="font-size: 20px"></i>
                                <ul class="table-dropdown" style="display: none">
                                    <li>
                                        <i class='bx bx-show'></i> Show
                                    </li>
                                    <li>
                                        <i class='bx bx-pencil'></i> Edit
                                    </li>
                                    <li>
                                        <i class='bx bx-trash'></i> Delete
                                    </li>
                                    <li>
                                        <i class='bx bx-block'></i> Disable
                                    </li>
                                </ul>
                            </a>
                        </td>
                    </tr>
                    <tr>
                        <td>1</td>
                        <td>Neal Matthews</td>
                        <td>07 Oct, 2019</td>
                        <td> <span class="green">active</span> </td>
                        <td class="have-links">
                            <a href="#">
                                <i class='bx bx-dots-vertical-rounded' style="font-size: 20px"></i>
                                <ul class="table-dropdown" style="display: none">
                                    <li>
                                        <i class='bx bx-show'></i> Show
                                    </li>
                                    <li>
                                        <i class='bx bx-pencil'></i> Edit
                                    </li>
                                    <li>
                                        <i class='bx bx-trash'></i> Delete
                                    </li>
                                    <li>
                                        <i class='bx bx-block'></i> Disable
                                    </li>
                                </ul>
                            </a>
                        </td>
                    </tr>
                    <tr>
                        <td>1</td>
                        <td>Neal Matthews</td>
                        <td>07 Oct, 2019</td>
                        <td> <span class="green">active</span> </td>
                        <td class="have-links">
                            <a href="#">
                                <i class='bx bx-dots-vertical-rounded' style="font-size: 20px"></i>
                                <ul class="table-dropdown" style="display: none">
                                    <li>
                                        <i class='bx bx-show'></i> Show
                                    </li>
                                    <li>
                                        <i class='bx bx-pencil'></i> Edit
                                    </li>
                                    <li>
                                        <i class='bx bx-trash'></i> Delete
                                    </li>
                                    <li>
                                        <i class='bx bx-block'></i> Disable
                                    </li>
                                </ul>
                            </a>
                        </td>
                    </tr>
                    <tr>
                        <td>1</td>
                        <td>Neal Matthews</td>
                        <td>07 Oct, 2019</td>
                        <td> <span class="green">active</span> </td>
                        <td class="have-links">
                            <a href="#">
                                <i class='bx bx-dots-vertical-rounded' style="font-size: 20px"></i>
                                <ul class="table-dropdown" style="display: none">
                                    <li>
                                        <i class='bx bx-show'></i> Show
                                    </li>
                                    <li>
                                        <i class='bx bx-pencil'></i> Edit
                                    </li>
                                    <li>
                                        <i class='bx bx-trash'></i> Delete
                                    </li>
                                    <li>
                                        <i class='bx bx-block'></i> Disable
                                    </li>
                                </ul>
                            </a>
                        </td>
                    </tr>
                    <tr>
                        <td>1</td>
                        <td>Neal Matthews</td>
                        <td>07 Oct, 2019</td>
                        <td> <span class="green">active</span> </td>
                        <td class="have-links">
                            <a href="#">
                                <i class='bx bx-dots-vertical-rounded' style="font-size: 20px"></i>
                                <ul class="table-dropdown" style="display: none">
                                    <li>
                                        <i class='bx bx-show'></i> Show
                                    </li>
                                    <li>
                                        <i class='bx bx-pencil'></i> Edit
                                    </li>
                                    <li>
                                        <i class='bx bx-trash'></i> Delete
                                    </li>
                                    <li>
                                        <i class='bx bx-block'></i> Disable
                                    </li>
                                </ul>
                            </a>
                        </td>
                    </tr>
                    <tr>
                        <td>1</td>
                        <td>Neal Matthews</td>
                        <td>07 Oct, 2019</td>
                        <td> <span class="green">active</span> </td>
                        <td class="have-links">
                            <a href="#">
                                <i class='bx bx-dots-vertical-rounded' style="font-size: 20px"></i>
                                <ul class="table-dropdown" style="display: none">
                                    <li>
                                        <i class='bx bx-show'></i> Show
                                    </li>
                                    <li>
                                        <i class='bx bx-pencil'></i> Edit
                                    </li>
                                    <li>
                                        <i class='bx bx-trash'></i> Delete
                                    </li>
                                    <li>
                                        <i class='bx bx-block'></i> Disable
                                    </li>
                                </ul>
                            </a>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
    {{-- end Card --}}
@endsection
