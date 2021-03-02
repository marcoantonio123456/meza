@component('mail::message')
# NEW EMAIL SUBMISSION

You have a new sign up from {{$details['email']}}


{{ config('app.name') }}
@endcomponent
