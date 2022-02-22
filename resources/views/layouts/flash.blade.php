{{-- Message SUCCESS --}}
@if ($message = Session::get('success'))

<div class="p-4 mb-4 text-sm text-blue-700 bg-blue-100 rounded-lg dark:bg-blue-200 dark:text-blue-800" role="alert">
    <span class="font-medium">{{$message}}</span>
</div>
@endif

{{-- Message WARNING --}}
@if ($message = Session::get('warning'))

<div class="p-4 mb-4 text-sm text-yellow-700 bg-yellow-100 rounded-lg dark:bg-yellow-200 dark:text-yellow-800"
    role="alert">
    <span class="font-medium">{{$message}}</span>
</div>

<div class="alert alert-warning alert-block">
    <strong></strong>
</div>
@endif

{{-- error --}}
@if ($errors->any())
<div class="p-4 mb-4 text-sm text-red-700 bg-red-100 rounded-lg dark:bg-red-200 dark:text-red-800">
    <ul>
        @foreach ($errors->all() as $error)
        <li class="font-medium">{{  $error  }}</li>
        @endforeach
    </ul>
</div>
@endif