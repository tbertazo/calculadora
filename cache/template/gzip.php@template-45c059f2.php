!function(e){var t={},n=function(e){var t=!1,n=e.documentElement,i=n.firstElementChild||n.firstChild,a=e.createElement("div");if(a.style.cssText="position:absolute;top:-100em;width:1.1px",n.insertBefore(a,i),t=(a.getBoundingClientRect().width||1)%1!==0,n.removeChild(a),!t){var r=/msie ([\w.]+)/.exec(navigator.userAgent.toLowerCase());r&&(t=8==parseInt(r[1],10)||9==parseInt(r[1],10))}return t}(document);e.fn.socialButtons=function(n){return n=e.extend({wrapper:'<div class="socialbuttons clearfix" />'},n),n.twitter||n.plusone||n.facebook?(n.twitter&&!t.twitter&&(t.twitter=e.getScript("//platform.twitter.com/widgets.js")),n.plusone&&!t.plusone&&(t.plusone=e.getScript("//apis.google.com/js/plusone.js")),window.FB||!n.facebook||t.facebook||(e("body").append('<div id="fb-root"></div>'),function(e,t,n){var i,a=e.getElementsByTagName(t)[0];e.getElementById(n)||(i=e.createElement(t),i.id=n,i.src="//connect.facebook.net/en_US/all.js#xfbml=1",a.parentNode.insertBefore(i,a))}(document,"script","facebook-jssdk"),t.facebook=!0),this.each(function(){var t=e(this).data("permalink"),i=e(n.wrapper).appendTo(this);n.twitter&&i.append('<div><a href="http://twitter.com/share" class="twitter-share-button" data-url="'+t+'" data-count="none">Tweet</a></div>'),n.plusone&&i.append('<div><div class="g-plusone" data-size="medium" data-annotation="none" data-href="'+t+'"></div></div>'),n.facebook&&i.append('<div><div class="fb-like" data-href="'+t+'" data-send="false" data-layout="button_count" data-width="100" data-show-faces="false"></div></div>')})):this};var i={};e.matchHeight=function(t,n,a){function r(){u.match()}var o=e(window),s="debouncedresize orientationchange",u=t&&i[t];return u||(u=i[t]={id:t,elements:n,deepest:a,match:function(){var t=this.revert(),n=0;e(this.elements).each(function(){n=Math.max(n,e(this).outerHeight())}).each(function(i){var a="outerHeight";"border-box"==t[i].css("box-sizing")&&(a="height");var r=e(this),o=t[i],s=o.height()+(n-r[a]());o.css("min-height",s+"px")})},revert:function(){var t=[],n=this.deepest;return e(this.elements).each(function(){var i=n?e(this).find(n+":first"):e(this);t.push(i.css("min-height",""))}),t},remove:function(){o.unbind(s,r),this.revert(),delete i[this.id]}},o.bind(s,r)),u},e.matchWidth=function(t,a,r){function o(){c.match()}var s=e(window),u="debouncedresize orientationchange",c=t&&i[t];if(!c){if(n)return i[t]={match:function(){},revert:function(){},remove:function(){}},i[t];c=i[t]={id:t,elements:a,selector:r,match:function(){this.revert(),e(this.elements).each(function(){var t=e(this),n=t.width(),i=t.children(r),a=0;i.each(function(t){return t<i.length-1?void(a+=e(this).width()):void e(this).width(n-a)})})},revert:function(){e(a).children(r).css("width","")},remove:function(){s.unbind(u,o),this.revert(),delete i[this.id]}},s.bind(u,o)}return c},e.fn.matchHeight=function(t){var n=0,i=[];return this.each(function(){var n=t?e(this).find(t+":first"):e(this);i.push(n),n.css("min-height","")}),this.each(function(){n=Math.max(n,e(this).outerHeight())}),this.each(function(t){var a=e(this),r=i[t],o=r.height()+(n-a.outerHeight());r.css("min-height",o+"px")})},e.fn.matchWidth=function(t){return this.each(function(){var n=e(this),i=n.children(t),a=0;i.width(function(e,t){return e<i.length-1?(a+=t,t):n.width()-a})})},e.fn.smoothScroller=function(t){return t=e.extend({duration:1e3,transition:"easeOutExpo"},t),this.each(function(){e(this).bind("click",function(){var n=this.hash,i=e(this.hash).offset().top,a=window.location.href.replace(window.location.hash,""),r=this;return a+n==r?(e("html:not(:animated),body:not(:animated)").animate({scrollTop:i},t.duration,t.transition,function(){window.location.hash=n.replace("#","")}),!1):void 0})})}}(jQuery),function(e){e.easing.jswing=e.easing.swing,e.extend(e.easing,{def:"easeOutQuad",swing:function(t,n,i,a,r){return e.easing[e.easing.def](t,n,i,a,r)},easeInQuad:function(e,t,n,i,a){return i*(t/=a)*t+n},easeOutQuad:function(e,t,n,i,a){return-i*(t/=a)*(t-2)+n},easeInOutQuad:function(e,t,n,i,a){return(t/=a/2)<1?i/2*t*t+n:-i/2*(--t*(t-2)-1)+n},easeInCubic:function(e,t,n,i,a){return i*(t/=a)*t*t+n},easeOutCubic:function(e,t,n,i,a){return i*((t=t/a-1)*t*t+1)+n},easeInOutCubic:function(e,t,n,i,a){return(t/=a/2)<1?i/2*t*t*t+n:i/2*((t-=2)*t*t+2)+n},easeInQuart:function(e,t,n,i,a){return i*(t/=a)*t*t*t+n},easeOutQuart:function(e,t,n,i,a){return-i*((t=t/a-1)*t*t*t-1)+n},easeInOutQuart:function(e,t,n,i,a){return(t/=a/2)<1?i/2*t*t*t*t+n:-i/2*((t-=2)*t*t*t-2)+n},easeInQuint:function(e,t,n,i,a){return i*(t/=a)*t*t*t*t+n},easeOutQuint:function(e,t,n,i,a){return i*((t=t/a-1)*t*t*t*t+1)+n},easeInOutQuint:function(e,t,n,i,a){return(t/=a/2)<1?i/2*t*t*t*t*t+n:i/2*((t-=2)*t*t*t*t+2)+n},easeInSine:function(e,t,n,i,a){return-i*Math.cos(t/a*(Math.PI/2))+i+n},easeOutSine:function(e,t,n,i,a){return i*Math.sin(t/a*(Math.PI/2))+n},easeInOutSine:function(e,t,n,i,a){return-i/2*(Math.cos(Math.PI*t/a)-1)+n},easeInExpo:function(e,t,n,i,a){return 0==t?n:i*Math.pow(2,10*(t/a-1))+n},easeOutExpo:function(e,t,n,i,a){return t==a?n+i:i*(-Math.pow(2,-10*t/a)+1)+n},easeInOutExpo:function(e,t,n,i,a){return 0==t?n:t==a?n+i:(t/=a/2)<1?i/2*Math.pow(2,10*(t-1))+n:i/2*(-Math.pow(2,-10*--t)+2)+n},easeInCirc:function(e,t,n,i,a){return-i*(Math.sqrt(1-(t/=a)*t)-1)+n},easeOutCirc:function(e,t,n,i,a){return i*Math.sqrt(1-(t=t/a-1)*t)+n},easeInOutCirc:function(e,t,n,i,a){return(t/=a/2)<1?-i/2*(Math.sqrt(1-t*t)-1)+n:i/2*(Math.sqrt(1-(t-=2)*t)+1)+n},easeInElastic:function(e,t,n,i,a){var r=1.70158,o=0,s=i;if(0==t)return n;if(1==(t/=a))return n+i;if(o||(o=.3*a),s<Math.abs(i)){s=i;var r=o/4}else var r=o/(2*Math.PI)*Math.asin(i/s);return-(s*Math.pow(2,10*(t-=1))*Math.sin(2*(t*a-r)*Math.PI/o))+n},easeOutElastic:function(e,t,n,i,a){var r=1.70158,o=0,s=i;if(0==t)return n;if(1==(t/=a))return n+i;if(o||(o=.3*a),s<Math.abs(i)){s=i;var r=o/4}else var r=o/(2*Math.PI)*Math.asin(i/s);return s*Math.pow(2,-10*t)*Math.sin(2*(t*a-r)*Math.PI/o)+i+n},easeInOutElastic:function(e,t,n,i,a){var r=1.70158,o=0,s=i;if(0==t)return n;if(2==(t/=a/2))return n+i;if(o||(o=.3*a*1.5),s<Math.abs(i)){s=i;var r=o/4}else var r=o/(2*Math.PI)*Math.asin(i/s);return 1>t?-.5*s*Math.pow(2,10*(t-=1))*Math.sin(2*(t*a-r)*Math.PI/o)+n:s*Math.pow(2,-10*(t-=1))*Math.sin(2*(t*a-r)*Math.PI/o)*.5+i+n},easeInBack:function(e,t,n,i,a,r){return void 0==r&&(r=1.70158),i*(t/=a)*t*((r+1)*t-r)+n},easeOutBack:function(e,t,n,i,a,r){return void 0==r&&(r=1.70158),i*((t=t/a-1)*t*((r+1)*t+r)+1)+n},easeInOutBack:function(e,t,n,i,a,r){return void 0==r&&(r=1.70158),(t/=a/2)<1?i/2*t*t*(((r*=1.525)+1)*t-r)+n:i/2*((t-=2)*t*(((r*=1.525)+1)*t+r)+2)+n},easeInBounce:function(t,n,i,a,r){return a-e.easing.easeOutBounce(t,r-n,0,a,r)+i},easeOutBounce:function(e,t,n,i,a){return(t/=a)<1/2.75?7.5625*i*t*t+n:2/2.75>t?i*(7.5625*(t-=1.5/2.75)*t+.75)+n:2.5/2.75>t?i*(7.5625*(t-=2.25/2.75)*t+.9375)+n:i*(7.5625*(t-=2.625/2.75)*t+.984375)+n},easeInOutBounce:function(t,n,i,a,r){return r/2>n?.5*e.easing.easeInBounce(t,2*n,0,a,r)+i:.5*e.easing.easeOutBounce(t,2*n-r,0,a,r)+.5*a+i}})}(jQuery),function(e){function t(t){var n={},i=/^jQuery\d+$/;return e.each(t.attributes,function(e,t){t.specified&&!i.test(t.name)&&(n[t.name]=t.value)}),n}function n(){var t=e(this);t.val()===t.attr("placeholder")&&t.hasClass("placeholder")&&(t.data("placeholder-password")?t.hide().next().show().focus():t.val("").removeClass("placeholder"))}function i(){var i,a=e(this);if(""===a.val()||a.val()===a.attr("placeholder")){if(a.is(":password")){if(!a.data("placeholder-textinput")){try{i=a.clone().attr({type:"text"})}catch(r){i=e("<input>").attr(e.extend(t(a[0]),{type:"text"}))}i.removeAttr("name").data("placeholder-password",!0).bind("focus.placeholder",n),a.data("placeholder-textinput",i).before(i)}a=a.hide().prev().show()}a.addClass("placeholder").val(a.attr("placeholder"))}else a.removeClass("placeholder")}var a="placeholder"in document.createElement("input"),r="placeholder"in document.createElement("textarea");e.fn.placeholder=a&&r?function(){return this}:function(){return this.filter((a?"textarea":":input")+"[placeholder]").bind("focus.placeholder",n).bind("blur.placeholder",i).trigger("blur.placeholder").end()},e(function(){e("form").bind("submit.placeholder",function(){var t=e(".placeholder",this).each(n);setTimeout(function(){t.each(i)},10)})}),e(window).bind("unload.placeholder",function(){e(".placeholder").val("")})}(jQuery),function(e){if(!e.event.special.debouncedresize){var t,n,i=e.event;t=i.special.debouncedresize={setup:function(){e(this).on("resize",t.handler)},teardown:function(){e(this).off("resize",t.handler)},handler:function(e,a){var r=this,o=arguments,s=function(){e.type="debouncedresize",i.dispatch.apply(r,o)};n&&clearTimeout(n),a?s():n=setTimeout(s,t.threshold)},threshold:150}}}(jQuery);
!function(e,t,n){function i(e){return u.innerHTML='&shy;<style media="'+e+'"> #mq-test-1 { width: 42px; }</style>',s.insertBefore(d,c),o=42==u.offsetWidth,s.removeChild(d),o}function a(e){var t=i(e.media);if(e._listeners&&e.matches!=t){e.matches=t;for(var n=0,a=e._listeners.length;a>n;n++)e._listeners[n](e)}}function r(e,t,n){var i;return function(){var a=this,r=arguments,o=function(){i=null,n||e.apply(a,r)},s=n&&!i;clearTimeout(i),i=setTimeout(o,t),s&&e.apply(a,r)}}if(!t.matchMedia||e.userAgent.match(/(iPhone|iPod|iPad)/i)){var o,s=n.documentElement,c=s.firstElementChild||s.firstChild,d=n.createElement("body"),u=n.createElement("div");u.id="mq-test-1",u.style.cssText="position:absolute;top:-100em",d.style.background="none",d.appendChild(u),t.matchMedia=function(e){var o,s=[];return o={matches:i(e),media:e,_listeners:s,addListener:function(e){"function"==typeof e&&s.push(e)},removeListener:function(e){for(var t=0,n=s.length;n>t;t++)s[t]===e&&delete s[t]}},t.addEventListener&&t.addEventListener("resize",r(function(){a(o)},150),!1),n.addEventListener&&n.addEventListener("orientationchange",function(){a(o)},!1),o}}}(navigator,window,document),function(e,t,n){if(!e.onMediaQuery){var i={},a=t.matchMedia&&t.matchMedia("only all").matches;e(n).ready(function(){for(var t in i){{e(i[t]).trigger("init")}i[t].matches&&e(i[t]).trigger("valid")}}),e(t).bind("load",function(){for(var t in i)i[t].matches&&e(i[t]).trigger("valid")}),e.onMediaQuery=function(n,r){var o=n&&i[n];return o||(o=i[n]=t.matchMedia(n),o.supported=a,o.addListener(function(){e(o).trigger(o.matches?"valid":"invalid")})),e(o).bind(r),o}}}(jQuery,window,document),function(e,t,n){e.fn.responsiveMenu=function(i){function a(t,n){var i="";return e(t).children().each(function(){var t=e(this);t.children("a, span.separator").each(function(){var r=e(this),o=r.is("a")?r.attr("href"):"",s=r.is("span")?" disabled":"",c=n>1?new Array(n).join("-")+" ":"",d=r.find(".title").length?r.find(".title").text():r.text();i+='<option value="'+o+'" class="'+r.attr("class")+'"'+s+">"+c+d+"</option>",t.find("ul.level"+(n+1)).each(function(){i+=a(this,n+1)})})}),i}return i=e.extend({current:".current"},i),this.each(function(){var r=e(this),o=(i.target||this,e("<select/>")),s="";r.find("ul.menu").each(function(){s+=a(this,1)}),o.append(s).change(function(){n.location.href=o.val()}),o.find(i.current).attr("selected",!0),/iPhone|iPad|iPod/.test(t.platform)&&/OS [1-5]_[0-9_]* like Mac OS X/i.test(t.userAgent)&&t.userAgent.indexOf("AppleWebKit")>-1&&o.find(":disabled").remove(),r.after(o)})}}(jQuery,navigator,window),function(e,t){function n(){u.setAttribute("content",h),m=!0}function i(){u.setAttribute("content",f),m=!1}function a(t){d=t.accelerationIncludingGravity,o=Math.abs(d.x),s=Math.abs(d.y),c=Math.abs(d.z),e.orientation&&180!==e.orientation||!(o>7||(c>6&&8>s||8>c&&s>6)&&o>5)?m||n():m&&i()}if(/iPhone|iPad|iPod/.test(t.platform)&&/OS [1-5]_[0-9_]* like Mac OS X/i.test(t.userAgent)&&t.userAgent.indexOf("AppleWebKit")>-1){var r=e.document;if(r.querySelector){var o,s,c,d,u=r.querySelector("meta[name=viewport]"),l=u&&u.getAttribute("content"),f=l+",maximum-scale=1",h=l+",maximum-scale=10",m=!0;u&&(e.addEventListener("orientationchange",n,!1),e.addEventListener("devicemotion",a,!1))}}}(this,navigator);
!function(t){var e=function(){};t.extend(e.prototype,{name:"accordionMenu",options:{mode:"default",display:null,collapseall:!1,toggler:"span.level1.parent",content:"ul.level2",onaction:function(){}},initialize:function(e,a){var a=t.extend({},this.options,a),i=e.find(a.toggler);i.each(function(e){var i=t(this),o=i.next(a.content).wrap("<div>").parent();o.data("height",o.height()),i.hasClass("active")||e==a.display?o.show():o.hide().css("height",0),i.bind("click",function(){n(e)})});var n=function(e){var n=t(i.get(e)),o=t([]);switch(n.hasClass("active")&&(o=n,n=t([])),a.collapseall&&(o=i.filter(".active")),a.mode){case"slide":n.next().stop().show().animate({height:n.next().data("height")},400),o.next().stop().animate({height:0},400,function(){o.next().hide()}),setTimeout(function(){a.onaction.apply(this,[n,o])},401);break;default:n.next().show().css("height",n.next().data("height")),o.next().hide().css("height",0),a.onaction.apply(this,[n,o])}n.addClass("active").parent().addClass("active"),o.removeClass("active").parent().removeClass("active")}}}),t.fn[e.prototype.name]=function(){var a=arguments,i=a[0]?a[0]:null;return this.each(function(){var n=t(this);if(e.prototype[i]&&n.data(e.prototype.name)&&"initialize"!=i)n.data(e.prototype.name)[i].apply(n.data(e.prototype.name),Array.prototype.slice.call(a,1));else if(!i||t.isPlainObject(i)){var o=new e;e.prototype.initialize&&o.initialize.apply(o,t.merge([n],a)),n.data(e.prototype.name,o)}else t.error("Method "+i+" does not exist on jQuery."+e.name)})}}(jQuery);
!function(t){var i=function(){};t.extend(i.prototype,{name:"dropdownMenu",options:{mode:"default",itemSelector:"li",firstLevelSelector:"li.level1",dropdownSelector:"ul",duration:600,remainTime:800,remainClass:"remain",matchHeight:!0,transition:"easeOutExpo",withopacity:!0,centerDropdown:!1,reverseAnimation:!1,fixWidth:!1,fancy:null,boundary:t(window),boundarySelector:null},initialize:function(i,n){this.options=t.extend({},this.options,n);var o=this,e=null,a=!1;if(this.menu=i,this.dropdowns=[],this.options.withopacity=t.support.opacity?this.options.withopacity:!1,this.options.fixWidth){var s=5;this.menu.children().each(function(){s+=t(this).width()}),this.menu.css("width",s)}if(this.options.matchHeight&&this.matchHeight(),this.menu.find(this.options.firstLevelSelector).each(function(i){var n=t(this),s=n.find(o.options.dropdownSelector).css({overflow:"hidden"});if(s.length){s.css("overflow","hidden").show(),s.data("init-width",parseFloat(s.css("width"))),s.data("columns",s.find(".column").length),s.data("single-width",s.data("columns")>1?s.data("init-width")/s.data("columns"):s.data("init-width"));var d=t("<div>").css({overflow:"hidden"}).append("<div></div>"),r=d.find("div:first");s.children().appendTo(r),d.appendTo(s),o.dropdowns.push({dropdown:s,div:d,innerdiv:r}),s.hide()}n.bind({mouseenter:function(){if(a=!0,o.menu.trigger("menu:enter",[n,i]),e){if(e.index==i)return;e.item.removeClass(o.options.remainClass),e.div.hide().parent().hide()}if(!s.length)return active=null,void(e=null);s.parent().find("div").css({width:"",height:"","min-width":"","min-height":""}),s.removeClass("flip").removeClass("stack"),n.addClass(o.options.remainClass),d.stop().show(),s.show(),o.options.centerDropdown&&s.css("margin-left",-1*(parseFloat(s.data("init-width"))/2-n.width()/2));var h=s.css("width",s.data("init-width")).data("init-width");dpitem=o.options.boundarySelector?t(o.options.boundarySelector,d):d,boundary={top:0,left:0,width:o.options.boundary.width()},r.css({"min-width":h});try{t.extend(boundary,o.options.boundary.offset())}catch(p){}(dpitem.offset().left<boundary.left||dpitem.offset().left+h-boundary.left>boundary.width)&&(s.addClass("flip"),dpitem.offset().left<boundary.left&&(s.removeClass("flip").addClass("stack"),h=s.css("width",s.data("single-width")).data("single-width"),r.css({"min-width":h}),o.options.centerDropdown&&s.css({"margin-left":""})));var c=parseFloat(s.height());switch(o.options.mode){case"showhide":var l={width:h,height:c};d.css(l);break;case"diagonal":var u={width:0,height:0},l={width:h,height:c};o.options.withopacity&&(u.opacity=0,l.opacity=1),d.css(u).animate(l,o.options.duration,o.options.transition);break;case"height":var u={width:h,height:0},l={height:c};o.options.withopacity&&(u.opacity=0,l.opacity=1),d.css(u).animate(l,o.options.duration,o.options.transition);break;case"width":var u={width:0,height:c},l={width:h};o.options.withopacity&&(u.opacity=0,l.opacity=1),d.css(u).animate(l,o.options.duration,o.options.transition);break;case"slide":s.css({width:h,height:c}),d.css({width:h,height:c,"margin-top":-1*c}).animate({"margin-top":0},o.options.duration,o.options.transition);break;default:var u={width:h,height:c},l={};o.options.withopacity&&(u.opacity=0,l.opacity=1),d.css(u).animate(l,o.options.duration,o.options.transition)}e={item:n,div:d,index:i}},mouseleave:function(r){return r.srcElement&&t(r.srcElement).hasClass("module")?!1:(a=!1,s.length?void window.setTimeout(function(){if(!a&&"none"!=d.css("display")){o.menu.trigger("menu:leave",[n,i]);var t=function(){n.removeClass(o.options.remainClass),e=null,d.hide().parent().hide()};if(!o.options.reverseAnimation)return void t();switch(o.options.mode){case"showhide":t();break;case"diagonal":var s={width:0,height:0};o.options.withopacity&&(s.opacity=0),d.stop().animate(s,o.options.duration,o.options.transition,function(){t()});break;case"height":var s={height:0};o.options.withopacity&&(s.opacity=0),d.stop().animate(s,o.options.duration,o.options.transition,function(){t()});break;case"width":var s={width:0};o.options.withopacity&&(s.opacity=0),d.stop().animate(s,o.options.duration,o.options.transition,function(){t()});break;case"slide":d.stop().animate({"margin-top":-1*parseFloat(d.data("dpheight"))},o.options.duration,o.options.transition,function(){t()});break;default:var s={};o.options.withopacity&&(s.opacity=0),d.stop().animate(s,o.options.duration,o.options.transition,function(){t()})}}},o.options.remainTime):void o.menu.trigger("menu:leave"))}})}),this.options.fancy){var d=t.extend({mode:"move",transition:"easeOutExpo",duration:500,onEnter:null,onLeave:null},this.options.fancy),r=this.menu.append('<div class="fancy bg1"><div class="fancy-1"><div class="fancy-2"><div class="fancy-3"></div></div></div></div>').find(".fancy:first").hide(),h=this.menu.find(".active:first"),p=null,c=function(t,i){i&&p&&t.get(0)==p.get(0)||(r.stop().show().css("visibility","visible"),"move"==d.mode?h.length||i?r.animate({left:t.position().left+"px",width:t.width()+"px"},d.duration,d.transition):r.hide():i?r.css({opacity:h?0:1,left:t.position().left+"px",width:t.width()+"px"}).animate({opacity:1},d.duration):r.animate({opacity:0},d.duration),p=i?t:null)};this.menu.bind({"menu:enter":function(t,i,n){c(i,!0),d.onEnter&&d.onEnter(i,n,r)},"menu:leave":function(t,i,n){c(h,!1),d.onLeave&&d.onLeave(i,n,r)},"menu:fixfancy":function(){p&&r.stop().show().css({left:p.position().left+"px",width:p.width()+"px"})}}),h.length&&"move"==d.mode&&c(h,!0)}},matchHeight:function(){this.menu.find("li.level1.parent").each(function(){var i=0;t(this).find("ul.level2").each(function(){var n=t(this),o=n.parents(".dropdown:first").show();i=Math.max(n.height(),i),o.hide()}).css("min-height",i)})}}),t.fn[i.prototype.name]=function(){var n=arguments,o=n[0]?n[0]:null;return this.each(function(){var e=t(this);if(i.prototype[o]&&e.data(i.prototype.name)&&"initialize"!=o)e.data(i.prototype.name)[o].apply(e.data(i.prototype.name),Array.prototype.slice.call(n,1));else if(!o||t.isPlainObject(o)){var a=new i;i.prototype.initialize&&a.initialize.apply(a,t.merge([e],n)),e.data(i.prototype.name,a)}else t.error("Method "+o+" does not exist on jQuery."+i.name)})}}(jQuery);
(function($){$(document).ready(function(){$("#jp-left").height($(document).height());});$(document).ready(function(){var config=$('body').data('config')||{};$('.menu-sidebar').accordionMenu({mode:'slide'});$('#menu').dropdownMenu({mode:'slide',dropdownSelector:'div.dropdown'});$('a[href="#page"]').smoothScroller({duration:500});$('article[data-permalink]').socialButtons(config);var match=function(){$.matchWidth('grid-block','.grid-block','.grid-h').match();$.matchHeight('main','#maininner, #sidebar-a, #sidebar-b').match();$.matchHeight('top-a','#top-a .grid-h','.deepest').match();$.matchHeight('top-b','#top-b .grid-h','.deepest').match();$.matchHeight('top-c','#top-c .grid-h','.deepest').match();$.matchHeight('top-d','#top-d .grid-h','.deepest').match();$.matchHeight('top-e','#top-e .grid-h','.deepest').match();$.matchHeight('top-f','#top-f .grid-h','.deepest').match();$.matchHeight('bottom-a','#bottom-a .grid-h','.deepest').match();$.matchHeight('bottom-b','#bottom-b .grid-h','.deepest').match();$.matchHeight('bottom-c','#bottom-c .grid-h','.deepest').match();$.matchHeight('bottom-d','#bottom-d .grid-h','.deepest').match();$.matchHeight('bottom-e','#bottom-e .grid-h','.deepest').match();$.matchHeight('bottom-f','#bottom-f .grid-h','.deepest').match();$.matchHeight('innertop','#innertop .grid-h','.deepest').match();$.matchHeight('innerbottom','#innerbottom .grid-h','.deepest').match();};match();$(window).bind('load',match);});})(jQuery);