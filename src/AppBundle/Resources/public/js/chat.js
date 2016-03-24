var webSocket = WS.connect(_WS_URI);
webSocket.on("socket/connect", function (session) {

    //get message
    session.subscribe("acme/channel", function(uri, payload){
        addMessage(payload);
    });

    //send message
    document.querySelector('#input').onkeypress = function(e) {
        if (e.which == '13') {
            var value = document.querySelector('#input').value;
            session.publish("acme/channel", value);
            document.querySelector('#input').value = '';
        }
    };
});

webSocket.on("socket/disconnect", function (error) {
    console.log("Disconnected for " + error.reason + " with code " + error.code);
});

function addMessage(msg) {
    console.log(msg);
    var feed = document.querySelector('.feed');
    feed.innerHTML += "<p class='message'>" + msg.Time + " [" + msg.User.Name + "] <span>" + msg.Message + "</span></p>";
    feed.scrollTop = feed.scrollHeight;

    document.querySelector('.users-online').innerHTML = msg.Online;
}