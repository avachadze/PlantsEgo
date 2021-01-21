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
/******/ 	return __webpack_require__(__webpack_require__.s = 3);
/******/ })
/************************************************************************/
/******/ ({

/***/ "./resources/js/dropup-down.js":
/*!*************************************!*\
  !*** ./resources/js/dropup-down.js ***!
  \*************************************/
/*! no static exports found */
/***/ (function(module, exports) {

eval("var nav = null;\nwindow.onload = start;\n\nfunction start() {\n  document.getElementById(\"drop1\").addEventListener(\"click\", change);\n  document.getElementById(\"drop2\").addEventListener(\"click\", change);\n  nav = document.getElementById(\"nav\");\n}\n\nfunction change(event) {\n  if (nav.classList.contains(\"is-sticky\")) {\n    this.classList.remove('dropup');\n    this.classList.add('dropdown');\n  } else {\n    this.classList.remove('dropdown');\n    this.classList.add('dropup');\n  }\n}\n\n;//# sourceURL=[module]\n//# sourceMappingURL=data:application/json;charset=utf-8;base64,eyJ2ZXJzaW9uIjozLCJzb3VyY2VzIjpbIndlYnBhY2s6Ly8vLi9yZXNvdXJjZXMvanMvZHJvcHVwLWRvd24uanM/OThjNSJdLCJuYW1lcyI6WyJuYXYiLCJ3aW5kb3ciLCJvbmxvYWQiLCJzdGFydCIsImRvY3VtZW50IiwiZ2V0RWxlbWVudEJ5SWQiLCJhZGRFdmVudExpc3RlbmVyIiwiY2hhbmdlIiwiZXZlbnQiLCJjbGFzc0xpc3QiLCJjb250YWlucyIsInJlbW92ZSIsImFkZCJdLCJtYXBwaW5ncyI6IkFBQUEsSUFBSUEsR0FBRyxHQUFFLElBQVQ7QUFDQUMsTUFBTSxDQUFDQyxNQUFQLEdBQWVDLEtBQWY7O0FBRUksU0FBU0EsS0FBVCxHQUFpQjtBQUNiQyxVQUFRLENBQUNDLGNBQVQsQ0FBd0IsT0FBeEIsRUFBaUNDLGdCQUFqQyxDQUFrRCxPQUFsRCxFQUEyREMsTUFBM0Q7QUFDQUgsVUFBUSxDQUFDQyxjQUFULENBQXdCLE9BQXhCLEVBQWlDQyxnQkFBakMsQ0FBa0QsT0FBbEQsRUFBMkRDLE1BQTNEO0FBQ0FQLEtBQUcsR0FBR0ksUUFBUSxDQUFDQyxjQUFULENBQXdCLEtBQXhCLENBQU47QUFDSDs7QUFFRCxTQUFTRSxNQUFULENBQWdCQyxLQUFoQixFQUFzQjtBQUNsQixNQUFHUixHQUFHLENBQUNTLFNBQUosQ0FBY0MsUUFBZCxDQUF1QixXQUF2QixDQUFILEVBQXVDO0FBQ25DLFNBQUtELFNBQUwsQ0FBZUUsTUFBZixDQUFzQixRQUF0QjtBQUNBLFNBQUtGLFNBQUwsQ0FBZUcsR0FBZixDQUFtQixVQUFuQjtBQUNILEdBSEQsTUFJSztBQUNELFNBQUtILFNBQUwsQ0FBZUUsTUFBZixDQUFzQixVQUF0QjtBQUNBLFNBQUtGLFNBQUwsQ0FBZUcsR0FBZixDQUFtQixRQUFuQjtBQUNIO0FBQ1I7O0FBQUEiLCJmaWxlIjoiLi9yZXNvdXJjZXMvanMvZHJvcHVwLWRvd24uanMuanMiLCJzb3VyY2VzQ29udGVudCI6WyJ2YXIgbmF2PSBudWxsO1xud2luZG93Lm9ubG9hZD0gc3RhcnQ7XG5cbiAgICBmdW5jdGlvbiBzdGFydCgpIHtcbiAgICAgICAgZG9jdW1lbnQuZ2V0RWxlbWVudEJ5SWQoXCJkcm9wMVwiKS5hZGRFdmVudExpc3RlbmVyKFwiY2xpY2tcIiwgY2hhbmdlKTtcbiAgICAgICAgZG9jdW1lbnQuZ2V0RWxlbWVudEJ5SWQoXCJkcm9wMlwiKS5hZGRFdmVudExpc3RlbmVyKFwiY2xpY2tcIiwgY2hhbmdlKTtcbiAgICAgICAgbmF2ID0gZG9jdW1lbnQuZ2V0RWxlbWVudEJ5SWQoXCJuYXZcIik7XG4gICAgfVxuXG4gICAgZnVuY3Rpb24gY2hhbmdlKGV2ZW50KXtcbiAgICAgICAgaWYobmF2LmNsYXNzTGlzdC5jb250YWlucyhcImlzLXN0aWNreVwiKSl7XG4gICAgICAgICAgICB0aGlzLmNsYXNzTGlzdC5yZW1vdmUoJ2Ryb3B1cCcpO1xuICAgICAgICAgICAgdGhpcy5jbGFzc0xpc3QuYWRkKCdkcm9wZG93bicpO1xuICAgICAgICB9XG4gICAgICAgIGVsc2Uge1xuICAgICAgICAgICAgdGhpcy5jbGFzc0xpc3QucmVtb3ZlKCdkcm9wZG93bicpO1xuICAgICAgICAgICAgdGhpcy5jbGFzc0xpc3QuYWRkKCdkcm9wdXAnKTtcbiAgICAgICAgfVxufTtcbiJdLCJzb3VyY2VSb290IjoiIn0=\n//# sourceURL=webpack-internal:///./resources/js/dropup-down.js\n");

/***/ }),

/***/ 3:
/*!*******************************************!*\
  !*** multi ./resources/js/dropup-down.js ***!
  \*******************************************/
/*! no static exports found */
/***/ (function(module, exports, __webpack_require__) {

module.exports = __webpack_require__(/*! /home/zubiri/Escritorio/PlantsEGO/PlantsEgo/resources/js/dropup-down.js */"./resources/js/dropup-down.js");


/***/ })

/******/ });