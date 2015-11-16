(function ($) {
  jQuery.expr[':'].Contains = function(a,i,m){
      return (a.textContent || a.innerText || "").toUpperCase().indexOf(m[3].toUpperCase())>=0;
  };
  function listFilter(books) {
    $('#search').change( function () {
        var filter = $(this).val();
        if(filter) {
          $('#books').find("a:not(:Contains(" + filter + "))").parent().fadeOut();
          $('#books').find("a:Contains(" + filter + ")").parent().fadeIn();
        } else {
          $('#books').find("td").fadeIn();
        }
        return false;
      })
    .keyup( function () {
        $(this).change();
    });
  }
  $(function () {
    listFilter($("#books"));
  });
}(jQuery));
