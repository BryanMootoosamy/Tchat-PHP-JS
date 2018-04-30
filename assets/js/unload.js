window.addEventListener("onbeforeunload", function(event) {
    let unloadEvent =  new Request("model/unload.php", "get", true);
    unloadEvent.generic();
    event.preventDefault();
})
