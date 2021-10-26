@component('mail::message')
# Invitation to join ForSaleByweb.com

I would like to invite you to join ForSaleByweb.com as an Agent.
{{ $message_content }}

@component('mail::button', ['url' => env('APP_URL') . '/invitation/' . $invite_code])
    Accept Invitation
@endcomponent

Thanks,<br>
{{ config('app.name') }}
@endcomponent
