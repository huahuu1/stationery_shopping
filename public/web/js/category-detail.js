"use strict";

$(document).ready(function () {
  $('.button-collapse').click(function () {
    $(this).toggleClass('fas fa-chevron-down');
    $(this).toggleClass('fas fa-chevron-up');

    if ($(this).parent().next().hasClass("d-none")) {
      $(this).parent().next().removeClass("d-none");
    } else {
      $(this).parent().next().toggleClass("d-none");
    }
  });
});