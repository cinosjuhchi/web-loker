<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>{{ $title }}</title>
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:ital,wght@0,200..800;1,200..800&display=swap" rel="stylesheet">
        <link rel="stylesheet" type="text/css" href="https://unpkg.com/trix@2.0.8/dist/trix.css">
        <script type="text/javascript" src="https://unpkg.com/trix@2.0.8/dist/trix.umd.min.js"></script>
        @vite(['resources/css/app.css','resources/js/app.js'])
        <link rel="stylesheet" href="sweetalert2.min.css">
        <link rel="shortcut icon" type="image/x-icon" href="{{ Vite::asset("resources/assets/logo/favicon.ico") }}" />
        <style>
            .trix-editor {
            width: 100%;
        }
        
        .trix-editor h1 {
            font-size: 1.25rem !important;
            line-height: 1.25rem !important;
            margin-bottom: 1rem;
            font-weight: 600;
        }
        
        .trix-editor a:not(.no-underline) {
            text-decoration: underline;
        }
        
        .trix-editor a:visited {
            color: green;
        }
        
        .trix-editor ul {
            list-style-type: disc;
            padding-left: 1rem;
        }
        
        .trix-editor ol {
            list-style-type: decimal;
            padding-left: 1rem;
        }
        
        .trix-editor pre {
            display: inline-block;
            width: 100%;
            vertical-align: top;
            font-family: monospace;
            font-size: 1.5em;
            padding: 0.5em;
            white-space: pre;
            background-color: #eee;
            overflow-x: auto;
        }
        
        .trix-editor blockquote {
            border: 0 solid #ccc;
            border-left-width: 0px;
            border-left-width: 0.3em;
            margin-left: 0.3em;
            padding-left: 0.6em;
        }
        </style>
    </head>
<body class="font-JakartaSans">
    {{-- Misal Kasih Navbar --}}
    @include('components.NavbarUser')

    {{-- content --}}
    @if(session('success'))
<script>    
    document.addEventListener('DOMContentLoaded', function() {
        const Toast = Swal.mixin({
            toast: true,
            position: 'top-end',
            iconColor: 'green',
            customClass: {
                popup: 'colored-toast',
            },
            showConfirmButton: false,
            timer: 2500,
        });

        Toast.fire({
            icon: 'success',
            title: '{{ session('success') }}',
        });
    });
</script>
@endif

        <div class="">
            @yield('main')
        </div>
        <div class="">
            @yield('dashboardCompany')
        </div>

    <div class="profile-user">
        @yield('profileUser')
    </div>
    <div class="profile-perusahaan">
        @yield('profileCompany')
    </div>
    <div class="detail-perusahaan-user">
        @yield('detailPerusahaanUserPage')
    </div>
    <div class="upload-lamaran">
        @yield('uploadLamaran')
    </div>
    <div class="detail-profilUser" >
        @yield('detailProfileUser')
         </div>
    <div class="ubahloker" >
        @yield('ubahloker')
         </div>







    <div class="pasang-lowongan-kerja" >
        @yield('pasangLowongan')
         </div>

 
    
    {{-- content --}}
    {{-- Misal Kasih Footer --}}
    @include('components.FooterUser')
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
</body>
</html>