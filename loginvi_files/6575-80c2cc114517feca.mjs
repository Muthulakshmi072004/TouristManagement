"use strict";(self.__LOADABLE_LOADED_CHUNKS__=self.__LOADABLE_LOADED_CHUNKS__||[]).push([[6575],{922719:(e,t,n)=>{n.d(t,{CC:()=>a,Ll:()=>o,XF:()=>r});let i=(e,t,n)=>({x:Math.floor(e*Math.cos(n)),y:Math.floor(t*Math.sin(n))}),a=(e,t)=>i(t/2,e/2,2*Math.random()*Math.PI),r=(e,t)=>Math.floor(Math.random()*(t-e+1))+e,o=e=>["@-webkit-keyframes","@keyframes"].map(t=>e.map(e=>t+" "+e).join("\n")).join("\n")},775089:(e,t,n)=>{n.r(t),n.d(t,{default:()=>C});var i=n(667294),a=n(883119),r=n(214877),o=n(103322);function s(e,t,n){var i;return(t="symbol"==typeof(i=function(e,t){if("object"!=typeof e||null===e)return e;var n=e[Symbol.toPrimitive];if(void 0!==n){var i=n.call(e,t||"default");if("object"!=typeof i)return i;throw TypeError("@@toPrimitive must return a primitive value.")}return("string"===t?String:Number)(e)}(t,"string"))?i:String(i))in e?Object.defineProperty(e,t,{value:n,enumerable:!0,configurable:!0,writable:!0}):e[t]=n,e}let l={};function m(e){let t=l[e];return t&&t.screenWidth===window.innerWidth||(l[e]={screenWidth:window.innerWidth}),l[e]}let u=e=>{let t=e.__id||e.id;return"string"==typeof t&&t||null};class d{constructor(){s(this,"idMap",new Map),s(this,"objMap",new WeakMap)}get(e){let t=u(e);return this.objMap.get(e)??(t?this.idMap.get(t):void 0)}has(e){let t=u(e);return this.objMap.has(e)??(!!t&&this.idMap.has(t))}set(e,t){let n=u(e);n&&this.idMap.set(n,t),this.objMap.set(e,t)}reset(){this.idMap=new Map,this.objMap=new WeakMap}}var p=n(547643),c=n(667677),h=n(213377),f=n(406893),b=n(340523),y=n(5859),g=n(554786),_=n(953565),x=n(84768),w=n(785893);function v({analyticsData:e,children:t,idx:n,isMeasuring:a,masonryV2ExpName:r,masonryV2ExpGroup:s}){let l=(0,g.ZP)(),{isAuthenticated:m}=(0,y.B)(),u=(0,x.MM)();return(0,i.useEffect)(()=>{if(e.current[n]){let{fetchTimestamp:t,measureTimestamp:i,hasRendered:o,pageCount:d}=e.current[n]??{},p={deviceType:l,experimentName:r,experimentGroup:s,handlerId:u,isAuthenticated:m,pageCount:d};a&&!i&&(e.current[n].measureTimestamp=Date.now(),(0,_.LY)("webapp.masonry.itemMeasureStart",Date.now()-t,{tags:p})),a||o||((0,_.LY)("webapp.masonry.itemRenderStart",Date.now()-i,{tags:p}),e.current[n].hasRendered=!0)}},[a]),(0,w.jsx)(o.Z,{name:"MasonryItem",children:t})}function C(e){let{align:t,cacheKey:n,id:s,isGridCentered:l=!0,items:u,layout:C,loadItems:M,masonryRef:$,renderItem:S,scrollContainerRef:j,virtualize:k=!0,_getColumnSpanConfig:E,useLoadingState:R}=e,I=(0,g.ZP)(),{isAuthenticated:W,isRTL:A}=(0,y.B)(),{logContextEvent:D}=(0,r.v)(),L=(0,b.F)(),N="desktop"===I,Z=(0,x.MM)(),F=(0,i.useRef)(u.map(()=>({fetchTimestamp:Date.now(),measureTimestamp:Date.now(),hasRendered:!1,pageCount:0}))),{_loadingStateItems:T,_renderLoadingStateItems:B}=(0,c.Z)({useLoadingState:R}),O=e.columnWidth??h.yF,P=e.gutterWidth??(N?h.oX:1),z=e.minCols??h.yc,G=e.serverRender??!!N,V="flexible"===C||"desktop"!==I,K=G?"serverRenderedFlexible":"flexible",X=(0,i.useRef)(0),Y=O+P,H=function(e){if(null==e)return;let t=m(e);return t.positionCache||(t.positionCache=new d),t.positionCache}(n),Q=function(e){if(null==e)return;let t=m(e);return t.measurementCache||(t.measurementCache=new d),t.measurementCache}(n),U=(0,i.useCallback)(()=>j?.current||window,[j]),q=(0,i.useRef)(!0),{anyEnabled:J}=L.checkExperiment("web_masonry_ssr_container_query"),ee=l&&q.current?"gridCentered":"",{className:et,styles:en}=function(e){let t=`m_${Object.keys(e).reduce((t,n)=>{let i=e[n];return null==i||"object"==typeof i||"function"==typeof i?t:"boolean"==typeof i?t+(i?"t":"f"):t+i},"").replace(/\:/g,"\\:")}`,{flexible:n,gutterWidth:i,isRTL:a,itemWidth:r,maxColumns:o,minColumns:s,items:l,_getColumnSpanConfig:m}=e,u=m?l.map((e,t)=>({index:t,columnSpanConfig:m(e)??1})).filter(e=>1!==e.columnSpanConfig):[],d=r+i,p=Array.from({length:o+1-s},(e,t)=>t+s).map(e=>{let l=e===s?0:e*d,m=e===o?null:(e+1)*d-1,{styles:p,numberOfVisibleItems:c}=u.reduce((a,o)=>{let{columnSpanConfig:s}=o,l=Math.min(function({columnCount:e,columnSpanConfig:t}){return"number"==typeof t?t:t[e<=2?"sm":e<=4?"md":e<=8?"lg":"xl"]??1}({columnCount:e,columnSpanConfig:s}),e),m=null!=o.index&&a.numberOfVisibleItems>=l+o.index,u=n?100/e*l:r*l+i*(l-1),{numberOfVisibleItems:d}=a;return m?d-=l-1:o.index<d&&(d+=1),{styles:a.styles.concat(function({className:e,index:t,columnSpanConfig:n,visible:i,width:a,flexible:r}){let o="number"==typeof n?n:btoa(JSON.stringify(n));return r?`
      .${e} .static[data-column-span="${o}"]:nth-child(${t+1}) {
        visibility: ${i?"visible":"hidden"} !important;
        position: ${i?"inherit":"absolute"} !important;
        width: ${a}% !important;
      }`:`
      .${e} .static[data-column-span="${o}"]:nth-child(${t+1}) {
        visibility: ${i?"visible":"hidden"} !important;
        position: ${i?"inherit":"absolute"} !important;
        width: ${a}px !important;
      }`}({className:t,index:o.index,columnSpanConfig:s,visible:m,width:u,flexible:n})),numberOfVisibleItems:d}},{styles:"",numberOfVisibleItems:e}),h=n?`
      .${t} .static {
        box-sizing: border-box;
        width: calc(100% / ${e}) !important;
      }
    `:`
      .${t} {
        max-width: ${e*d}px;
      }

      .${t} .static {
        width: ${r}px !important;
      }
    `;return{minWidth:l,maxWidth:m,styles:`
      .${t} .static:nth-child(-n+${c}) {
        position: static !important;
        visibility: visible !important;
        float: ${a?"right":"left"};
        display: block;
      }

      .${t} .static {
        padding: 0 ${i/2}px;
      }

      ${h}

      ${p}
    `}}),c=p.map(({minWidth:e,maxWidth:t,styles:n})=>`
    @container (min-width: ${e}px) ${t?`and (max-width: ${t}px)`:""} {
      ${n}
    }
  `),h=p.map(({minWidth:e,maxWidth:t,styles:n})=>`
    @media (min-width: ${e}px) ${t?`and (max-width: ${t}px)`:""} {
      ${n}
    }
  `),f=e.enableContainerQuery?`
    ${c.join("")}
    @supports not (container-type: inline-size) {
      ${h.join("")}
    }
  `:h.join("");return{className:t,styles:`
    .masonryContainer {
      container-type: inline-size;
    }

    .gridCentered {
      margin-left: auto;
      margin-right: auto;
    }

    .${t} .static {
      position: absolute !important;
      visibility: hidden !important;
    }

    ${f}
  `}}({gutterWidth:P,flexible:V,items:u,isRTL:A,itemWidth:O,maxColumns:e.maxColumns??Math.max(u.length,h.g5),minColumns:z,enableContainerQuery:J,_getColumnSpanConfig:E}),ei=`${ee} ${et}`.trim(),{anyEnabled:ea,expName:er,group:eo,isMeasureAllEnabled:es}=(0,p.Z)(),el=(0,i.useMemo)(()=>!Q||u.every(e=>!Q.has(e)),[]),em=eo&&el,eu=(0,i.useRef)(),ed=(0,i.useRef)(u.length),ep=(0,i.useRef)(0);(0,i.useEffect)(()=>{em&&u.forEach((e,t)=>{F.current[t]||(F.current[t]={fetchTimestamp:Date.now(),measureTimestamp:0,hasRendered:!1,pageCount:ep.current})}),ed.current=u.length,ep.current+=1},[u]),(0,i.useEffect)(()=>{q.current&&(q.current=!1)},[]),(0,i.useEffect)(()=>{let e=()=>X.current+=1;return em&&(eu.current=Date.now(),window.addEventListener("scroll",e)),()=>{if(em){let t=F.current;window.removeEventListener("scroll",e);let n=t.filter(e=>!!e.measureTimestamp).length,i=t.filter(e=>e.hasRendered).length,a=ed.current,r={deviceType:I,experimentName:er,experimentGroup:eo,handlerId:Z,isAuthenticated:W};(0,_.LY)("webapp.masonry.timeSpent",eu.current?Date.now()-eu.current:0,{tags:r}),(0,_.S0)("webapp.masonry.itemsFetched",a,{tags:r}),(0,_.S0)("webapp.masonry.itemsMeasured",n,{tags:r}),(0,_.S0)("webapp.masonry.itemsMeasuredPercentage",Math.floor(n/a*100),{tags:r}),(0,_.S0)("webapp.masonry.itemsRendered",i,{tags:r}),(0,_.S0)("webapp.masonry.itemsRenderedPercentage",Math.floor(i/a*100),{tags:r}),(0,_.S0)("webapp.masonry.scrollCount",X.current,{tags:r})}}},[]);let ec=(0,i.useCallback)(e=>em?(0,w.jsx)(v,{analyticsData:F,idx:e.itemIdx,isMeasuring:e.isMeasuring,masonryV2ExpGroup:eo,masonryV2ExpName:er,children:(0,w.jsx)(o.Z,{name:"MasonryItem",children:S(e)})}):(0,w.jsx)(o.Z,{name:"MasonryItem",children:S(e)}),[S]);return(0,w.jsx)("div",{className:"masonryContainer","data-test-id":"masonry-container",id:s,children:(0,w.jsxs)("div",{className:ei,children:[G&&q.current?(0,w.jsx)(f.Z,{"data-test-id":"masonry-ssr-styles",unsafeCSS:en}):null,(0,w.jsx)(a.xu,{"data-test-id":"max-width-container",marginBottom:0,marginEnd:"auto",marginStart:"auto",marginTop:0,maxWidth:e.maxColumns?Y*e.maxColumns:void 0,children:ea?(0,w.jsx)(a.GX,{ref:e=>{$&&($.current=e)},_getColumnSpanConfig:E,_logTwoColWhitespace:e=>{(0,_.S0)("webapp.masonry.twoColWhitespace",e,{sampleRate:1,tags:{columnWidth:O,minCols:z}}),D({event_type:14705,component:14468,aux_data:{whitespace_px:e}})},_measureAll:es,align:t,columnWidth:O,gutterWidth:P,items:u,layout:V?K:C??"basic",loadItems:M,measurementStore:Q,minCols:z,positionStore:H,renderItem:ec,scrollContainer:U,virtualBufferFactor:.3,virtualize:k}):(0,w.jsx)(a.Rk,{ref:e=>{$&&($.current=e)},_getColumnSpanConfig:E,_loadingStateItems:T,_logTwoColWhitespace:e=>{(0,_.S0)("webapp.masonry.twoColWhitespace",e,{sampleRate:1,tags:{columnWidth:O,minCols:z}}),D({event_type:14705,component:14468,aux_data:{whitespace_px:e}})},_renderLoadingStateItems:B,align:t,columnWidth:O,gutterWidth:P,items:u,layout:V?K:C??"basic",loadItems:M,measurementStore:Q,minCols:z,positionStore:H,renderItem:ec,scrollContainer:U,virtualBufferFactor:.3,virtualize:k})})]})})}},547643:(e,t,n)=>{n.d(t,{Z:()=>o});var i=n(340523),a=n(5859),r=n(84768);function o(e){let{isAuthenticated:t}=(0,a.B)(),{expName:n,anyEnabled:o,group:s}=function({experimentsClient:e,handlerId:t,isAuthenticated:n,skipActivation:i}){let{checkExperiment:a}=e,r=a(n?"web_masonry_v2_auth":"web_masonry_v2_unauth",{dangerouslySkipActivation:i});return r.group?{expName:n?"web_masonry_v2_auth":"web_masonry_v2_unauth",...r}:"www/[username]/[slug].js"!==t||n?"www/pin/[id].js"!==t||n?{expName:"",anyEnabled:!1,group:""}:{expName:"web_masonry_v2_unauth_pin",...a("web_masonry_v2_unauth_pin",{dangerouslySkipActivation:i})}:{expName:"web_masonry_v2_unauth_board",...a("web_masonry_v2_unauth_board",{dangerouslySkipActivation:i})}}({experimentsClient:(0,i.F)(),handlerId:(0,r.MM)(),isAuthenticated:t,skipActivation:e?.skipActivation??!1});return{expName:n,anyEnabled:o,group:s,isMeasureAllEnabled:"enabled_measure_all"===s||"enabled_measure_all_impression_fix"===s,isImpressionFixEnabled:"control_impression_fix"===s||"enabled_impression_fix"===s||"enabled_measure_all_impression_fix"===s}}},667677:(e,t,n)=>{n.d(t,{Z:()=>c});var i=n(667294),a=n(883119),r=n(876594),o=n(922719),s=n(406893),l=n(785893);let m=`shimmer {
  0% {
    background-position: -100vw 0;
  }

  100% {
    background-position: 100vw 0;
  }
}`,u={position:"relative",backgroundColor:`${r.BfK}`,background:`linear-gradient(
    to right,
    lightgrey 45%,
    #f5f5f5 50%,
    lightgrey 55%
  )`,content:"",animation:"shimmer 2s infinite linear",backgroundSize:"200vw 100%",backgroundAttachment:"fixed",width:"100%",borderRadius:"16px"},d=()=>200*Math.random()+200;function p({data:e}){let{height:t}=e;return(0,l.jsxs)(i.Fragment,{children:[(0,l.jsx)(s.Z,{unsafeCSS:(0,o.Ll)([m])}),(0,l.jsx)(a.xu,{dangerouslySetInlineStyle:{__style:u},"data-test-id":"skeleton-pin",children:(0,l.jsx)(a.xu,{height:t})})]})}function c({useLoadingState:e,arrayCount:t=4}){let n=(0,i.useMemo)(()=>[...Array(t)].map(()=>[{height:d()},{height:d()},{height:d()},{height:d()},{height:d()},{height:d()}]).flat(),[t]);return{_loadingStateItems:e?n:void 0,_renderLoadingStateItems:e?({data:e})=>(0,l.jsx)(p,{data:e}):void 0}}}}]);
//# sourceMappingURL=https://sm.pinimg.com/webapp/6575-80c2cc114517feca.mjs.map