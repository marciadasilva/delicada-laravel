@extends('layouts.master')

@section('title', 'Delicada Mulher')

@section('content')

<div class="container">
    <div class="row">
        <div class="col-xs-12 col-sm-4">
            <div class="card">
                <a class="img-card" href="http://www.fostrap.com/">
                    <img src="--------- YOUR IMAGE URL ----------" />
                </a>
                <br />
                <div class="card-content">
                    <h4 class="card-title">
                        <a href="http://www.fostrap.com/">
                            Your title card
                        </a>
                    </h4>
                    <div class="">
                        Your description card
                    </div>
                </div>
                <div class="card-read-more">
                    <a class="btn btn-link btn-block" href="http://www.fostrap.com/">
                        Read More
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>




@endsection
