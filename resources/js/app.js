function autoType(elementClass, typingSpeed) {
  var thhis = jQuery(elementClass);
  thhis.css({
    // position: "relative",
    // display: "inline-block",
  });
  // thhis.prepend(
  //   '<div class="cursor" style="right: initial; left:0;"></div>'
  // );
  thhis = thhis.find(".text-js");
  var text = thhis.text().trim().split("");
  var amntOfChars = text.length;
  var newString = "";
  thhis.text("|");
  setTimeout(function () {
    thhis.css("opacity", 1);
    thhis.prev().removeAttr("style");
    thhis.text("");
    for (var i = 0; i < amntOfChars; i++) {
      (function (i, char) {
        setTimeout(function () {
          newString += char;
          thhis.text(newString);
        }, i * typingSpeed);
      })(i + 1, text[i]);
    }
  }, 1500);
}

jQuery(document).ready(function ($) {
    // Navigation toggle
      const main_navigation = jQuery('#primary-menu');

      jQuery('#primary-menu-toggle').on('click', function (e) {
            e.preventDefault();

            main_navigation.toggleClass('hidden');
      });

      // Animation
      // autoType(".type-js", 200);

      $(window).on("load",function() {
        $(window).scroll(function() {
          var windowBottom = $(this).scrollTop() + $(this).innerHeight();
          $(".fade").each(function() {
            /* Check the location of each desired element */
            var objectBottom = $(this).offset().top + $(this).outerHeight() / 3;

            /* If the element is completely within bounds of the window, fade it in */
            if (objectBottom < windowBottom) { //object comes into view (scrolling down)
              if ($(this).css("opacity")==0) {$(this).fadeTo(500,1);}
            } else { //object goes out of view (scrolling up)
              if ($(this).css("opacity")==1) {$(this).fadeTo(500,0);}
            }
          });
        }).scroll(); //invoke scroll-handler on page-load
      });
});
