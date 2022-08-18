<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
     
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title inertia>{{ config('app.name', 'Laravel') }}</title>

        <!-- Fonts -->
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap">

        <!-- Styles -->
        <link rel="stylesheet" href="{{ mix('css/app.css') }}">

            <link href="{{asset('assets/css/vendor.min.css')}}" rel="stylesheet" />
            <link href="{{asset('assets/css/app.min.css')}}" rel="stylesheet" /> 
           
        <!-- Scripts -->
        @routes
        <script src="{{ mix('js/app.js') }}" defer></script>
        @inertiaHead
    </head>
    <style>
            
        #ed_pro {
            position: absolute;
            z-index: 1000;
            min-width: 10rem;
            padding: 0.5rem 0;
            margin: 0;
            font-size: 0.875rem;
            color: var(--app-component-color);
            text-align: left;
            list-style: none;
            background-color: var(--app-component-dropdown-bg);
            background-clip: padding-box;
            border: 0 solid rgba(var(--app-component-color-rgb), 0.1);
            border-radius: 6px;
            right: -2px;
            top: 64px;
        }
    </style>
    <body class="font-sans antialiased">
        @inertia

        @env ('local')
            <script src="http://localhost:3000/browser-sync/browser-sync-client.js"></script>
        @endenv
       
                <script src="{{asset('assets/js/vendor.min.js')}}"></script>
                <script src="{{asset('assets/js/app.min.js')}}"></script>
                <script src="{{asset('assets/js/rocket-loader.min.js')}}"></script>
                <script src="{{asset('assets/js/demo/ui-modal-notification.demo.js')}}"></script>
          
          
    
                <script>
        
                    function toggleed() {
                    
                        $("#ed_pro").slideToggle();
                    }
                    function toggcart() {
                        $("#cart").slideToggle();
                    }
                </script>
        </body>

</html>
