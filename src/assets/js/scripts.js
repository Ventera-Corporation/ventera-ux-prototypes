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

// show / hide function 
function showHide() { 
	var disp = document.getElementById("iq-collapse-Wi7mGNDqZW");
	if (disp.style.display === "none") { 
		disp.style.display = "block";
	} else { 
		disp.style.display = "none"; 
	}
}


