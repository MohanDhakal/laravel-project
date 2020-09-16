@extends('layouts.app')

@section('content')
<div class="container-fluid">
    <div class="row justify-content-lg-start">

        <aside class="col-2 px-0 " id="left" style="position: fixed;">

            <div class="list-group w-100">
                <a href="#" id="home" class="list-group-item ">Dashboard</a>
                <a href="#viewNews" id="home" class="list-group-item ">View News</a>
                <a href="#viewEvents" id="home" class="list-group-item ">View Events</a>
                <a href="#viewStaffs" id="home" class="list-group-item ">View Staff</a>

                <a href="#addNews" id="news" class="list-group-item">Add News</a>
                <a href="#addEvent" id="event" class="list-group-item">Add new Event</a>
                <a href="#addStaff" id="staff" class="list-group-item">Add new Staff</a>
                <a href="#resultroutine" id="staff" class="list-group-item">Add Result/Routine</a>
            </div>
        </aside>
    </div>

    <!-- staff table section start-->

    <div class="row justify-content-lg-end">

        <div class="col-10 px-3 py-2 " id="dashboard">
            <div class="card" id="viewStaffs">
                <div class="table-responsive">
                    <div class="table-wrapper">
                        <div class="table-title">
                            <div class="row">
                                <div class="col-sm-6">
                                    <h2>Manage <b>Staff</b></h2>
                                </div>
                            </div>
                        </div>
                        <table class="table table-striped table-hover">
                            <thead>
                                <tr>
                                    <th>Name</th>
                                    <th>Description</th>
                                    <th>Post</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($staffList as $staff)
                                <!-- Delete Modal HTML -->
                                <div id="deleteStaffModal{{$staff->id}}" class="modal fade">
                                    <div class="modal-dialog">
                                        <div class="modal-content">
                                            <form>
                                                <div class="modal-header">
                                                    <h4 class="modal-title">Delete Staff</h4>
                                                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                                                </div>
                                                <div class="modal-body">
                                                    <p>Are you sure you want to delete these Records ?</p>
                                                    <p class="text-warning"><small>This action cannot be undone.</small></p>
                                                </div>
                                                <div class="modal-footer">
                                                    <input type="button" class="btn btn-default" data-dismiss="modal" value="Cancel">
                                                    <a href="/home/delete/staff/{{$staff->id}}" class="btn btn-danger">Delete</a>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>

                                <tr>
                                    <td>{{$staff->name}}</td>
                                    <td>{{$staff->description}}</td>
                                    <td>{{$staff->post}}</td>
                                    <td>
                                        <a href="#editStaffModal{{$staff->id}}" class="edit" data-toggle="modal"><i class="material-icons" data-toggle="tooltip" title="Edit">&#xE254;</i></a>
                                        <a href="#deleteStaffModal{{$staff->id}}" class="delete" data-toggle="modal"><i class="material-icons" data-toggle="tooltip" title="Delete">&#xE872;</i></a>
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>

        </div>
    </div>
    <!-- staff table section end-->


    <!-- events table section Start-->

    <div class="row justify-content-lg-end">

        <div class="col-10 px-3 py-2 " id="dashboard">
            <div class="card" id="viewEvents">
                <div class="table-responsive">
                    <div class="table-wrapper">
                        <div class="table-title">
                            <div class="row">
                                <div class="col-sm-6">
                                    <h2>Manage <b>Event</b></h2>
                                </div>
                            </div>
                        </div>
                        <table class="table table-striped table-hover">
                            <thead>
                                <tr>
                                    <th>Title</th>
                                    <th>Description</th>
                                    <th>Venue</th>
                                    <th>Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($eventList as $event)
                                <tr>
                                    <td>{{$event->title}}</td>
                                    <td>{{$event->description}}</td>
                                    <td>{{$event->venue}}</td>
                                    <td>
                                        <a href="#" onclick='showModal(<?php echo json_encode($event) ?>)' class="edit" data-toggle="modal"><i class="material-icons" data-toggle="tooltip" title="Edit">&#xE254;</i></a>
                                        <a href="#deleteEventModal{{$event->id}}" class="delete" data-toggle="modal"><i class="material-icons" data-toggle="tooltip" title="Delete">&#xE872;</i></a>
                                    </td>
                                </tr>
                                <!-- Delete Modal HTML -->
                                <div id="deleteEventModal{{$event->id}}" class="modal fade">
                                    <div class="modal-dialog">
                                        <div class="modal-content">
                                            <form>
                                                <div class="modal-header">
                                                    <h4 class="modal-title">Delete Event</h4>
                                                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                                                </div>
                                                <div class="modal-body">
                                                    <p>Are you sure you want to delete these Records ?</p>
                                                    <p class="text-warning"><small>This action cannot be undone.</small></p>
                                                </div>
                                                <div class="modal-footer">
                                                    <input type="button" class="btn btn-default" data-dismiss="modal" value="Cancel">
                                                    <a href="/home/delete/event/{{$event->id}}" class="btn btn-danger">Delete</a>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- events table section end-->
    <div id="editEventModal" class="modal fade">
        <div class="modal-dialog">
            <div class="modal-content">
                <form enctype="application/x-www-form-urlencoded" action="/event/update" id="editEventForm" method="POST">
                    @csrf
                    <div class="modal-header">
                        <h4 class="modal-title">Edit Event</h4>
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                    </div>
                    <div class="modal-body">

                        <div class="form-group">
                            <label for="editEventTitle">Title</label>
                            <input type="text" id="editEventTitle" name="editEventTitle" class="form-control" />
                            <input type="hidden" name="eventId" id="eventId" />
                        </div>
                        <div class="form-group">
                            <label for="editEventDescription">Description</label>
                            <textarea name="editEventDescription" id="editEventDescription" class="form-control editor"></textarea>
                        </div>
                        <div class="form-group">
                            <label for="editDate">Event Date</label>
                            <input type="text" id="editDate" name="editDate" />
                        </div>
                        <div class="form-group">
                            <label for="editVenue">Venue</label>
                            <input type="text" id="editVenue" name="editVenue" placeholder="">
                        </div>

                        <div class="form-group">
                            <label for="ediTime">Time(hours/min)</label>
                            <select name="editHour">
                                <option value="1">1</option>
                                <option value="2">2</option>
                                <option value="3">3</option>
                                <option value="4">4</option>
                                <option value="5">5</option>
                                <option value="6">6</option>
                                <option value="7">7</option>
                                <option value="8">8</option>
                                <option value="9">9</option>
                                <option value="10">10</option>
                                <option value="11">11</option>
                                <option value="12">12</option>
                            </select>
                            <select name="editMinute">
                                <option value="05">5</option>
                                <option value="10">10</option>
                                <option value="15">15</option>
                                <option value="20">20</option>
                                <option value="25">25</option>
                                <option value="30">30</option>
                                <option value="35">35</option>
                                <option value="40">40</option>
                                <option value="45">45</option>
                                <option value="50">50</option>
                                <option value="55">55</option>
                                <option value="60">60</option>
                            </select>
                            <select name="editShift">
                                <option value="AM">AM</option>
                                <option value="PM">PM</option>
                            </select>

                        </div>
                    </div>
                    <div class="modal-footer">
                        <input type="submit" onclick="submitEditEventForm('editEventForm')" class="btn btn-info" value="Save">
                    </div>
                </form>
            </div>
        </div>
    </div>

    <!--edit modal -->

    <!--edit modal ends>

    <!-- news table section starts-->
    <div class="row justify-content-lg-end">

        <div class="col-10 px-3 py-2 " id="dashboard">
            <div class="card" id="viewNews">
                <div class="table-responsive">
                    <div class="table-wrapper">
                        <div class="table-title">
                            <div class="row">
                                <div class="col-sm-6">
                                    <h2>Manage <b>News</b></h2>
                                </div>
                            </div>
                        </div>
                        <table class="table table-striped table-hover">
                            <thead>
                                <tr>
                                    <th>Title</th>
                                    <th>Description</th>
                                    <th>Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($newsList as $news)

                                <!-- Delete Modal HTML -->
                                <div id="deleteNewsModal{{$news->id}}" class="modal fade">
                                    <div class="modal-dialog">
                                        <div class="modal-content">
                                            <form>
                                                <div class="modal-header">
                                                    <h4 class="modal-title">Delete News</h4>
                                                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                                                </div>
                                                <div class="modal-body">
                                                    <p>Are you sure you want to delete these Records ?</p>
                                                    <p class="text-warning"><small>This action cannot be undone.</small></p>
                                                </div>
                                                <div class="modal-footer">
                                                    <input type="button" class="btn btn-default" data-dismiss="modal" value="Cancel">
                                                    <a href="/home/delete/news/{{$news->id}}" class="btn btn-danger">Delete</a>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                                <!--delete news -->

                                <!--table row -->
                                <tr>
                                    <td>{{$news->title}}</td>
                                    <td><?php echo $news->content ?></td>
                                    <td>
                                        <!-- <a href="#editNewsModal{{$news->id}}" class="edit" data-toggle="modal"><i class="material-icons" data-toggle="tooltip" title="Edit">&#xE254;</i></a> -->
                                        <a href="#deleteNewsModal{{$news->id}}" class="delete" data-toggle="modal"><i class="material-icons" data-toggle="tooltip" title="Delete">&#xE872;</i></a>
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- events table section end-->

    <!--This section is to add new news -->
    <div class="row justify-content-lg-end">

        <div class="col-10 px-3 py-2 " id="addNews">
            <div class="card">

                <div class="page-wrapper bg-dark p-t-100 p-b-50">
                    <div class="wrapper wrapper--w900">
                        <div class="card card-6">
                            <div class="card-heading">
                                <h3>Add a new News</h3>
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
                                        <div class="name">News Description<span style="color: red"> &nbsp;*</span>
                                        </div>
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
                                        <button class=" btn btn--radius-2 btn--blue-2 " type="submit">Add Post
                                        </button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- end col-10 add events -->

        <div class="col-xl-10 col-lg-5" id="addEvent">
            <div class="card shadow mb-4">
                <!-- Card Header - Dropdown -->
                <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                    <h6 class="m-0 font-weight-bold text-primary">Add Event</h6>
                </div>
                <!-- Card Body -->
                <div class="card-body">
                    <div class="container">
                        <form action="/event" method="post">
                            <div class="row">
                                <div class="col-25">
                                    <label for="title">Title</label>
                                </div>
                                <div class="col-75">
                                    <input type="text" id="title" name="title1" placeholder="Title of event..">
                                    @error('title1')
                                    <div class=" alert alert-danger">{{ $message }} </div>
                                    @enderror
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-25">
                                    <label for="subject">Description</label>
                                </div>
                                <div class="col-75">
                                    <textarea id="description" maxlength="100" name="description1" placeholder="Write something.." style="height:200px"></textarea>
                                    @error('description1')
                                    <div class=" alert alert-danger">{{ $message }} </div>
                                    @enderror

                                </div>
                            </div>

                            <div class="row">
                                <div class="col-25">
                                    <label for="datetime">Event Date</label>

                                </div>
                                <div class="col-75">
                                    <div class="form-group">
                                        <p>
                                            <input type="text" id="nepali-datepicker" name="date" placeholder="Select Nepali Date" />
                                            @error('date')
                                            <div class=" alert alert-danger">{{ $message }} </div>
                                            @enderror

                                        </p>
                                    </div>
                                </div>
                            </div>


                            <div class="row">
                                <div class="col-25">
                                    <label for="title">Time(hours/min)</label>
                                </div>
                                <div class="col-25">
                                    <select name="hour" id="post">
                                        <option value="1">1</option>
                                        <option value="2">2</option>
                                        <option value="3">3</option>
                                        <option value="4">4</option>
                                        <option value="5">5</option>
                                        <option value="6">6</option>
                                        <option value="7">7</option>
                                        <option value="8">8</option>
                                        <option value="9">9</option>
                                        <option value="10">10</option>
                                        <option value="11">11</option>
                                        <option value="12">12</option>
                                    </select>
                                </div>
                                <div class="col-25">
                                    <select name="minute" id="post">
                                        <option value="05">5</option>
                                        <option value="10">10</option>
                                        <option value="15">15</option>
                                        <option value="20">20</option>
                                        <option value="25">25</option>
                                        <option value="30">30</option>
                                        <option value="35">35</option>
                                        <option value="40">40</option>
                                        <option value="45">45</option>
                                        <option value="50">50</option>
                                        <option value="55">55</option>
                                        <option value="60">60</option>
                                    </select>
                                </div>
                                <div class="col-25">
                                    <select name="shift" id="post">
                                        <option value="AM">AM</option>
                                        <option value="PM">PM</option>
                                    </select>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-25">
                                    <label for="venue">Venue</label>
                                </div>
                                <div class="col-75">
                                    <input type="text" id="venue" name="venue" placeholder="">
                                    @error('venue')
                                    <div class=" alert alert-danger">{{ $message }} </div>
                                    @enderror

                                </div>
                            </div>
                            @csrf
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
                                    <label for="phone">Phone Number</label>
                                </div>
                                <div class="col-75">
                                    <input style="width:200px;height:50px;padding-left:10px" type="number" id="phone" name="phone" placeholder="9864567990">
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-25">
                                    <label for="subject">Post</label>
                                </div>
                                <div class="col-75">
                                    <select name="post" id="post">
                                        <option value="Head Teacher">Head Teacher</option>
                                        <option value="Teacher">Teacher</option>
                                        <option value="Lab Assistant">Lab Assistant</option>
                                        <option value="Insructor">Instructor</option>
                                        <option value="Sub Instructor">Sub Instructor</option>
                                        <option value="Librarian">Librarian</option>
                                        <option value="Nursery Teacher">Nursery Teacher</option>
                                        <option value="Accountant">Accountant</option>
                                        <option value="School Helper">School Helper</option>
                                    </select>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-25">
                                    <label for="subject_of_study">Subject</label>
                                </div>
                                <div class="col-75">
                                    <select name="subject_of_study" id="subject_of_study">
                                        <option value="none">None</option>
                                        <option value="Mathematics">Mathematics</option>
                                        <option value="English">English</option>
                                        <option value="Social">Social</option>
                                        <option value="Science">Science</option>
                                        <option value="Account">Account</option>
                                        <option value="HPE">HPE</option>
                                        <option value="Economics">Economics</option>
                                        <option value="Computer">Computer</option>
                                    </select>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-25">
                                    <label for="level">Level</label>
                                </div>
                                <div class="col-75">
                                    <select name="level" id="level">
                                        <option value="hst1">मा.वि.दिृतिय</option>
                                        <option value="hst2">मा.वि.तृतिय</option>
                                        <option value="st1">नि.मा.वि.दृितिय</option>
                                        <option value="st2">नि.मा.वि.तृतिय</option>
                                        <option value="pr1">प्रा.वि.दृितिय</option>
                                        <option value="pr2">प्रा.वि.तृतिय</option>
                                        <option value="pr">प्रा.वि</option>
                                        <option value="other">Others</option>
                                        <option value="helper">School Helper</option>
                                    </select>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-25">
                                    <label for="address">Address</label>
                                </div>
                                <div class="col-75">
                                    <input type="text" id="address" name="address">
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-25">
                                    <label for="subject">Description</label>
                                </div>
                                <div class="col-75">
                                    <textarea id="description" maxlength="50" name="description" placeholder="Write something.." style="height:200px"></textarea>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-25">
                                    <label for="image">Image</label>
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

        <div class="col-xl-10 col-lg-5" id="resultroutine">
            <div class="card-body shadow mb-4">
                <form method="POST" action="/resultroutine" enctype="multipart/form-data">
                    <div class="name">Select Result or Routine :</div>
                    <br>
                    <div class="col-2">
                        <select name="resultroutine" id="resultroutine">
                            <option value="result">Result</option>
                            <option value="routine">Routine</option>
                        </select>
                    </div>
                    <br>
                    <div class="name">Upload PDF File :</div>
                    <br>
                    <div class="value">
                        <div class="input-group js-input-file">
                            <input type="file" name="pdf" id="pdf">
                        </div>
                        @csrf
                        <div class="label--desc">Upload an image:Max file size 5 MB</div>
                        <br>
                        <button class="btn btn--radius-2 btn--blue-2" type="submit">Upload File</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    @endsection