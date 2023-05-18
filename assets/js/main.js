// A $( document ).ready() block.
jQuery(document).ready(function () {
  // <!-- Page JS Helpers (jQuery Sparkline Plugin) -->
  // <!-- Page JS Helpers (Table Tools helpers) -->
  Dashmix.helpersOnLoad([
    "jq-sparkline",
    "dm-table-tools-checkable",
    "dm-table-tools-sections",
  ]);

  //Init calendar
  // var calendarEl = document.getElementById("js-calendar");
  // var calendar = new FullCalendar.Calendar(calendarEl, {
  //   initialView: "dayGridMonth",
  // });
  // calendar.render();
});

function selectWallTab() {
  let wallTab = document.getElementById("so-wall-tab");
  let wallTabContent = document.getElementById("so-wall");
  let peopleTab = document.getElementById("so-people-tab");
  let peopleTabContent = document.getElementById("so-people");
  peopleTab.classList.remove("active");
  peopleTabContent.classList.remove("active");
  peopleTabContent.classList.remove("show");
  wallTab.classList.add("active");
  wallTabContent.classList.add("active");
  wallTabContent.classList.add("show");
}
function selectPeopleTab() {
  let wallTab = document.getElementById("so-wall-tab");
  let wallTabContent = document.getElementById("so-wall");
  let peopleTab = document.getElementById("so-people-tab");
  let peopleTabContent = document.getElementById("so-people");
  wallTab.classList.remove("active");
  wallTabContent.classList.remove("active");
  wallTabContent.classList.remove("show");
  peopleTab.classList.add("active");
  peopleTabContent.classList.add("active");
  peopleTabContent.classList.add("show");
}
