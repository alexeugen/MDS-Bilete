@component('mail::message')

The event was booked successfully.

{{ $event->title }}
{{ $event->formattedDate() }}
{{ $event->formattedTime() }}

Thanks,<br>
Eventimo
@endcomponent
