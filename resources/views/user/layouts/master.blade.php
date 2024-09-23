<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <link href='https://unpkg.com/boxicons@2.1.1/css/boxicons.min.css' rel='stylesheet'>
    <link href='//cdn.datatables.net/2.0.8/css/dataTables.dataTables.min.css' rel='stylesheet'>
    
    @vite(['resources/css/app.css','resources/js/app.js'])

    <title>Nandi | Cheque Management System</title>
</head>
<body>
  
    @include('user.layouts.navbar')
    
    <div class="p-4 sm:ml-64">
        @yield('content')
    </div>

    <!-- Include jQuery before DataTables -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="//cdn.datatables.net/2.0.8/js/dataTables.min.js"></script>

    @stack('scripts')
        
</body>
</html>
