jQuery(function ($) {
  let currentPage = 1;
  $("#load-more").on("click", function () {
    currentPage++; // Do currentPage + 1, because we want to load the next page
    console.log("curr", currentPage);

    (data = {
      action: "jo_load_more", // execute the function
      nonce: ajax_object.jo_nonce,
      paged: currentPage, // used as $_POST['val'] in ajax callback
    }),
      $.post(ajax_object.jo_ajaxurl, data, function (res) {
        //console.log(response);
        if (currentPage >= res.max) {
          $("#load-more").hide();
        }
        console.log("h2h2h2", res);
        $(".publication-list").append(res.html);
      });
  });
});
