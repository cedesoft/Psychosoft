@extends ('adminlte::page')

@section('title', 'Eventos')

@section('content')
    {{-- <div class="d-none">
        <form method = "POST" action = "{{ route('logout') }}" >
            @csrf
    
            <x-jet-dropdown-link href="{{ route('logout') }}"
                onclick="event.preventDefault();
                        this.closest('form').submit();">
                {{ __('Log Out') }}
            </x-jet-dropdown-link>
        </form >
    </div> --}}

    <div id='calendar' class="bg-white card pt-2 pb-2 pl-4 pr-4 m-auto" style="border-radius: 15px;"></div>
@stop

@section('css')
    <link href=" {{ asset('calendar/main.css') }}" rel='stylesheet' />    
    <link rel="icon" type="image/png" href="fav.png">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
    <link rel="stylesheet" href="css/admin_custom.css">
    
    <style>
        html,body {
            margin: 0;
            padding: 0;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            font-size: 14px;
        }

        #calendar {
            width: 95%;
        }
    </style>
@stop

@section('js')
    <script src="https://kit.fontawesome.com/1e766aad6d.js" crossorigin="anonymous"></script>

    <!-- Scripts Fullcalendar -->
    <script src="{{ asset('calendar/main.js') }}"></script>
    <script src="{{ asset('js/calendar.js') }}"></script>

    <script>
        var calendarEl = document.getElementById('calendar');
        var calendar = new FullCalendar.Calendar(calendarEl, {
            initialView: 'listWeek',

        views: {
            listDay: { buttonText: 'Citas de hoy' },
            listWeek: { buttonText: 'Citas de la semana' },
            listMonth: { buttonText: 'Citas del mes' }
        },

        headerToolbar: {
            left: 'title',
            center: '',
            right: 'listDay,listWeek,listMonth'
        },
        events: "{{ url('/agenda/show') }}"
        });
        
        calendar.setOption('locale', 'es');        
        calendar.setOption('height', 560);
        calendar.render();
    </script>
@stop
</script>