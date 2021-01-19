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
/******/ 	return __webpack_require__(__webpack_require__.s = 2);
/******/ })
/************************************************************************/
/******/ ({

/***/ "./resources/js/scroll.js":
/*!********************************!*\
  !*** ./resources/js/scroll.js ***!
  \********************************/
/*! no static exports found */
/***/ (function(module, exports) {

eval("$(document).ready(function () {\n  $(\".navbar a, footer a[href='#top']\").on('click', function (event) {\n    if (this.hash !== \"\") {\n      event.preventDefault();\n      var hash = this.hash;\n      $('html, body').animate({\n        scrollTop: $(hash).offset().top\n      }, 900, function () {\n        window.location.hash = hash;\n      });\n    }\n  });\n  $(window).scroll(function () {\n    $(\".slideanim\").each(function () {\n      var pos = $(this).offset().top;\n      var winTop = $(window).scrollTop();\n\n      if (pos < winTop + 600) {\n        $(this).addClass(\"slide\");\n      }\n    });\n  });\n});//# sourceURL=[module]\n//# sourceMappingURL=data:application/json;charset=utf-8;base64,eyJ2ZXJzaW9uIjozLCJzb3VyY2VzIjpbIndlYnBhY2s6Ly8vLi9yZXNvdXJjZXMvanMvc2Nyb2xsLmpzPzU2OTkiXSwibmFtZXMiOlsiJCIsImRvY3VtZW50IiwicmVhZHkiLCJvbiIsImV2ZW50IiwiaGFzaCIsInByZXZlbnREZWZhdWx0IiwiYW5pbWF0ZSIsInNjcm9sbFRvcCIsIm9mZnNldCIsInRvcCIsIndpbmRvdyIsImxvY2F0aW9uIiwic2Nyb2xsIiwiZWFjaCIsInBvcyIsIndpblRvcCIsImFkZENsYXNzIl0sIm1hcHBpbmdzIjoiQUFBQUEsQ0FBQyxDQUFDQyxRQUFELENBQUQsQ0FBWUMsS0FBWixDQUFrQixZQUFXO0FBRXpCRixHQUFDLENBQUMsa0NBQUQsQ0FBRCxDQUFzQ0csRUFBdEMsQ0FBeUMsT0FBekMsRUFBa0QsVUFBU0MsS0FBVCxFQUFnQjtBQUM5RCxRQUFJLEtBQUtDLElBQUwsS0FBYyxFQUFsQixFQUFzQjtBQUNsQkQsV0FBSyxDQUFDRSxjQUFOO0FBQ0EsVUFBSUQsSUFBSSxHQUFHLEtBQUtBLElBQWhCO0FBRUFMLE9BQUMsQ0FBQyxZQUFELENBQUQsQ0FBZ0JPLE9BQWhCLENBQXdCO0FBQ3BCQyxpQkFBUyxFQUFFUixDQUFDLENBQUNLLElBQUQsQ0FBRCxDQUFRSSxNQUFSLEdBQWlCQztBQURSLE9BQXhCLEVBRUcsR0FGSCxFQUVRLFlBQVc7QUFDZkMsY0FBTSxDQUFDQyxRQUFQLENBQWdCUCxJQUFoQixHQUF1QkEsSUFBdkI7QUFDSCxPQUpEO0FBS0g7QUFDSixHQVhEO0FBWUFMLEdBQUMsQ0FBQ1csTUFBRCxDQUFELENBQVVFLE1BQVYsQ0FBaUIsWUFBVztBQUN4QmIsS0FBQyxDQUFDLFlBQUQsQ0FBRCxDQUFnQmMsSUFBaEIsQ0FBcUIsWUFBVztBQUM1QixVQUFJQyxHQUFHLEdBQUdmLENBQUMsQ0FBQyxJQUFELENBQUQsQ0FBUVMsTUFBUixHQUFpQkMsR0FBM0I7QUFFQSxVQUFJTSxNQUFNLEdBQUdoQixDQUFDLENBQUNXLE1BQUQsQ0FBRCxDQUFVSCxTQUFWLEVBQWI7O0FBQ0EsVUFBSU8sR0FBRyxHQUFHQyxNQUFNLEdBQUcsR0FBbkIsRUFBd0I7QUFDcEJoQixTQUFDLENBQUMsSUFBRCxDQUFELENBQVFpQixRQUFSLENBQWlCLE9BQWpCO0FBQ0g7QUFDSixLQVBEO0FBUUgsR0FURDtBQVVILENBeEJEIiwiZmlsZSI6Ii4vcmVzb3VyY2VzL2pzL3Njcm9sbC5qcy5qcyIsInNvdXJjZXNDb250ZW50IjpbIiQoZG9jdW1lbnQpLnJlYWR5KGZ1bmN0aW9uKCkge1xyXG5cclxuICAgICQoXCIubmF2YmFyIGEsIGZvb3RlciBhW2hyZWY9JyN0b3AnXVwiKS5vbignY2xpY2snLCBmdW5jdGlvbihldmVudCkge1xyXG4gICAgICAgIGlmICh0aGlzLmhhc2ggIT09IFwiXCIpIHtcclxuICAgICAgICAgICAgZXZlbnQucHJldmVudERlZmF1bHQoKTtcclxuICAgICAgICAgICAgdmFyIGhhc2ggPSB0aGlzLmhhc2g7XHJcblxyXG4gICAgICAgICAgICAkKCdodG1sLCBib2R5JykuYW5pbWF0ZSh7XHJcbiAgICAgICAgICAgICAgICBzY3JvbGxUb3A6ICQoaGFzaCkub2Zmc2V0KCkudG9wXHJcbiAgICAgICAgICAgIH0sIDkwMCwgZnVuY3Rpb24oKSB7XHJcbiAgICAgICAgICAgICAgICB3aW5kb3cubG9jYXRpb24uaGFzaCA9IGhhc2g7XHJcbiAgICAgICAgICAgIH0pO1xyXG4gICAgICAgIH1cclxuICAgIH0pO1xyXG4gICAgJCh3aW5kb3cpLnNjcm9sbChmdW5jdGlvbigpIHtcclxuICAgICAgICAkKFwiLnNsaWRlYW5pbVwiKS5lYWNoKGZ1bmN0aW9uKCkge1xyXG4gICAgICAgICAgICB2YXIgcG9zID0gJCh0aGlzKS5vZmZzZXQoKS50b3A7XHJcblxyXG4gICAgICAgICAgICB2YXIgd2luVG9wID0gJCh3aW5kb3cpLnNjcm9sbFRvcCgpO1xyXG4gICAgICAgICAgICBpZiAocG9zIDwgd2luVG9wICsgNjAwKSB7XHJcbiAgICAgICAgICAgICAgICAkKHRoaXMpLmFkZENsYXNzKFwic2xpZGVcIik7XHJcbiAgICAgICAgICAgIH1cclxuICAgICAgICB9KTtcclxuICAgIH0pO1xyXG59KSJdLCJzb3VyY2VSb290IjoiIn0=\n//# sourceURL=webpack-internal:///./resources/js/scroll.js\n");

/***/ }),

/***/ 2:
/*!**************************************!*\
  !*** multi ./resources/js/scroll.js ***!
  \**************************************/
/*! no static exports found */
/***/ (function(module, exports, __webpack_require__) {

module.exports = __webpack_require__(/*! E:\PlantsEgo\resources\js\scroll.js */"./resources/js/scroll.js");


/***/ })

/******/ });