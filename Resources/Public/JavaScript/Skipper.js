const skipToContentSkipper = {
  init: function () {
    this.skipToContent = document.getElementById("skipToContent");
    this.skipToFooter = document.getElementById("skipToFooter");

    if (this.skipToContent) {
      this.invokeSkipToContent();
    }

    if (this.skipToFooter) {
      this.invokeSkipToFooter();
    }
  },

  invokeSkipToContent: function () {
    this.skipToContent.addEventListener("click", (event) => {
      event.preventDefault();

      let main = document.querySelector("body > main");

      if (main) {
        main.scrollIntoView();
      }
    });

    this.skipToContent.addEventListener("keydown", (e) => {
      if (e.key === "Enter" || e.key === " ") {
        let main = document.querySelector("body > main");

        if (main) {
          main.scrollIntoView();
        }
      }
    });
  },

  invokeSkipToFooter: function () {
    this.skipToFooter.addEventListener("click", (event) => {
      event.preventDefault();

      let footer = document.querySelector("body > footer");

      if (footer) {
        footer.scrollIntoView();
      }
    });

    this.skipToFooter.addEventListener("keydown", (e) => {
      if (e.key === "Enter" || e.key === " ") {
        let footer = document.querySelector("body > footer");

        if (footer) {
          footer.scrollIntoView();
        }
      }
    });
  },
};

document.addEventListener("DOMContentLoaded", () => {
  skipToContentSkipper.init();
});
