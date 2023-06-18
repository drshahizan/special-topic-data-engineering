$(document).ready(function() {
    $('.dd').nestable({
          'maxDepth' : 1
       });
       $('#serialization').val(window.JSON.stringify($('.dd').nestable('serialize')));
       $('.tagsInput').tagsInput({
         'width':'100%',
         'interactive':true,
         'delimiter': ',',   // Or a string with a single delimiter. Ex: ';'
         'removeWithBackspace' : true,
         'minChars' : 0,
         'maxChars' : 0, // if not provided there is no limit
         'placeholderColor' : '#666666'
       });
});
$('.dd').on('change', function() {
  var updatedSerialization = window.JSON.stringify($('.dd').nestable('serialize'));
  var url = $('#ajax_url_for_serialization').val();
  $('#serialization').val(updatedSerialization);
  updateSerialization(url, updatedSerialization);
});

function updateSerialization(url, updatedSerialization) {

    // $.ajax(function() {
    //     type : 'POST',
    //     url : url,
    //     data : { updatedSerialization : updatedSerialization },
    //     success : function() {
    //         console.log('updated');
    //     }
    // });

    $.post(url, {updatedSerialization : updatedSerialization}, function(response){
        $('#reload_section').html(response);
    });
}
