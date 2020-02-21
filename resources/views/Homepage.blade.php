<?php

use App\Common;


?>
@extends('layouts.app')

    @section('content')

    <!-- Bootstrap Boilerplate... -->

    <div class="container-sm mt-2 panel-body">
    
        <div class="row">
            <div class="col-md-4 border border-light">
                <h5 class="font-weight-bold mt-2">Survey</h5><hr>
                <form name="surveyform" action="{{URL::to('/survey_session/submit')}}" method="post">
                {{csrf_field()}}
                <!-- Question 1 -->
                <div class="mb-4">
                    <p>1.What is your age group?</p>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="question1" id="q1a" value="1a"></input>
                        <label class="form-check-label" for="q1a">a. <18 </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="question1" id="q1b" value="1b"></input>
                        <label class="form-check-label" for="q1b">b. 18 to 35</label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="question1" id="q1c" value="1c">
                        <label class="form-check-label" for="q1c">c. 35 to 60</label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="question1" id="q1d" value="1d">
                        <label class="form-check-label" for="q1d">d. Above 60</label>
                    </div>
                </div>

                <!--Question 2-->
                <div class="mb-4">
                    <p>2.What is your education level?</p>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="question2" id="q2a" value="2a"></input>
                        <label class="form-check-label" for="q2a">a. Secondary school and below </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="question2" id="q2b" value="2b"></input>
                        <label class="form-check-label" for="q2b">b. Diploma</label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="question2" id="q2c" value="2c">
                        <label class="form-check-label" for="q2c">c. Degree</label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="question2" id="q2d" value="2d">
                        <label class="form-check-label" for="q2d">d. Post graduate degree</label>
                    </div>
                </div>

                <!--Question 3-->
                <div class="mb-4">
                    <p>3.What is your monthly income?</p>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="question3" id="q3a" value="3a"></input>
                        <label class="form-check-label" for="q3a">a. Less than RM 1000 </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="question3" id="q3b" value="3b"></input>
                        <label class="form-check-label" for="q3b">b. Between RM1000 to RM3000</label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="question3" id="q3c" value="3c">
                        <label class="form-check-label" for="q3c">c. Between RM3000 to RM5000</label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="question3" id="q3d" value="3d">
                        <label class="form-check-label" for="q3d">d. More than RM 5000</label>
                    </div>
                </div>

                <!--Question 4-->
                <div class="mb-4">
                    <p>4.Your Gender:</p>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="question4" id="q4a" value="4a"></input>
                        <label class="form-check-label" for="q4a">a. Male </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="question4" id="q4b" value="4b"></input>
                        <label class="form-check-label" for="q4b">b. Female</label>
                    </div>
                </div>
                
    
            <button class="btn btn-primary" onclick=Validate() aria-disabled="true"> Submit</button>
            </form>
            </div>
        </div>
    </div>
    @endsection

    
