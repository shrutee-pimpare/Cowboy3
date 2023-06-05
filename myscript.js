document
  .getElementById("parallax-scroll-down-button")
  .addEventListener("click", function () {
    // Get the next page URL
    var nextPageUrl = "Contact.html";

    // Scroll to the next page with a parallax scroll down effect
    var parallaxScrollDownButton = document.getElementById(
      "parallax-scroll-down-button"
    );
    parallaxScrollDownButton.scrollIntoView({
      behavior: "smooth",
      block: "end",
      direction: "down",
    });

    // Redirect to the next page
    window.location.href = nextPageUrl;
  });
