@extends('layouts.app')

@section('content')
<div class="container">
<div class="row">
    <h1>Project Page </h1>
    @foreach ($projects as $project)
    <div class="card col-4">
        <h2>{{ $project->name }}</h2>
        <p>{{ $project->description }}</p>
        <span>{{ $project->user_id }}</span>
        <a href="/{{ $project->slug }}" class="btn btn-primary"> Go To Your Project</a>
    </div>
@endforeach
    
</div>
</div>

<a href="/project/{{ route('project_register') }}" > Project Register  </a> 

   
@endsection
