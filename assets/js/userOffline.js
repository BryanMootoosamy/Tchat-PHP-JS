let requestOffline = new Request("model/userOffline.php", "get", true);
let offline = setInterval(function(){requestOffline.newOffline();}, 500);
