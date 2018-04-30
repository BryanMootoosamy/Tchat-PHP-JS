let sendButton = document.getElementById('sendMessage');
sendButton.addEventListener("click", function(event) {
    let messageContent = document.getElementById("textArea");
    let sendMessageRequest = new Request("model/sendMessage.php", "post", true);
    sendMessageRequest.sendMessage('message=' + messageContent.value);
    messageContent.value = "";
    event.preventDefault();
})
