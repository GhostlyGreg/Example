$(function() {
    
    var json = (function () {
      var json = null;
      $.ajax({
        'async': false,
        'global': false,
        'url': 'json/all_mtg_cards.json',
        'dataType': "json",
        'success': function (data) {
            json = data;
        }
      });
      return json;
    })(); 
    $( "#search" ).autocomplete({ minLength: 3 });
    $( "#search" ).autocomplete({
      source: json
    });
  });