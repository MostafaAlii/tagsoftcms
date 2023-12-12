var isOpenSide = false;
$(function() {
  // Slide Menu
  $('#slidemenu').sidenav({
    edge: 'right',
    draggable: false,
    onOpenStart: function() {
      isOpenSide = true;
      $('.btn-float-opt').addClass('active');
    },
    onCloseStart: function() {
      isOpenSide = false;
      $('.btn-float-opt').removeClass('active');
    }
  });

  // Tabs
  $('.opt-wrap .tabs').tabs({ swipeable: false });

  // Menu and Tabs
  $('#open_palette').click(function() {
    isOpenSide = !isOpenSide;
    if(isOpenSide) {
      $('#slidemenu').sidenav('open')  
    } else {
      $('#slidemenu').sidenav('close')  
    }
    $('.tabs').tabs('select', 'palette_options');
  });
  $('#open_explore').click(function() {
    isOpenSide = !isOpenSide;
    if(isOpenSide) {
      $('#slidemenu').sidenav('open')  
    } else {
      $('#slidemenu').sidenav('close')  
    }
    $('.tabs').tabs('select', 'explore_theme');
  });
  $('#close_sideright').click(function() {
    $('#slidemenu').sidenav('close')  
  });

  // Dark Light Mode
  $('#theme_switcher_side').change(function() {
    if($(this).is(':checked')) {
      // dark
      localStorage.setItem('luxiDarkMode', "true");
      $('#app').removeClass('theme--light');
      $('#app').addClass('theme--dark');
    } else {
      // light
      localStorage.setItem('luxiDarkMode', "false");
      $('#app').removeClass('theme--dark');
      $('#app').addClass('theme--light');
    }
  });

  // Direction swithcer
  $('#dir_switcher_side').change(function() {
    if($(this).is(':checked')) {
      // RTL
      $('html').attr('dir', 'rtl');
    } else {
      // LTR
      $('html').attr('dir', 'ltr');
    }
  });
  
  // Theme color switcher
  $('.theme-color .swatch').click(function() {
    var color = $(this).data('color'),
        themeWrap = $("*[class*='-var']");
    
    // Change selected active class
    $('.theme-color .swatch').removeClass('active');
    $(this).addClass('active');

    // Remove Prev color-var
    themeWrap.attr('class', function(_, old){
      return $.grep(old.split(/ +/), function(v){
        return !v.match(/-var/);
      }).join(' ');
    });
    // Apply new color
    $('#main-wrap').addClass(color+'-var')
  });
});