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

//Category dropdown submenu
jQuery(document).ready(function () {
  // Quando o botão .dropdown-toggle-split é clicado ou recebe hover
  jQuery(".dropdown-toggle-split").on("click hover", function (e) {
    e.stopPropagation(); // Evita que o evento de clique ou hover se propague

    // Adicione a classe .show ao submenu
    jQuery(this).parent().parent().addClass("show");
    jQuery(this).find(".dropdown-submenu").toggleClass("show");
  });

  // Feche o submenu quando clicar fora dele
  jQuery(document).on("click", function () {
    jQuery(".dropdown-submenu").removeClass("show");
  });
});
