/**
 * Video player.
 *
 * @author Htmlstream
 * @version 1.0
 * @requires
 *
 */
;(function ($) {
  'use strict';

  $.HSCore.components.HSVideoPlayer = {
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
     * Initialization of Classes Toggle wrapper.
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

      this.videoPlayerInit();

      return this.pageCollection;

    },

    videoPlayerInit: function () {
      //Variables
      var $self = this,
        collection = $self.pageCollection;

      //Actions
      this.collection.each(function (i, el) {
        //Variables
        var $this = $(el),
          parent = $this.data('parent'),
          target = $this.data('target'),
          SRC = $this.data('video-id'),
          videoType = $this.data('video-type'),
          classes = $this.data('classes'),
          isAutoPlay = Boolean($this.data('is-autoplay'));

        if (videoType !== 'vimeo') {

          $self.youTubeAPIReady();

        }

        $this.on('click', function (e) {
          e.preventDefault();

          $('#' + parent).toggleClass(classes);

          if (videoType === 'vimeo') {

            $self.vimeoPlayer(target, SRC, isAutoPlay);

          } else {

            $self.youTubePlayer(target, SRC, isAutoPlay);

          }
        });

        //Actions
        collection = collection.add($this);
      });
    },

    youTubeAPIReady: function () {
      var YTScriptTag = document.createElement('script');
      YTScriptTag.src = '//www.youtube.com/player_api';

      var DOMfirstScriptTag = document.getElementsByTagName('script')[0];
      DOMfirstScriptTag
        .parentNode
        .insertBefore(YTScriptTag, DOMfirstScriptTag);
    },

    youTubePlayer: function (target, src, autoplay) {
      var YTPlayer = new YT.Player(target, {
        videoId: src,
        playerVars: {
          origin: window.location.origin,
          autoplay: autoplay === true ? 1 : 0
        }
      });
    },

    vimeoPlayer: function (target, src, autoplay) {
      var vimeoIframe = document.getElementById(target),
        vimeoPlayer = new Vimeo.Player(vimeoIframe, {
          id: src,
          autoplay: autoplay === true ? 1 : 0
        });
    }
  }

})(jQuery);
