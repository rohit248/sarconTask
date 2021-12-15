@extends('layouts.user')
@section('content')
    <div id="content">

        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <div class="container-fluid">

                <button type="button" id="sidebarCollapse" class="btn btn-info d-lg-none">
                    <i class="fas fa-align-left"></i>
                </button>
                <button class="btn btn-dark d-inline-block d-lg-none ml-auto" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <i class="fas fa-align-justify"></i>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="nav navbar-nav ml-auto">
                        <li class="nav-item active">
                            <a class="nav-link" href="#"><i class="fas fa-bell"></i><span class="d-lg-none">&nbsp; Notifications</span></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#"><i class="fas fa-user-circle"></i><span class="d-lg-none">&nbsp; Profile</span></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#"><i class="fas fa-sliders-h"></i><span class="d-lg-none">&nbsp; Settings</span></a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>

        @for ($i = 1; $i < 10; $i++)

          <div class="row mt-2">
            <div class="card col-12">
              <div class="card-header text-center">
                Session {{$i}}
              </div>
              <div class="card-body">
                <div class="row  text-center">
                  <div class="col-md-2">
                    <img src="{{ asset('img/thumb.png') }}" class="rounded-circle" alt="Cinque Terre" width="100" height="100">
                  </div>

                  <div class="col-md-2">
                    <p><i class="fas fa-clock"></i> <span> 10:00 AM to 11 AM IST </span></p>
                    <p class="text-success"><i class="fa fa-star" aria-hidden="true"></i><i class="fa fa-star" aria-hidden="true"></i><i class="fa fa-star" aria-hidden="true"></i><i class="fa fa-star" aria-hidden="true"></i><i class="fa fa-star-half" aria-hidden="true"></i></p>
                    <button type="button" class="btn btn btn-outline-secondary m-2"><i class="fas fa-calendar-plus mr-2"></i>Add to calendar</button>

                  </div>

                  <div class="col-md-5 text-center">
                    <h5 class="card-title"><span class="text-danger">Welcome</span> <span class="text-muted">by Symmachia Conferences</span></h5>
                    <p class="card-text"><i class="fas fa-user-circle" aria-hidden="true"></i> Deepika Sunjay, Head of Conferences, Symmachia</p>
                  </div>


                  <div class="col-md-3">
                    <button type="button" id="AudBtn{{$i}}" class="btn btn btn-outline-primary m-2"><i class="fas fa-users mr-2"></i> Join as Audience</button>
                    <button type="button" id="SpeakerBtn{{$i}}" class="btn btn btn-outline-primary m-2"><i class="fas fa-volume-up mr-3"></i>&nbsp; Join as Speaker</button>
                    <div class="m-2">
                      <i class="fas fa-heart mr-2 text-danger"></i>
                      Add to My Schedule
                    </div>
                  </div>

                </div>
              </div>
            </div>
          </div>

        @endfor


    </div>
  @stop
