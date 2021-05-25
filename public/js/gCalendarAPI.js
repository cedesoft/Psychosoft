var CLIENT_ID = '914885265165-vpiajsisucrudse5sovrcbc10nfo77sc.apps.googleusercontent.com';
var API_KEY = 'AIzaSyClp9LDTu2nxYnkbTO6P-e1879KCx3ylCY';

var DISCOVERY_DOCS = ["https://www.googleapis.com/discovery/v1/apis/calendar/v3/rest"];

var SCOPES = "https://www.googleapis.com/auth/calendar";
var EVENT_ID = 'este es el mensaje';

var authorizeButton = document.getElementById('authorize_button');
var signoutButton = document.getElementById('signout_button');
var addEvent = document.getElementById('addToCalendar');


function handleClientLoad() {
    gapi.load('client:auth2', initClient);
}

function initClient() {
    gapi.client.init({
        apiKey: API_KEY,
        clientId: CLIENT_ID,
        discoveryDocs: DISCOVERY_DOCS,
        scope: SCOPES
    }).then(function () {
        gapi.auth2.getAuthInstance().isSignedIn.listen(updateSigninStatus);

        authorizeButton.onclick = handleAuthClick;
        signoutButton.onclick = handleSignoutClick;
        // Handle the initial sign-in state.
        updateSigninStatus(gapi.auth2.getAuthInstance().isSignedIn.get());
    }, function (error) {
        appendPre(JSON.stringify(error, null, 2));
    });
}

/**
 *  Called when the signed in status changes, to update the UI
 *  appropriately. After a sign-in, the API is called.
 */
function updateSigninStatus(isSignedIn) {
    if (isSignedIn) {
        authorizeButton.style.display = 'none';
        signoutButton.style.display = 'none';
        addEvent.style.display = 'none';
        /* listUpcomingEvents(); */
    } else {
        authorizeButton.click();
        signoutButton.style.display = 'none';
    }
}

function handleAuthClick(event) {
    gapi.auth2.getAuthInstance().signIn();
}

function handleSignoutClick(event) {
    gapi.auth2.getAuthInstance().signOut();
}

/**
 * Append a pre element to the body containing the given message
 * as its text node. Used to display the results of the API call.
 *
 * @param {string} message Text to be placed in pre element.
 */
function appendPre(message) {
    console.log(message);
}

$("#btnAgregar").click(function () {
    var userChoices = getUserInput();
    if (userChoices)
        createEvent(userChoices);
});

$("#btnEliminar").click(function () {
    object = getValuesGUI("DELETE", '');
    sendEvent('/' + $('#txtID').val(), object);
    deleteEvent($('#txtIdEventGoogle').val());
});

$("#btnModificar").click(function () {
    object = getValuesGUI("PATCH", '');
    sendEvent('/' + $('#txtID').val(), object);
    updateEvent($('#txtIdEventGoogle').val());
});

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

function cleanFields() {
    $('#txtID').val('');
    $('#txtTitulo').val('');
    $('#txtDescripcion').val('');
    $('#txtColor').val('#000000');
    $('#fechaInicio').val('');
    $('#fechaFin').val('');
    $('#horaInicio').val('');
    $('#horaFin').val('');
    $('#btnModificar').show();
    $('#btnEliminar').show();
    $('#btnAgregar').show();
}


function getValuesGUI(method, event) {
    var iniDate = $('#fechaInicio').val() + " " + $('#horaInicio').val();
    var endDate = $('#fechaFin').val() + " " + $('#horaFin').val();

    if (event != null && Date.parse(iniDate) < Date.parse(endDate)) {
        if (event != null) {
            nuevoEvento = {
                id: $('#txtID').val(),
                titulo: $('#txtTitulo').val(),
                descripcion: $('#txtDescripcion').val(),
                color: $('#txtColor').val(),
                textColor: '#FFFFFF',
                inicio: $('#fechaInicio').val() + " " + $('#horaInicio').val(),
                fin: $('#fechaFin').val() + " " + $('#horaFin').val(),
                idEventGoogle: event,
                '_token': $("meta[name='csrf-token']").attr("content"),
                '_method': method
            }
            return nuevoEvento;
        }
    } else {
        alert('formato no falido');
    }


}

function getUserInput() {
    var dateStart = document.querySelector("#fechaInicio").value;
    var startTime = document.querySelector("#horaInicio").value;
    var dateEnd = document.querySelector("#fechaFin").value;
    var endTime = document.querySelector("#horaFin").value;
    var eventDesc = document.querySelector("#txtTitulo").value;
    var description = document.querySelector("#txtDescripcion").value;

    if (dateStart == "" || dateEnd == "" || startTime == "" || endTime == "" || eventDesc == "" || description == "") {
        Swal.fire('Error', 'Asegurese de llenar todos los campos', 'error')
        return
    }
    else return {
        'dateStart': dateStart,
        'dateEnd': dateEnd,
        'startTime': startTime,
        'endTime': endTime,
        'eventTitle': eventDesc,
        'description': description,
    }
}

function createEvent(eventData) {
    var resource = {
        "summary": eventData.eventTitle,
        "description": eventData.description,
        "start": {
            "dateTime": new Date(eventData.dateStart + " " + eventData.startTime).toISOString()
        },
        "end": {
            "dateTime": new Date(eventData.dateEnd + " " + eventData.endTime).toISOString()
        }
    };
    var request = gapi.client.calendar.events.insert({
        'calendarId': 'primary',
        'resource': resource
    });

    request.execute(function (resp) {
        $('#txtIdEventGoogle').val(resp.id);
        var ageVal = document.getElementById("txtIdEventGoogle").value;
        object = getValuesGUI("POST", ageVal);
        sendEvent("", object);
    });
}

function updateEvent(eventId) {
    if (eventId) {
        var eventToUpdate = gapi.client.calendar.events.get({
            "calendarId": 'primary',
            "eventId": eventId
        });

        eventToUpdate.summary = $("#txtTitulo").val();
        eventToUpdate.description = $("#txtDescripcion").val();
        eventToUpdate.start = {
            'dateTime': (new Date($('#fechaInicio').val() + " " + $('#horaInicio').val())).toISOString()
        };
        eventToUpdate.end = {
            'dateTime': (new Date($('#fechaFin').val() + " " + $('#horaFin').val())).toISOString()
        };

        var request = gapi.client.calendar.events.patch({
            'calendarId': 'primary',
            'eventId': eventId,
            'resource': eventToUpdate
        });

        request.execute(function (event) {
            console.log('Event updated: ' + event.htmlLink);
        });
    }
}

function deleteEvent(eventId) {
    console.log(eventId);
    if (eventId) {
        var params = {
            calendarId: 'primary',
            eventId: eventId,
        };

        gapi.client.calendar.events.delete(params, function (err) {
            if (err) {
                console.log('The API returned an error: ' + err);
                return;
            }
            console.log('Event deleted.');
        });
    }
}