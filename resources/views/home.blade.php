@extends('layouts.admin')
@section('content')
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        .card{
            border : none;
        }
        .content{
            background-color:white;
        }
        .card-body{
            margin-left: 30px;
        }
        .rowstyle{
        /* background-color: #77bc3f;  */
        border-radius:20px;
        background-image: linear-gradient(to right, #77bc3f , #9ACD32);
        }
    </style>
</head>
<body>
<div class="content">
    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-header">
                    Dashboard
                </div>

                <div class="card-body">
                    @if(session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <div class="row">
                        <div class="col-md-4" >
                            <div class="card text-white rowstyle" >
                                <div class="card-body pb-3">
                                    <div class="text-value" >{{ number_format($totalTickets) }}</div>
                                    <div>Total tickets</div>
                                    <br />
                                </div>
                            </div>
                        </div>

                        <div class="col-md-4">
                            <div class="card text-white rowstyle">
                                <div class="card-body pb-3">
                                    <div class="text-value">{{ number_format($openTickets) }}</div>
                                    <div>Open tickets</div>
                                    <br />
                                </div>
                            </div>
                        </div>

                        <div class="col-md-4">
                            <div class="card text-white rowstyle">
                                <div class="card-body pb-3">
                                    <div class="text-value">{{ number_format($closedTickets) }}</div>
                                    <div>Closed tickets</div>
                                    <br />
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</body>
</html>
@endsection
@section('scripts')
@parent

@endsection