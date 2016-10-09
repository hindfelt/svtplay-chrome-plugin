
var sUrl = checkLocalStorage();
document.getElementById('inputBox').value = sUrl;

function writeScript(serverUrl,url)
{
		$.post('http://' + serverUrl + '/scriptAdder.php',{urlIn:url}, function(response){
			
		});
	
}

function getEpisode(serverUrl){
	chrome.tabs.query({currentWindow: true, active: true}, function(tabs){	
    writeScript(serverUrl,(tabs[0].url));
	});

}
	
function checkLocalStorage(){

	var serverUrl = localStorage.getItem("serverUrl");

	if (serverUrl==null){
		return "enter url";
	}else{
		return serverUrl;	
	}
}

function addServerUrl(){
	var newServerUrl = document.getElementById('inputBox').value;
	localStorage.setItem('serverUrl',newServerUrl);
	console.log(newServerUrl);
}


document.addEventListener('DOMContentLoaded', function() {
    var link = document.getElementById('link');
    link.addEventListener('click', function() {
		getEpisode(sUrl);
		console.log(sUrl + "saved");
	});
});


document.addEventListener('DOMContentLoaded', function() {
    var saveUrl = document.getElementById('saveUrl');
    saveUrl.addEventListener('click', function() {
    	addServerUrl();
    });
});
