/**=========================================================
 * Module: form-wizard.js
 * Handles form wizard plugin and validation
 * [data-toggle="wizard"] to activate wizard plugin
 * [data-validate-step] to enable step validation via parsley
 =========================================================*/

(function($, window, document){
  'use strict';

  if(!$.fn.bwizard) return;

  var Selector = '[data-toggle="wizard"]';

  $(Selector).each(function() {

    var wizard = $(this),
        validate = wizard.data('validateStep'); // allow to set options via data-* attributes
    
    if(validate) {
      wizard.bwizard({
        clickableSteps: false,
        validating: function(e, ui) {

          var $this = $(this),
              form = $this.parent(),
              group = form.find('.bwizard-activated');

          if (false === form.parsley().validate( group[0].id )) {
            e.preventDefault();
            return;
          }
        }
      });
    }
    else {
      wizard.bwizard();
    }

  });


}(jQuery, window, document));