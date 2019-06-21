// load header
$(function () {
    $("#header").load("../components/header.html");
    $("#header").load("../../components/header.html");
});

// load footer
$(function () {
    $("#footer").load("../components/footer.html");
    $("#footer").load("../../components/footer.html");
});

$("#iq-heading-nMGxlOFjpA").click(function() {
	$("#iq-arrow-right").toggleClass("iq-icon-down"); 
	$("#iq-collapse-Wi7mGNDqZW").toggle(); 
})

$("#iq-heading-one").click(function() {
	$("#iq-accordion-arrow-one").toggleClass("iq-icon-down");
})

$("#iq-heading-two").click(function() {
	$("#iq-accordion-arrow-two").toggleClass("iq-icon-down");
})
