import $ from "jquery";

class Search {
  // 1. describe and create/initiate our object
  constructor() {
    this.openButton = $(".js-search-trigger");
    this.closeButton = $(".search-overlay__close");
    this.searchOverlay = $(".search-overlay");
    this.searchField = $("#search-term");
    this.events();
    this.isOverlayOpen = false;
  }

  // 2.events
  events() {
    this.openButton.on("click", this.openOverlay.bind(this));
    this.closeButton.on("click", this.closeOverlay.bind(this));
    $(document).on("keydown", this.keyPressDispatcher.bind(this));
    this.searchField.on("keydown", this.typingLogic.bind(this));
  }

  // 3. methods (function, action)
  typingLogic() {
    setTimeout(function () {
      console.log("test");
    }, 2000);
  }

  keyPressDispatcher(e) {
    if (e.keyCode === 83 && !this.isOverlayOpen) this.openOverlay();
    if (e.keyCode === 27 && this.isOverlayOpen) this.closeOverlay();
  }

  openOverlay() {
    this.searchOverlay.addClass("search-overlay--active");
    $("body").addClass("body-no-scroll");
    this.isOverlayOpen = true;
    console.log("our open method just ran!");
  }

  closeOverlay() {
    this.searchOverlay.removeClass("search-overlay--active");
    $("body").removeClass("body-no-scroll");
    this.isOverlayOpen = false;
    console.log("our close method just ran!");
  }
}

export default Search;
