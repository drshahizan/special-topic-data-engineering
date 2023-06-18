/**
 * File attach wrapper.
 *
 * @author Htmlstream
 * @version 1.0
 * @requires
 *
 */
;(function ($) {
  'use strict';

  function formatData(option) {
    if (!option.id) {
      return option.text;
    }

    var result = option.element.dataset.optionTemplate ? option.element.dataset.optionTemplate : '<span>' + option.text + '</span>';

    return $.parseHTML(result);
  }

  $.HSCore.components.HSFileAttach = {
    /**
     *
     *
     * @var Object _baseConfig
     */
    _baseConfig: {},

    /**
     *
     *
     * @var jQuery pageCollection
     */
    pageCollection: $(),

    /**
     * Initialization of File attach wrapper.
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

      this.initFileAttach();

      return this.pageCollection;
    },

    initFileAttach: function () {
      //Variables
      var $self = this,
        config = $self.config,
        collection = $self.pageCollection;

      //Actions
      this.collection.each(function (i, el) {
        //Variables
        var $this = $(el),
          thisResultTextTarget = $this.data('result-text-target');

        $this.on('change', function () {
          var thisVal = $(this).val();

          console.log(thisVal.replace(/.+[\\\/]/, ''));

          $(thisResultTextTarget).text(thisVal.replace(/.+[\\\/]/, ''));
        });

        //Actions
        collection = collection.add($this);
      });
    }
  }
})(jQuery);