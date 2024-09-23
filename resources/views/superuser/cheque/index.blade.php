@extends('superuser.layouts.master')

@section('content')

<div class="bg-white rounded-lg shadow dark:border dark:bg-gray-800 dark:border-gray-700 p-6 space-y-4 md:space-y-6 sm:p-8">
  <div class="p-6 space-y-4 md:space-y-6 sm:p-8">
      <h1 class="text-xl text-center font-bold leading-tight tracking-tight text-gray-900 md:text-2xl dark:text-white">
        {!! $title !!}
      </h1>

        {{-- <style>
            /* Set background and text color to gray */
            body {
              color: rgb(156 163 175); /* Dark gray text color */
            }
            
            /* Style the DataTable to match the gray theme */
            .dataTable {
              color: rgb(156 163 175); /* Dark gray text color */
            }
            
            .dataTable th,
            .dataTable td {
                padding: 8px; /* Padding for table cells */
                color: rgb(156 163 175); /* Dark gray text color */
              }
        </style> --}}
        
        {{ $dataTable->table() }}
    </div>  
</div>

    
@endsection

@push('scripts')
{{ $dataTable->scripts(attributes: ['type' => 'module']) }}

@endpush
