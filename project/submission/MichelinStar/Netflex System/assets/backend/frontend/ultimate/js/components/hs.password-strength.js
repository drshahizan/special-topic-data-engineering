/**
 * jQuery Password Strength wrapper.
 *
 * @author Htmlstream
 * @version 1.0
 *
 */
;(function ($) {
  'use strict';
  $.HSCore.components.HSPasswordStrength = {
    /**
     *
     *
     * @var Object _baseConfig
     */
    _baseConfig: {
      options: {
        ui: {
          verdicts: ["Very Weak", "Weak", "Normal", "Medium", "Strong", "Very Strong"],
          container: false,
          viewports: {
            progress: false,
            verdict: false
          },
          progressExtraCssClasses: false
        }
      }
    },

    /**
     *
     *
     * @var jQuery pageCollection
     */
    pageCollection: $(),

    /**
     * Initialization of jQuery Password Strength wrapper.
     *
     * @param String selector (optional)
     * @param Object config (optional)
     *
     * @return jQuery pageCollection - collection of initialized items.
     */

    init: function (selector, config) {
      this.collection = selector && $(selector).length ? $(selector) : $();
      if (!$(selector).length) return;

      this.config = config && $.isPlainObject(config) ?
        $.extend({}, this._baseConfig, config) : this._baseConfig;

      this.config.itemSelector = selector;

      this.initHSPasswordStrength();

      return this.pageCollection;
    },

    initHSPasswordStrength: function () {
      //Variables
      var $self = this,
        config = $self.config,
        collection = $self.pageCollection;

      //Actions
      this.collection.each(function (i, el) {
        //Variables
        var $this = $(el),
          options = {
            ui: {
              verdicts: $this.data('pwstrength-verdicts-texts') ? JSON.parse(el.attr('data-pwstrength-verdict-texts')) : config.options.ui.verdicts,
              container: $this.data('pwstrength-container') ? $this.data('pwstrength-container') : config.options.ui.container,
              viewports: {
                progress: $this.data('pwstrength-progress') ? $this.data('pwstrength-progress') : config.options.ui.viewports.progress,
                verdict: $this.data('pwstrength-verdict') ? $this.data('pwstrength-verdict') : config.options.ui.viewports.verdict
              },
              progressExtraCssClasses: $this.data('pwstrength-progress-extra-classes') ? $this.data('pwstrength-progress-extra-classes') : config.options.ui.progressExtraCssClasses
            }
          };

        $this.pwstrength(options);

        //Actions
        collection = collection.add($this);
      });
    }
  };
})(jQuery);
