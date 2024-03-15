@extends('layouts.app')

@section('content')

<link rel="stylesheet" href="{{ asset('/css/Life_Sheets/indexLifeSheet.css') }}">
    <section class="box">
        <h1>Employment <span>Center</span></h1>
        <section class="contenedor2">
            <section class="estadoProceso">
                @foreach ($lifeSheets as $lifeSheet)
                    <article class="element01">
                        <img class="imagen01" alt="imagen01" src="../Img/Usuario.png" width="150px" height="150px" />

                        <p class="text01">
                            {{ $lifeSheet->personal_description }}
                        </p>

                        <button class="button01"><img class="imagen02" src="{{ asset('img/Edit.png') }}" alt="imagen02" width="30px" height="30px" /></button>
                    </article>
                    <article class="element02">
                        <h4>My professional experiences</h4>
                        <h5>{{ $lifeSheet->experience }}</h5>
                        <button class="button01"><img class="imagen02" src="{{ asset('img/Edit.png') }}" alt="imagen02" width="30px" height="30px" /></button>
                    </article>
                    <article class="element02">
                        <h4>My studies</h4>
                        <h5>{{ $lifeSheet->education }}</h5>
                        <button class="button01"><img class="imagen02" src="{{ asset('img/Edit.png') }}" alt="imagen02" width="30px" height="30px" /></button>
                    </article>
                    <article class="element02">
                        <h4>Idiomas</h4>
                        <h5>{{ $lifeSheet->languages }}</h5>
                        <button class="button01"><img class="imagen02" src="{{ asset('img/Edit.png') }}" alt="imagen02" width="30px" height="30px" /></button>
                    </article>
                @endforeach
            </section>

            <section class="Vistas">
                <article class="obj01">
                    <h2>Plantillas de CV</h2>
                    <h3>
                        You have several templates available to download or print your resume in a comfortable and easy way.
                    </h3>
                    <button>Diseña tu Hd</button>
                </article>
                <article class="obj01">
                    <h2>Letters</h2>
                    <h3>Create or edit your cover letters and attach them to the offers you are applying for. Companies
                        value very positively those applications for offers that include a cover letter.
                    </h3>
                    <button>Create Letter</button>
                </article>
            </section>
        </section>
    </section>
@endsection
