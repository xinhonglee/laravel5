(window["webpackJsonp"] = window["webpackJsonp"] || []).push([[2],{

/***/ "./node_modules/babel-loader/lib/index.js?!./node_modules/vue-loader/lib/index.js?!./resources/js/views/Story/components/Bookend/Landscape.vue?vue&type=script&lang=js&":
/*!****************************************************************************************************************************************************************************************!*\
  !*** ./node_modules/babel-loader/lib??ref--4-0!./node_modules/vue-loader/lib??vue-loader-options!./resources/js/views/Story/components/Bookend/Landscape.vue?vue&type=script&lang=js& ***!
  \****************************************************************************************************************************************************************************************/
/*! exports provided: default */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony import */ var _babel_runtime_helpers_objectSpread__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! @babel/runtime/helpers/objectSpread */ "./node_modules/@babel/runtime/helpers/objectSpread.js");
/* harmony import */ var _babel_runtime_helpers_objectSpread__WEBPACK_IMPORTED_MODULE_0___default = /*#__PURE__*/__webpack_require__.n(_babel_runtime_helpers_objectSpread__WEBPACK_IMPORTED_MODULE_0__);

//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
/* harmony default export */ __webpack_exports__["default"] = ({
  name: "bookend-landscape",

  data() {
    return {
      title: '',
      url: '',
      image: '',
      category: '',
      cloudinaryInfo: null
    };
  },

  methods: {
    generateMediaLibraries() {
      const vm = this;
      cloudinary.createMediaLibrary(_babel_runtime_helpers_objectSpread__WEBPACK_IMPORTED_MODULE_0___default()({}, vm.cloudinaryInfo), {
        insertHandler: function (data) {
          let result = data.assets[0];
          vm.image = result.secure_url.substr(0, result.secure_url.lastIndexOf(".")) + ".jpg";
        }
      }, document.getElementById("upload_story_bookend_landscape"));
    }

  },

  mounted() {
    this.cloudinaryInfo = {
      cloud_name: this.$store.state.cloudinary.cloudName,
      api_key: this.$store.state.cloudinary.apiKey,
      username: this.$store.state.cloudinary.userName,
      timestamp: this.$store.state.cloudinary.timestamp,
      signature: this.$store.state.cloudinary.signature,
      button_class: 'md-button md-raised md-theme-default px-3 ml-0',
      button_caption: 'Select an Image',
      multiple: false
    };
    this.generateMediaLibraries();
  }

});

/***/ }),

/***/ "./node_modules/vue-loader/lib/loaders/templateLoader.js?!./node_modules/vue-loader/lib/index.js?!./resources/js/views/Story/components/Bookend/Landscape.vue?vue&type=template&id=48612804&scoped=true&":
/*!********************************************************************************************************************************************************************************************************************************************!*\
  !*** ./node_modules/vue-loader/lib/loaders/templateLoader.js??vue-loader-options!./node_modules/vue-loader/lib??vue-loader-options!./resources/js/views/Story/components/Bookend/Landscape.vue?vue&type=template&id=48612804&scoped=true& ***!
  \********************************************************************************************************************************************************************************************************************************************/
/*! exports provided: render, staticRenderFns */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony export (binding) */ __webpack_require__.d(__webpack_exports__, "render", function() { return render; });
/* harmony export (binding) */ __webpack_require__.d(__webpack_exports__, "staticRenderFns", function() { return staticRenderFns; });
var render = function() {
  var _vm = this
  var _h = _vm.$createElement
  var _c = _vm._self._c || _h
  return _c(
    "div",
    [
      _c(
        "md-field",
        [
          _c("label", [_vm._v("Title")]),
          _vm._v(" "),
          _c("md-input", {
            attrs: { placeholder: "" },
            model: {
              value: _vm.title,
              callback: function($$v) {
                _vm.title = $$v
              },
              expression: "title"
            }
          })
        ],
        1
      ),
      _vm._v(" "),
      _c(
        "md-field",
        [
          _c("label", [_vm._v("URL")]),
          _vm._v(" "),
          _c("md-input", {
            attrs: { placeholder: "" },
            model: {
              value: _vm.url,
              callback: function($$v) {
                _vm.url = $$v
              },
              expression: "url"
            }
          })
        ],
        1
      ),
      _vm._v(" "),
      _c(
        "md-field",
        [
          _c("label", [_vm._v("Category")]),
          _vm._v(" "),
          _c("md-input", {
            attrs: { placeholder: "" },
            model: {
              value: _vm.category,
              callback: function($$v) {
                _vm.category = $$v
              },
              expression: "category"
            }
          })
        ],
        1
      ),
      _vm._v(" "),
      _vm.image
        ? _c("img", {
            staticClass: "attachment-image md-elevation-7",
            attrs: { src: _vm.image }
          })
        : _vm._e(),
      _vm._v(" "),
      _c("br"),
      _vm._v(" "),
      _c(
        "button",
        {
          staticClass: "md-button md-raised md-theme-default px-3 ml-0",
          attrs: { type: "button", id: "upload_story_bookend_landscape" }
        },
        [_vm._v("\n        Select an Image\n    ")]
      )
    ],
    1
  )
}
var staticRenderFns = []
render._withStripped = true



/***/ }),

/***/ "./resources/js/views/Story/components/Bookend/Landscape.vue":
/*!*******************************************************************!*\
  !*** ./resources/js/views/Story/components/Bookend/Landscape.vue ***!
  \*******************************************************************/
/*! exports provided: default */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony import */ var _Landscape_vue_vue_type_template_id_48612804_scoped_true___WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! ./Landscape.vue?vue&type=template&id=48612804&scoped=true& */ "./resources/js/views/Story/components/Bookend/Landscape.vue?vue&type=template&id=48612804&scoped=true&");
/* harmony import */ var _Landscape_vue_vue_type_script_lang_js___WEBPACK_IMPORTED_MODULE_1__ = __webpack_require__(/*! ./Landscape.vue?vue&type=script&lang=js& */ "./resources/js/views/Story/components/Bookend/Landscape.vue?vue&type=script&lang=js&");
/* empty/unused harmony star reexport *//* harmony import */ var _node_modules_vue_loader_lib_runtime_componentNormalizer_js__WEBPACK_IMPORTED_MODULE_2__ = __webpack_require__(/*! ../../../../../../node_modules/vue-loader/lib/runtime/componentNormalizer.js */ "./node_modules/vue-loader/lib/runtime/componentNormalizer.js");





/* normalize component */

var component = Object(_node_modules_vue_loader_lib_runtime_componentNormalizer_js__WEBPACK_IMPORTED_MODULE_2__["default"])(
  _Landscape_vue_vue_type_script_lang_js___WEBPACK_IMPORTED_MODULE_1__["default"],
  _Landscape_vue_vue_type_template_id_48612804_scoped_true___WEBPACK_IMPORTED_MODULE_0__["render"],
  _Landscape_vue_vue_type_template_id_48612804_scoped_true___WEBPACK_IMPORTED_MODULE_0__["staticRenderFns"],
  false,
  null,
  "48612804",
  null
  
)

/* hot reload */
if (false) { var api; }
component.options.__file = "resources/js/views/Story/components/Bookend/Landscape.vue"
/* harmony default export */ __webpack_exports__["default"] = (component.exports);

/***/ }),

/***/ "./resources/js/views/Story/components/Bookend/Landscape.vue?vue&type=script&lang=js&":
/*!********************************************************************************************!*\
  !*** ./resources/js/views/Story/components/Bookend/Landscape.vue?vue&type=script&lang=js& ***!
  \********************************************************************************************/
/*! exports provided: default */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony import */ var _node_modules_babel_loader_lib_index_js_ref_4_0_node_modules_vue_loader_lib_index_js_vue_loader_options_Landscape_vue_vue_type_script_lang_js___WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! -!../../../../../../node_modules/babel-loader/lib??ref--4-0!../../../../../../node_modules/vue-loader/lib??vue-loader-options!./Landscape.vue?vue&type=script&lang=js& */ "./node_modules/babel-loader/lib/index.js?!./node_modules/vue-loader/lib/index.js?!./resources/js/views/Story/components/Bookend/Landscape.vue?vue&type=script&lang=js&");
/* empty/unused harmony star reexport */ /* harmony default export */ __webpack_exports__["default"] = (_node_modules_babel_loader_lib_index_js_ref_4_0_node_modules_vue_loader_lib_index_js_vue_loader_options_Landscape_vue_vue_type_script_lang_js___WEBPACK_IMPORTED_MODULE_0__["default"]); 

/***/ }),

/***/ "./resources/js/views/Story/components/Bookend/Landscape.vue?vue&type=template&id=48612804&scoped=true&":
/*!**************************************************************************************************************!*\
  !*** ./resources/js/views/Story/components/Bookend/Landscape.vue?vue&type=template&id=48612804&scoped=true& ***!
  \**************************************************************************************************************/
/*! exports provided: render, staticRenderFns */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony import */ var _node_modules_vue_loader_lib_loaders_templateLoader_js_vue_loader_options_node_modules_vue_loader_lib_index_js_vue_loader_options_Landscape_vue_vue_type_template_id_48612804_scoped_true___WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! -!../../../../../../node_modules/vue-loader/lib/loaders/templateLoader.js??vue-loader-options!../../../../../../node_modules/vue-loader/lib??vue-loader-options!./Landscape.vue?vue&type=template&id=48612804&scoped=true& */ "./node_modules/vue-loader/lib/loaders/templateLoader.js?!./node_modules/vue-loader/lib/index.js?!./resources/js/views/Story/components/Bookend/Landscape.vue?vue&type=template&id=48612804&scoped=true&");
/* harmony reexport (safe) */ __webpack_require__.d(__webpack_exports__, "render", function() { return _node_modules_vue_loader_lib_loaders_templateLoader_js_vue_loader_options_node_modules_vue_loader_lib_index_js_vue_loader_options_Landscape_vue_vue_type_template_id_48612804_scoped_true___WEBPACK_IMPORTED_MODULE_0__["render"]; });

/* harmony reexport (safe) */ __webpack_require__.d(__webpack_exports__, "staticRenderFns", function() { return _node_modules_vue_loader_lib_loaders_templateLoader_js_vue_loader_options_node_modules_vue_loader_lib_index_js_vue_loader_options_Landscape_vue_vue_type_template_id_48612804_scoped_true___WEBPACK_IMPORTED_MODULE_0__["staticRenderFns"]; });



/***/ })

}]);