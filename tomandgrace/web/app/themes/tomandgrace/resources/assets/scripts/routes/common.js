export default {
  init() {
    // JavaScript to be fired on all pages
    let mobileMenuEnabled = false;

    function search() {
      const searchValue = $(".search-input").val();
      window.location.href =
        window.location.protocol +
        "//" +
        window.location.host +
        "/?s=" +
        searchValue;
    }

    $(".search-input").on("keypress", function(e) {
      if (e.which == 13) {
        search();
      }
    });

    $(".search-button").click(function() {
      search();
    });

    $(".mobile-menu").click(function() {
      const newSrc = mobileMenuEnabled
        ? $(this).attr("menu-src")
        : $(this).attr("close-src");

      const newMenuDisplay = mobileMenuEnabled ? "none" : "flex";
      const newDocumentDisplay = mobileMenuEnabled ? "block" : "none";

      mobileMenuEnabled = !mobileMenuEnabled;

      $(this).attr("src", newSrc);
      $(".menu-container").css("display", newMenuDisplay);
      $(".container .content").css("display", newDocumentDisplay);
    });
  },
  finalize() {
    // JavaScript to be fired on all pages, after page specific JS is fired
  }
};
