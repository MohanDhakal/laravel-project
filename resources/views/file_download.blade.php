<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Bootstrap Data Table with Filter Row Feature</title>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto|Varela+Round">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://fonts.googleapis.com/css?family=Poppins:200,300,400,500,600,700,800,900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="<?php echo url('/'); ?>/css/open-iconic-bootstrap.min.css">
    <link rel="stylesheet" href="<?php echo url('/'); ?>/css/animate.css">
    <link rel="stylesheet" href="<?php echo url('/'); ?>/css/bootstrap.min.css">

    <link rel="stylesheet" href="<?php echo url('/'); ?>/css/owl.carousel.min.css">
    <link rel="stylesheet" href="<?php echo url('/'); ?>/css/owl.theme.default.min.css">
    <link rel="stylesheet" href="<?php echo url('/'); ?>/css/magnific-popup.css">
    <link rel="stylesheet" href="<?php echo url('/'); ?>/css/aos.css">

    <link rel="stylesheet" href="<?php echo url('/'); ?>/css/ionicons.min.css">

    <link rel="stylesheet" href="<?php echo url('/'); ?>/css/flaticon.css">
    <link rel="stylesheet" href="<?php echo url('/'); ?>/css/icomoon.css">
    <link rel="stylesheet" href="<?php echo url('/'); ?>/css/style.css">
    <link rel="stylesheet" href="<?php echo url('/'); ?>/css/event.css">

    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
    <style>
        body {
            background: #f5f5f5;
            font-family: 'Roboto', sans-serif;
        }

        .table-responsive {
            margin: 30px 0;
        }

        .table-wrapper {
            width: 850px;
            background: #fff;
            margin: 0 auto;
            padding: 20px 30px 5px;
            box-shadow: 0 0 1px 0 rgba(0, 0, 0, .25);
        }

        .table-title .btn-group {
            float: right;
        }

        .table-title .btn {
            min-width: 50px;
            border-radius: 2px;
            border: none;
            padding: 6px 12px;
            font-size: 95%;
            outline: none !important;
            height: 30px;
        }

        .table-title {
            min-width: 100%;
            border-bottom: 1px solid #e9e9e9;
            padding-bottom: 15px;
            margin-bottom: 5px;
            margin: -20px -31px 10px;
            padding: 15px 30px;
            color: #fff;
        }

        .table-title h2 {
            margin: 2px 0 0;
            font-size: 24px;
        }

        table.table {
            min-width: 100%;
        }

        table.table tr th,
        table.table tr td {
            border-color: #e9e9e9;
            padding: 12px 15px;
            vertical-align: middle;
        }

        table.table tr th:first-child {
            width: 40px;
        }

        table.table tr th:last-child {
            width: 100px;
        }

        table.table-striped tbody tr:nth-of-type(odd) {
            background-color: #fcfcfc;
        }

        table.table-striped.table-hover tbody tr:hover {
            background: #f5f5f5;
        }

        table.table td a {
            color: #2196f3;
        }

        table.table td .btn.manage {
            padding: 2px 10px;
            background: #37BC9B;
            color: #fff;
            border-radius: 2px;
        }

        table.table td .btn.manage:hover {
            background: #2e9c81;
        }
    </style>
    <script>
        $(document).ready(function() {
            $(".btn-group .btn").click(function() {
                var inputValue = $(this).find("input").val();
                if (inputValue != 'all') {
                    var target = $('table tr[data-status="' + inputValue + '"]');
                    $("table tbody tr").not(target).hide();
                    target.fadeIn();
                } else {
                    $("table tbody tr").fadeIn();
                }
            });
            // Changing the class of status label to support Bootstrap 4
            var bs = $.fn.tooltip.Constructor.VERSION;
            var str = bs.split(".");
            if (str[0] == 4) {
                $(".label").each(function() {
                    var classStr = $(this).attr("class");
                    var newClassStr = classStr.replace(/label/g, "badge");
                    $(this).removeAttr("class").addClass(newClassStr);
                });
            }
        });
    </script>
</head>

<body>
    <x-header status="result" />

    <div class="container-xl">
        <div class="table-responsive">
            <div class="table-wrapper">
                <div class="table-title">
                    <div class="row">
                        <div class="col-sm-6">
                            <h2><b> Routines</b></h2>
                        </div>

                        <tr>
                    </div>
                </div>
                <table class="table table-striped table-hover">
                    <thead>
                            <th>#</th>
                            <th>Name</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($files as $file)
                        
                        <tr data-status="active">
                            <td><?php $i=1; echo $i++ ?></td>
                            <td>{{$file}}</td>
                            <td><a href="/result" class="btn btn-sm manage">Download</a></td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</body>

</html>