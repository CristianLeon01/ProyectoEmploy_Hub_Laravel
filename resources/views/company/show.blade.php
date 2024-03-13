@extends('layouts.app')

@section('content')

<a href="{{ route('company')}}">Back</a>
<h1>{{ $company->company_name }}</h1>
<h1>{{ $company->legal_representative }}</h1>
<h1>{{ $company->company_type }}</h1>
<h1>{{ $company->NIT }}</h1>
<h1>{{ $company->number_workers }}</h1>
<h1>{{ $company->legal_representative_email}}</h1>
<h1>{{ $company->nature }}</h1>
<h1>{{ $company->email }}</h1>
<h1>{{ $company->phone }}</h1>
<h1>{{ $company->alternate_phone }}</h1>
<h1>{{ $company->human_resources_manager }}</h1>
<h1>{{ $company->phone_2}}</h1>
<h1>{{ $company->alternate_phone_2 }}</h1>
<h1>{{ $company->email_manager }}</h1>
<h1>{{ $company->id_post }}</h1>
<h1>{{ $company->id_user_types }}</h1>

@endsection