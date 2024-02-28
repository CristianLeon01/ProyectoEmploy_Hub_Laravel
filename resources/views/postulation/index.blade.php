@extends('layouts.app')
@section('content')

<link rel="stylesheet"  href="{{ asset('/css/Postulation/postulation.css') }}">
    <div class="hoja-de-vida">
        <div class="campo">
            @forelse ($offers as $offer)
                
            <h2>Nombre de la vacante:{{ $offer->name_vacant }}</h2>
            <p>Universidad: Universidad Nacional</p>
            <p>Grado: Ingeniero Informático</p>
            <p>Año de Graduación: 2020</p>
        </div>
        <div class="campo">
            <h2>Educación</h2>
            <p>Universidad: Universidad Nacional</p>
            <p>Grado: Ingeniero Informático</p>
            <p>Año de Graduación: 2020</p>
        </div>
        <div class="campo">
            <h2>Experiencia Laboral</h2>
            <p>Empresa: XYZ Solutions</p>
            <p>Cargo: Desarrollador Web</p>
            <p>Periodo: 2018 - Presente</p>
        </div>
        <div class="campo">
            <h2>Habilidades</h2>
            <p>Programación: JavaScript, HTML, CSS</p>
            <p>Idiomas: Inglés (Avanzado)</p>
            <p>Soft Skills: Trabajo en equipo, Comunicación</p>
        </div>
        <div class="campo-CV">
            <h2>Upload Resume</h2><br>
            <label for="file-input" class="custom-file-upload">Upload CV</label><br><br>
            <input id="file-input" type="file" onchange="updateFileName(this)">
            <span id="file-info">
                <span id="file-name" class="file-name">No file selected</span>
                <button id="delete-file" class="delete-button" onclick="deleteFile()">Delete</button>
            </span>
        </div>
        <div class="boton">
            <button>Descargar CV</button>
        </div>
        <script>
            function updateFileName(input) {
                var fileNameSpan = document.getElementById("file-name");
                var deleteButton = document.getElementById("delete-file");
                
                if (input.files.length > 0) {
                    var fileName = input.files[0].name;
                    fileName = fileName.length > 15 ? fileName.substring(0, 15) + '...' : fileName;
                    fileNameSpan.textContent = fileName;
                    deleteButton.style.display = "inline-block"; // Mostrar botón
                } else {
                    fileNameSpan.textContent = "No file selected";
                    deleteButton.style.display = "none"; // Ocultar botón
                }
            }
            
            function deleteFile() {
                var fileInput = document.getElementById("file-input");
                fileInput.value = ""; // Clear the input value
                updateFileName(fileInput); // Update file name display
            }
            </script>
    </div>  
            @empty
            @endforelse
@endsection
    