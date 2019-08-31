@component('mail::message')
# Task Creation successful
## A task with have been made with your email if it was you nothing to do if it wasn't you please change your password
###Task content :
title : {{$task['title']}}
description : {{$task['description']}}

@component('mail::button', ['url' => url('/todos')])
See Tasks
@endcomponent

Thanks,<br>
{{ config('app.name') }}
@endcomponent

