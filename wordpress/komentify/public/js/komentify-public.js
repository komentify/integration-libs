(function ($) {
  'use strict';

  var komentifyWrapperId = 'komentifyCommentBox';

  $(document).ready(function () {
    var commentBox = $('#' + komentifyWrapperId)
    var appId = commentBox.data('app-id')
    var siteId = commentBox.data('site-id')

    if (appId) {
      $.getScript(
        'https://www.komentify.io/api/embed?appId='
        + appId + '&selectorId=' + komentifyWrapperId
        + '&siteId=' + siteId
      )
    }
  })
})(jQuery);
