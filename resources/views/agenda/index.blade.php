@extends ('adminlte::page')

@section('title', 'Calendario')

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
    <div id='calendar' class="bg-white card border-primary pt-2 pb-2 pl-4 pr-4 m-auto"  style="border-radius: 15px;"></div>

    <!--Modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="container">
                        <div class="row mb-2">
                            <label for="txtID">ID</label>
                            <input type="text" name="txtID" class="form-control" id="txtID">
                        </div>
                        <div class="row mb-2">
                            <div class="row col-6">
                                <div class="row col-12">
                                    <label for="fechaInicio">Fecha inicio</label>
                                </div>
                                <div class="form-row">
                                    <div class="form-group col-md-6">
                                        <input type="date" id="fechaInicio" name="fechaInicio" class="form-control">
                                    </div>
                                        <div class="form-group col-md-6">
                                            <input type="time" min="09:00" max="18:00" id="horaInicio" name="horaInicio" class="form-control">
                                    </div>
                                </div>
                            </div>
                            <div class="row col-6">
                                <div class="row col-12">
                                    <label for="fechaFin">Fecha Fin</label>
                                </div>
                                <div class="form-row">
                                    <div class="form-group col-md-6">
                                        <input type="date" id="fechaFin" name="fechaFin" class="form-control">
                                    </div>
                                    <div class="form-group col-md-6">
                                        <input type="time" id="horaFin" name="horaFin" class="form-control w-full">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row mb-2">
                            <label for="txtTitulo">Titulo</label>
                            <input type="text" name="txtTitulo" class="form-control" id="txtTitulo">
                        </div>
                        <div class="row mb-2">
                            <label for="txtDescripcion">Descripcion</label>
                            <textarea name="txtDescripcion" class="form-control" id="txtDescripcion" cols="30" rows="5"></textarea>
                        </div>
                        <div class="row">
                            <label for="txtColor">Color</label>
                            <input type="color" name="txtColor" class="form-control" id="txtColor">
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button id="btnAgregar" class="btn btn-outline-primary btn-sm"><i class="fas fa-plus pr-2"></i>Agregar</button>
                    <button id="btnModificar" class="btn btn-outline-info btn-sm"><i class="fas fa-edit pr-2"></i>Modificar</button>
                    <button id="btnEliminar" class="btn btn-outline-danger btn-sm"><i class="fas fa-trash-alt pr-2"></i>Eliminar</button>
                    <button id="btnCancelar" data-dismiss="modal" class="btn btn-outline-secondary btn-sm"><i class="fas fa-ban pr-2"></i>Cancelar</button>
                </div>
            </div>
        </div>
    </div>
@stop

@section('css')
    <link href=" {{ asset('calendar/main.css') }}" rel='stylesheet' />
    <link rel="stylesheet" href="css/admin_custom.css">
    <link href="//cdnjs.cloudflare.com/ajax/libs/bootstrap-datetimepicker/4.17.37/css/bootstrap-datetimepicker.css" rel="stylesheet" />
    <style>
        html,body {
            margin: 0;
            padding: 0;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            font-size: 14px;
        }
        .btn{
            border-radius: 12px;
        }
        #calendar {
            max-width: 900px;
        }
    </style>
@stop

@section('js')
    <script src="https://kit.fontawesome.com/1e766aad6d.js" crossorigin="anonymous"></script>

    <!-- Scripts Fullcalendar -->
    <script src="{{ asset('calendar/main.js') }}"></script>
    <script src="{{ asset('js/calendar.js') }}"></script>

    <script>
        document.addEventListener('DOMContentLoaded', function () {
            var calendarEl = document.getElementById('calendar');
            var calendar = new FullCalendar.Calendar(calendarEl, {
                initialView: 'dayGridMonth',
                themeSystem: 'bootstrap',
                nowIndicator: true,
                selectable: true,
                headerToolbar: {
                    start: 'prev,next,today',
                    center: 'title',
                    end: 'dayGridMonth,dayGridWeek,timeGridDay,listMonth'
                }, 
                eventContent: function(event, element) { 
                    element.find('.fc-title').append("<br/>" + event.descripcion); 
                },
                dayMaxEvents: true,

                // buttons for switching between views
                titleFormat: {year: 'numeric', month: 'long' },
                customButtons: {
                    button: {
                        text: 'custom!',
                        click: function () {
                            $('#exampleModal').modal('toggle');
                        }
                    }
                },

                //Add event
                dateClick: function (info) {
                    $('#exampleModal').modal('toggle');
                    var generateRandomKey = () => Date.now();
                    $('#txtID').val(generateRandomKey);
                    $('#fechaInicio').val(info.dateStr);
                    $('#btnModificar').hide();
                    $('#btnEliminar').hide();
                },

                eventClick: function (info) {
                    info.el.style.borderColor = 'red';
                    $('#txtID').val(info.event.id);
                    $('#txtTitulo').val(info.event.title);
                    $('#txtDescripcion').val(info.event.extendedProps.descripcion);
                    $('#txtColor').val(info.event.backgroundColor);
                    
                    $('#btnModificar').show();
                    $('#btnEliminar').show();
                    $('#btnAgregar').hide();

                    var startDate = info.event.start;
                    var endDate = info.event.end;

                    var arrStartDate = new Date(startDate);
                    var arrEndDate = new Date(endDate);

                    $('#fechaInicio').val(arrStartDate.getFullYear() + "-" + getMonth(arrStartDate.getMonth() + 1) + "-" + getDayOrTime(arrStartDate.getDate()));
                    $('#fechaFin').val(arrEndDate.getFullYear() + "-" + getMonth(arrEndDate.getMonth() + 1) + "-" + getDayOrTime(arrEndDate.getDate()));

                    $('#horaInicio').val(getDayOrTime(arrStartDate.getHours()) + ":" + getDayOrTime(arrStartDate.getMinutes()));
                    $('#horaFin').val(getDayOrTime(arrEndDate.getHours()) + ":" + getDayOrTime(arrEndDate.getMinutes()));
                    $('#exampleModal').modal('toggle');
                },
                

                events: "{{ url('/agenda/show') }}"
            });
        
            calendar.setOption('locale', 'es');
            calendar.updateSize();
            calendar.setOption('height', 560);
            calendar.render();
        });

        
        $("#btnAgregar").click(function () {
            object = getValuesGUI("POST");
            sendEvent("", object);
        });

        $("#btnEliminar").click(function () {
            object = getValuesGUI("DELETE");
            sendEvent('/' + $('#txtID').val(), object);
        });

        $("#btnModificar").click(function () {
            object = getValuesGUI("PATCH");
            sendEvent('/' + $('#txtID').val(), object);
        });

        function getValuesGUI(method) {
            nuevoEvento = {
                id: $('#txtID').val(),
                titulo: $('#txtTitulo').val(),
                descripcion: $('#txtDescripcion').val(),
                color: $('#txtColor').val(),
                textColor: '#FFFFFF',
                inicio: $('#fechaInicio').val() + " " + $('#horaInicio').val(),
                fin: $('#fechaFin').val() + " " + $('#horaFin').val(),
                '_token': $("meta[name='csrf-token']").attr("content"),
                '_method': method
            }
            return nuevoEvento;
        }

        function sendEvent(action, eventObject) {
            $.ajax({
                type: "POST",
                url: "{{ url('/agenda') }}" + action,
                data: eventObject,
                success: function (msg) {
                    console.log(msg);
                    $('#exampleModal').modal('toggle');
                    calendar.refetchEvents();
                },
                error: function () { alert("Error"); }
            });
        }

        function getMonth(month) {
            if (month.toString().length < 2) {
                return "0" + month;
            } else {
                return month;
            }
        }

        function getDayOrTime(day) {
            if (day.toString().length < 2) {
                return "0" + day;
            } else {
                return day;
            }
        }
    </script>
@stop