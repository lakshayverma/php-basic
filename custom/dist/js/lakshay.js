function showPopup(url) {
    newwindow = window.open(url, "Checklist", 'height=480,width=320,top=50,left=200,location=0,resizable');
    if (window.focus) {
        newwindow.focus()
    }
}
