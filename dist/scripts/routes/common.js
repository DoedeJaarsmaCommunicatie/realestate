(window.webpackJsonp=window.webpackJsonp||[]).push([[1],{6:function(e,t,n){"use strict";function i(e,t){if(!(e instanceof t))throw new TypeError("Cannot call a class as a function")}function a(e,t){for(var n=0;n<t.length;n++){var i=t[n];i.enumerable=i.enumerable||!1,i.configurable=!0,"value"in i&&(i.writable=!0),Object.defineProperty(e,i.key,i)}}function r(e,t,n){return t in e?Object.defineProperty(e,t,{value:n,enumerable:!0,configurable:!0,writable:!0}):e[t]=n,e}n.r(t);var o=function(){function e(t,n){var a=!(arguments.length>2&&void 0!==arguments[2])||arguments[2];i(this,e),r(this,"path",void 0),r(this,"target",void 0),r(this,"slug",void 0),r(this,"add",void 0),this.path=window.location.pathname,this.target=t,this.slug=n,this.add=a}var t,n,o;return t=e,(n=[{key:"build",value:function(){this.hasParams()?this.add?window.location.pathname=this.injectParams():this.removeParams():window.location.pathname=this.appendParams()}},{key:"removeParams",value:function(){var e=this.path.split("/"),t=e[e.indexOf(this.target)+1].split(",");t.length<2?(delete e[e.indexOf(this.target)],delete e[e.indexOf(this.slug)],window.location.pathname=e.join("/")):(delete t[t.indexOf(this.slug)],e[e.indexOf(this.target)+1]=t.filter(Boolean).join(","),window.location.pathname=e.join("/"))}},{key:"injectParams",value:function(){var e=this.path.split("/"),t=e[e.indexOf(this.target)+1].split(",");return t.push(this.slug),e[e.indexOf(this.target)+1]=t.join(","),e.join("/")}},{key:"appendParams",value:function(){var e=this.path.split("/");return e.splice(e.indexOf("vacatures")+2,0,this.target),e.splice(e.indexOf(this.target)+1,0,this.slug),e.join("/")}},{key:"hasParams",value:function(){return this.path.includes(this.target)}}])&&a(t.prototype,n),o&&a(t,o),e}();function s(e,t){for(var n=0;n<t.length;n++){var i=t[n];i.enumerable=i.enumerable||!1,i.configurable=!0,"value"in i&&(i.writable=!0),Object.defineProperty(e,i.key,i)}}function l(e,t,n){return t in e?Object.defineProperty(e,t,{value:n,enumerable:!0,configurable:!0,writable:!0}):e[t]=n,e}var u=function(){function e(t){!function(e,t){if(!(e instanceof t))throw new TypeError("Cannot call a class as a function")}(this,e),l(this,"element",void 0),l(this,"checkbox",void 0),this.element=t}var t,n,i;return t=e,(n=[{key:"init",value:function(){var e=this;this.element.addEventListener("input",(function(t){t.target.checked?e.selectEvent(t):e.deSelectEvent(t)}))}},{key:"selectEvent",value:function(e){var t=e.target;new o(t.dataset.param,t.dataset.slug,!0).build()}},{key:"deSelectEvent",value:function(e){var t=e.target;new o(t.dataset.param,t.dataset.slug,!1).build()}}])&&s(t.prototype,n),i&&s(t,i),e}();function c(e,t){for(var n=0;n<t.length;n++){var i=t[n];i.enumerable=i.enumerable||!1,i.configurable=!0,"value"in i&&(i.writable=!0),Object.defineProperty(e,i.key,i)}}function f(e,t,n){var i=t.get(e);if(!i)throw new TypeError("attempted to set private field on non-instance");if(i.set)i.set.call(e,n);else{if(!i.writable)throw new TypeError("attempted to set read only private field");i.value=n}return n}var h=function(){function e(){var t,n,i;!function(e,t){if(!(e instanceof t))throw new TypeError("Cannot call a class as a function")}(this,e),d.set(this,{writable:!0,value:!0}),i=void 0,(n="target")in(t=this)?Object.defineProperty(t,n,{value:i,enumerable:!0,configurable:!0,writable:!0}):t[n]=i}var t,n,i;return t=e,(n=[{key:"build",value:function(){if(this.target){var e=document.querySelectorAll('[data-param="'.concat(this.target,'"]'));if(e&&0!==e.length){for(var t=0;t<e.length;t++)new u(e[t]).init();return this}}}},{key:"setTarget",value:function(e){return this.target=e,this}},{key:"isUrl",value:function(){return f(this,d,!1),this}},{key:"isParam",value:function(){return f(this,d,!0),this}}])&&c(t.prototype,n),i&&c(t,i),e}(),d=new WeakMap,v=(t.default={init:function(){},finalize:function(){v(),p(),g()}},function(){(new h).setTarget("vakgebied").isUrl().build()}),p=function(){(new h).setTarget("organisatie").isUrl().build()},g=function(){(new h).setTarget("regio").isUrl().build()}}}]);