let messageRequest = new Request("model/showMessage.php", "get", true);

// let interval = window.setInterval(messageRequest.newRequest(), 1000);
let interval = window.setInterval(function() {messageRequest.newRequest()}, 2000);
let scrollExec = () => {
    let screenScroll = document.getElementById("screen");
    screenScroll.scrollTop = 2000;
    screenScroll.scrollHeight = screenScroll.scrollTop;
}
// setTimeout(scrollExec, 2100);
let otherInterval = window.setInterval(function() {scrollExec()}, 1000);
