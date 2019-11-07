export default {
  init() {
    // JavaScript to be fired on all pages

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
  },
  finalize() {
    // JavaScript to be fired on all pages, after page specific JS is fired
  }
};
