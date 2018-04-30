let requestOnline = new Request("model/userOnline.php", "get", true);
let online = setInterval(function(){requestOnline.newOnline();}, 2000);
