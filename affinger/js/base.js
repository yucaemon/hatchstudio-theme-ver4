new function(){"use strict";var t="footer",e="fixed-footer";function n(){document.getElementsByTagName("body")[0].clientHeight;document.getElementById(t).style.top="0px";var n,i=document.getElementById(t).offsetTop,o=document.getElementById(t).offsetHeight;window.innerHeight?n=window.innerHeight:document.documentElement&&0!==document.documentElement.clientHeight&&(n=document.documentElement.clientHeight),i+o<n?(document.getElementById(t).style.position="relative",document.getElementById(t).style.top=n-o-i-1+"px",document.body.classList?document.body.classList.add(e):document.body.className+=" "+e):document.body.classList?document.body.classList.remove(e):document.body.className=document.body.className.replace(new RegExp("(^|\\b)"+e+"(\\b|$)","gi")," ")}function i(t,e,n){try{t.addEventListener(e,n,!1)}catch(i){t.attachEvent("on"+e,n)}}i(window,"load",n),i(window,"load",function(){!function(t){var e=document.createElement("div"),n=document.createTextNode("S");e.appendChild(n),e.style.visibility="hidden",e.style.position="absolute",e.style.top="0",document.body.appendChild(e);var i=e.offsetHeight;setInterval(function(){i!==e.offsetHeight&&(t(),i=e.offsetHeight)},1e3)}(n)}),i(window,"resize",n)},jQuery(function(){"use strict";var t=jQuery("#page-top");t.hide(),jQuery(window).scroll(function(){jQuery(this).scrollTop()>400?t.fadeIn():t.fadeOut()}),t.click(function(){return jQuery("body,html").animate({scrollTop:0},800),!1})}),function(t,e,n,i){"use strict";var o=function(){var t=document.createElement("div"),e={transition:"transitionend",OTransition:"oTransitionEnd",MozTransition:"transitionend",WebkitTransition:"webkitTransitionEnd"};for(var n in e)if(Object.prototype.hasOwnProperty.call(e,n)&&void 0!==t.style[n])return e[n];return"transitionend"}();function s(){return"1"===n.is_mobile}var a=function(){function t(n,i){if(!(this instanceof t))return new t(n);this.$element=n,this.options=e.extend({},{listener:{click:function(){},mouseenter:function(){},mouseleave:function(){}},expanded:!1,hoverable:!1,link:null,children:null,icon:!1},i),this.options.link||(this.options.link=function(){return this.$element.find("> a")}),this.options.children||(this.options.children=function(){return this.$element.find("> ul")}),this.expanded=this.options.expanded,this.$icon=null}return t.prototype.getElement=function(){return this.$element},t.prototype.hasParent=function(){return this.$element.parents().each(function(){if(void 0!==e(this).data("st-menu-item"))return!1}),!1},t.prototype.getRoot=function(){var t=this.$element;return this.$element.parents().each(function(){var n=e(this);void 0!==n.data("st-menu-item")&&(t=n)}),t},t.prototype.getIcon=function(){return this.$icon=this.$icon||e("<i></i>").appendTo(this.getLink()),this.$icon},t.prototype.getLink=function(){return"function"==typeof this.options.link?this.options.link.bind(this)():e(this.options.link).eq(0)},t.prototype.hasChildren=function(){return"function"==typeof this.options.children?this.options.children.bind(this)().length:e(this.options.children).length},t.prototype.isExpanded=function(){return this.expanded},t.prototype.isClickable=function(){return!!this.getLink().length&&(!this.hasChildren()||this.hasChildren()&&this.isExpanded())},t.prototype.initialize=function(){this.options.icon&&(this.$icon=e("<i></i>"),this.getLink().append(this.$icon)),this.refresh(!1),this.addEventListener()},t.prototype.refresh=function(t){t=void 0===t||t,this.expanded||!this.hasChildren()?this.expand(t):this.collapse(t)},t.prototype.expand=function(t){var e=this,n=this.$element.find("> ul");this.expanded=!0,(t=void 0===t||t)&&n.length?n.animate({marginTop:"show",marginBottom:"show",paddingTop:"show",paddingBottom:"show",height:"show"},"fast",function(){e.options.icon&&e.getIcon().attr({class:"menu-item-icon st-fa st-svg-angle-right"}),e.$element.removeClass("menu-item-collapsed").addClass("menu-item-expanded")}):(n.show(),e.options.icon&&this.getIcon().attr({class:"menu-item-icon st-fa st-svg-angle-right"}),this.$element.removeClass("menu-item-collapsed").addClass("menu-item-expanded"))},t.prototype.collapse=function(t){var e=this,n=this.$element.find("> ul");this.expanded=!1,(t=void 0===t||t)&&n.length?n.slideUp("fast",function(){e.options.icon&&e.getIcon().attr({class:"menu-item-icon st-fa st-svg-angle-down"}),e.$element.removeClass("menu-item-expanded").addClass("menu-item-collapsed")}):(n.hide(),n.length&&e.options.icon&&this.getIcon().attr({class:"menu-item-icon st-fa st-svg-angle-down"}),this.$element.removeClass("menu-item-expanded").addClass("menu-item-collapsed"))},t.prototype.toggle=function(){this.hasChildren()&&(this.expanded?this.collapse():this.expand())},t.prototype.addEventListener=function(){this.getLink().click(e.proxy(this.options.listener.click,this)),this.options.hoverable&&this.$element.hover(e.proxy(this.options.listener.mouseenter,this),e.proxy(this.options.listener.mouseleave,this))},t}(),c=function(){function n(t,i){if(!(this instanceof n))return new n;this.$element=t,this.options=e.extend({},{expanded:!1,hoverable:!1,link:null,children:null,icon:!1},i)}return n.prototype.initialize=function(){var n=this;this.getMenuItems().each(function(){var i=e(this),o={listener:n.options.hoverable?{click:function(e){if(e.preventDefault(),e.stopPropagation(),this.isClickable())return s()&&this.getRoot().data("st-menu").collapseChildren(!1),void(t.location.href=this.getLink().attr("href"));this.toggle()},mouseenter:function(){s()||this.expand()},mouseleave:function(){s()||this.collapse()}}:{click:function(e){e.preventDefault(),e.stopPropagation(),this.isClickable()?t.location.href=this.getLink().attr("href"):this.toggle()},mouseenter:function(){},mouseleave:function(){}},expanded:n.options.expanded,hoverable:n.options.hoverable,link:n.options.link,children:n.options.children,icon:n.options.icon},c=new a(i,o);i.data("st-menu",n),i.data("st-menu-item",c),c.initialize()})},n.prototype.getMenuItems=function(){return this.$element.find("li")},n.prototype.collapseChildren=function(t){this.getMenuItems().each(function(){e(this).data("st-menu-item").collapse(t)})},n.prototype.expandChildren=function(t){this.getMenuItems().each(function(){e(this).data("st-menu-item").expand(t)})},n}(),r=function(){function n(t,n,i,o){var s={$navigationContent:t,activeClass:"s-navi-active",activatedClass:"s-navi-activated",waitTransitionendOnOpen:!1,waitTransitionendOnClose:!1};this.$navigation=t,this.$toggle=n,this.$container=i,this.$overlay=null,this.options=e.extend({},s,o),this.opened=!1,this.scrollTop=0}return n.prototype.isOpened=function(){return this.opened},n.prototype.open=function(){var n,i,s=this;s.opened||(s.scrollTop=e(t).scrollTop(),n=e.Event("open.stnavigation"),s.$navigation.trigger(n),i=function(){var n=t.innerHeight===document.body.offsetHeight?t.innerHeight:document.body.offsetHeight;n-=s.$navigation.outerHeight()-s.$navigation.height(),setTimeout(function(){s.options.$navigationContent.css({height:n+"px"}),e("html").addClass(s.options.activatedClass),s.opened=!0},250)},t.innerHeight&&(s.options.waitTransitionendOnOpen?s.$navigation.one(o,i):i()),s.$toggle.addClass("active"),e("html").addClass(s.options.activeClass),s.$container.css({top:-s.scrollTop}),s.options.$navigationContent.scrollTop(0))},n.prototype.close=function(){var n,i=this;i.opened&&(n=function(){var n=e("html");n.removeClass(i.options.activatedClass),n.removeClass(i.options.activeClass),i.$toggle.removeClass("active"),i.options.$navigationContent.css({height:""}),i.$container.css({top:""}),e(t).scrollTop(i.scrollTop),i.opened=!1},i.options.waitTransitionendOnClose?i.$navigation.one(o,n):n(),e("html").removeClass(i.options.activatedClass))},n.prototype.refresh=function(){var e;this.opened&&(t.matchMedia&&t.matchMedia("screen and (min-width: 960px)").matches?this.close():(e=t.innerHeight===document.body.offsetHeight?t.innerHeight:document.body.offsetHeight,e-=this.$navigation.outerHeight()-this.$navigation.height(),this.options.$navigationContent.css({height:e+"px"})))},n.prototype.addEventListeners=function(){var n,i,o=this;this.$toggle.click(function(t){t.preventDefault(),t.stopPropagation(),o.opened?o.close():o.open()}),o.options.overlay&&this.$overlay.click(function(t){t.preventDefault(),t.stopPropagation(),o.opened&&o.close()}),e(t).on("orientationchange resize",function(t){n&&clearTimeout(n),n=setTimeout(function(){o.refresh()},100)}),o.options.$navigationContent.on("touchstart",function(t){i&&clearTimeout(i),i=setTimeout(function(){o.refresh()},100)})},n.prototype.initialize=function(){var t;if(this.options.overlay&&null===this.$overlay){var n=e("#"+this.options.overlayId);n.length?this.$overlay=n:(this.$overlay=e("<div />",{id:this.options.overlayId}),this.$container.append(this.$overlay))}t=e.Event("initialize.stnavigation"),this.$navigation.trigger(t,{navigation:this}),this.addEventListeners()},n}(),l=function(){function t(t,n,i){this.$menu=t,this.options=e.extend({},{expanded:!1,hoverable:!0,link:null,children:null,icon:!1},i)}return t.prototype.initialize=function(){var t=this;this.$menu.each(function(){var n=e(this),i={expanded:t.options.expanded,hoverable:t.options.hoverable,link:t.options.link,children:t.options.children,icon:t.options.icon},o=new c(n,i);n.data("st-menu",o),o.initialize()})},t}();e(function(){var t,i,o,a,h,d,u;t=e(".acordion_tree"),i=e(".acordion_tree .acordion_tree_content"),o=e(".op-menu"),a=e("#st-ami"),h=e(".acordion_tree ul.menu"),d={$navigationContent:i,waitTransitionendOnClose:!1,overlay:!0,overlayId:"s-navi-overlay"},u={expanded:"1"===n.expand_accordion_menu,$navigationContent:t,hoverable:!1,link:null,children:null,icon:!0},t.on("initialize.stnavigation",function(t,n){n.navigation,h.each(function(){var t=e(this),n=new c(t,u);t.data("st-menu",n),n.initialize()})}),t.on("open.stnavigation",function(t,n){u.expanded?h.each(function(){e(this).data("st-menu").expandChildren(!1)}):h.each(function(){e(this).data("st-menu").collapseChildren(!1)})}),new r(t,o,a,d).initialize(),"1"===n.sidemenu_accordion&&function(){var t=e("#side aside .st-pagelists ul"),n={hoverable:s()};new l(t,n).initialize()}(),function(){var t=e(".acordion_search"),n=e(".acordion_search .acordion_search_content"),i=e(".op-search"),o=e("#st-ami"),s=e("html").hasClass("s-navi-search-overlay");new r(t,i,o,{$navigationContent:n,activeClass:"s-navi-search-active",activatedClass:"s-navi-search-activated",waitTransitionendOnClose:s,overlay:!s,overlayId:"s-navi-overlay"}).initialize()}()})}(window,jQuery,ST),jQuery(function(){"use strict";jQuery("ul.menu li").filter(function(){return!jQuery(this).closest(".acordion").length}).hover(function(){jQuery(">ul:not(:animated)",this).slideDown("fast")},function(){jQuery(">ul",this).slideUp("fast")}),$(".st-mybtn a:empty").remove()}),function(t,e,n,i){"use strict";function o(t){var e=n(t.$slider);e.removeClass(function(t,e){return(e.match(/\bslick-slides-to-show-\S+/g)||[]).join(" ")}).addClass("slick-slides-to-show-"+t.options.slidesToShow),(Math.ceil(t.slideCount/t.options.slidesToScroll)>10||t.slideCount<=t.options.slidesToShow)&&e.removeClass("slick-dotted")}void 0!==n.fn.slick&&n(function(){n("[data-slick]").on("init",function(t,e){o(e)}).on("breakpoint",function(t,e,n){o(e)}).slick()})}(window,window.document,jQuery),$(function(){"use strict";$("p.hatenamark").each(function(){$(this).prepend('<i class="st-fa st-svg-question-circle"></i>')}),$("p.checkmark").each(function(){$(this).prepend('<i class="st-fa st-svg-check-circle"></i>')}),$(".check-ul li").each(function(){$(this).prepend('<i class="st-fa st-svg-check-circle"></i>')}),$("p.attentionmark").each(function(){$(this).prepend('<i class="st-fa st-svg-exclamation-triangle"></i>')}),$("p.memomark").each(function(){$(this).prepend('<i class="st-fa st-svg-pencil-square-o"></i>')}),$("p.usermark").each(function(){$(this).prepend('<i class="st-fa st-svg-user" aria-hidden="true"></i>')}),$("h2.hatenamark").each(function(){$(this).prepend('<i class="st-fa st-svg-question-circle"></i>')}),$("h2.checkmark").each(function(){$(this).prepend('<i class="st-fa st-svg-check-circle"></i>')}),$("h2.attentionmark").each(function(){$(this).prepend('<i class="st-fa st-svg-exclamation-triangle"></i>')}),$("h2.memomark").each(function(){$(this).prepend('<i class="st-fa st-svg-pencil-square-o"></i>')}),$("h2.usermark").each(function(){$(this).prepend('<i class="st-fa st-svg-user" aria-hidden="true"></i>')}),$("h3.hatenamark").each(function(){$(this).prepend('<i class="st-fa st-svg-question-circle"></i>')}),$("h3.checkmark").each(function(){$(this).prepend('<i class="st-fa st-svg-check-circle"></i>')}),$("h3.attentionmark").each(function(){$(this).prepend('<i class="st-fa st-svg-exclamation-triangle"></i>')}),$("h3.memomark").each(function(){$(this).prepend('<i class="st-fa st-svg-pencil-square-o"></i>')}),$("h3.usermark").each(function(){$(this).prepend('<i class="st-fa st-svg-user" aria-hidden="true"></i>')}),$("h4.hatenamark").each(function(){$(this).prepend('<i class="st-fa st-svg-question-circle"></i>')}),$("h4.checkmark").each(function(){$(this).prepend('<i class="st-fa st-svg-check-circle"></i>')}),$("h4.attentionmark").each(function(){$(this).prepend('<i class="st-fa st-svg-exclamation-triangle"></i>')}),$("h4.memomark").each(function(){$(this).prepend('<i class="st-fa st-svg-pencil-square-o"></i>')}),$("h4.usermark").each(function(){$(this).prepend('<i class="st-fa st-svg-user" aria-hidden="true"></i>')}),$("h5.hatenamark").each(function(){$(this).prepend('<i class="st-fa st-svg-question-circle"></i>')}),$("h5.checkmark").each(function(){$(this).prepend('<i class="st-fa st-svg-check-circle"></i>')}),$("h5.attentionmark").each(function(){$(this).prepend('<i class="st-fa st-svg-exclamation-triangle"></i>')}),$("h5.memomark").each(function(){$(this).prepend('<i class="st-fa st-svg-pencil-square-o"></i>')}),$("h5.usermark").each(function(){$(this).prepend('<i class="st-fa st-svg-user" aria-hidden="true"></i>')})}),$(function(){"use strict";var t=$("#st-footermenubox");t.css("bottom","-100px");var e=!1;$(window).scroll(function(){$(this).scrollTop()>100?e||(e=!0,t.stop().animate({bottom:"0px"},200)):e&&(e=!1,t.stop().animate({bottom:"-100px"},200))})}),function(t,e,n,i){"use strict";var o="stBackBtnHistory";function s(){var e=t.sessionStorage.getItem(o);return e?JSON.parse(e):[]}n(function(){var e=t.sessionStorage.getItem(o)||[];!function(e){var n=s();n.length>=1&&n[n.length-1]===e||(n.push(e),n.slice(0,2),t.sessionStorage.setItem(o,JSON.stringify(n)))}(t.location.href),e.length<=1||n("[data-st-back-btn]").each(function(t,e){var i=n(e),o=i.html(),s=n(o);i.replaceWith(s)})}),t.st_back_btn_back=function(){var e,n=s();n.length<=1||(e=n[n.length-2],t.history.pushState(null,null,e),t.location.href=e)}}(window,window.document,jQuery);