@extends('frontend.layouts.master')
@section('title', 'ApplicantResult')

@section('content')
<div class="reg_img">
    <div class="row">

        <!-- <div class="box2"> -->
            <!-- <h1 style="text-align: center; font-size: 25px;">User Search Result</h1> -->
            <div class="card text-center" style="width: 1500px;">
                <div class="card-header">
                    User Profile
                </div>
                <div class="card-body"> 
                    <h5 class="card-title"></h5> 
                    @foreach($data as $row)

                    <table style="width:70%; " class="center">
                        <tr>
                            <th>Profile</th>
                            <th>Data</th>
                            <th>Status</th>
                          
                        </tr>
                        <tr>
                            <td> <h5>ID </h5></td>
                            <td>{{$row->applicant_id}}</td>
                            @if($row->status == 'complete')
                                <td rowspan="12" style="padding-left:20px; margin-left:10px">  <mark style="background: rgb(0, 255, 170);padding:10px;border-radius: 10px; ">  success</mark> </td>
                            @endif
                            @if($row->status == 'cancel')
                                <td rowspan="12" style="padding-left:20px; margin-left:10px">  <mark style="background: rgb(255, 51, 0);padding:10px;border-radius: 10px; "> canceled</mark> </td>
                            @endif  
                            @if ($row->status == 'pending')
                                <td rowspan="12" style="padding-left:20px; margin-left:10px">  <mark style="background: rgb(14, 21, 116);padding:10px;border-radius: 10px;color:rgb(219, 213, 236)"> Pending</mark> </td>

                            @endif
                           
                        </tr>
                        <tr>
                            <td> <h5>Name </h5></td>
                            <td> {{$row->name}}</td>
                        </tr>
                        <tr>
                            <td> <h5>Father's name </h5></td>
                            <td> {{$row->father_name}}</td>
                        </tr>
                       
                        <tr>
                            <td> <h5>Mother's name </h5></td>
                            <td> {{$row->mother_name}}</td>
                        </tr>
                        <tr>
                            <td> <h5>Registration No </h5></td>
                            <td>{{$row->registration_no}} </td>
                        </tr>
                        <tr>
                            <td> <h5> Session</h5></td>
                            <td> {{$row->session}}</td>
                        </tr>
                        <tr>
                            <td> <h5> Running Year</h5></td>
                            <td>{{$row->running_year}}</td>
                        </tr>
                        <tr>
                            <td> <h5> class Roll</h5></td>
                            <td>{{$row->roll_no}} </td>
                        </tr>
                        <tr>
                            <td> <h5>Email </h5></td>
                            <td> {{$row->email}}</td>
                        </tr>
                        <tr>
                            <td> <h5>Phone </h5></td>
                            <td> {{$row->phone}}</td>
                        </tr>
                        <tr>
                            <td> <h5>Birth Date   </h5></td>
                            <td> {{$row->birth_date}} </td>
                        </tr>
                        <tr>
                            <td> <h5>Department   </h5></td>
                            <td> {{$row->department}} </td>
                        </tr>

                    </table>
           
                    @endforeach
                    <br>
                    <a href="{{url('example1')}}" class="btn btn-success">Pay Now</a>

                </div>

                <div class="card-footer">

                </div>
            </div>
            

        <!-- </div> -->
        
    </div>
</div>
@endsection