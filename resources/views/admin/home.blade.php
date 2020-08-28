@extends('layouts.app')

@section('content')
<div class="container-fluid">
    <div class="row justify-content-lg-start">

        <aside class="col-2 px-0" id="left">

            <div class="list-group w-100">
                <a href="#" class="list-group-item  active">Dashboard</a>
                <a href="#" class="list-group-item">Add News</a>
                <a href="#" class="list-group-item">Add new Event</a>
            </div>
        </aside>

        <div class="col-10 px-0">
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
    </div>
</div>
@endsection