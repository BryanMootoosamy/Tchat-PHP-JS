class Request {
    constructor(url, type, sync) {
        this.url = url;
        this.type = type;
        this.sync = sync;
    }
    newRequest () {
        let req = new XMLHttpRequest();
        req.open(this.type,this.url,this.sync);
        req.send();
        req.onreadystatechange = () => {
            //appelle des fonctions prototypées
            if (req.readyState == 4) {
                let screen = document.getElementById("tchatMessage");
                screen.innerHTML = req.response;
            }
        }
    }
    newOnline() {
        let req = new XMLHttpRequest();
        req.open(this.type,this.url,this.sync);
        req.send();
        req.onreadystatechange = () => {
            //appelle des fonctions prototypées
            if (req.readyState == 4) {
                let onlineDiv = document.getElementById("userOnline");
                onlineDiv.innerHTML = req.response;
            }
        }
    }
    newOffline() {
        let req = new XMLHttpRequest();
        req.open(this.type,this.url,this.sync);
        req.send();
        req.onreadystatechange = () => {
            //appelle des fonctions prototypées
            if (req.readyState == 4) {
                let offlineDiv = document.getElementById("userOffline");
                offlineDiv.innerHTML = req.response;
            }
        }
    }
    generic() {
        let req = new XMLHttpRequest();
        req.open(this.type,this.url,this.sync);
        req.send();
    }
    sendMessage(messageToSend) {
        let req = new XMLHttpRequest();
        req.open(this.type,this.url,this.sync);
        req.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
        req.send(messageToSend);
    }

}
