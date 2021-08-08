if(window.history.replaceState){
    console.log("ok");
    window.history.replaceState(null, null, window.location.href);
}