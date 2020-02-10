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
/******/ 	__webpack_require__.p = "";
/******/
/******/
/******/ 	// Load entry module and return exports
/******/ 	return __webpack_require__(__webpack_require__.s = "./wp-content/themes/vepa/js/scripts.js");
/******/ })
/************************************************************************/
/******/ ({

/***/ "./wp-content/themes/vepa/js/modules/ContactForm.js":
/*!**********************************************************!*\
  !*** ./wp-content/themes/vepa/js/modules/ContactForm.js ***!
  \**********************************************************/
/*! exports provided: default */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
eval("__webpack_require__.r(__webpack_exports__);\nfunction _classCallCheck(instance, Constructor) { if (!(instance instanceof Constructor)) { throw new TypeError(\"Cannot call a class as a function\"); } }\n\nfunction _defineProperties(target, props) { for (var i = 0; i < props.length; i++) { var descriptor = props[i]; descriptor.enumerable = descriptor.enumerable || false; descriptor.configurable = true; if (\"value\" in descriptor) descriptor.writable = true; Object.defineProperty(target, descriptor.key, descriptor); } }\n\nfunction _createClass(Constructor, protoProps, staticProps) { if (protoProps) _defineProperties(Constructor.prototype, protoProps); if (staticProps) _defineProperties(Constructor, staticProps); return Constructor; }\n\nvar ContactForm =\n/*#__PURE__*/\nfunction () {\n  function ContactForm() {\n    _classCallCheck(this, ContactForm);\n\n    this.openFormButton = document.querySelector('.contact-icon');\n    this.closeFormButton = document.querySelector('.close-form');\n    this.isFormOpen = document.querySelector('.form-container');\n    this.events();\n  }\n\n  _createClass(ContactForm, [{\n    key: \"events\",\n    value: function events() {\n      this.openFormButton.addEventListener('click', this.openForm.bind(this));\n      this.closeFormButton.addEventListener('click', this.closeForm.bind(this));\n    }\n  }, {\n    key: \"openForm\",\n    value: function openForm() {\n      this.isFormOpen.classList.add('show');\n    }\n  }, {\n    key: \"closeForm\",\n    value: function closeForm() {\n      this.isFormOpen.classList.remove('show');\n    }\n  }]);\n\n  return ContactForm;\n}();\n\n/* harmony default export */ __webpack_exports__[\"default\"] = (ContactForm);\n/* btn.addEventListener('click', function () {\r\n  \r\n    if (box.classList.contains('hidden')) {\r\n      box.classList.remove('hidden');\r\n      setTimeout(function () {\r\n        box.classList.remove('visuallyhidden');\r\n      }, 20);\r\n    } else {\r\n      box.classList.add('visuallyhidden');    \r\n      box.addEventListener('transitionend', function(e) {\r\n        box.classList.add('hidden');\r\n      }, {\r\n        capture: false,\r\n        once: true,\r\n        passive: false\r\n      });\r\n    }\r\n    \r\n  }, false); */\n\n//# sourceURL=webpack:///./wp-content/themes/vepa/js/modules/ContactForm.js?");

/***/ }),

/***/ "./wp-content/themes/vepa/js/modules/MobileMenu.js":
/*!*********************************************************!*\
  !*** ./wp-content/themes/vepa/js/modules/MobileMenu.js ***!
  \*********************************************************/
/*! exports provided: default */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
eval("__webpack_require__.r(__webpack_exports__);\nfunction _classCallCheck(instance, Constructor) { if (!(instance instanceof Constructor)) { throw new TypeError(\"Cannot call a class as a function\"); } }\n\nfunction _defineProperties(target, props) { for (var i = 0; i < props.length; i++) { var descriptor = props[i]; descriptor.enumerable = descriptor.enumerable || false; descriptor.configurable = true; if (\"value\" in descriptor) descriptor.writable = true; Object.defineProperty(target, descriptor.key, descriptor); } }\n\nfunction _createClass(Constructor, protoProps, staticProps) { if (protoProps) _defineProperties(Constructor.prototype, protoProps); if (staticProps) _defineProperties(Constructor, staticProps); return Constructor; }\n\nvar MobileMenu =\n/*#__PURE__*/\nfunction () {\n  function MobileMenu() {\n    _classCallCheck(this, MobileMenu);\n\n    this.openButton = document.querySelector('.burger-menu');\n    this.closeButton = document.querySelector('.close-burger');\n    this.overlay = document.querySelector('.sidebar-div');\n    this.isPhone = document.querySelector('#mob-header');\n    this.events();\n  }\n\n  _createClass(MobileMenu, [{\n    key: \"events\",\n    value: function events() {\n      this.openButton.addEventListener('click', this.openMenu.bind(this));\n      this.closeButton.addEventListener('click', this.closeMenu.bind(this));\n    }\n  }, {\n    key: \"openMenu\",\n    value: function openMenu() {\n      if (window.getComputedStyle(this.isPhone).display === 'flex' && window.getComputedStyle(this.openButton).display === 'flex') {\n        this.openButton.style.display = 'none';\n        this.closeButton.style.display = 'block';\n        this.overlay.classList.add('active');\n        document.body.classList.add('stop-scrolling');\n      }\n    }\n  }, {\n    key: \"closeMenu\",\n    value: function closeMenu() {\n      if (window.getComputedStyle(this.isPhone).display === 'flex' && window.getComputedStyle(this.closeButton).display === 'block') {\n        this.openButton.style.display = 'flex';\n        this.closeButton.style.display = 'none';\n        this.overlay.classList.remove('active');\n        document.body.classList.remove('stop-scrolling');\n      }\n    }\n  }]);\n\n  return MobileMenu;\n}();\n\n/* harmony default export */ __webpack_exports__[\"default\"] = (MobileMenu);\n\n//# sourceURL=webpack:///./wp-content/themes/vepa/js/modules/MobileMenu.js?");

/***/ }),

/***/ "./wp-content/themes/vepa/js/modules/Search.js":
/*!*****************************************************!*\
  !*** ./wp-content/themes/vepa/js/modules/Search.js ***!
  \*****************************************************/
/*! exports provided: default */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
eval("__webpack_require__.r(__webpack_exports__);\nfunction _classCallCheck(instance, Constructor) { if (!(instance instanceof Constructor)) { throw new TypeError(\"Cannot call a class as a function\"); } }\n\nfunction _defineProperties(target, props) { for (var i = 0; i < props.length; i++) { var descriptor = props[i]; descriptor.enumerable = descriptor.enumerable || false; descriptor.configurable = true; if (\"value\" in descriptor) descriptor.writable = true; Object.defineProperty(target, descriptor.key, descriptor); } }\n\nfunction _createClass(Constructor, protoProps, staticProps) { if (protoProps) _defineProperties(Constructor.prototype, protoProps); if (staticProps) _defineProperties(Constructor, staticProps); return Constructor; }\n\nvar Search =\n/*#__PURE__*/\nfunction () {\n  function Search() {\n    _classCallCheck(this, Search);\n\n    this.searchOpen = document.querySelector('#search-trigger--js');\n    this.searchClose = document.querySelector('.search-close--js');\n    this.isSearchOpen = document.querySelector('.search-container');\n    this.events();\n  }\n\n  _createClass(Search, [{\n    key: \"events\",\n    value: function events() {\n      this.searchOpen.addEventListener('click', this.openSearch.bind(this));\n      this.searchClose.addEventListener('click', this.closeSearch.bind(this));\n    }\n  }, {\n    key: \"openSearch\",\n    value: function openSearch() {\n      this.isSearchOpen.style.display = 'flex';\n    }\n  }, {\n    key: \"closeSearch\",\n    value: function closeSearch() {\n      this.isSearchOpen.style.display = 'none';\n    }\n  }]);\n\n  return Search;\n}();\n\n/* harmony default export */ __webpack_exports__[\"default\"] = (Search);\n\n//# sourceURL=webpack:///./wp-content/themes/vepa/js/modules/Search.js?");

/***/ }),

/***/ "./wp-content/themes/vepa/js/modules/SidebarCollapse.js":
/*!**************************************************************!*\
  !*** ./wp-content/themes/vepa/js/modules/SidebarCollapse.js ***!
  \**************************************************************/
/*! exports provided: default */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
eval("__webpack_require__.r(__webpack_exports__);\nfunction _classCallCheck(instance, Constructor) { if (!(instance instanceof Constructor)) { throw new TypeError(\"Cannot call a class as a function\"); } }\n\nfunction _defineProperties(target, props) { for (var i = 0; i < props.length; i++) { var descriptor = props[i]; descriptor.enumerable = descriptor.enumerable || false; descriptor.configurable = true; if (\"value\" in descriptor) descriptor.writable = true; Object.defineProperty(target, descriptor.key, descriptor); } }\n\nfunction _createClass(Constructor, protoProps, staticProps) { if (protoProps) _defineProperties(Constructor.prototype, protoProps); if (staticProps) _defineProperties(Constructor, staticProps); return Constructor; }\n\nvar SidebarCollapse =\n/*#__PURE__*/\nfunction () {\n  function SidebarCollapse() {\n    _classCallCheck(this, SidebarCollapse);\n\n    this.sidebar = document.querySelector('#sidebar_primary');\n    this.footer = document.querySelector('footer');\n    this.events();\n  }\n\n  _createClass(SidebarCollapse, [{\n    key: \"events\",\n    value: function events() {\n      window.addEventListener('scroll', this.collapse.bind(this));\n    }\n  }, {\n    key: \"collapse\",\n    value: function collapse() {\n      if (this.footer.offsetTop - document.body.scrollTop <= window.innerHeight - 50) {\n        // kui footeri ülemise osa kaugus ekraani ülemisest osast on võrdväärne/väiksem, kui ekraani kõrgus - 50px, siis ->\n        this.sidebar.classList.add('sidebar--bottom');\n      } else {\n        this.sidebar.classList.remove('sidebar--bottom');\n      }\n    }\n  }]);\n\n  return SidebarCollapse;\n}();\n\n/* harmony default export */ __webpack_exports__[\"default\"] = (SidebarCollapse);\n\n//# sourceURL=webpack:///./wp-content/themes/vepa/js/modules/SidebarCollapse.js?");

/***/ }),

/***/ "./wp-content/themes/vepa/js/modules/Video.js":
/*!****************************************************!*\
  !*** ./wp-content/themes/vepa/js/modules/Video.js ***!
  \****************************************************/
/*! exports provided: default */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
eval("__webpack_require__.r(__webpack_exports__);\nfunction _classCallCheck(instance, Constructor) { if (!(instance instanceof Constructor)) { throw new TypeError(\"Cannot call a class as a function\"); } }\n\nfunction _defineProperties(target, props) { for (var i = 0; i < props.length; i++) { var descriptor = props[i]; descriptor.enumerable = descriptor.enumerable || false; descriptor.configurable = true; if (\"value\" in descriptor) descriptor.writable = true; Object.defineProperty(target, descriptor.key, descriptor); } }\n\nfunction _createClass(Constructor, protoProps, staticProps) { if (protoProps) _defineProperties(Constructor.prototype, protoProps); if (staticProps) _defineProperties(Constructor, staticProps); return Constructor; }\n\nvar Video =\n/*#__PURE__*/\nfunction () {\n  function Video() {\n    _classCallCheck(this, Video);\n\n    this.openVideoButton = document.querySelector('.esilehe-video');\n    this.closeVideoButton = document.querySelector('#video-close');\n    this.iframe = document.querySelector('#video-iframe');\n    this.timeOut = null;\n    this.events();\n  }\n\n  _createClass(Video, [{\n    key: \"events\",\n    value: function events() {\n      this.openVideoButton.addEventListener('click', this.videoOpen.bind(this));\n      this.closeVideoButton.addEventListener('click', this.videoClose.bind(this));\n      document.body.addEventListener('keydown', this.escapeVideo.bind(this));\n    }\n  }, {\n    key: \"videoOpen\",\n    value: function videoOpen() {\n      this.iframe.style.display = 'flex';\n    }\n  }, {\n    key: \"videoClose\",\n    value: function videoClose() {\n      this.iframe.style.display = 'none';\n    }\n  }, {\n    key: \"escapeVideo\",\n    value: function escapeVideo(e) {\n      if (e.keyCode == 27 && this.iframe.style.display === 'flex') {\n        this.iframe.style.display = 'none';\n      }\n    }\n  }]);\n\n  return Video;\n}();\n\n/* harmony default export */ __webpack_exports__[\"default\"] = (Video);\n\n//# sourceURL=webpack:///./wp-content/themes/vepa/js/modules/Video.js?");

/***/ }),

/***/ "./wp-content/themes/vepa/js/scripts.js":
/*!**********************************************!*\
  !*** ./wp-content/themes/vepa/js/scripts.js ***!
  \**********************************************/
/*! no exports provided */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
eval("__webpack_require__.r(__webpack_exports__);\n/* harmony import */ var _modules_MobileMenu__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! ./modules/MobileMenu */ \"./wp-content/themes/vepa/js/modules/MobileMenu.js\");\n/* harmony import */ var _modules_SidebarCollapse__WEBPACK_IMPORTED_MODULE_1__ = __webpack_require__(/*! ./modules/SidebarCollapse */ \"./wp-content/themes/vepa/js/modules/SidebarCollapse.js\");\n/* harmony import */ var _modules_ContactForm__WEBPACK_IMPORTED_MODULE_2__ = __webpack_require__(/*! ./modules/ContactForm */ \"./wp-content/themes/vepa/js/modules/ContactForm.js\");\n/* harmony import */ var _modules_Search__WEBPACK_IMPORTED_MODULE_3__ = __webpack_require__(/*! ./modules/Search */ \"./wp-content/themes/vepa/js/modules/Search.js\");\n/* harmony import */ var _modules_Video__WEBPACK_IMPORTED_MODULE_4__ = __webpack_require__(/*! ./modules/Video */ \"./wp-content/themes/vepa/js/modules/Video.js\");\n// MOODULID\n\n\n\n\n // UUED OBJEKTID\n\nvar mobileMenu = new _modules_MobileMenu__WEBPACK_IMPORTED_MODULE_0__[\"default\"]();\nvar sidebarCollapse = new _modules_SidebarCollapse__WEBPACK_IMPORTED_MODULE_1__[\"default\"]();\nvar contactForm = new _modules_ContactForm__WEBPACK_IMPORTED_MODULE_2__[\"default\"]();\nvar search = new _modules_Search__WEBPACK_IMPORTED_MODULE_3__[\"default\"]();\nvar video = new _modules_Video__WEBPACK_IMPORTED_MODULE_4__[\"default\"]();\n\n//# sourceURL=webpack:///./wp-content/themes/vepa/js/scripts.js?");

/***/ })

/******/ });