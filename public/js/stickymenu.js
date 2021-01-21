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

eval("window.onload = iniciar;\nvar nav = null;\n\nfunction iniciar() {\n  nav = document.getElementById(\"nav\");\n  drop1 = document.getElementById(\"drop1\");\n  drop2 = document.getElementById(\"drop2\");\n\n  if ($(window).width() > 992) {\n    nav.setAttribute(\"data-toggle\", \"sticky-onscroll\");\n    sticky();\n  } else {\n    nav.setAttribute(\"data-toggle\", \"\");\n  }\n}\n\nwindow.onresize = actualizar;\n\nfunction actualizar() {\n  // quitar desplegable\n  var cosoquebaja = document.getElementById('navbarToggleExternalContent');\n  if (cosoquebaja.classList.contains('show')) cosoquebaja.classList.remove('show');\n} //$(document).ready(\n\n\nfunction sticky() {\n  // Custom\n  var stickyToggle = function stickyToggle(sticky, stickyWrapper, scrollElement) {\n    var stickyHeight = sticky.outerHeight();\n    var stickyTop = stickyWrapper.offset().top;\n\n    if (scrollElement.scrollTop() >= stickyTop) {\n      stickyWrapper.height(stickyHeight);\n      sticky.addClass(\"is-sticky\");\n      sticky.addClass(\"navbar-dark\");\n    } else {\n      sticky.removeClass(\"is-sticky\");\n      sticky.removeClass(\"navbar-dark\");\n      stickyWrapper.height('auto');\n    }\n  }; // Find all data-toggle=\"sticky-onscroll\" elements\n\n\n  $('[data-toggle=\"sticky-onscroll\"]').each(function () {\n    var sticky = $(this);\n    var stickyWrapper = $('<div>').addClass('sticky-wrapper'); // insert hidden element to maintain actual top offset on page\n\n    sticky.before(stickyWrapper);\n    sticky.addClass('sticky'); // Scroll & resize events\n\n    $(window).on('scroll.sticky-onscroll resize.sticky-onscroll', function () {\n      stickyToggle(sticky, stickyWrapper, $(this));\n    }); // On page load\n\n    stickyToggle(sticky, stickyWrapper, $(window));\n  });\n}//# sourceURL=[module]\n//# sourceMappingURL=data:application/json;charset=utf-8;base64,eyJ2ZXJzaW9uIjozLCJzb3VyY2VzIjpbIndlYnBhY2s6Ly8vLi9yZXNvdXJjZXMvanMvc3RpY2t5bWVudS5qcz84OTI5Il0sIm5hbWVzIjpbIndpbmRvdyIsIm9ubG9hZCIsImluaWNpYXIiLCJuYXYiLCJkb2N1bWVudCIsImdldEVsZW1lbnRCeUlkIiwiZHJvcDEiLCJkcm9wMiIsIiQiLCJ3aWR0aCIsInNldEF0dHJpYnV0ZSIsInN0aWNreSIsIm9ucmVzaXplIiwiYWN0dWFsaXphciIsImNvc29xdWViYWphIiwiY2xhc3NMaXN0IiwiY29udGFpbnMiLCJyZW1vdmUiLCJzdGlja3lUb2dnbGUiLCJzdGlja3lXcmFwcGVyIiwic2Nyb2xsRWxlbWVudCIsInN0aWNreUhlaWdodCIsIm91dGVySGVpZ2h0Iiwic3RpY2t5VG9wIiwib2Zmc2V0IiwidG9wIiwic2Nyb2xsVG9wIiwiaGVpZ2h0IiwiYWRkQ2xhc3MiLCJyZW1vdmVDbGFzcyIsImVhY2giLCJiZWZvcmUiLCJvbiJdLCJtYXBwaW5ncyI6IkFBQUFBLE1BQU0sQ0FBQ0MsTUFBUCxHQUFnQkMsT0FBaEI7QUFDQSxJQUFJQyxHQUFHLEdBQUcsSUFBVjs7QUFFQSxTQUFTRCxPQUFULEdBQW1CO0FBQ2ZDLEtBQUcsR0FBR0MsUUFBUSxDQUFDQyxjQUFULENBQXdCLEtBQXhCLENBQU47QUFDQUMsT0FBSyxHQUFFRixRQUFRLENBQUNDLGNBQVQsQ0FBd0IsT0FBeEIsQ0FBUDtBQUNBRSxPQUFLLEdBQUVILFFBQVEsQ0FBQ0MsY0FBVCxDQUF3QixPQUF4QixDQUFQOztBQUVBLE1BQUlHLENBQUMsQ0FBQ1IsTUFBRCxDQUFELENBQVVTLEtBQVYsS0FBb0IsR0FBeEIsRUFBNkI7QUFDekJOLE9BQUcsQ0FBQ08sWUFBSixDQUFpQixhQUFqQixFQUFnQyxpQkFBaEM7QUFDQUMsVUFBTTtBQUNULEdBSEQsTUFHTztBQUNIUixPQUFHLENBQUNPLFlBQUosQ0FBaUIsYUFBakIsRUFBZ0MsRUFBaEM7QUFDSDtBQUNKOztBQUNEVixNQUFNLENBQUNZLFFBQVAsR0FBa0JDLFVBQWxCOztBQUVBLFNBQVNBLFVBQVQsR0FBc0I7QUFDbEI7QUFDQSxNQUFJQyxXQUFXLEdBQUdWLFFBQVEsQ0FBQ0MsY0FBVCxDQUF3Qiw2QkFBeEIsQ0FBbEI7QUFDQSxNQUFJUyxXQUFXLENBQUNDLFNBQVosQ0FBc0JDLFFBQXRCLENBQStCLE1BQS9CLENBQUosRUFDSUYsV0FBVyxDQUFDQyxTQUFaLENBQXNCRSxNQUF0QixDQUE2QixNQUE3QjtBQUNQLEMsQ0FDRDs7O0FBQ0EsU0FBU04sTUFBVCxHQUFrQjtBQUNkO0FBQ0EsTUFBSU8sWUFBWSxHQUFHLFNBQWZBLFlBQWUsQ0FBU1AsTUFBVCxFQUFpQlEsYUFBakIsRUFBZ0NDLGFBQWhDLEVBQStDO0FBQzlELFFBQUlDLFlBQVksR0FBR1YsTUFBTSxDQUFDVyxXQUFQLEVBQW5CO0FBQ0EsUUFBSUMsU0FBUyxHQUFHSixhQUFhLENBQUNLLE1BQWQsR0FBdUJDLEdBQXZDOztBQUNBLFFBQUlMLGFBQWEsQ0FBQ00sU0FBZCxNQUE2QkgsU0FBakMsRUFBNEM7QUFDeENKLG1CQUFhLENBQUNRLE1BQWQsQ0FBcUJOLFlBQXJCO0FBQ0FWLFlBQU0sQ0FBQ2lCLFFBQVAsQ0FBZ0IsV0FBaEI7QUFDQWpCLFlBQU0sQ0FBQ2lCLFFBQVAsQ0FBZ0IsYUFBaEI7QUFFSCxLQUxELE1BS087QUFDSGpCLFlBQU0sQ0FBQ2tCLFdBQVAsQ0FBbUIsV0FBbkI7QUFDQWxCLFlBQU0sQ0FBQ2tCLFdBQVAsQ0FBbUIsYUFBbkI7QUFDQVYsbUJBQWEsQ0FBQ1EsTUFBZCxDQUFxQixNQUFyQjtBQUNIO0FBQ0osR0FiRCxDQUZjLENBaUJkOzs7QUFDQW5CLEdBQUMsQ0FBQyxpQ0FBRCxDQUFELENBQXFDc0IsSUFBckMsQ0FBMEMsWUFBVztBQUNqRCxRQUFJbkIsTUFBTSxHQUFHSCxDQUFDLENBQUMsSUFBRCxDQUFkO0FBQ0EsUUFBSVcsYUFBYSxHQUFHWCxDQUFDLENBQUMsT0FBRCxDQUFELENBQVdvQixRQUFYLENBQW9CLGdCQUFwQixDQUFwQixDQUZpRCxDQUVVOztBQUMzRGpCLFVBQU0sQ0FBQ29CLE1BQVAsQ0FBY1osYUFBZDtBQUNBUixVQUFNLENBQUNpQixRQUFQLENBQWdCLFFBQWhCLEVBSmlELENBTWpEOztBQUNBcEIsS0FBQyxDQUFDUixNQUFELENBQUQsQ0FBVWdDLEVBQVYsQ0FBYSwrQ0FBYixFQUE4RCxZQUFXO0FBQ3JFZCxrQkFBWSxDQUFDUCxNQUFELEVBQVNRLGFBQVQsRUFBd0JYLENBQUMsQ0FBQyxJQUFELENBQXpCLENBQVo7QUFDSCxLQUZELEVBUGlELENBV2pEOztBQUNBVSxnQkFBWSxDQUFDUCxNQUFELEVBQVNRLGFBQVQsRUFBd0JYLENBQUMsQ0FBQ1IsTUFBRCxDQUF6QixDQUFaO0FBQ0gsR0FiRDtBQWNIIiwiZmlsZSI6Ii4vcmVzb3VyY2VzL2pzL3N0aWNreW1lbnUuanMuanMiLCJzb3VyY2VzQ29udGVudCI6WyJ3aW5kb3cub25sb2FkID0gaW5pY2lhcjtcbnZhciBuYXYgPSBudWxsO1xuXG5mdW5jdGlvbiBpbmljaWFyKCkge1xuICAgIG5hdiA9IGRvY3VtZW50LmdldEVsZW1lbnRCeUlkKFwibmF2XCIpO1xuICAgIGRyb3AxPSBkb2N1bWVudC5nZXRFbGVtZW50QnlJZChcImRyb3AxXCIpO1xuICAgIGRyb3AyPSBkb2N1bWVudC5nZXRFbGVtZW50QnlJZChcImRyb3AyXCIpO1xuXG4gICAgaWYgKCQod2luZG93KS53aWR0aCgpID4gOTkyKSB7XG4gICAgICAgIG5hdi5zZXRBdHRyaWJ1dGUoXCJkYXRhLXRvZ2dsZVwiLCBcInN0aWNreS1vbnNjcm9sbFwiKTtcbiAgICAgICAgc3RpY2t5KCk7XG4gICAgfSBlbHNlIHtcbiAgICAgICAgbmF2LnNldEF0dHJpYnV0ZShcImRhdGEtdG9nZ2xlXCIsIFwiXCIpO1xuICAgIH1cbn1cbndpbmRvdy5vbnJlc2l6ZSA9IGFjdHVhbGl6YXI7XG5cbmZ1bmN0aW9uIGFjdHVhbGl6YXIoKSB7XG4gICAgLy8gcXVpdGFyIGRlc3BsZWdhYmxlXG4gICAgdmFyIGNvc29xdWViYWphID0gZG9jdW1lbnQuZ2V0RWxlbWVudEJ5SWQoJ25hdmJhclRvZ2dsZUV4dGVybmFsQ29udGVudCcpO1xuICAgIGlmIChjb3NvcXVlYmFqYS5jbGFzc0xpc3QuY29udGFpbnMoJ3Nob3cnKSlcbiAgICAgICAgY29zb3F1ZWJhamEuY2xhc3NMaXN0LnJlbW92ZSgnc2hvdycpO1xufVxuLy8kKGRvY3VtZW50KS5yZWFkeShcbmZ1bmN0aW9uIHN0aWNreSgpIHtcbiAgICAvLyBDdXN0b21cbiAgICB2YXIgc3RpY2t5VG9nZ2xlID0gZnVuY3Rpb24oc3RpY2t5LCBzdGlja3lXcmFwcGVyLCBzY3JvbGxFbGVtZW50KSB7XG4gICAgICAgIHZhciBzdGlja3lIZWlnaHQgPSBzdGlja3kub3V0ZXJIZWlnaHQoKTtcbiAgICAgICAgdmFyIHN0aWNreVRvcCA9IHN0aWNreVdyYXBwZXIub2Zmc2V0KCkudG9wO1xuICAgICAgICBpZiAoc2Nyb2xsRWxlbWVudC5zY3JvbGxUb3AoKSA+PSBzdGlja3lUb3ApIHtcbiAgICAgICAgICAgIHN0aWNreVdyYXBwZXIuaGVpZ2h0KHN0aWNreUhlaWdodCk7XG4gICAgICAgICAgICBzdGlja3kuYWRkQ2xhc3MoXCJpcy1zdGlja3lcIik7XG4gICAgICAgICAgICBzdGlja3kuYWRkQ2xhc3MoXCJuYXZiYXItZGFya1wiKTtcblxuICAgICAgICB9IGVsc2Uge1xuICAgICAgICAgICAgc3RpY2t5LnJlbW92ZUNsYXNzKFwiaXMtc3RpY2t5XCIpO1xuICAgICAgICAgICAgc3RpY2t5LnJlbW92ZUNsYXNzKFwibmF2YmFyLWRhcmtcIik7XG4gICAgICAgICAgICBzdGlja3lXcmFwcGVyLmhlaWdodCgnYXV0bycpO1xuICAgICAgICB9XG4gICAgfTtcblxuICAgIC8vIEZpbmQgYWxsIGRhdGEtdG9nZ2xlPVwic3RpY2t5LW9uc2Nyb2xsXCIgZWxlbWVudHNcbiAgICAkKCdbZGF0YS10b2dnbGU9XCJzdGlja3ktb25zY3JvbGxcIl0nKS5lYWNoKGZ1bmN0aW9uKCkge1xuICAgICAgICB2YXIgc3RpY2t5ID0gJCh0aGlzKTtcbiAgICAgICAgdmFyIHN0aWNreVdyYXBwZXIgPSAkKCc8ZGl2PicpLmFkZENsYXNzKCdzdGlja3ktd3JhcHBlcicpOyAvLyBpbnNlcnQgaGlkZGVuIGVsZW1lbnQgdG8gbWFpbnRhaW4gYWN0dWFsIHRvcCBvZmZzZXQgb24gcGFnZVxuICAgICAgICBzdGlja3kuYmVmb3JlKHN0aWNreVdyYXBwZXIpO1xuICAgICAgICBzdGlja3kuYWRkQ2xhc3MoJ3N0aWNreScpO1xuXG4gICAgICAgIC8vIFNjcm9sbCAmIHJlc2l6ZSBldmVudHNcbiAgICAgICAgJCh3aW5kb3cpLm9uKCdzY3JvbGwuc3RpY2t5LW9uc2Nyb2xsIHJlc2l6ZS5zdGlja3ktb25zY3JvbGwnLCBmdW5jdGlvbigpIHtcbiAgICAgICAgICAgIHN0aWNreVRvZ2dsZShzdGlja3ksIHN0aWNreVdyYXBwZXIsICQodGhpcykpO1xuICAgICAgICB9KTtcblxuICAgICAgICAvLyBPbiBwYWdlIGxvYWRcbiAgICAgICAgc3RpY2t5VG9nZ2xlKHN0aWNreSwgc3RpY2t5V3JhcHBlciwgJCh3aW5kb3cpKTtcbiAgICB9KTtcbn1cbiJdLCJzb3VyY2VSb290IjoiIn0=\n//# sourceURL=webpack-internal:///./resources/js/stickymenu.js\n");

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