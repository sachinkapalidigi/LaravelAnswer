@component('mail::message')
# New contact message

{{$subject}}

@component('mail::panel')
{{$message}}
@endcomponent

@component('mail::button', ['url' => route('contact')])
Reply to this email
@endcomponent

Thanks,<br>
{{ config('app.name') }}
@endcomponent
