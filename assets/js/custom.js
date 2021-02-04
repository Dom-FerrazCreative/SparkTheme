"use strict";

(function ($) {
  var allPanels = $('.accordion > dd').hide();
  $('.accordion > dt > a').click(function () {
    allPanels.slideUp();
    $(this).parent().next().slideDown(); // $('dt').css('border-radius', '10px 10px 0 0');

    return false;
  });
  $(".hamburger").click(function () {
    $(this).toggleClass("is-active");
    $("#mobile_menu, #mobile").toggleClass("open");
  });
  $("#mobile_menu a").click(function () {
    $("#mobile_menu, #mobile").removeClass("open");
    $(".hamburger").removeClass("is-active");
  }); // $('.accordion').on("click", function(event) {
  //     $('.feature-arrow').toggleClass('rotate');
  //     $('.feature-arrow').toggleClass('rotate2');
  // });

  var vid = $('video');
  var vid_w_orig = 1280;
  var vid_h_orig = 720; // re-scale image when viewport resizes

  $(window).resize(function () {
    // get the parent element size
    var container_w = vid.parent().width();
    var container_h = vid.parent().height(); // use largest scale factor of horizontal/vertical

    var scale_w = container_w / vid_w_orig;
    var scale_h = container_h / vid_h_orig;
    var scale = scale_w > scale_h ? scale_w : scale_h; // scale the video

    vid.width(scale * vid_w_orig);
    vid.height(scale * vid_h_orig);
  }); // trigger re-scale on pageload

  $(window).trigger('resize');
  SmoothScroll({
    stepSize: 20
  });
  var cursor = {
    delay: 8,
    _x: 0,
    _y: 0,
    endX: window.innerWidth / 2,
    endY: window.innerHeight / 2,
    cursorVisible: true,
    cursorEnlarged: false,
    $dot: document.querySelector('.cursor - dot'),
    $outline: document.querySelector('.cursor - dot - outline'),
    init: function init() {
      // Set up element sizes
      this.dotSize = this.$dot.offsetWidth;
      this.outlineSize = this.$outline.offsetWidth;
      this.setupEventListeners();
      this.animateDotOutline();
    },
    updateCursor: function updateCursor(e) {
      var self = this;
      console.log(e); // Show the cursor

      self.cursorVisible = true;
      self.toggleCursorVisibility(); // Position the dot

      self.endX = e.pageX;
      self.endY = e.pageY;
      self.$dot.style.top = self.endY + 'px';
      self.$dot.style.left = self.endX + 'px';
    },
    setupEventListeners: function setupEventListeners() {
      var self = this; // Anchor hovering

      document.querySelectorAll('a').forEach(function (el) {
        el.addEventListener('mouseover', function () {
          self.cursorEnlarged = true;
          self.toggleCursorSize();
        });
        el.addEventListener('mouseout', function () {
          self.cursorEnlarged = false;
          self.toggleCursorSize();
        });
      }); // Click events

      document.addEventListener('mousedown', function () {
        self.cursorEnlarged = true;
        self.toggleCursorSize();
      });
      document.addEventListener('mouseup', function () {
        self.cursorEnlarged = false;
        self.toggleCursorSize();
      });
      document.addEventListener('mousemove', function (e) {
        // Show the cursor
        self.cursorVisible = true;
        self.toggleCursorVisibility(); // Position the dot

        self.endX = e.pageX;
        self.endY = e.pageY;
        self.$dot.style.top = self.endY + 'px';
        self.$dot.style.left = self.endX + 'px';
      }); // Hide/show cursor

      document.addEventListener('mouseenter', function (e) {
        self.cursorVisible = true;
        self.toggleCursorVisibility();
        self.$dot.style.opacity = 1;
        self.$outline.style.opacity = 1;
      });
      document.addEventListener('mouseleave', function (e) {
        self.cursorVisible = true;
        self.toggleCursorVisibility();
        self.$dot.style.opacity = 0;
        self.$outline.style.opacity = 0;
      });
    },
    animateDotOutline: function animateDotOutline() {
      var self = this;
      self._x += (self.endX - self._x) / self.delay;
      self._y += (self.endY - self._y) / self.delay;
      self.$outline.style.top = self._y + 'px';
      self.$outline.style.left = self._x + 'px';
      requestAnimationFrame(this.animateDotOutline.bind(self));
    },
    toggleCursorSize: function toggleCursorSize() {
      var self = this;

      if (self.cursorEnlarged) {
        self.$dot.style.transform = 'translate(-50%, -50%) scale(0.75)';
        self.$outline.style.transform = 'translate(-50%, -50%) scale(1.5)';
      } else {
        self.$dot.style.transform = 'translate(-50%, -50%) scale(1)';
        self.$outline.style.transform = 'translate(-50%, -50%) scale(1)';
      }
    },
    toggleCursorVisibility: function toggleCursorVisibility() {
      var self = this;

      if (self.cursorVisible) {
        self.$dot.style.opacity = 1;
        self.$outline.style.opacity = 1;
      } else {
        self.$dot.style.opacity = 0;
        self.$outline.style.opacity = 0;
      }
    }
  };
  cursor.init();
})(jQuery);