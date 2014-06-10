(function ($) {
  //Change contract dropdown field
  Drupal.behaviors.contractDropdown = {
    attach: function (context, settings) {
      var dropdown = document.getElementById("edit-contract");
      if(dropdown) {
        dropdown.onchange = function() {
          var myindex  = dropdown.selectedIndex
          switch (myindex) {
            case 1:
            case 2:
              $("#edit-sale-wrapper").hide();
              $("#edit-rent-wrapper").show();
              break;
            case 3:
              $("#edit-rent-wrapper").hide();
              $("#edit-sale-wrapper").show();
              break;
            default:
              $("#edit-rent-wrapper").hide();
              $("#edit-sale-wrapper").hide();
              break;
          }
        };
      }
    }
  };

  //Change sale dropdown field
  Drupal.behaviors.saleDropdown = {
    attach: function (context, settings) {
      var dropdown = document.getElementById("drop-sale");
      if(dropdown != undefined) {
        dropdown.onchange = function() {
          var myindex  = dropdown.selectedIndex
          var selValue = dropdown.options[myindex].value
          var res = selValue.split("-");
          $("#edit-sale-min").val(res[0]);
          $("#edit-sale-max").val(res[1]);
          $("#back-sale").show();
          $("#drop-sale").hide();
        };
      }

      $("#edit-sale-msg").click(function() {
        $("#drop-sale").show();
        $("#back-sale").hide();
      });
    }
  };

  //Change rent dropdown field
  Drupal.behaviors.rentDropdown = {
    attach: function (context, settings) {
      var dropdown = document.getElementById("drop-rent");
      if(dropdown) {
        dropdown.onchange = function() {
          var myindex  = dropdown.selectedIndex
          var selValue = dropdown.options[myindex].value
          var res = selValue.split("-");
          $("#edit-rent-min").val(res[0]);
          $("#edit-rent-max").val(res[1]);
          $("#back-rent").show();
          $("#drop-rent").hide();
        };
      }

      $("#edit-rent-msg").click(function() {
        $("#drop-rent").show();
        $("#back-rent").hide();
      });
    }
  }
})(jQuery);