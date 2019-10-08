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

// go to next vertical tab
function goToNextTab(currentTabParam, nextTabParam) {
  var currentTab = document.getElementById(currentTabParam + 'Tab');
  var currentTabContent = document.getElementById(currentTabParam);

  var nextTab = document.getElementById(nextTabParam + 'Tab');
  var nextTabContent = document.getElementById(nextTabParam);

  currentTab.classList.remove('active');
  currentTabContent.classList.remove('active');

  nextTab.classList.add('active');
  nextTabContent.classList.add('active');

  document.body.scrollTop = document.documentElement.scrollTop = 0;
}

// conditional content for select dropdown
function toggleSelectContent(dropdownParam, conditionalContentParam, dropdownValueParam) {
  var dropdown = document.getElementById(dropdownParam);
  var dropdownValue = dropdown.options[dropdown.selectedIndex].value;
  var conditionalContent = document.getElementById(conditionalContentParam)

  if (dropdownValue == dropdownValueParam) {
    conditionalContent.setAttribute('style', 'display: block');
  }
  else {
    conditionalContent.setAttribute('style', 'display: none');
  }
}

// conditional content for radio buttons
function toggleRadioContent(radioParam, conditionalContentParam, radioValueParam1, radioValueParam2) {
  var radio = document.getElementsByName(radioParam)[0];
  var radioValue = document.querySelector('input[name="' + radioParam + '"]:checked').value;
  var conditionalContent = document.getElementById(conditionalContentParam)

  if (radioValue == radioValueParam1) {
    conditionalContent.setAttribute('style', 'display: block');
  }
  else if (radioValue == radioValueParam2) {
    conditionalContent.setAttribute('style', 'display: block');
  }
  else {
    conditionalContent.setAttribute('style', 'display: none');
  }
}
