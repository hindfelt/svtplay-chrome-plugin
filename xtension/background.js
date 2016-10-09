chrome.browserAction.onClicked.addListener(function(tab) {

   chrome.tabs.executeScript(null, {code:'document.body.style.backgroundColor="red";'} );


});