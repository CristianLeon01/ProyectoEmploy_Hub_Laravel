@extends('layouts.app')
@section('content')

<link rel="stylesheet" href="{{ asset('/css/Weighings/createWeighing.css') }}">

<section class="create">
    <h1 class="title-weighing">Create Your <span>Weighing</span></h1>
    <form class="form-weighing" action="{{ route('store.weighing') }}" method="POST">
        @csrf
        <label>Select which languages you know:</label>
        <select id="language-type" name="languages">
            <option value="ENGLISH">ENGLISH</option>
            <option value="FRENCH">FRENCH</option>
            <option value="GERMAN">GERMAN</option>
            <option value="SPANISH">SPANISH</option>
        </select><br><br>

        <label>Select up to which level of study course:</label>
        <select id="education-type" name="education">
            <option value="BACHELORS DEGREE">BACHELORS DEGREE</option>
            <option value="POSTGRADUATE">POSTGRADUATE</option>
            <option value="UNDERGRADUATE">UNDERGRADUATE</option>
            <option value="TECHNICIAN">TECHNICIAN</option>
            <option value="TECHNOLOGIST">TECHNOLOGIST</option>
            <option value="ENGINEER">ENGINEER</option>
        </select><br><br>

        <label>Write your work experience:</label>
        <textarea  name="work_experience" rows="4" cols="50" required></textarea><br><br>

        <label>Write down your technical skills:</label><br>
        <textarea  name="technical_skills" rows="4" cols="50" required></textarea><br><br>

        <label>Write down your previous projects:</label>
        <input type="text"  name="previous_project" required><br><br>

        <label>Write references:</label>
        <input type="text" name="references" required><br><br>

        <label>Write your additional courses:</label>
        <input type="text" name="additional_course" required><br><br>

        <center><button type="submit" class="create-application-button">Create</button></center>
    </form>
    @endsection
</section>