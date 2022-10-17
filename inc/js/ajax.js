jQuery(function ($) {
  let currentPage = 1;
  let img = $("#load-more").on("click", function () {
    currentPage++; // Do currentPage + 1, because we want to load the next page
    console.log("curr", currentPage);

    (data = {
      action: "jo_load_more", // execute the function
      nonce: ajax_object.jo_nonce,
      paged: currentPage, // used as $_POST['val'] in ajax callback
    }),
      $.post(ajax_object.jo_ajaxurl, data, function (res) {
        // if (currentPage >= res.max) {
        //   $("#load-more").hide();
        // }
        $("#load-more span").hide();
        $("#load-more .lds-ellipsis").css("display", "inline-block");
        $("._jo-recent-posts").append(res);
        $("#load-more .lds-ellipsis").css("display", "none");
        $("#load-more span").show();
      });
  });
});
