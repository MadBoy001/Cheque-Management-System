<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}" />
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <link href='https://unpkg.com/boxicons@2.1.1/css/boxicons.min.css' rel='stylesheet'>
    <link href='//cdn.datatables.net/2.0.8/css/dataTables.dataTables.min.css' rel='stylesheet'>
    <link href="https://nepalidatepicker.sajanmaharjan.com.np/nepali.datepicker/css/nepali.datepicker.v4.0.4.min.css" rel="stylesheet" type="text/css"/>
    
    @vite(['resources/css/app.css','resources/js/app.js'])
    
    <title>Nandi | Cheque Management System</title>
</head>

<body class="bg-gray-50 dark:bg-gray-900">
  
    @include('superuser.layouts.navbar')
    
    <div class="p-4">
        @yield('content')
    </div>

    <!-- Include jQuery before DataTables -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="//cdn.datatables.net/2.0.8/js/dataTables.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script src="https://nepalidatepicker.sajanmaharjan.com.np/nepali.datepicker/js/nepali.datepicker.v4.0.4.min.js" type="text/javascript"></script>

    @stack('scripts')
    {{-- Dynamic Delete Element --}}
    <script>
        $(document).ready(function(){
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });

            $('body').on('click', '.delete-item', function(event){
                event.preventDefault();

                let deleteUrl = $(this).attr('href');

                Swal.fire({
                    title: "Are you sure?",
                    text: "You won't be able to revert this!",
                    icon: "warning",
                    showCancelButton: true,
                    confirmButtonColor: "#3085d6",
                    cancelButtonColor: "#d33",
                    confirmButtonText: "Yes, delete it!"
                }).then((result) => {
                    if (result.isConfirmed) {
                        $.ajax({
                            type: 'DELETE',
                            url: deleteUrl,
                            success: function(data) {
                                console.log(data);
                                Swal.fire({
                                    title: "Deleted!",
                                    text: "Your file has been deleted.",
                                    icon: "success"
                                }).then(() => {
                                    // Optionally reload the page or remove the deleted item from the DOM
                                    location.reload();
                                });
                            },
                            error: function(xhr, status, error){
                                console.error(xhr.responseText);
                                Swal.fire({
                                    title: "Error!",
                                    text: "There was an error deleting your file.",
                                    icon: "error"
                                });
                            }
                        });
                    }
                });
            });
        });
    </script>
</body>
</html>
