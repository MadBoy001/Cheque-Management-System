@extends('admin.layouts.master')

@section('content')

<div class="main">
    <h1>All Users</h1>
    <div class="main-container">
      {{$dataTable->table()}}
    </div>  
</div>


    
@endsection

@push('scripts')
{{ $dataTable->scripts(attributes: ['type' => 'module']) }}

@endpush