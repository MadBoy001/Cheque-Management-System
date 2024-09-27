@extends('user.layouts.master')

@section('content')

<div class="bg-white rounded-lg shadow dark:border dark:bg-gray-800 dark:border-gray-700 p-6 space-y-4 md:space-y-6 sm:p-8">
  <div class="p-6 space-y-4 md:space-y-6 sm:p-8">
      <!-- Title centered with create button on right -->
      <div class="relative flex justify-center">
        <h1 class="text-xl font-bold leading-tight tracking-tight text-center text-gray-900 md:text-2xl dark:text-white">
          {!! $title !!}
        </h1>
        <a href="{{ route('superuser.cheque.create') }}" class="absolute right-0 top-0 bg-red-600 text-white font-bold py-2 px-4 rounded-lg hover:bg-red-700">
          Create         
        </a>
      </div>

      <div class="mt-6">
        {{ $dataTable->table() }}
    </div>
    

      <style>
        /* Set background and text color to gray */
        body {
          color: rgb(156 163 175); /* Dark gray text color */
        }

        /* DataTable general styling */
        .dataTable {
          color: rgb(156 163 175); /* Dark gray text color */
        }
        
        .dataTable th, .dataTable td {
            padding: 8px; /* Padding for table cells */
            color: rgb(255 255 255); /* Table text color */
        }

        /* DataTable pagination and search box styling */
        .dataTables_wrapper .dataTables_paginate .paginate_button {
          background-color: #1f2937; /* Dark background for pagination */
          color: rgb(156 163 175); /* Light gray text color */
          border: 1px solid rgb(75 85 99); /* Border color for pagination buttons */
          border-radius: 4px;
          padding: 6px 12px;
        }

        .dataTables_wrapper .dataTables_paginate .paginate_button:hover {
          background-color: #374151; /* Slightly lighter on hover */
          color: #ffffff;
        }

        /* DataTable pagination and search box styling */
        .dataTables_wrapper .dataTables_paginate .paginate_button {
            color: rgb(156 163 175) !important; /* Light gray text color */
            padding: 6px 12px !important;
        }

        /* Styling active pagination button */
        .dataTables_wrapper .dataTables_paginate .paginate_button.current {
          background-color: #474d56 !important; /* Active button background */
            color: #ffffff !important; /* White text for active button */
        }

        /* Styling disabled pagination button */
        .dataTables_wrapper .dataTables_paginate .paginate_button.disabled {
            color: #9ca3af !important; /* Lighter text for disabled button */
            cursor: not-allowed !important;
        }

        /* Hover effect for pagination buttons */
        .dataTables_wrapper .dataTables_paginate .paginate_button:hover {
            color: #ffffff !important; /* White text on hover */
        }


        .dataTables_length label {
          color: rgb(156 163 175); /* Light gray text color */
        }

        /* Excel button styling */
        .dt-buttons .buttons-excel {
          background-color: #10b981; /* Green background for Excel button */
          color: #ffffff; /* White text for Excel button */
          border: 1px solid #10b981;
          border-radius: 4px;
          padding: 6px 12px;
          font-weight: bold;
        }

        .dt-buttons .buttons-excel:hover {
          background-color: #059669; /* Darker green on hover */
          color: #ffffff;
        }

        /* Styling the "Showing X of Y entries" part */
        .dataTables_info {
          color: rgb(156 163 175); /* Light gray text color */
        }

        /* Search box styling */
        .dataTables_wrapper .dataTables_filter input {
          background-color: #374151; /* Dark background for search input */
          color: #ffffff; /* White text for search input */
          border: 1px solid #4b5563; /* Border color for search input */
          border-radius: 4px;
          padding: 6px 10px;
        }

    </style>

  </div>  
</div>

@endsection

@push('scripts')
{{ $dataTable->scripts(attributes: ['type' => 'module']) }}

{{-- <script type="module">
  $(document).on('init.dt', function(e, settings, json) {
      let table = $('#cheque-table').DataTable();

      // Add the Export All Data button with the custom styling
      table.button().add(0, {
          text: 'Export All Data',
          className: 'buttons-excel',  // Add the same class as Excel button
          action: function (e, dt, button, config) {
              // Redirect to the route that exports all data
              window.location.href = "{{ route('cheque.export') }}";
          }
      });
  });
</script> --}}


@endpush


