require([ 'js/globaldata' ], function (GlobalData) {
	if (GlobalData.strings.certonaEnabled) {
		if (window.resx === undefined || window.resx === null) {
			window.resx = {
				appid: GlobalData.strings.certonaAppId,
				top1: GlobalData.strings.certonaTop1,
				top2: GlobalData.strings.certonaTop2,
				host: GlobalData.strings.certonaHost
			};

			if (GlobalData.strings.customerNo) {
				window.resx.customerid = GlobalData.strings.customerNo;
			}

			if (!$('script[src*="resxclsx.js"]').length) {
				var tag = document.createElement("script");
				tag.type = "text/javascript";
				tag.src = GlobalData.strings.certonaScript;
				document.getElementsByTagName('head')[0].appendChild(tag);
			}
		}
	}
});
