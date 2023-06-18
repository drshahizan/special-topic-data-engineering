/**
 * Hamburgers plugin wrapper.
 *
 * @author Htmlstream
 * @version 1.0
 *
 */
;(function ($) {
  'use strict';

  $.HSCore.components.HSHamburgers = {
    /**
     *
     *
     * @var Object _baseConfig
     */
    _baseConfig: {
      afterOpen: function () {},
      afterClose: function () {}
    },

    /**
     *
     *
     * @var jQuery pageCollection
     */
    pageCollection: $(),

    init: function (selector, config) {

      this.collection = selector && $(selector).length ? $(selector) : $();
      if (!$(selector).length) return;

      this.config = config && $.isPlainObject(config) ?
        $.extend({}, this._baseConfig, config) : this._baseConfig;

      this.config.itemSelector = selector;

      this.initHamburgers();

      return this.pageCollection;

    },

    /**
     * Initialize 'hamburgers' plugin.
     *
     * @param String selector
     *
     * @return undefined;
     */
    initHamburgers: function () {
      //Variables
      var $self = this,
        config = $self.config,
        collection = $self.pageCollection;

      if (!$self || !$($self).length) return;

      //Actions
      this.collection.each(function (i, el) {
        var $this = $(el),
          button = $this.parents('button, a'),
          isActive = false;

        // if(button.length) {
        $(button).on('click', function () {

          if (isActive === false) {

            $this.addClass('is-active');

            isActive = true;

            config.afterOpen();

          } else {

            $this.removeClass('is-active');

            isActive = false;

            config.afterClose();

          }

        });

        $(document).on('keyup.HSHeaderSide', function (e) {

          if (e.keyCode && e.keyCode === 27) {

            isActive = false;

            config.afterClose();

          }

        });

        //Actions
        collection = collection.add($this);
      });
    }
  };
})(jQuery);