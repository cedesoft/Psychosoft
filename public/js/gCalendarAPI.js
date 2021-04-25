var CLIENT_ID = '914885265165-vpiajsisucrudse5sovrcbc10nfo77sc.apps.googleusercontent.com';
var API_KEY = 'AIzaSyClp9LDTu2nxYnkbTO6P-e1879KCx3ylCY';

// Array of API discovery doc URLs for APIs used by the quickstart
var DISCOVERY_DOCS = ["https://www.googleapis.com/discovery/v1/apis/calendar/v3/rest"];

// Authorization scopes required by the API; multiple scopes can be
// included, separated by spaces.
var SCOPES = "https://www.googleapis.com/auth/calendar";

var authorizeButton = document.getElementById('authorize_button');
var signoutButton = document.getElementById('signout_button');
var addEvent = document.getElementById('addToCalendar');

/**
 *  On load, called to load the auth2 library and API client library.
 */
function handleClientLoad() {
    gapi.load('client:auth2', initClient);
}

/**
 *  Initializes the API client library and sets up sign-in state
 *  listeners.
 */
function initClient() {
    gapi.client.init({
        apiKey: API_KEY,
        clientId: CLIENT_ID,
        discoveryDocs: DISCOVERY_DOCS,
        scope: SCOPES
    }).then(function () {
        // Listen for sign-in state changes.
        gapi.auth2.getAuthInstance().isSignedIn.listen(updateSigninStatus);

        // Handle the initial sign-in state.
        updateSigninStatus(gapi.auth2.getAuthInstance().isSignedIn.get());
        authorizeButton.onclick = handleAuthClick;
        signoutButton.onclick = handleSignoutClick;
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
        signoutButton.style.display = 'block';
        addEvent.style.display = 'block';
        listUpcomingEvents();
    } else {
        authorizeButton.style.display = 'block';
        signoutButton.style.display = 'none';
    }
}

/**
 *  Sign in the user upon button click.
 */
function handleAuthClick(event) {
    gapi.auth2.getAuthInstance().signIn();
}

/**
 *  Sign out the user upon button click.
 */
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

/**
 * Print the summary and start datetime/date of the next ten events in
 * the authorized user's calendar. If no events are found an
 * appropriate message is printed.
 */
function listUpcomingEvents() {
    gapi.client.calendar.events.list({
        'calendarId': 'primary',
        'timeMin': (new Date()).toISOString(),
        'showDeleted': false,
        'singleEvents': true,
        'maxResults': 10,
        'orderBy': 'startTime'
    }).then(function (response) {
        var events = response.result.items;
        appendPre('Upcoming events:');

        if (events.length > 0) {
            for (i = 0; i < events.length; i++) {
                var event = events[i];
                var when = event.start.dateTime;
                if (!when) {
                    when = event.start.date;
                }
                appendPre(event.summary + ' (' + when + ')')
            }
        } else {
            appendPre('No upcoming events found.');
        }
    });
}


addEvent.onclick = function () {
    var userChoices = getUserInput();
    console.log(userChoices);
    if (userChoices)
        createEvent(userChoices);
}

function getUserInput() {

    var dateStart = document.querySelector("#fechaInicio").value;
    var startTime = document.querySelector("#horaInicio").value;
    var dateEnd = document.querySelector("#fechaFin").value;
    var endTime = document.querySelector("#horaFin").value;
    var eventDesc = document.querySelector("#txtTitulo").value;
    var description = document.querySelector("#txtDescripcion").value;

    // check input values, they should not be empty
    if (dateStart == "" || startTime == "" || endTime == "" || eventDesc == "") {
        alert("All your input fields should have a meaningful value.");
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

// Make an API call to create an event.  Give feedback to user.
function createEvent(eventData) {
    // First create resource that will be send to server.
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
    // create the request
    var request = gapi.client.calendar.events.insert({
        'calendarId': 'primary',
        'resource': resource
    });

    // execute the request and do something with response
    request.execute(function (resp) {
        console.log(resp.id);
    });
}

/* function updateEvent(eventId) {
    if (eventId) {
        var eventToUpdate = gapi.client.calendar.events.get({
            "calendarId": 'primary',
            "eventId": eventId
        });

        eventToUpdate.summary = $("#update-name").val(); //Replace with your values of course :)
        eventToUpdate.location = $("#update-location").val();
        eventToUpdate.description = $("#update-description").val();
        eventToUpdate.start = {
            'dateTime': (new Date(2017, 04, 22, 8, 00, 00)).toISOString(), //2017-04-22 08h00m00s
            'timeZone': 'Europe/Paris'
        };
        eventToUpdate.end = {
            'dateTime': (new Date(2017, 04, 22, 9, 00, 00)).toISOString(), //2017-04-22 09h00m00s
            'timeZone': 'Europe/Paris'
        };

        var request = gapi.client.calendar.events.patch({
            'calendarId': 'primary',
            'eventId':eventId,
            'resource': eventToUpdate
        });

        request.execute(function(event) {
            console.log('Event updated: ' + event.htmlLink);

            //Action. Maybe refresh your events list ? :)
        });
    }
} */