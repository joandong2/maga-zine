jQuery(function ($) {
  var currentPage = 1;
  var curr_id;
  $("#load-more").on("click", function () {
    curr_id = $(this).attr("data-id");
    $("#load-more .lds-ellipsis").css("display", "inline-block");
    $("#load-more span").hide();
    currentPage++; // Do currentPage + 1, because we want to load the next page
    (data = {
      action: "jo_load_more", // execute the function
      nonce: ajax_object.jo_nonce,
      paged: currentPage,
      curr_id: curr_id, // used as $_POST['val'] in ajax callback
    }),
      $.post(ajax_object.jo_ajaxurl, data, function (res) {
        if (res === "") {
          $("#load-more .lds-ellipsis").css("display", "none");
          $("#load-more span").show().html("No more posts..");
        } else {
          setTimeout(function () {
            $("#load-more .lds-ellipsis").css("display", "none");
            $("#load-more span").show();
            $("._jo-recent-posts").append(res);
          }, 500);
        }
      });
  });
});
