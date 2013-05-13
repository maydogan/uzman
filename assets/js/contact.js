/**
 * Contact page JS
 */
window.addEvent('domready', function() {
  var subjectDescWrapperElem = $('subject-description-wrapper');
  $('subject').addEvent('change', function(e) {
    var target = e.target;
    if (target.value == 'support') {
      subjectDescWrapperElem.setStyle('display', 'block');
    } else {
      subjectDescWrapperElem.setStyle('display', 'none');
    }
    OverText.update();
  });
  initFormOverText();
});


