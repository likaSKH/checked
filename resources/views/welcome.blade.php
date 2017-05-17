@extends('layouts.header')
@section("content")
    <div class="row marg">
    <div class="col-md-10 col-lg-10 col-sm-12 col-xs-12 col-lg-offset-1 col-md-offset-1 col-xs-offset-0 col-sm-offset-0 text-center " style="min-height: 330px; padding: 0">
        <h1 class="text-capitalize" >{{__('messages.manage')}}</h1>
        <div class="row " style="padding: 2%">
            <div class="col-xs-12 col-sm-6 col-md-3 col-lg-3 text-center background">
                <img src="images/To-do_List-512.png" alt="to do list" class="img-responsive center-block abil" >
                <h2 >{{__('messages.tasks')}}</h2>
                <p class="parag">{{__('messages.tasksp1')}}<br>{{__('messages.tasksp2')}}</p>
            </div>

            <div class="col-xs-12 col-sm-6 col-md-3 col-lg-3 text-center ">
                <img src="images/24572-200.png" alt="to do list" class="img-responsive center-block abil" >

                <h2 >{{__('messages.meeting')}}</h2>
                <p class="parag">{{__('messages.meetingp1')}}<br>
                    {{__('messages.meetingp2')}}</p>
            </div>

            <div class="col-xs-12 col-sm-6 col-md-3 col-lg-3 text-center background">
                <img src="images/76852-200.png" alt="to do list" class="img-responsive center-block abil" >
                <h2 >{{__('messages.party')}}</h2>
                <p class="parag">{{__('messages.partyp1')}}<br>
                    {{__('messages.partyp2')}}</p>

            </div>

            <div class="col-xs-12 col-sm-6 col-md-3 col-lg-3 text-center">
                <img src="images/Heart.png" alt="to do list" class="img-responsive center-block abil">
                <h2 >{{__('messages.health')}}</h2>
                <p class="parag">{{__('messages.healthp1')}}<br>
                    {{__('messages.healthp2')}}</p>
            </div>
        </div>
    </div>
    </div>
    <div class="row marg text-center" id="box-wrapper"  style="min-height: 300px" >
        <div class="text-center col-md-6 col-md-offset-3">
        <h1>{{__('messages.slogan')}}<img src="images/slogan.png" alt="slogan" class="img-responsive" style="float: right; margin: 2% 0 2% 0;" ></h1></div>


    </div>
    <div class="row marg"  style="min-height: 280px" >
        <div class="container  text-center">
            <h1>{{__('messages.why_us')}}</h1>
            <div class="col-md-6 ">
                <ul class="list-unstyled text-left " style="margin-left: 30%" >
                    <li><i class="fa fa-check" aria-hidden="true"></i>{{__('messages.easy')}}</li>
                    <li><i class="fa fa-check" aria-hidden="true"></i>{{__('messages.flexible')}}</li>
                </ul>
            </div>
            <div class="col-md-6 ">
                <ul class="list-unstyled text-left" style="margin-left: 30%">
                    <li ><i class="fa fa-check" aria-hidden="true"></i>{{__('messages.collaborative')}}</li>
                    <li><i class="fa fa-check" aria-hidden="true"></i>{{__('messages.friendly_environment')}}</li>
                </ul>
            </div>
        </div>
    </div>
@endsection
