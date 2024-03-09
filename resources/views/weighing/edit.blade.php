@extends('layouts.app')
@section('content')

<link rel="stylesheet" href="{{ asset('/css/Weighings/editWeighings.css') }}">

<section class="create">
    <h1 class="title-weighing">Update Your <span>Weighing</span></h1>
    <form class="form-weighing" action="{{ route('update.weighing', $weighing ->id) }}" method="POST">
        @method('PUT')
        @csrf
        <label>Update your which languages you know:</label>
        <select id="language-type" name="languages" value="{{ $weighing-> languages }}">
            <option value="ENGLISH">ENGLISH</option>
            <option value="FRENCH">FRENCH</option>
            <option value="GERMAN">GERMAN</option>
            <option value="SPANISH">SPANISH</option>
        </select><br><br>

        <label>Update your up to which level of study course:</label>
        <select id="education-type" name="education" value="{{ $weighing-> education }}">
            <option value="BACHELORS DEGREE">BACHELORS DEGREE</option>
            <option value="POSTGRADUATE">POSTGRADUATE</option>
            <option value="UNDERGRADUATE">UNDERGRADUATE</option>
            <option value="TECHNICIAN">TECHNICIAN</option>
            <option value="TECHNOLOGIST">TECHNOLOGIST</option>
            <option value="ENGINEER">ENGINEER</option>
        </select><br><br>

        <label>Update your work experience:</label>
        <textarea  name="work_experience" value="{{ $weighing-> work_experience }}" rows="4" cols="50" required></textarea><br><br>

        <label>Update down your technical skills:</label><br>
        <textarea  name="technical_skills" value="{{ $weighing-> technical_skills }}" rows="4" cols="50" required></textarea><br><br>

        <label>Update down your previous projects:</label>
        <input type="text"  name="previous_project" value="{{ $weighing-> previous_project }}"  required><br><br>

        <label>Update references:</label>
        <input type="text" name="references" value="{{ $weighing-> references }}" required><br><br>

        <label>Update your additional courses:</label>
        <input type="text" name="additional_course" value="{{ $weighing-> additional_course }}" required><br><br>
        
        <center><button type="submit" class="create-application-button" value="Update">Update</button></center>
    </form>
    @endsection
</section>    