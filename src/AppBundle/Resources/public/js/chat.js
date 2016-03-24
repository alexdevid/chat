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
    var message = document.createElement("p");
    message.className = "message";
    message.innerHTML = msg.Time + " [" + msg.User.Name + "]";
    var text = document.createElement("span");
    var t = document.createTextNode(msg.Message);
    text.appendChild(t);
    text.setAttribute("contenteditable", true);
    text.addEventListener("dblclick", function(e) {
        console.log("asdasd");
    });
    message.appendChild(text);
    feed.appendChild(message);
    feed.scrollTop = feed.scrollHeight;

    document.querySelector('.users-online').innerHTML = msg.Online;
}