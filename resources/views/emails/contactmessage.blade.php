
@component('mail::panel')

<p>{{ $name }}</p>
<p>From: {{ $email }}</p>
<h3>Message: {!! $content !!}</h3>
@endcomponent