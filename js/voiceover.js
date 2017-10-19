// Initialize Firebase
var config = {
    apiKey: "AIzaSyDc8GDd4x3oRq7WvoR1TSUd28pkv56NVjg",
    authDomain: "voiceover-5cb76.firebaseapp.com",
    databaseURL: "https://voiceover-5cb76.firebaseio.com/",
    storageBucket: "voiceover-5cb76.appspot.com",
    messagingSenderId: "639717959605",
};
firebase.initializeApp(config);

var database = firebase.database();
var ref = database.ref();

ref.on('value', gotData, errData);

function gotData(data) {

    //console.log(data.val());
    var thisData = data.val();
    var name = Object.keys(thisData);
    var freq = Object.values(thisData);
    var htmlOutput = "";

    htmlOutput = '<table><caption><strong>voiceOver Android App Stats</strong></caption><tr><th><strong>Hero</strong></th><th><strong>Times Played</strong></th></tr>';

    for (var i = 0; i < name.length; i++) {

        htmlOutput += '<tr><th>';
        htmlOutput += jsUcfirst(name[i]);
        htmlOutput += '</th><th>';
        htmlOutput += freq[i];
        htmlOutput += '</th></tr>';

    }

    htmlOutput += '</table>';

    var list = document.getElementById('freqlist');
    list.innerHTML = htmlOutput;

}

function jsUcfirst(string) {
    return string.charAt(0).toUpperCase() + string.slice(1);
}

function errData(err) {
    console.log('Error!');
    console.log(err);
}
