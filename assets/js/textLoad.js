let messageRequest = new Request("model/showMessage.php", "get", true);

// let interval = window.setInterval(messageRequest.newRequest(), 1000);
let interval = window.setInterval(function() {messageRequest.newRequest()}, 500);
