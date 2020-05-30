{"version":3,"sources":["script.js"],"names":["BX","namespace","Report","Analytics","Page","options","this","scope","menuScope","changeBoardButtons","querySelectorAll","contentContainer","querySelector","currentItem","currentSelectedContainer","pageTitle","document","getElementById","pageTitleWrap","pageControlsContainer","defaultBoardKey","defaultBoardTitle","currentPageTitle","top","title","currentAjaxRequest","init","prototype","addCustomEvent","sliderCloseHandler","bind","forEach","button","handleItemClick","loader","Loader","size","onpopstate","handlerOnPopState","event","preventDefault","currentTarget","activateButton","boardKey","dataset","reportBoardKey","cleanPageContent","showLoader","abort","VC","Core","ajaxPost","data","IFRAME","onrequeststart","xhr","onFullSuccess","result","hideLoader","isDisabled","disabledBoard","history","pushState","additionalParams","href","replaceState","changePageTitle","changePageControls","pageControlsParams","html","innerText","cleanNode","Dashboard","BoardRepository","destroyBoards","controlsContent","config","_successHandler","style","display","preview","create","attrs","src","height","width","appendChild","hide","item","classList","remove","add","state","undefined"],"mappings":"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","file":"script.map.js"}