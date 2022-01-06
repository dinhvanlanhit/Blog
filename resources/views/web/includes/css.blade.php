<link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
<style> <?php echo file_get_contents(public_path('assets/themes/app/style.min.css'));?></style>
@if (env('APP_DEBUG', 'forge')==true)
<link rel="stylesheet" type="text/css" href="{{asset('assets/main//dev.css')}}?v={{ uniqid() }}">
@else
<link rel="stylesheet" type="text/css" href="{{asset('assets/main//main.min.css')}}?v={{ uniqid() }}">
@endif
