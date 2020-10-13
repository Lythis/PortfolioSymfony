    var $document = $(document),
    $element = $('#some-element'),
    className = 'hasScrolled';

$document.scroll(function() {
  $element.toggleClass(scriptNav, $document.scrollTop() >= 10   );
});