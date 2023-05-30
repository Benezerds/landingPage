function includeNavbar() {
    // generate navbar HTML
    var navbarHTML = 
        '<nav class="navbar navbar-light bg-light"></nav>' +
            '<a class="navbar-brand" href="#">' +
            '<img src="/images/benezerlogo.jpg" width="30" height="30" class="d-inline-block align-top" alt="">' +
            'Benezer' +
            '</a>' + 
        '</nav>'
    // insert navbar HTML into the #navbar element
    document.getElementById("navbar").innerHTML = navbarHTML;
}
