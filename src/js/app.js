var intervalId = setInterval(function() {
    if(navigator.onLine){
        $("#online").removeClass("offline");
    } else {
        $("#online").addClass("offline");
    }
}, 500);
$(document).ready(function (e) {
    $("#ancher, #ancher").lightWeightPopup({ 
        width: "650px",
        height: "fit-content",
        top: "20px",
    });
});
$('[data-bjax]').bjax();
function close_frame(){
    if(!window.should_close){
        window.should_close=1;
    }else if(window.should_close==1){
        setTimeout(function(){ 
            location.reload();
        }, 2000);
    }
}
window.addEventListener('load', () => {
    setTimeout(function(){ 
        const loader = document.querySelector(".loader");
        loader.className += " hidden";
    }, 2000);
    registerSW();
});
async function registerSW() {
    if ('serviceWorker' in navigator) {
        try {
        await navigator
                .serviceWorker
                .register('sw.js');
        }
        catch (e) {
        //console.log('SW registration failed');
        }
    }
}