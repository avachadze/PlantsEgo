/******/ (function(modules) { // webpackBootstrap
/******/ 	// The module cache
/******/ 	var installedModules = {};
/******/
/******/ 	// The require function
/******/ 	function __webpack_require__(moduleId) {
/******/
/******/ 		// Check if module is in cache
/******/ 		if(installedModules[moduleId]) {
/******/ 			return installedModules[moduleId].exports;
/******/ 		}
/******/ 		// Create a new module (and put it into the cache)
/******/ 		var module = installedModules[moduleId] = {
/******/ 			i: moduleId,
/******/ 			l: false,
/******/ 			exports: {}
/******/ 		};
/******/
/******/ 		// Execute the module function
/******/ 		modules[moduleId].call(module.exports, module, module.exports, __webpack_require__);
/******/
/******/ 		// Flag the module as loaded
/******/ 		module.l = true;
/******/
/******/ 		// Return the exports of the module
/******/ 		return module.exports;
/******/ 	}
/******/
/******/
/******/ 	// expose the modules object (__webpack_modules__)
/******/ 	__webpack_require__.m = modules;
/******/
/******/ 	// expose the module cache
/******/ 	__webpack_require__.c = installedModules;
/******/
/******/ 	// define getter function for harmony exports
/******/ 	__webpack_require__.d = function(exports, name, getter) {
/******/ 		if(!__webpack_require__.o(exports, name)) {
/******/ 			Object.defineProperty(exports, name, { enumerable: true, get: getter });
/******/ 		}
/******/ 	};
/******/
/******/ 	// define __esModule on exports
/******/ 	__webpack_require__.r = function(exports) {
/******/ 		if(typeof Symbol !== 'undefined' && Symbol.toStringTag) {
/******/ 			Object.defineProperty(exports, Symbol.toStringTag, { value: 'Module' });
/******/ 		}
/******/ 		Object.defineProperty(exports, '__esModule', { value: true });
/******/ 	};
/******/
/******/ 	// create a fake namespace object
/******/ 	// mode & 1: value is a module id, require it
/******/ 	// mode & 2: merge all properties of value into the ns
/******/ 	// mode & 4: return value when already ns object
/******/ 	// mode & 8|1: behave like require
/******/ 	__webpack_require__.t = function(value, mode) {
/******/ 		if(mode & 1) value = __webpack_require__(value);
/******/ 		if(mode & 8) return value;
/******/ 		if((mode & 4) && typeof value === 'object' && value && value.__esModule) return value;
/******/ 		var ns = Object.create(null);
/******/ 		__webpack_require__.r(ns);
/******/ 		Object.defineProperty(ns, 'default', { enumerable: true, value: value });
/******/ 		if(mode & 2 && typeof value != 'string') for(var key in value) __webpack_require__.d(ns, key, function(key) { return value[key]; }.bind(null, key));
/******/ 		return ns;
/******/ 	};
/******/
/******/ 	// getDefaultExport function for compatibility with non-harmony modules
/******/ 	__webpack_require__.n = function(module) {
/******/ 		var getter = module && module.__esModule ?
/******/ 			function getDefault() { return module['default']; } :
/******/ 			function getModuleExports() { return module; };
/******/ 		__webpack_require__.d(getter, 'a', getter);
/******/ 		return getter;
/******/ 	};
/******/
/******/ 	// Object.prototype.hasOwnProperty.call
/******/ 	__webpack_require__.o = function(object, property) { return Object.prototype.hasOwnProperty.call(object, property); };
/******/
/******/ 	// __webpack_public_path__
/******/ 	__webpack_require__.p = "/";
/******/
/******/
/******/ 	// Load entry module and return exports
/******/ 	return __webpack_require__(__webpack_require__.s = 1);
/******/ })
/************************************************************************/
/******/ ({

/***/ "./resources/js/stickymenu.js":
/*!************************************!*\
  !*** ./resources/js/stickymenu.js ***!
  \************************************/
/*! no static exports found */
/***/ (function(module, exports) {

eval("window.onload = iniciar;\nvar nav = null;\n\nfunction iniciar() {\n  nav = document.getElementById(\"nav\");\n\n  if ($(window).width() > 992) {\n    nav.setAttribute(\"data-toggle\", \"sticky-onscroll\");\n    sticky();\n  } else {\n    nav.setAttribute(\"data-toggle\", \"\");\n  }\n}\n\nwindow.onresize = actualizar;\n\nfunction actualizar() {\n  // quitar desplegable\n  var cosoquebaja = document.getElementById('navbarToggleExternalContent');\n  if (cosoquebaja.classList.contains('show')) cosoquebaja.classList.remove('show');\n} //$(document).ready(\n\n\nfunction sticky() {\n  // Custom \n  var stickyToggle = function stickyToggle(sticky, stickyWrapper, scrollElement) {\n    var stickyHeight = sticky.outerHeight();\n    var stickyTop = stickyWrapper.offset().top;\n\n    if (scrollElement.scrollTop() >= stickyTop) {\n      stickyWrapper.height(stickyHeight);\n      sticky.addClass(\"is-sticky\");\n      sticky.addClass(\"navbar-dark\");\n    } else {\n      sticky.removeClass(\"is-sticky\");\n      sticky.removeClass(\"navbar-dark\");\n      stickyWrapper.height('auto');\n    }\n  }; // Find all data-toggle=\"sticky-onscroll\" elements\n\n\n  $('[data-toggle=\"sticky-onscroll\"]').each(function () {\n    var sticky = $(this);\n    var stickyWrapper = $('<div>').addClass('sticky-wrapper'); // insert hidden element to maintain actual top offset on page\n\n    sticky.before(stickyWrapper);\n    sticky.addClass('sticky'); // Scroll & resize events\n\n    $(window).on('scroll.sticky-onscroll resize.sticky-onscroll', function () {\n      stickyToggle(sticky, stickyWrapper, $(this));\n    }); // On page load\n\n    stickyToggle(sticky, stickyWrapper, $(window));\n  });\n}//# sourceURL=[module]\n//# sourceMappingURL=data:application/json;charset=utf-8;base64,eyJ2ZXJzaW9uIjozLCJzb3VyY2VzIjpbIndlYnBhY2s6Ly8vLi9yZXNvdXJjZXMvanMvc3RpY2t5bWVudS5qcz84OTI5Il0sIm5hbWVzIjpbIndpbmRvdyIsIm9ubG9hZCIsImluaWNpYXIiLCJuYXYiLCJkb2N1bWVudCIsImdldEVsZW1lbnRCeUlkIiwiJCIsIndpZHRoIiwic2V0QXR0cmlidXRlIiwic3RpY2t5Iiwib25yZXNpemUiLCJhY3R1YWxpemFyIiwiY29zb3F1ZWJhamEiLCJjbGFzc0xpc3QiLCJjb250YWlucyIsInJlbW92ZSIsInN0aWNreVRvZ2dsZSIsInN0aWNreVdyYXBwZXIiLCJzY3JvbGxFbGVtZW50Iiwic3RpY2t5SGVpZ2h0Iiwib3V0ZXJIZWlnaHQiLCJzdGlja3lUb3AiLCJvZmZzZXQiLCJ0b3AiLCJzY3JvbGxUb3AiLCJoZWlnaHQiLCJhZGRDbGFzcyIsInJlbW92ZUNsYXNzIiwiZWFjaCIsImJlZm9yZSIsIm9uIl0sIm1hcHBpbmdzIjoiQUFBQUEsTUFBTSxDQUFDQyxNQUFQLEdBQWdCQyxPQUFoQjtBQUNBLElBQUlDLEdBQUcsR0FBRyxJQUFWOztBQUVBLFNBQVNELE9BQVQsR0FBbUI7QUFDZkMsS0FBRyxHQUFHQyxRQUFRLENBQUNDLGNBQVQsQ0FBd0IsS0FBeEIsQ0FBTjs7QUFFQSxNQUFJQyxDQUFDLENBQUNOLE1BQUQsQ0FBRCxDQUFVTyxLQUFWLEtBQW9CLEdBQXhCLEVBQTZCO0FBQ3pCSixPQUFHLENBQUNLLFlBQUosQ0FBaUIsYUFBakIsRUFBZ0MsaUJBQWhDO0FBQ0FDLFVBQU07QUFDVCxHQUhELE1BR087QUFDSE4sT0FBRyxDQUFDSyxZQUFKLENBQWlCLGFBQWpCLEVBQWdDLEVBQWhDO0FBQ0g7QUFDSjs7QUFDRFIsTUFBTSxDQUFDVSxRQUFQLEdBQWtCQyxVQUFsQjs7QUFFQSxTQUFTQSxVQUFULEdBQXNCO0FBQ2xCO0FBQ0EsTUFBSUMsV0FBVyxHQUFHUixRQUFRLENBQUNDLGNBQVQsQ0FBd0IsNkJBQXhCLENBQWxCO0FBQ0EsTUFBSU8sV0FBVyxDQUFDQyxTQUFaLENBQXNCQyxRQUF0QixDQUErQixNQUEvQixDQUFKLEVBQ0lGLFdBQVcsQ0FBQ0MsU0FBWixDQUFzQkUsTUFBdEIsQ0FBNkIsTUFBN0I7QUFDUCxDLENBQ0Q7OztBQUNBLFNBQVNOLE1BQVQsR0FBa0I7QUFDZDtBQUNBLE1BQUlPLFlBQVksR0FBRyxTQUFmQSxZQUFlLENBQVNQLE1BQVQsRUFBaUJRLGFBQWpCLEVBQWdDQyxhQUFoQyxFQUErQztBQUM5RCxRQUFJQyxZQUFZLEdBQUdWLE1BQU0sQ0FBQ1csV0FBUCxFQUFuQjtBQUNBLFFBQUlDLFNBQVMsR0FBR0osYUFBYSxDQUFDSyxNQUFkLEdBQXVCQyxHQUF2Qzs7QUFDQSxRQUFJTCxhQUFhLENBQUNNLFNBQWQsTUFBNkJILFNBQWpDLEVBQTRDO0FBQ3hDSixtQkFBYSxDQUFDUSxNQUFkLENBQXFCTixZQUFyQjtBQUNBVixZQUFNLENBQUNpQixRQUFQLENBQWdCLFdBQWhCO0FBQ0FqQixZQUFNLENBQUNpQixRQUFQLENBQWdCLGFBQWhCO0FBQ0gsS0FKRCxNQUlPO0FBQ0hqQixZQUFNLENBQUNrQixXQUFQLENBQW1CLFdBQW5CO0FBQ0FsQixZQUFNLENBQUNrQixXQUFQLENBQW1CLGFBQW5CO0FBQ0FWLG1CQUFhLENBQUNRLE1BQWQsQ0FBcUIsTUFBckI7QUFDSDtBQUNKLEdBWkQsQ0FGYyxDQWdCZDs7O0FBQ0FuQixHQUFDLENBQUMsaUNBQUQsQ0FBRCxDQUFxQ3NCLElBQXJDLENBQTBDLFlBQVc7QUFDakQsUUFBSW5CLE1BQU0sR0FBR0gsQ0FBQyxDQUFDLElBQUQsQ0FBZDtBQUNBLFFBQUlXLGFBQWEsR0FBR1gsQ0FBQyxDQUFDLE9BQUQsQ0FBRCxDQUFXb0IsUUFBWCxDQUFvQixnQkFBcEIsQ0FBcEIsQ0FGaUQsQ0FFVTs7QUFDM0RqQixVQUFNLENBQUNvQixNQUFQLENBQWNaLGFBQWQ7QUFDQVIsVUFBTSxDQUFDaUIsUUFBUCxDQUFnQixRQUFoQixFQUppRCxDQU1qRDs7QUFDQXBCLEtBQUMsQ0FBQ04sTUFBRCxDQUFELENBQVU4QixFQUFWLENBQWEsK0NBQWIsRUFBOEQsWUFBVztBQUNyRWQsa0JBQVksQ0FBQ1AsTUFBRCxFQUFTUSxhQUFULEVBQXdCWCxDQUFDLENBQUMsSUFBRCxDQUF6QixDQUFaO0FBQ0gsS0FGRCxFQVBpRCxDQVdqRDs7QUFDQVUsZ0JBQVksQ0FBQ1AsTUFBRCxFQUFTUSxhQUFULEVBQXdCWCxDQUFDLENBQUNOLE1BQUQsQ0FBekIsQ0FBWjtBQUNILEdBYkQ7QUFjSCIsImZpbGUiOiIuL3Jlc291cmNlcy9qcy9zdGlja3ltZW51LmpzLmpzIiwic291cmNlc0NvbnRlbnQiOlsid2luZG93Lm9ubG9hZCA9IGluaWNpYXI7XG52YXIgbmF2ID0gbnVsbDtcblxuZnVuY3Rpb24gaW5pY2lhcigpIHtcbiAgICBuYXYgPSBkb2N1bWVudC5nZXRFbGVtZW50QnlJZChcIm5hdlwiKTtcblxuICAgIGlmICgkKHdpbmRvdykud2lkdGgoKSA+IDk5Mikge1xuICAgICAgICBuYXYuc2V0QXR0cmlidXRlKFwiZGF0YS10b2dnbGVcIiwgXCJzdGlja3ktb25zY3JvbGxcIik7XG4gICAgICAgIHN0aWNreSgpO1xuICAgIH0gZWxzZSB7XG4gICAgICAgIG5hdi5zZXRBdHRyaWJ1dGUoXCJkYXRhLXRvZ2dsZVwiLCBcIlwiKTtcbiAgICB9XG59XG53aW5kb3cub25yZXNpemUgPSBhY3R1YWxpemFyO1xuXG5mdW5jdGlvbiBhY3R1YWxpemFyKCkge1xuICAgIC8vIHF1aXRhciBkZXNwbGVnYWJsZVxuICAgIHZhciBjb3NvcXVlYmFqYSA9IGRvY3VtZW50LmdldEVsZW1lbnRCeUlkKCduYXZiYXJUb2dnbGVFeHRlcm5hbENvbnRlbnQnKTtcbiAgICBpZiAoY29zb3F1ZWJhamEuY2xhc3NMaXN0LmNvbnRhaW5zKCdzaG93JykpXG4gICAgICAgIGNvc29xdWViYWphLmNsYXNzTGlzdC5yZW1vdmUoJ3Nob3cnKTtcbn1cbi8vJChkb2N1bWVudCkucmVhZHkoXG5mdW5jdGlvbiBzdGlja3koKSB7XG4gICAgLy8gQ3VzdG9tIFxuICAgIHZhciBzdGlja3lUb2dnbGUgPSBmdW5jdGlvbihzdGlja3ksIHN0aWNreVdyYXBwZXIsIHNjcm9sbEVsZW1lbnQpIHtcbiAgICAgICAgdmFyIHN0aWNreUhlaWdodCA9IHN0aWNreS5vdXRlckhlaWdodCgpO1xuICAgICAgICB2YXIgc3RpY2t5VG9wID0gc3RpY2t5V3JhcHBlci5vZmZzZXQoKS50b3A7XG4gICAgICAgIGlmIChzY3JvbGxFbGVtZW50LnNjcm9sbFRvcCgpID49IHN0aWNreVRvcCkge1xuICAgICAgICAgICAgc3RpY2t5V3JhcHBlci5oZWlnaHQoc3RpY2t5SGVpZ2h0KTtcbiAgICAgICAgICAgIHN0aWNreS5hZGRDbGFzcyhcImlzLXN0aWNreVwiKTtcbiAgICAgICAgICAgIHN0aWNreS5hZGRDbGFzcyhcIm5hdmJhci1kYXJrXCIpO1xuICAgICAgICB9IGVsc2Uge1xuICAgICAgICAgICAgc3RpY2t5LnJlbW92ZUNsYXNzKFwiaXMtc3RpY2t5XCIpO1xuICAgICAgICAgICAgc3RpY2t5LnJlbW92ZUNsYXNzKFwibmF2YmFyLWRhcmtcIik7XG4gICAgICAgICAgICBzdGlja3lXcmFwcGVyLmhlaWdodCgnYXV0bycpO1xuICAgICAgICB9XG4gICAgfTtcblxuICAgIC8vIEZpbmQgYWxsIGRhdGEtdG9nZ2xlPVwic3RpY2t5LW9uc2Nyb2xsXCIgZWxlbWVudHNcbiAgICAkKCdbZGF0YS10b2dnbGU9XCJzdGlja3ktb25zY3JvbGxcIl0nKS5lYWNoKGZ1bmN0aW9uKCkge1xuICAgICAgICB2YXIgc3RpY2t5ID0gJCh0aGlzKTtcbiAgICAgICAgdmFyIHN0aWNreVdyYXBwZXIgPSAkKCc8ZGl2PicpLmFkZENsYXNzKCdzdGlja3ktd3JhcHBlcicpOyAvLyBpbnNlcnQgaGlkZGVuIGVsZW1lbnQgdG8gbWFpbnRhaW4gYWN0dWFsIHRvcCBvZmZzZXQgb24gcGFnZVxuICAgICAgICBzdGlja3kuYmVmb3JlKHN0aWNreVdyYXBwZXIpO1xuICAgICAgICBzdGlja3kuYWRkQ2xhc3MoJ3N0aWNreScpO1xuXG4gICAgICAgIC8vIFNjcm9sbCAmIHJlc2l6ZSBldmVudHNcbiAgICAgICAgJCh3aW5kb3cpLm9uKCdzY3JvbGwuc3RpY2t5LW9uc2Nyb2xsIHJlc2l6ZS5zdGlja3ktb25zY3JvbGwnLCBmdW5jdGlvbigpIHtcbiAgICAgICAgICAgIHN0aWNreVRvZ2dsZShzdGlja3ksIHN0aWNreVdyYXBwZXIsICQodGhpcykpO1xuICAgICAgICB9KTtcblxuICAgICAgICAvLyBPbiBwYWdlIGxvYWRcbiAgICAgICAgc3RpY2t5VG9nZ2xlKHN0aWNreSwgc3RpY2t5V3JhcHBlciwgJCh3aW5kb3cpKTtcbiAgICB9KTtcbn0iXSwic291cmNlUm9vdCI6IiJ9\n//# sourceURL=webpack-internal:///./resources/js/stickymenu.js\n");

/***/ }),

/***/ 1:
/*!******************************************!*\
  !*** multi ./resources/js/stickymenu.js ***!
  \******************************************/
/*! no static exports found */
/***/ (function(module, exports, __webpack_require__) {

module.exports = __webpack_require__(/*! /home/zubiri/Escritorio/PlantsEGO/PlantsEgo/resources/js/stickymenu.js */"./resources/js/stickymenu.js");


/***/ })

/******/ });