/**
 * Dropzone wrapper.
 *
 * @author Htmlstream
 * @version 1.0
 * @requires jQuery,
 *
 */
;
(function ($) {
  'use strict';

  $.HSCore.components.HSDropzone = {
    /**
     *
     *
     * @var Object _baseConfig
     */
    _baseConfig: {
      url: "../../assets/vendor/dropzone/upload.html",
      thumbnailWidth: 300,
      thumbnailHeight: 300,
      previewTemplate: '<div class="col h-100 mb-5">' +
        '  <div class="dz-preview dz-file-preview">' +
        '    <div class="d-flex justify-content-end dz-close-icon">' +
        '      <small class="fa fa-times" data-dz-remove></small>' +
        '    </div>' +
        '    <div class="dz-details media">' +
        '      <div class="dz-img">' +
        '       <img class="img-fluid" data-dz-thumbnail>' +
        '      </div>' +
        '      <div class="media-body dz-file-wrapper">' +
        '       <h6 class="dz-filename">' +
        '        <span class="dz-title" data-dz-name></span>' +
        '       </h6>' +
        '       <div class="dz-size" data-dz-size></div>' +
        '      </div>' +
        '    </div>' +
        '    <div class="dz-progress progress" style="height: 4px;">' +
        '      <div class="dz-upload progress-bar bg-success" role="progressbar" style="width: 0" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100" data-dz-uploadprogress></div>' +
        '    </div>' +
        '    <div class="d-flex align-items-center">' +
        '      <div class="dz-success-mark">' +
        '        <span class="fa fa-check-circle"></span>' +
        '      </div>' +
        '      <div class="dz-error-mark">' +
        '        <span class="fa fa-times-circle"></span>' +
        '      </div>' +
        '      <div class="dz-error-message">' +
        '        <small data-dz-errormessage></small>' +
        '      </div>' +
        '    </div>' +
        '  </div>' +
        '</div>',
      addedfile: function() {},
      removedfile: function() {}
    },

    /**
     *
     *
     * @var jQuery pageCollection
     */
    pageCollection: $(),

    /**
     * Initialization of Dropzone wrapper.
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

      this.initDropzone();

      return this.pageCollection;
    },

    initDropzone: function () {
      //Variables
      var $self = this,
        config = $self.config,
        collection = $self.pageCollection;

      //Actions
      this.collection.each(function (i, el) {
        //Variables
        var $this = $(el),
          options = JSON.parse(el.getAttribute('data-options'));

        $this.dropzone({
          init: function () {
            var $this = this,
              $message = $($this.element).find('.dz-message');

            $this.on('addedfile', function (file) {

              if (String(file.type).slice(0, 6) !== 'image/') {

                $(file.previewElement).find('.dz-img')
                  .replaceWith('<span class="dz-file-abbr">' + file.name.substring(0, 1).toUpperCase() + '</span>');

              }

              config.addedfile();

              $message.hide();

            });

            $this.on('removedfile', function (file) {

              if ($this.files.length <= 0) {

                config.removedfile();

                $message.show();

              }

            });
          },
          url: options && options.url ? options.url : config.url,
          thumbnailWidth: options && options.thumbnailWidth ? options.thumbnailWidth : config.thumbnailWidth,
          thumbnailHeight: options && options.thumbnailHeight ? options.thumbnailHeight : config.thumbnailHeight,
          previewTemplate: options && options.previewTemplate ? $(options.previewTemplate).html() : config.previewTemplate
        });

        //Actions
        collection = collection.add($this);
      });
    }
  }
})(jQuery);
