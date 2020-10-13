    $element = $('#navbar'),


function scroll() {
  $element.toggleClass(scriptNav, $document.scrollTop() >= 10   );
};