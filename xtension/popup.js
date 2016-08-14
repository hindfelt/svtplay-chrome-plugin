

function writeScript(url){
		   $.post('http://URL/scriptAdder.php',{urlIn:url}, function(response){});
	}


function alertMe() {
	
	chrome.tabs.query({currentWindow: true, active: true}, function(tabs){
		
    writeScript((tabs[0].url));
	});

}
document.getElementById('butt').onclick = alertMe();