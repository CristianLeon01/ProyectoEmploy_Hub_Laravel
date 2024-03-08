@extends('layouts.app')
@section('content')

<link rel="stylesheet"  href="{{ asset('/css/Postulation/postulation.css') }}">
    <div class="hoja-de-vida">
        <h2 class="titulo-principal">{{ $offer->name_vacant }}</h2>
        <div class="campo">
            <h2>Offer Name:<span class="nombre-oferta">{{ $offer->name_vacant }}</span></h2>
            <p><span class="span-title">Type of contract:</span> <span class="span-info">{{ $offer->contractType->contract_name }}</span></p>
            <p><span class="span-title">Location:</span> <span class="span-info">{{ $offer->address }}</span></p>
            <p><span class="span-title">Months of experience:</span> <span class="span-info">{{ $offer->months_experience }}</span></p>
        </div>
        @foreach ($companies as $company)
            <div class="campo">
                <h2>Company Name<span class="nombre-oferta">{{ $company->company_name }}</span></h2>
                <p><span class="span-title">Company NIT:</span> <span class="span-info">{{ $company->NIT }}</span></p>
                <p><span class="span-title">Legal Representative:</span> <span class="span-info">{{ $company->legal_representative}}</p>
                <p><span class="span-title">Company Email:</span> <span class="span-info">{{ $company->email }}</p>
            </div>
        @endforeach
        <div class="campo">
            <h2>Work experience</h2>
            <p><span class="span-title">Company:</span> <span class="span-info">XYZ Solutions</span></p>
            <p><span class="span-title">Charge:</span> <span class="span-info">Desarrollador Web</span></p>
            <p><span class="span-title">Period:</span> <span class="span-info">2018 - Presente</span></p>
        </div>
        <div class="campo">
            <h2>Habilidades</h2>
            <p><span class="span-title">Programming:</span> <span class="span-info">JavaScript, HTML, CSS</span></p>
            <p><span class="span-title">Languages</span> <span class="span-info">Inglés (Avanzado)</span></p>
            <p><span class="span-title">Soft Skills:</span> <span class="span-info">Trabajo en equipo, Comunicación</span></p>
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
                    deleteButton.style.display = "inline-block";
                } else {
                    fileNameSpan.textContent = "No file selected";
                    deleteButton.style.display = "none"; 
                }
            }
            
            function deleteFile() {
                var fileInput = document.getElementById("file-input");
                fileInput.value = "";
                updateFileName(fileInput);
            }
            </script>
    </div>  

@endsection
    