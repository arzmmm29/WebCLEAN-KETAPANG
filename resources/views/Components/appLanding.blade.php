<!DOCTYPE html>
<html lang="en">
    <head>
        <title>WebCLEAN-KETAPANG</title>
        <meta charset="utf-8" />
        <meta
            name="description"
            content="A minimal and responsive HTML5 landing page built on lightweight, clean and customizable code."
        />
        <meta name="viewport" content="width=device-width" />
        {{-- <link rel="apple-touch-icon-precomposed" href="{{url('/')}}/landing-page/media/favicon.png" /> --}}
        <link rel="icon" href="{{url('/')}}/landing-page/media/favicon.png" />
        <link rel="mask-icon" href="{{url('/')}}/landing-page/media/favicon.svg" color="rgb(36,38,58)" />
        <link rel="shortcut icon" href="{{url('/')}}/landing-page/media/favicon.png" />
        <link rel="stylesheet" href="{{url('/')}}/landing-page/css/main.css" />
    </head>
    <body class="page page-home preload">
        <x-landing.layouts.header/>

        {!!$slot!!}

        <x-landing.layouts.footer/>

        <script src="{{url('/')}}/landing-page/js/main.js"></script>
    </body>
</html>
