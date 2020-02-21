<?php

use App\Common;


?>
@extends('layouts.app')

    @section('content')

    <!-- Bootstrap Boilerplate... -->

    <div class="container-sm mt-2 panel-body">
    
        <div class="row">
            <div class="col-md-4 border border-light">
                <h5 class="font-weight-bold mt-2">Result</h5><hr>
                {{csrf_field()}}
                <!-- Question 1 -->
                <div class="mb-4">
                    <p>1. Age group</p>
                    <div class="form-check">
                        <label class="form-check-label">a. <18 </label> &nbsp &nbsp <span>Total: {{$q1a}}</span>
                    </div>
                    <div class="form-check">
                        <label class="form-check-label" >b. 18 to 35</label> &nbsp &nbsp <span>Total: {{$q1b}}</span>
                    </div>
                    <div class="form-check">
                        <label class="form-check-label">c. 35 to 60</label>  &nbsp &nbsp <span >Total: {{$q1c}}</span>
                    </div>
                    <div class="form-check">
                        <label class="form-check-label">d. Above 60</label>  &nbsp &nbsp <span>Total: {{$q1d}}</span>
                    </div>
                </div>

                <!--Question 2-->
                <div class="mb-4">
                    <p>2. Education level</p>
                    <div class="form-check">
                        <label class="form-check-label" id="q2a">a. Secondary school and below </label> &nbsp &nbsp <span>Total: {{$q2a}}</span>
                    </div>
                    <div class="form-check">
                        <label class="form-check-label" id="q2b">b. Diploma</label> &nbsp &nbsp <span>Total: {{$q2b}}</span>
                    </div>
                    <div class="form-check">
                        <label class="form-check-label" id="q2c">c. Degree</label> &nbsp &nbsp <span>Total: {{$q2c}}</span>
                    </div>
                    <div class="form-check">
                        <label class="form-check-label" id="q2d">d. Post graduate degree</label> &nbsp &nbsp <span>Total: {{$q2d}}</span>
                    </div>
                </div>

                <!--Question 3-->
                <div class="mb-4">
                    <p>3. Monthly income</p>
                    <div class="form-check">
                        <label class="form-check-label" id="q3a">a. Less than RM 1000 </label> &nbsp &nbsp <span>Total: {{$q3a}}</span>
                    </div>
                    <div class="form-check">
                        <label class="form-check-label" id="q3b">b. Between RM1000 to RM3000</label> &nbsp &nbsp <span>Total: {{$q3b}}</span>
                    </div>
                    <div class="form-check">
                        <label class="form-check-label" id="q3c">c. Between RM3000 to RM5000</label> &nbsp &nbsp <span>Total: {{$q3c}}</span>
                    </div>
                    <div class="form-check">
                        <label class="form-check-label" id="q3d">d. More than RM 5000</label>  &nbsp &nbsp <span>Total: {{$q3d}}</span>
                    </div>
                </div>

                <!--Question 4-->
                <div class="mb-4">
                    <p>4. Gender</p>
                    <div class="form-check">
                        <label class="form-check-label" id="q4a">a. Male </label>  &nbsp &nbsp <span>Total: {{$q4a}}</span>
                    </div>
                    <div class="form-check">
                        <label class="form-check-label" id="q4b">b. Female</label>  &nbsp &nbsp <span>Total: {{$q4b}}</span>
                    </div>
                </div>
                
    
            
            </div>
        </div>
    </div>
    @endsection

    
