@extends('layouts.app')

@section('content')
<div class="container-fluid">
    <div class="row justify-content-lg-start">

        <aside class="col-2 px-0 " id="left" style="position: fixed;">

            <div class="list-group w-100" >
                <a href="#" id="home" class="list-group-item ">Dashboard</a>
                <a href="#addNews" id="news"  class="list-group-item">Add News</a>
                <a href="#addEvent" id="event"  class="list-group-item">Add new Event</a>
                <a href="#addStaff" id="staff" class="list-group-item">Add new Staff</a>
            </div>
        </aside>
    </div>

    <div class="row justify-content-lg-end">


        <div class="col-10 px-3 py-2 " id="addNews">
            <div class="card">

                <div class="page-wrapper bg-dark p-t-100 p-b-50">
                    <div class="wrapper wrapper--w900">
                        <div class="card card-6">
                            <div class="card-heading">
                                <h2 class="title">Add a new Post</h2>
                            </div>
                            <div class="card-body">
                                <!--form starts here-->
                                <form method="POST" action="/news" enctype="multipart/form-data">
                                    <div class="form-row">
                                        <div class="name">News Title <span style="color: red"> &nbsp;*</span></div>
                                        <div class="value">
                                            <input class="input--style-6" type="text" name="title">
                                            @error('title')
                                            <div class=" alert alert-danger">{{ $message }} </div>
                                            @enderror

                                        </div>

                                    </div>

                                    <div class="form-row">
                                        <div class="name">Upload Image</div>
                                        <div class="value">
                                            <div class="input-group js-input-file">
                                                <label class="label--file" for="image">select a file: </label>
                                                <input type="file" name="image" id="image">
                                            </div>
                                            <div class="label--desc">Upload an image:Max file size 5 MB</div>
                                        </div>
                                    </div>
                                    <div class="form-row">
                                        <div class="name">News Description<span style="color: red"> &nbsp;*</span></div>
                                        <div class="value">
                                            <div class="input-group">
                                                <textarea class="textarea--style-6" name="content" id="editor" placeholder="Write Description for your events"></textarea>
                                            </div>
                                            @error('content')
                                            <div class="alert alert-danger">{{ $message }}</div>
                                            @enderror

                                        </div>
                                    </div>
                                    <div class="form-row">
                                        <div class="name">Upload File</div>
                                        <div class="value">
                                            <div class="input-group js-input-file">
                                                <label class="label--file" for="file">select a file: </label>
                                                <input type="file" name="pdf_file" id="file">
                                            </div>
                                            <div class="label--desc">Upload your files:Max file size 10 MB</div>
                                        </div>
                                    </div>
                                    @csrf
                                    <div class="card-footer">
                                        <button class="btn btn--radius-2 btn--blue-2" type="submit">Add Post</button>
                                    </div>

                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- end col-10 add events -->

        <!-- Area Chart -->
        <div class="col-xl-10 col-lg-5" id="addEvent">
            <div class="card shadow mb-4">
                <!-- Card Header - Dropdown -->
                <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                    <h6 class="m-0 font-weight-bold text-primary">Add Event</h6>
                </div>
                <!-- Card Body -->
                <div class="card-body">
                    <div class="container">
                        <form action="action_page.php">
                            <div class="row">
                                <div class="col-25">
                                    <label for="title">Title</label>
                                </div>
                                <div class="col-75">
                                    <input type="text" id="title" name="title" placeholder="Title of event..">
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-25">
                                    <label for="subject">Description</label>
                                </div>
                                <div class="col-75">
                                    <textarea id="discription" maxlength="100" name="discription" placeholder="Write something.." style="height:200px"></textarea>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-25">
                                    <label for="datetime">Event (Date and Time)</label>
                                </div>
                                <div class="col-75">
                                    <div class="form-group">
                                        <div class='input-group date' id='datetimepicker1'>
                                            <input type='text' class="form-control" />
                                            <span class="input-group-addon">
                                                <span class="glyphicon glyphicon-calendar"></span>
                                            </span>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-25">
                                    <label for="title">Venue</label>
                                </div>
                                <div class="col-75">
                                    <input type="text" id="venue" name="venue" placeholder="">
                                </div>
                            </div>
                            <div class="row">
                                <input type="submit" value="Add Event">
                            </div>
                        </form>
                    </div>

                </div>
            </div>
        </div>
        <!--end of second event-->
        <div class="col-xl-10 col-lg-5" id="addStaff">
            <div class="card shadow mb-4">
                <!-- Card Header - Dropdown -->
                <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                    <h6 class="m-0 font-weight-bold text-primary">Add Staff</h6>

                </div>
                <!-- Card Body -->
                <div class="card-body">
                    <div class="container">
                        <form action="/newstaff" method="POST" enctype="multipart/form-data">
                            <div class="row">
                                <div class="col-25">
                                    <label for="name">Name</label>
                                </div>
                                <div class="col-75">
                                    <input type="text" id="name" name="name">
                                    @error('name')
                                    <div class=" alert alert-danger">{{ $message }} </div>
                                    @enderror
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-25">
                                    <label for="subject">Post</label>
                                </div>
                                <div class="col-75">
                                    <select name="post" id="post">
                                        <option value="Principal">Principal</option>
                                        <option value="SuperVisor">Supervisor</option>
                                        <option value="Teacher">Teacher</option>
                                        <option value="Librarian">Librarian</option>
                                    </select>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-25">
                                    <label for="subject">Description</label>
                                </div>
                                <div class="col-75">
                                    <textarea id="discription" maxlength="50" name="description" placeholder="Write something.." style="height:200px"></textarea>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-25">
                                    <label for="name">Image</label>
                                </div>
                                <div class="col-75">
                                    <input type="file" name="image_uri" id="image" placeholder="select an image">
                                    @error('image_uri')
                                    <div class=" alert alert-danger">{{ $message }} </div>
                                    @enderror

                                </div>
                            </div>
                            @csrf
                            <div class="row">
                                <input type="submit" value="Add Staff">
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @endsection