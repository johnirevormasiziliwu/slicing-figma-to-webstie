<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Event</title>
		<link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.2.0/flowbite.min.css"  rel="stylesheet" />
    <!-- Tailwind CSS -->
    @vite('resources/css/app.css')

    <!-- Link Google FontFamily Inter   -->
		<link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;700&display=swap">
</head>

<body class="bg-gray-200 ">
    <!-- start navbar -->
    @include('layouts.navbar')
    <!-- end navbar -->

    <!-- start body -->
		<div class="px-16 py-6">
			@yield('content')
		</div>
    <!-- end body -->

    <!-- start footer -->
		 @include('layouts.footer')
		 <!-- end footer -->

    {{-- script js --}}
    <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.2.0/flowbite.min.js"></script>
</body>

</html>
