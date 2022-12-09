var li_links = document.querySelectorAll(".links ul li");
var view_wraps = document.querySelectorAll(".view_wrap");
var list_view = document.querySelector(".list-view");
var grid_view = document.querySelector(".grid-view");

li_links.forEach(function (link) {
  link.addEventListener("click", function () {
    li_links.forEach(function (link) {
      link.classList.remove("active");
    });

    link.classList.add("active");

    var li_view = link.getAttribute("data-view");

    view_wraps.forEach(function (view) {
      view.style.display = "none";
    });

    if (li_view == "list-view") {
      list_view.style.display = "block";
    } else {
      grid_view.style.display = "block";
    }
  });
});

var li_links2 = document.querySelectorAll(".links2 ul li");
var view_wraps2 = document.querySelectorAll(".view_wrap2");
var list_view2 = document.querySelector(".list-view2");
var grid_view2 = document.querySelector(".grid-view2");
li_links2.forEach(function (link) {
  link.addEventListener("click", function () {
    li_links2.forEach(function (link) {
      link.classList.remove("active");
    });

    link.classList.add("active");

    var li_view = link.getAttribute("data-view2");

    view_wraps2.forEach(function (view) {
      view.style.display = "none";
    });

    if (li_view == "list-view2") {
      list_view2.style.display = "block";
    } else {
      grid_view2.style.display = "block";
    }
  });
});



const navToggleBtn = document.querySelector("[data-nav-toggle-btn]");
const header = document.querySelector("[data-header]");

navToggleBtn.addEventListener("click", function () {
  header.classList.toggle("active");
});