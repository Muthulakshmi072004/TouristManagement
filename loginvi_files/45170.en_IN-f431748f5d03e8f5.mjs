"use strict";(self.__LOADABLE_LOADED_CHUNKS__=self.__LOADABLE_LOADED_CHUNKS__||[]).push([[45170],{762587:e=>{e.exports=function(e,t,r,i){t=t||"&",r=r||"=";var n={};if("string"!=typeof e||0===e.length)return n;var a=/\+/g;e=e.split(t);var o=1e3;i&&"number"==typeof i.maxKeys&&(o=i.maxKeys);var s=e.length;o>0&&s>o&&(s=o);for(var l=0;l<s;++l){var d,c,u,p,m=e[l].replace(a,"%20"),_=m.indexOf(r);(_>=0?(d=m.substr(0,_),c=m.substr(_+1)):(d=m,c=""),u=decodeURIComponent(d),p=decodeURIComponent(c),Object.prototype.hasOwnProperty.call(n,u))?Array.isArray(n[u])?n[u].push(p):n[u]=[n[u],p]:n[u]=p}return n}},712361:e=>{var t=function(e){switch(typeof e){case"string":return e;case"boolean":return e?"true":"false";case"number":return isFinite(e)?e:"";default:return""}};e.exports=function(e,r,i,n){return(r=r||"&",i=i||"=",null===e&&(e=void 0),"object"==typeof e)?Object.keys(e).map(function(n){var a=encodeURIComponent(t(n))+i;return Array.isArray(e[n])?e[n].map(function(e){return a+encodeURIComponent(t(e))}).join(r):a+encodeURIComponent(t(e[n]))}).join(r):n?encodeURIComponent(t(n))+i+encodeURIComponent(t(e)):""}},817673:(e,t,r)=>{t.decode=t.parse=r(762587),t.encode=t.stringify=r(712361)},763223:(e,t,r)=>{r.d(t,{Se:()=>k,iw:()=>P,gV:()=>f,G3:()=>I,Gj:()=>b,Jd:()=>g,$3:()=>y});var i=r(29156),n=r(658583),a=r(622541),o=r(372085),s=r(288240),l=r(569372),d=r(460270);let c=e=>"string"!=typeof e&&e?e.state:null;var u=r(337478),p=r(940910),m=r(998449),_=r(797258),h=r(467139);let g=()=>{window&&window.focus(),document.activeElement&&document.activeElement.blur()},f=({isOffsiteUrl:e,event:t})=>!e&&(t.metaKey||t.ctrlKey),y=({location:e,pinId:t,surface:r})=>!!r&&!h.ZF.includes(r)||e.pathname.includes(t),k=(e,t)=>{let r=Math.round(1e3*Math.random())+"",i=Math.round(1e3*Math.random())+"";n.t8((0,a.GS)(r),i);let o={token:`${r}-${i}`,url:e,...t&&!t.params?t.queryParams:t?.params&&{pin:t.params.pinId??void 0,isThirdPartyAd:t.params.isThirdPartyAd??void 0,csr:t.params.csrId&&!t.params.pinId?t.params.csrId:void 0,client_tracking_params:t.params.clientTrackingParams,aux_data:t.params.auxData?JSON.stringify(t.params.auxData):void 0}};return`/offsite/?${(0,u.Z)(o)}`},b=(e,t)=>{(0,i.Z)(k(e,t),!0,t?.features)},P=async({clientTrackingParams:e,href:t,isMounted:r,pinId:i,spamCheckCallback:n})=>{let a=await function(e){let t=(0,s.Z)(e),r=l.y.get("ApiResource",t);if(r)return r;let i=(0,o.Z)(e);return l.y.add("ApiResource",t,i),i}({url:"/v3/offsite/",data:{check_only:!0,client_tracking_params:e,pin_id:i,url:t}});if(!a.resource_response.error&&r){let{message:e,redirect_status:t,url:r}=a.resource_response.data||{};n({blocked:["blocked","suspicious","porn"].includes(t),message:e,redirectStatus:t,sanitized_url:r})}},I=({event:e,onHistoryChange:t,href:r,history:n,target:a})=>{let o=(0,d.Z)(r),s=c(r)??{},l=(0,p.Z)(o);l===_.Z.TRUSTED_DIFFERENT_ORIGIN||"blank"===a?(0,i.Z)(o,"blank"===a):n&&l===_.Z.SAME_ORIGIN&&(n.push((0,m.Z)({url:o}),{from:n.location,...s}),t&&t({event:e}))}},340370:(e,t,r)=>{r.d(t,{Z:()=>u});var i=r(667294),n=r(616550),a=r(763223),o=r(96761),s=r(460270),l=r(862249),d=r(557874),c=r(953565);function u(e){let{clientTrackingParams:t,externalData:r,href:u,onHistoryChange:p,target:m}=e,[_,h]=(0,i.useState)(null),[g,f]=(0,i.useState)(!1),y=(0,n.k6)(),k=(0,n.TH)(),b=(0,s.Z)(u),P=(0,l.Z)({url:b}),{showWarning:I}=(0,d.s)()??{},{pin:A,surface:S}=r||{},w=t||A?.trackingParams,v=(0,o.Z)();return(0,i.useEffect)(()=>(f(!0),()=>{f(!1)}),[]),(0,i.useEffect)(()=>{P&&A&&null===_&&g&&(!A.promoter||A.isDownstreamPromotion)&&(0,a.$3)({location:k,pinId:A.entityId,surface:S})&&(0,a.iw)({clientTrackingParams:w,isMounted:g,pinId:A.entityId,spamCheckCallback:e=>h(e),href:b})},[w,A,S,b,P,g,k,_]),({event:e})=>{if(!(0,a.gV)({isOffsiteUrl:P,event:e})){if(e.preventDefault(),!u||"string"==typeof u&&u.startsWith("#")){(0,c.nP)("link_navigation_empty_href",{sampleRate:1,tags:{route:k.pathname,href:u}});return}P||r?.dangerouslyForceOffsiteUrl?v({auxData:r?.auxData,clientTrackingParams:w,pin:r?.pin&&{attributionSourceId:r.pin.attributionSourceId,campaignId:r.pin.campaignId,isPromoted:r.pin.isPromoted,pinPromotionId:r.pin.pinPromotionId,isThirdPartyAd:r.pin.isThirdPartyAd,advertiserId:r.pin.advertiserId,destinationUrl:r.pin.destinationUrl,link:r.pin.link,domain:r.pin.domain},pinId:r?.pin?.entityId,queryParams:r?.queryParams,showWarning:I,spamCheck:_,url:b}):(0,a.G3)({event:e,href:u,history:y,onHistoryChange:p,target:"blank"===m?"blank":null})}}}},96761:(e,t,r)=>{r.d(t,{Z:()=>m});var i=r(453880),n=r(934378),a=r(263032),o=r(86785),s=r(214877),l=r(763223),d=r(171966);let c=(e,t,r)=>{let i=document.createElement("a");i.setAttribute("href",t),i.setAttribute("target","_blank"),i.setAttribute("rel","noopener nofollow noreferrer"),i.style.cursor="pointer",i.style.display="block",i.setAttribute(n.$N.ATTRIBUTION_SOURCE_ID,e),i.setAttribute(n.$N.ATTRIBUTE_DESTINATION,r),i.setAttribute(n.$N.ATTRIBUTE_ON,r),i.click()},u=(e,t,r,i,o,s,l)=>{let d=(0,a.m_)(e,[r,i,o],!0,s,l),c=document.createElement("a");c.setAttribute("href",t),c.setAttribute("target","_blank"),c.setAttribute("rel","noopener nofollow noreferrer"),c.style.cursor="pointer",c.style.display="block",c.setAttribute(n.NR.SOURCE,d),c.click()},p=()=>{let{logContextEvent:e}=(0,s.v)();return({attributionSourceId:t,auxData:r,campaignId:n,clientTrackingParams:a,href:s,isPromoted:d,pinId:p,pinPromotionId:m,isThirdPartyAd:_,advertiserId:h,destinationUrl:g,link:f,domain:y})=>{if(!d)return!1;let k=(0,i.Z)(),b=(0,l.Se)(s,{params:{pinId:p,csrId:null,clientTrackingParams:a,auxData:r,isThirdPartyAd:_}}),P=k?.userAgent.browserName??"";if((0,o.G6)(P)){let{group:r}=k?.experimentsClient.checkExperiment("m10n_event_conversion_measurement")??{},i=k?.userAgent.browserVersion?k.userAgent.browserVersion:"0.0",o=parseFloat(i.split(".")[0]+"."+i.split(".")[1]);if(t&&o>=14.1&&["enabled_safari"].includes(r))return c(t,b,s),e({event_type:101,clientTrackingParams:a,object_id_str:p||"",aux_data:{pin_id:p||"",click_measurement_ppid:m||"",click_measurement_campaign_id:n||"",is_pcm:!0,attribution_source_id:t,page_url:s}}),!0}else if((0,o.i7)(P)&&window.document.featurePolicy?.allowsFeature("attribution-reporting"))return u(t,b,g,f,y,n,h),e({event_type:101,clientTrackingParams:a,object_id_str:p||"",aux_data:{pin_id:p||"",click_measurement_ppid:m||"",click_measurement_campaign_id:n||"",is_arapi:!0,attribution_source_id:t,page_url:s}}),!0;return!1}},m=e=>{let t=p();return({auxData:r,clientTrackingParams:i,pin:n,pinId:a,queryParams:o,showWarning:s,spamCheck:c,url:u})=>{if("undefined"!=typeof window&&window.Windows){(0,d.Z)(u,{clientTrackingParams:i,pinId:a,hasPin:!!n,auxData:r,isThirdPartyAd:n?.isThirdPartyAd});return}if(!n&&!e?.isFromClickthroughLink){(0,l.Gj)(u,o?{queryParams:o}:{params:{pinId:a}});return}if(c?.blocked){s?.(c);return}n&&t({attributionSourceId:n.attributionSourceId,auxData:r,campaignId:n.campaignId?String(n.campaignId):null,clientTrackingParams:i,href:u,isPromoted:n.isPromoted,pinId:a,pinPromotionId:n.pinPromotionId?String(n.pinPromotionId):null,isThirdPartyAd:n.isThirdPartyAd,advertiserId:n.advertiserId?n.advertiserId:null,destinationUrl:n.destinationUrl,link:n.link,domain:n.domain})||(0,l.Gj)(u,{params:{clientTrackingParams:i,auxData:r,pinId:a,isThirdPartyAd:n?.isThirdPartyAd}})}}},460270:(e,t,r)=>{r.d(t,{Z:()=>i});let i=e=>e?"string"==typeof e?e:e.pathname?e.pathname:"":""},998449:(e,t,r)=>{r.d(t,{Z:()=>a});let i=(e,t)=>0===e.lastIndexOf(t,0);var n=r(885896);let a=({url:e})=>{let t=(0,n.Z)("/");return i(e,t)?e.substr(t.length-1):e}},171966:(e,t,r)=>{r.d(t,{Z:()=>a});var i=r(372085),n=r(763223);function a(e,t){let{auxData:r,clientTrackingParams:a,hasPin:o,pinId:s,isThirdPartyAd:l}=t||{},d={pin_id:s,check_only:!0,client_tracking_params:o?a:void 0,url:e,aux_data:JSON.stringify(r)};l&&(d.third_party_ad=s,delete d.pin_id),(0,i.Z)({url:"/v3/offsite/",data:d}).then(t=>{if(t&&t.resource_response&&!t.resource_response.error){let{resource_response:e}=t,{redirect_status:r,url:i}=e.data;if(!["blocked","suspicious","porn"].includes(r)){if(window.Windows.Foundation&&window.Windows.System&&window.Windows.System.Launcher&&window.Windows.System.Launcher.launchUriAsync){let e=new window.Windows.Foundation.Uri(i);window.Windows.System.Launcher.launchUriAsync(e)}return}}(0,n.Gj)(e,{params:o?{pinId:s,clientTrackingParams:a,auxData:r,isThirdPartyAd:l}:{pinId:s}})})}},467139:(e,t,r)=>{r.d(t,{UP:()=>s,Wv:()=>n,ZF:()=>i,zI:()=>a,zl:()=>o});let i=["AuthHomefeed","CloseupRelatedProducts","FollowingFeedGrid","RelatedPinGrid","RelatedProductsFeed","SearchItem"],n=["ArticleProductsStory","CloseupRelatedProducts","ProductPinsFeed","RelatedProductsFeed","ShoppingPackageItem","RelatedProductsFeed","UserProfilePinGrid","ShoppingGridShippedMetadataWithVisitButton"],a=[...n,"ShoppingGridShippedMetadata","ShoppingSquareGridDomain","ShoppingSquareGridDomainNoMetadata","ProductPinsFeed","ShoppingCatalogsProductsMetadata","ShoppingDynamicHeightGrid","ShoppingTool"],o=["ShoppingSquareGridDomain","ShoppingGridShippedMetadata","ShoppingSquareGridStorefront","ShoppingSquareGridStorefrontDomain","ShoppingGridShippedMetadataWithVisitButton"],s=["BaseBoardPinGrid"]},557874:(e,t,r)=>{r.d(t,{Z:()=>g,s:()=>h});var i=r(667294),n=r(342513),a=r(608575),o=r(883119),s=r(930837),l=r(140017),d=r(339001),c=r(785893);let u=()=>{let e=(0,l.ZP)(),{dismissWarning:t}=h()??{};return(0,c.jsx)(o.xu,{paddingX:3,children:(0,c.jsx)(o.zx,{color:"red",fullWidth:!0,onClick:t,text:e.bt("OK", "Okay", "Dismiss a modal stating that clicking through to a link has been blocked", undefined, true)})})},p=()=>{let e=(0,l.ZP)();return(0,c.jsx)(o.xv,{inline:!0,weight:"bold",children:(0,c.jsx)(o.rU,{display:"inlineBlock",href:"https://policy.pinterest.com/community-guidelines#section-spam",target:"blank",underline:"hover",children:e.bt("Learn more", "Learn more", "Link text leading to policy website", undefined, true)})})},m=({message:e,sanitized_url:t})=>{let r=(0,l.ZP)(),{dismissWarning:i}=h()??{};return(0,c.jsx)(s.ZP,{accessibilityModalLabel:r.bt("We have blocked this link", "We have blocked this link", "Modal label when clicking a spammy link", undefined, true),footer:(0,c.jsx)(u,{}),heading:r.bt("Heads up!", "Heads up!", "Modal heading when clicking through to a link has been blocked", undefined, true),onDismiss:i,children:(0,c.jsxs)(o.xu,{padding:6,children:[(0,c.jsx)(o.xv,{children:(0,d.nk)("{{ message }} {{ learnMore }}",{message:e,learnMore:(0,c.jsx)(p,{},"learnMoreLink")})}),(0,c.jsxs)(o.xu,{alignItems:"center",display:"flex",marginTop:4,children:[(0,c.jsx)(o.xu,{marginEnd:3,children:(0,c.jsx)(o.JO,{accessibilityLabel:r.bt("Blocked link address", "Blocked link address", "Icon label preceding a block url", undefined, true),color:"error",icon:"report",inline:!0,size:24})}),(0,c.jsx)(o.xv,{inline:!0,lineClamp:1,weight:"bold",children:a.parse(t).hostname})]})]})})},{Provider:_,useMaybeHook:h}=(0,n.Z)("SpammyClickthrough");function g({children:e}){let[t,r]=(0,i.useState)(null),n=(0,i.useCallback)(()=>{r(null)},[r]),a=(0,i.useCallback)(e=>{r(e)},[r]),o=(0,i.useMemo)(()=>({dismissWarning:n,showWarning:a}),[n,a]);return(0,c.jsxs)(_,{value:o,children:[t&&(0,c.jsx)(m,{...t}),e]})}}}]);
//# sourceMappingURL=https://sm.pinimg.com/webapp/45170.en_IN-f431748f5d03e8f5.mjs.map