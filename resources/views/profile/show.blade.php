@extends('layouts.app')

@section('main')
    

        <div class="container">
            <div class="text-center p-3 fs-6">
                <div class="float-end">
                    <a class="p-2" href="{{ url('/dashboard') }}">Back</a>
                    <span>||</span>
                    <a class="p-2" href="#" onclick="window.print()">Print</a>
                </div>
                <br>
                
                {{-- <div class="p-2">
                    <strong>ID :</strong>
                    <strong>{{ $info -> id }}</strong>
                </div> --}}
                
                <div class="d-flex justify-content-center">
                    <table>
                        <tr>
                            <th class="text-start">Name</th>
                            <td class="text-start fs-5"><b>:</b> {{ $info -> first_name }} {{ $info -> last_name }}</td>
                        </tr>
                        <tr>
                            <th class="text-start" >Phone Number</th>
                            <td class="text-start fs-5"><b>:</b> {{ $info -> mobile }}</td>
                        </tr>
                        <tr>
                            <th class="text-start" >Email Address</th>
                            <td class="text-start"><b>:</b> {{ $info -> email }}</td>
                        </tr>
                    </table>
            </div >
            <div style="display: block; ">
                <a class="btn btn-primary" href="{{ route('profile.index') }}">Edit</a>
            </div>
        </div>
   
    
@endsection