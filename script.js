jQuery(document).ready(function ($) {
  $("#list_style").click(function () {
    $(".card_container").css("flex-direction", "column");
    $(".card_view").css("flex-direction", "row-reverse");
    $(".desc_view").css("width", "100%");
    $(".desc_view").css("width", "100%");
    $(".desc").css("white-space", "normal");
    $(".desc").css("text-overflow", "initial");
    $(".desc").css("max-width", "100%");
  });
});

jQuery(document).ready(function ($) {
  $("#grid_style").click(function () {
    $(".card_container").css("flex-direction", "row");
    $(".card_view").css("flex-direction", "column");
    $(".desc_view").css("width", "50%");
    $(".desc").css("white-space", "nowrap");
    $(".desc").css("text-overflow", "ellipsis");
    $(".desc").css("max-width", "200px");
  });
});
