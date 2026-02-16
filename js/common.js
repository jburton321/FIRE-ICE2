$(function () {
  const lightbox = GLightbox();

  // Scroll To #
  $(".scrollTo").click(function (e) {
    e.preventDefault();

    var animation = "pulse";

    var getScrollToID = $(this).attr("href");

    $("html, body").animate(
      {
        scrollTop: $(getScrollToID).offset().top - 10,
      },
      1000
    );

    $(getScrollToID).addClass("animated infinite delay-1s " + animation);
    setTimeout(function () {
      $(getScrollToID).removeClass("animated infinite delay-1s " + animation);
      $("#fname").focus();
    }, 2900);
  });
  $(".scrollTo2").click(function (e) {
    e.preventDefault();

    var getScrollToID = $(this).attr("href");

    $("html, body").animate(
      {
        scrollTop: $(getScrollToID).offset().top - 170,
      },
      1000
    );
  });
  $(".scrollTo3").click(function (e) {
    e.preventDefault();

    var getScrollToID = $(this).attr("href");

    $("html, body").animate(
      {
        scrollTop: $(getScrollToID).offset().top,
      },
      1000
    );
  });

  // Masks
  var SPMaskBehavior = function (val) {
      var phoneFormat = "";
      if (val.replace(/\D/g, "").length === 11) {
        phoneFormat = "0 (000) 000-0000";
        var res = val.substring(2, 16);
        $("input#phone").val(res);
        $("input#phone2").val(res);
      } else {
        phoneFormat = "(000) 000-00009";
      }
      return phoneFormat;
    },
    spOptions = {
      onKeyPress: function (val, e, field, options) {
        field.mask(SPMaskBehavior.apply({}, arguments), options);
      },
    };
  $("input#phone").mask(SPMaskBehavior, spOptions);

  // Tooltips for Validation
  var tipPosition = "";
  if (window.innerWidth <= 825) {
    tipPosition = "bottom-right";
  } else {
    tipPosition = "top-right";
  }
  $('.form-control, input[type="checkbox"]').tooltipster({
    trigger: "custom",
    onlyOne: false,
    position: tipPosition,
    theme: "tooltipster-punk",
    offsetY: -4,
    animation: "grow",
    updateAnimation: false,
  });

  // Validation
  // Custom validation rule for email
  $.validator.addMethod(
    "emailtld",
    function (val, elem) {
      var filter = /^([a-zA-Z0-9_\.\-])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/;

      if (!filter.test(val)) {
        return false;
      } else {
        return true;
      }
    },
    "Please enter a valid email address."
  );

  $("#mainForm").validate({
    errorPlacement: function (error, element) {
      $(element).tooltipster("update", $(error).text());
      $(element).tooltipster("show");
    },
    success: function (label, element) {
      $(element).tooltipster("hide");
    },
    rules: {
      phone: {
        pattern: "[(]?[0-9]{3}[)]?[ ][0-9]{3}-?[0-9]{4}",
        phoneUS: true,
      },
      iagree: "required",
    },
    messages: {
      phone: { pattern: "Enter valid format: (XXX) XXX-XXXX" },
      iagree: "You must agree to the terms & conditions",
    },
  });

  // increment and decrement the value of the "guests" input
  function guestsInputControls(minValue, maxValue) {
    var guestsInput = $("#guests");
    var minusBtn = $(".btn-minus");
    var plusBtn = $(".btn-plus");

    function updateButtons() {
      var currentValue = parseInt(guestsInput.val());

      if (currentValue <= minValue) {
        minusBtn.addClass("disabled");
      } else {
        minusBtn.removeClass("disabled");
      }

      if (currentValue >= maxValue) {
        plusBtn.addClass("disabled");
      } else {
        plusBtn.removeClass("disabled");
      }
    }

    updateButtons();

    minusBtn.click(function () {
      var currentValue = parseInt(guestsInput.val());
      if (currentValue > minValue) {
        guestsInput.val(currentValue - 1);
        updateButtons();
      }
      return false;
    });

    plusBtn.click(function () {
      var currentValue = parseInt(guestsInput.val());
      if (currentValue < maxValue) {
        guestsInput.val(currentValue + 1);
        updateButtons();
      }
      return false;
    });
  }
  guestsInputControls(2, 10);

  // Add Active Class to the Custom Checkboxes
  function addActiveClassToLabel() {
    $('.custom-checkboxes input[type="checkbox"]').change(function () {
      $(this).next("label").toggleClass("active", this.checked);
    });
  }
  addActiveClassToLabel();
});
