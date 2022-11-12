jQuery(function ($) {
  var currentPage = 1;
  var curr_id;
  $("#load-more").on("click", function () {
    curr_id = $(this).attr("data-id");
    curr_keyword = $(this).attr("data-keyword");
    max_page = $(this).attr("data-max");
    $("#load-more .lds-ellipsis").css("display", "inline-block");
    $("#load-more span").hide();
    currentPage++; // Do currentPage + 1, because we want to load the next page
    (data = {
      action: "jo_load_more", // execute the function
      nonce: ajax_object.jo_nonce,
      paged: currentPage,
      curr_id: curr_id,
      curr_keyword: curr_keyword, // used as $_POST['val'] in ajax callback
    }),
      $.post(ajax_object.jo_ajaxurl, data, function (res) {
        if (res !== "") {
          setTimeout(function () {
            $("#load-more .lds-ellipsis").css("display", "none");
            $("#load-more span").show();
            $("._jo-recent-posts").append(res);
          }, 500);
        }

        if (parseInt(max_page) === currentPage) {
          setTimeout(function () {
            $("#load-more .lds-ellipsis").css("display", "none");
            $("#load-more span").show().html("No more posts..");
            $("#load-more").attr("id", "");
          }, 200);
        }
      });
  });
});
