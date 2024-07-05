@extends('user.layouts.master')

@section('content')

<div class="main">
    <h1>All Cheques</h1>
    <div class="main-container">
      {{$dataTable->table()}}
    </div>  
</div>


    
@endsection

@push('scripts')
{{ $dataTable->scripts(attributes: ['type' => 'module']) }}

@endpush