if (window.location.pathname !== "/") {
let timeoutDuration = 12000; // allgemeine weiterleitungs-zeit 12sek

if (window.location.pathname === "/gs-1010001010/") {
timeoutDuration = 5000; // weiterleitungs-zeit für /gewonnen-nichts/ 5sek
} else if (
window.location.pathname === "/gs-1010101010/" || window.location.pathname === "/gs-1010011010/"
) {
timeoutDuration = 12000; // weiterleitungs-zeit für /gewonnen-iphone/ und /gewonnen-100chf/ 12sek
}

setTimeout(function () {
window.location.href = "/";
}, timeoutDuration);
}