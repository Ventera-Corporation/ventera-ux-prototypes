// component patterns sidebar toggle
$("#menu-toggle").click(function (e) {
  e.preventDefault();
  $("#iq-proto-wrapper").toggleClass("toggled");
  $(".iq-proto-menu-hamburger").toggleClass("d-none")
  $(".iq-proto-menu-close").toggleClass("d-none")
})

// toggle arrow icon for expand/collapse
function toggleArrow(collapseHeading) {
  var collapseArrow = "#" + collapseHeading + " .iq-icon";
  $(collapseArrow).toggleClass("iq-icon-down");
}
