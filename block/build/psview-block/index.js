(()=>{"use strict";var e={n:l=>{var t=l&&l.__esModule?()=>l.default:()=>l;return e.d(t,{a:t}),t},d:(l,t)=>{for(var a in t)e.o(t,a)&&!e.o(l,a)&&Object.defineProperty(l,a,{enumerable:!0,get:t[a]})},o:(e,l)=>Object.prototype.hasOwnProperty.call(e,l)};const l=window.wp.blocks,t=window.React,a=window.wp.i18n,n=window.wp.serverSideRender;var i=e.n(n);const s=window.wp.components,o=window.wp.blockEditor,r=JSON.parse('{"UU":"plugin-stats-view/psview-block"}');(0,l.registerBlockType)(r.UU,{edit:function({attributes:e,setAttributes:l}){const n=(0,o.useBlockProps)();return(0,t.createElement)("div",{...n},(0,t.createElement)(i(),{block:"plugin-stats-view/psview-block",attributes:e}),(0,t.createElement)(s.TextControl,{label:(0,a.__)("Slug","plugin-stats-view"),value:e.slug,onChange:e=>l({slug:e})}),(0,t.createElement)(s.RadioControl,{label:(0,a.__)("View","plugin-stats-view"),selected:e.view,onChange:e=>l({view:e}),options:[{label:(0,a.__)("Normal display","plugin-stats-view"),value:"normal"},{label:(0,a.__)("Card display","plugin-stats-view"),value:"card"},{label:(0,a.__)("Simple display","plugin-stats-view"),value:"simple"}]}),(0,t.createElement)(o.InspectorControls,null,(0,t.createElement)(s.TextControl,{label:(0,a.__)("Slug","plugin-stats-view"),value:e.slug,onChange:e=>l({slug:e})}),(0,t.createElement)(s.RadioControl,{label:(0,a.__)("View","plugin-stats-view"),selected:e.view,onChange:e=>l({view:e}),options:[{label:(0,a.__)("Normal display","plugin-stats-view"),value:"normal"},{label:(0,a.__)("Card display","plugin-stats-view"),value:"card"},{label:(0,a.__)("Simple display","plugin-stats-view"),value:"simple"}]}),(0,t.createElement)(s.PanelBody,{title:(0,a.__)("Other settings","plugin-stats-view"),initialOpen:!1},(0,t.createElement)(s.TextControl,{label:(0,a.__)("Link","plugin-stats-view"),value:e.link,onChange:e=>l({link:e})}),(0,t.createElement)(s.ToggleControl,{label:(0,a.__)("View Description","plugin-stats-view"),checked:e.open,onChange:e=>l({open:e})}))))}})})();