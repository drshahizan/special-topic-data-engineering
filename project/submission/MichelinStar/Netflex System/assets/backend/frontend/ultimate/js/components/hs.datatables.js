/**
 * Datatables wrapper.
 *
 * @author Htmlstream
 * @version 1.0
 *
 */
;
(function ($) {
  'use strict';

  $.HSCore.components.HSDatatables = {
    /**
     *
     *
     * @var Object _baseConfig
     */
    _baseConfig: {
      paging: true
    },

    /**
     *
     *
     * @var jQuery pageCollection
     */
    pageCollection: $(),

    /**
     * Initialization of Datatables wrapper.
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

      this.initDatatables();

      return this.pageCollection;
    },

    initDatatables: function () {
      //Variables
      var $self = this,
        config = $self.config,
        collection = $self.pageCollection;

      //Actions
      this.collection.each(function (i, el) {
        //Variables
        var $this = $(el),
          $info = $this.data('dt-info'),
          $search = $this.data('dt-search'),
          $entries = $this.data('dt-entries'),
          $pagination = $this.data('dt-pagination'),
          $detailsInvoker = $this.data('dt-details-invoker'),

          pageLength = $this.data('dt-page-length'),
          isResponsive = Boolean($this.data('dt-is-responsive')),
          isSelectable = Boolean($this.data('dt-is-selectable')),
          isColumnsSearch = Boolean($this.data('dt-is-columns-search')),
          isColumnsSearchTheadAfter = Boolean($this.data('dt-is-columns-search-thead-after')),
          isShowPaging = Boolean($this.data('dt-is-show-paging')),
          scrollHeight = $this.data('dt-scroll-height'),

          paginationClasses = $this.data('dt-pagination-classes'),
          paginationItemsClasses = $this.data('dt-pagination-items-classes'),
          paginationLinksClasses = $this.data('dt-pagination-links-classes'),
          paginationNextClasses = $this.data('dt-pagination-next-classes'),
          paginationNextLinkClasses = $this.data('dt-pagination-next-link-classes'),
          paginationNextLinkMarkup = $this.data('dt-pagination-next-link-markup'),
          paginationPrevClasses = $this.data('dt-pagination-prev-classes'),
          paginationPrevLinkClasses = $this.data('dt-pagination-prev-link-classes'),
          paginationPrevLinkMarkup = $this.data('dt-pagination-prev-link-markup'),

          selectAllControl = $this.data('dt-select-all-control'),

          table = $this.DataTable({
            pageLength: pageLength,
            responsive: isResponsive,
            scrollY: scrollHeight ? scrollHeight : '',
            scrollCollapse: scrollHeight ? true : false,
            paging: isShowPaging ? isShowPaging : config.paging,
            drawCallback: function (settings) {
              var api = this.api(),
                info = api.page.info(),
                $initPagination = $('#' + api.context[0].nTable.id + '_paginate'),
                $initPaginationLinksContainer = $initPagination.find('> span'),
                $initPaginationPrev = $initPagination.find('.paginate_button.previous'),
                $initPaginationNext = $initPagination.find('.paginate_button.next'),
                $initPaginationLink = $initPagination.find('.paginate_button:not(.previous):not(.next), .ellipsis');

              $initPagination.addClass(paginationClasses);
              $initPaginationPrev.wrap('<span class="' + paginationItemsClasses + '"></span>');
              $initPaginationPrev.addClass(paginationPrevLinkClasses)
                .html(paginationPrevLinkMarkup);
              $initPaginationNext.wrap('<span class="' + paginationItemsClasses + '"></span>');
              $initPaginationNext.addClass(paginationNextLinkClasses)
                .html(paginationNextLinkMarkup);
              $initPaginationLinksContainer.css('display', 'flex');
              $initPaginationLink.each(function() {
                if($(this).hasClass('current')) {
                  $(this).wrap('<span class="' + paginationItemsClasses + ' active' + '"></span>');
                } else {
                  $(this).wrap('<span class="' + paginationItemsClasses + '"></span>');
                }
              });
              $initPaginationLink.addClass(paginationLinksClasses);

              if(info.pages <= 1) {

                $('#' + $pagination).hide();

              }  else {

                $('#' + $pagination).show();

              }

              $($info).html(
                'Showing ' + (info.start + 1) + ' to ' + info.end + ' of ' + info.recordsDisplay + ' Entries'
              );
            }
          }),

          info = table.page.info();

        $('#' + $pagination).append($('#' + table.context[0].nTable.id + '_paginate'));

        if (scrollHeight) {
          $(table.context[0].nScrollBody).mCustomScrollbar({
            scrollbarPosition: 'outside'
          });
        }

        $($search).on('keyup', function () {
          table.search(this.value).draw();
        });

        if (isColumnsSearch === true) {
          table.columns().every(function () {
            var that = this;

            if (isColumnsSearchTheadAfter === true) {
              $('.dataTables_scrollFoot').insertAfter('.dataTables_scrollHead');
            }

            $('input', this.footer()).on('keyup change', function () {
              if (that.search() !== this.value) {
                that
                  .search(this.value)
                  .draw();
              }
            });

            $('select', this.footer()).on('change', function () {
              if (that.search() !== this.value) {
                that
                  .search(this.value)
                  .draw();
              }
            });
          });
        }

        $($entries).on('change', function () {
          var val = $(this).val();

          table.page.len(val).draw();
        });

        if (isSelectable === true) {
          $($this).on('change', 'input', function () {
            $(this).parents('tr').toggleClass('checked');
          })
        }

        // Details
        $self.details($this, $detailsInvoker, table);

        // Select All
        if (selectAllControl) {
          $self.selectAll(selectAllControl, table, $this);
        }

        //Actions
        collection = collection.add($this);
      });
    },

    format: function (value) {
      return value;
    },

    details: function (el, invoker, table) {
      if (!invoker) return;

      //Variables
      var $self = this;

      $(el).on('click', invoker, function () {
        var tr = $(this).closest('tr'),
          row = table.row(tr);

        if (row.child.isShown()) {
          row.child.hide();
          tr.removeClass('opened');
        } else {
          row.child($self.format(tr.data('details'))).show();
          tr.addClass('opened');
        }
      });
    },

    selectAll: function (selectallcontrol, table, target) {
      $(selectallcontrol).on('click', function () {
        var rows = table.rows({'search': 'applied'}).nodes();

        $('input[type="checkbox"]', rows).prop('checked', this.checked);
      });

      $(target).find('tbody').on('change', 'input[type="checkbox"]', function () {
        if (!this.checked) {
          var el = $(selectallcontrol).get(0);

          if (el && el.checked && ('indeterminate' in el)) {
            el.indeterminate = true;
          }
        }
      });
    }
  };
})(jQuery);