$(document).ready(function () {
  
jQuery(function($){
   $(".user_phone").mask("8(999) 999-99-99");
});

  setTimeout(track, 5000);
  $('.spy-close').on('click', popup_hide);
  $('#spy .spy-form').on('submit', function (e) {
    e.preventDefault();
    $.post('/action_spy.php', $(this).serialize()).done(function (data) {
      console.log(data);
      if (data === 'ok') {
        popup_hide();
      }
    }).fail(function (error){
      console.error(error);
    });
  });
});

var track = function () {
  $(document).mousemove(function (e) {
    var x = e.clientX;
    var y = e.clientY;
    if (y < 15) {
      if (isExpire()) {
        popup_show();
        updateExpire();
      }
      $(this).off(e);
    }
  });
};

var popup_show = function () {
  $('#spy').show();
};

var popup_hide = function () {
  $('#spy').hide();
};

var isExpire = function () {
  var expire = JSON.parse(localStorage.getItem('expire'));
  if (expire) {
    var now = (new Date()).getTime();
    return expire < now;
  }
  return true
}

var updateExpire = function () {
  var expire = (new Date()).getTime() + 24 * 60 * 60 * 1000;
  localStorage.setItem('expire', JSON.stringify(expire));
}

window.onpopstate = function(e) {
  e.preventDefault();
  popup_show();
};
