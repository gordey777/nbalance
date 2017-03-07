
/*
* Добавляет товары в корзину (посылает аякс-запрос на сервер)
* */
(function ($) {$.add2basket=function(params,action,data){
	var self = this;

	self.options = $.extend({
		ajaxURL : '/ajax/add2basket.php',
		onSuccess: function(result){ },
		onError: function(result){ }
	}, params);

	self.init = function(){

		if(data.id = parseInt(data.id))
		{
			// add for retail rocket

			try { rrApi.addToBasket(data.id) } catch(e) {};

			if(!(data.quantity = parseInt(data.quantity)))
				data.quantity = 1;

			var options = {
				data: {
					quantity: data.quantity,
					id: data.id
				},
				url: self.options.ajaxURL
			};

			if(data.iblock_id > 0)
				options.data['iblock_id'] = data.iblock_id;
			if(data.offer_id > 0)
				options.data['offer_id'] = data.offer_id;
			if(data.basket_props !== undefined)
				options.data['basket_props'] = data.basket_props;


			switch(action)
			{
				case 'delete':
					options.data['delete'] = 'Y';
					break;
			}

			return self._ajaxRequest(options);
		}
	};

	self._ajaxRequest = function(options){
		if(self.checkAjax != null)
			self.checkAjax.abort();

		self.checkAjax =  $.ajax({
			data: options.data,
			url: options.url,
			type: "POST",
			dataType: "json",
			success: function(result){
				self.options.onSuccess.call(arguments,result);
				return result;
			},
			error: function(result){
				self.options.onError.call(arguments,result);
				return false;
			}
		});
	};

	self.init();

}}(jQuery));

/*
* Работает с кнопкой "Добавить в корзину"
* */
(function ($) {$.fn.owManageBasketButton=function(method,params){

	var self = this;

	self.init = function(params){
		return this.each(function() {

			self.UI = $.extend({
				button: "#js-product-basket-button",
				product: '#js-product-block',
				quantity: '#js-product-quantity',
				title: '.js-product-basket-title',
				text: {
					active: "в корзине",
					default: "в корзину"
				},
				class: {
					default: "",
					active: "active",
					ajax: "adding",
					not_available: "item__notavail"
				}
			},params.UI);

			self.options = $.extend({
				url: "/ajax/add2basket.php",
				refreshBasketLine : true,
				offers: false,
				detail: false,
				useQuantity: false,
				onGetResult: function(result,quantity){}
			},params.opts);


			self.checkAjax = null;

			self.on('click',self.UI.button,function(event){

				if($(this).hasClass(self.UI.class.active) || $(this).hasClass(self.UI.class.not_available))
					return true;

				event.preventDefault();

				self._add($(this));
			});
		});
	};

	self._add = function(obj){
		var product = obj.closest(self.UI.product),
				productID = parseInt(product.data("productId"));

		if(self.options.detail)
		{
			obj.removeClass(self.UI.class.default)
				.addClass(self.UI.class.active)
				.find(self.UI.title)
				.text(self.UI.text.active);
		}
		else
		{
			obj.addClass(self.UI.class.active)
				.find(self.UI.title)
				.text(self.UI.text.active);
		}

		var prodQuantity = 1;

		if(self.options.useQuantity)
			prodQuantity = parseInt(product.find(self.UI.quantity).val());

		var props = {
			id: productID,
			quantity: prodQuantity
		};

		if(product.data('offers'))
		{
			props['iblock_id'] = product.data('iblock');
			props['basket_props'] = product.data('basketProps');
		}

		self._ajaxRequest(props,"add");
	};

	self._ajaxRequest = function(data,action){
		var options = self.options;

		$(self.UI.button,self).addClass(self.UI.class.ajax);

		$.add2basket({
			onSuccess: function(result){
				$(self.UI.button,self).removeClass(self.UI.class.ajax);
				if(self.options.refreshBasketLine)
					//smallBasketUpdate();
				BX.onCustomEvent('OnBasketChange');

				options.onGetResult.call(arguments,data.id,result.quantity);
			},
			onError: function(result){
				$(self.UI.button,self).removeClass(self.UI.class.ajax);
			}
		},action,data);
	};

	if( typeof method == 'string' && method[0] != '_' && typeof self[method] == 'function' )
		return self[method].apply(this, Array.prototype.slice.call(arguments, 1));
	else if( typeof method === 'object' || ! method )
		return self.init.apply(this, arguments);

}}(jQuery));

var imgLoaded = function(type){
	$(document).trigger("imgLoaded",{type: type});
};

(function ($) {$.fn.owManageSKU=function(method,params){
	var self = this;

	self.init = function(params){

		return this.each(function() {

			self.UI = $.extend({
				offers : {
					block : '.js-product-offer-prop',
					item : '.js-product-offer-prop-item'
				},
				props : '.js-display-prop-',
				basket : {
					block: '#js-product-button-block',
					blockInShops: '#js-product-button-block_inshop',
					button : '#js-product-basket-button',
					quantity: '#js-product-quantity',
					cAdded: "active",
					//cActive: ""
					title: '.js-product-basket-title',
					cAjax: "adding",
					quickOrder: "#js-product-quick-order",
					quickReserved: "#js-quick-reserve"
				},
				quantity: {
					input: "#js-product-quantity",
					selector: '.js-quantity-selector',
					item: '.js-quantity-selector-item',
					display: '.js-quantity-display-value'
				},
				slider: {
					container: "#js-slider",
					wrapper: "#js-slider-wrapper"
				},
				thumb: '#js-product-thumbs',
				notAvailable: "#js-product-not-available"
			}, params.UI);

			self.settings = $.extend({
				checkedProps: {},
				checkedOffer: 0,
				inBasket: {},
				defaultMaxQuantity: 10
			}, params.opts);

			self.swiper = self._initGallerySlider();

			self.on('click',self.UI.offers.item,function(){
				//if(!$(this).hasClass("disabled"))
					self._changeProp($(this));
			});
			self.on('click',self.UI.quantity.item,function(){
				self._selectQuantity($(this));
			});
			self.on('click',self.UI.basket.quickOrder,function(e){
				self._buyOneClick($(this));
			});
			self.on('click',self.UI.basket.quickReserved,function(e){
				self._reserveClick($(this));
			});

			self.owSelectorsAction();

			$(window).resize(function(){
				self._itemSliderSetHeightByImage();
			});

			$(document).on("imgLoaded",function(e,params){
				if(params.type == "detail")
					self._detailLoaded();
				else
					self._previewLoaded();
			});
		});
	};

	/*
	 * Обновляет инфу об ску, вызывается один раз в начале работы скрипта
	 * @public
	 * */
	self.addData = function(params){
		return this.each(function(){
			self.settings["checkedProps"] = {};
			self.settings = $.extend(self.settings, params.opts);

			//self._initGallerySlider();

			if(self.settings['OFFERS'] === undefined || $.isEmptyObject(self.settings['OFFERS']))
				return;

			var offerId = self._getCheckedOffer();
			if(offerId > 0)
				self.settings.checkedOffer = offerId;

			if(self.settings.checkedOffer > 0)
			{
				self._displayAllValues();
				self._selectOfferByID(self.settings.checkedOffer);
			}

		});
	};

	/* СЛАЙДЕР */


	/*
	 * Инициализирует слайдер
	 * */
	self._initGallerySlider = function(){

		return new Swiper(self.UI.slider.container, {
			pagination: '.swiper-pagination',
			paginationClickable: true,
			nextButton: '.swiper-button-next',
			prevButton: '.swiper-button-prev',
			preloadImages: true
		});
	};

	/*
	 * Удаляет все слайды из слайдера, включает лоадер
	 * */
	self._destroyGallerySlider = function(){
		$("#js-slider-wrapper").height($(".item__slider").height()).animate({"opacity":0},200);
		$("#js-slider").addClass("swiper-loader");
		if(self.swiper.slides !== undefined && self.swiper.slides.length > 0)
			self.swiper.removeAllSlides();
	};

	/*
	 * Устанавливает высоту блока по высоте картинки
	 * Вызывается при ресайзе, а также при загрузке картинки
	 * */
	self._itemSliderSetHeightByImage = $.throttle(function(){
		var imageHeight = $(".item__slider .swiper-slide img").height();
		if(imageHeight > 0)
		{
			$(".item__slider .swiper-slide").height(imageHeight);
			$("#js-slider-wrapper").animate({"opacity":1},300).height(imageHeight);
			$("#js-slider").removeClass("swiper-loader");//.animate({"opacity":1},300);
		}
	},200);

	/*
	 * Устанавливает для блока со слайдером текущую высоту (чтобы не дергалось)
	 * */
	self._itemSliderSetAutoHeight = $.throttle(function(){
		$(".item__slider .swiper-slide").height( $(".item__slider .swiper-slide").height() );
	},200);

	/*
	 * Вызывается при загрузке детальной картинки onload
	 * */
	self._detailLoaded = function(){
		self._itemSliderSetHeightByImage();
	};

	/*
	 * Вызывается при загрузке анонсной картинки onload
	 * */
	self._previewLoaded = function(){
		setTimeout(function(){
			$(self.UI.props+'PREVIEW_PICTURE',self).removeAttr("style");
		},200);
	};

	/* РАБОТА С СКУ */

	/*
	 * Получает XML_ID выбранного цвета
	 * Для определения используется массив с выбранными свойствами self.settings.checkedProps
	 * */
	self._getSelectedColor = function(){
		var res = "";
		if(!$.isEmptyObject(self.settings.checkedProps))
		{
			$.each(self.settings.checkedProps,function(propId,valueId){
				if(self.settings["PROPS"][propId] !== undefined && self.settings["PROPS"][propId]["CODE"] == "COLOR_REF")
				{
					if(self.settings["PROPS"][propId]["VALUES"][valueId] !== undefined)
					{
						res = self.settings["PROPS"][propId]["VALUES"][valueId]["XML_ID"];
						return false;
					}
				}
			});
		}
		else if(self.settings.checkedOffer > 0)
		{
		}
		return res;
	};

	/*
	 * Определяет товар, в зависимости от наличия в урле параметра color_ref
	 * */
	self._getCheckedOffer = function(){
		var getParams = $.manageURL("getUrl"),
				newOfferId = 0;

		if(getParams["color_ref"] !== undefined)
		{
			var colorId = 0,
					colorPropId = 0;
			// проходим по всем свойствам и ищем совпадающее значение цвета
			$.each(self.settings.PROPS,function(propId,arProp){
				if(arProp["TYPE"] == "color") {
					$.each(arProp["VALUES"],function(valueId,arValue){
						if(arValue["COLOR"] == getParams["color_ref"])
						{
							//сохраняем и выходим из цикла
							colorPropId = propId;
							colorId = valueId;
							return false;
						}
					});
				}
			});

			if(colorId > 0 && colorPropId > 0)
			{
				//что-то нашли - определяем id предложения
				newOfferId = self._findFirstOfferByPropValue(colorPropId,colorId);
				//сохраняем xml_id выбранного цвета
				self.settings.selectedColor = getParams["color_ref"];
			}
		}
		return newOfferId;
	};

	/*
	 * по ид свойства и ид значения находим первое торговое предложение
	 * */
	self._findFirstOfferByPropValue = function(propId,propValueId){
		var newOfferId = 0,
				naOfferId = 0;
		$.each(self.settings["OFFERS"],function(offerId,arOffer){
			if(arOffer["TREE"]["PROP_" + propId] !== undefined && arOffer["TREE"]["PROP_" + propId] == propValueId)
			{
				if(arOffer["CAN_BUY"])
				{
					newOfferId = offerId;
					return false;
				}
				else if(naOfferId <= 0) {
					naOfferId = offerId;
				}
			}
		});
		if(!newOfferId)
			newOfferId = naOfferId;
		return newOfferId;
	};

	/*
	 * Вызывается при щелчке по любому значению свойств
	 * */
	self._changeProp = function(obj){
		var propBlock = obj.closest(self.UI.offers.block);
		var propID = propBlock.data('id');
		var valueID = parseInt(obj.data('id'));

		//добавляем id в массив с выбранными значениями свойств
		self.settings.checkedProps[propID] = valueID;

		self._selectProp(propID,valueID);

		self._findAvailablePropValues(propID);

		var noChangeImages = false;
		if(self.settings["PROPS"][propID]["CODE"] != "COLOR_REF")
			noChangeImages = true;
		else {
			self.settings.selectedColor = self.settings["PROPS"][propID]["VALUES"][valueID]["XML_ID"];
			self._updateUrl(propID,valueID);
		}

		self._selectOffer(noChangeImages);
	};

	//эта функция будет получать id последнего выбранного свойства и скрывать недоступные значения всех следующих свойств
	//допустим, выбрали красный цвет - останутся только размеры красных вещей
	self._findAvailablePropValues = function(propId){
		//id свойств, которые зависят от выбранного
		//(определяем по отсортированному списку, последние зависят от первых)
		var propsToDisplay = self._getPropsToDisplay(propId);

		if(propsToDisplay.length != 0)
		{
			//если свойства есть, то надо выбрать возможные значения из предложений
			$.each(propsToDisplay,function(index,dPropID){

				//текущее значение свойства (н-р цвет - красный)
				var tmpCheckedValue = self.settings.checkedProps[dPropID];

				//обнуляем
				self.settings.checkedProps[dPropID] = 0;

				//получаем все доступные значения для свойства (для покупки, активные)
				var valuesToDisplay = self._getPValuesToDisplay(dPropID);

				if($.inArray(tmpCheckedValue,valuesToDisplay) < 0)
				{
					//если текущее значение недоступно, берем первое в списке
					if(valuesToDisplay.length > 0)
						tmpCheckedValue = valuesToDisplay[0];//self.settings["PROPS"][dPropID]["VALUES"];//valuesToDisplay[0];
					else
					{
						//если ни одно не доступно для покупки, выбираем первое значение в целом для товара
						tmpCheckedValue = self.settings["PROPS"][dPropID]["VALUES_SORTED"][0];
					}
				}

				//выводим
				self._displayPropValues(dPropID,valuesToDisplay,tmpCheckedValue);
			});
		}
	};

	// выбираем предложение исходя из выбранных значений свойств
	self._selectOffer = function(noChangeImages){
		self.settings.checkedOffer = 0;

		$.each(self.settings['OFFERS'],function(offerID,arOffer){
			var boolFlag = true;
			$.each(self.settings.checkedProps,function(chPropID,chValueID){
				if(arOffer['TREE']['PROP_'+chPropID] !== chValueID)
					boolFlag = false;
			});

			//если уже выбранные свойства совпадают со значениями текущего предложения
			if(boolFlag)
			{
				self.settings.checkedOffer = offerID;
				self._changeProperties(offerID,noChangeImages);

				var maxQuantity = (arOffer["CAN_BUY"] ? arOffer["MAX_QUANTITY"] : 0);
				if(maxQuantity > 0) {
					self._setQuantityControl(maxQuantity);
				} else {
					self._setQuantityControl(1);
				}
				self._getShops();

				return false;
			}
		});

		if(self.settings.checkedOffer == 0)
		{
			self._changeProperties(0,noChangeImages);
			self._setQuantityControl(0);
			self._getShops();
		}
	};

	// выбираем предложение исходя из выбранных значений свойств
	self._selectOfferByID = function(offerID){
		if(self.settings['OFFERS'][offerID]['TREE'] !== undefined && !$.isEmptyObject(self.settings['OFFERS'][offerID]['TREE']))
		{
			$.each(self.settings['OFFERS'][offerID]['TREE'],function(propCode,propValue){
				propCode = propCode.replace('PROP_','');

				self.settings.checkedProps[propCode] = propValue;
				self._selectProp(propCode,propValue);

				self._findAvailablePropValues(propCode);
			});
			self.settings.selectedColor = self._getSelectedColor();
			self._selectOffer();
		}
		/*else if(self.settings.checkedOffer > 0)
		 {
		 console.dir("checkedOffer2");
		 self._changeProperties(self.settings.checkedOffer);
		 }*/
	};

	//получаем список id зависимых свойств, значения которых надо заново вывести
	self._getPropsToDisplay = function(lastCheckedPropID){
		var boolFlag = false,
				tmpPropIDs = [];

		$.each(self.settings['PROPS_SORTED'],function(index,value){
			if(boolFlag)
				tmpPropIDs.push(value);

			//тут мы определяем последнее выбранное свойство, все следующие пойдут в наш список
			if(value == lastCheckedPropID)
				boolFlag = true;
		});

		return tmpPropIDs;
	};

	// получаем список всех возможных значений свойства (propID)
	// для текущего товара при уже выбранных свойствах
	self._getPValuesToDisplay = function(propID){
		var tmpValuesToDisplay = [];

		$.each(self.settings['OFFERS'],function(offerID,arOffer){
			var boolFlag = true;

			if(arOffer["MAX_QUANTITY"] <= 0 && arOffer["CHECK_QUANTITY"])
				return true;

			$.each(self.settings.checkedProps,function(chPropID,chValueID){
				if(chValueID > 0 && arOffer['TREE']['PROP_'+chPropID] !== chValueID)
					boolFlag = false;
			});

			//если уже выбранные свойства совпадают со значениями текущего предложения
			if(boolFlag)
			{
				tmpValuesToDisplay.push(arOffer['TREE']['PROP_'+propID]);
			}
		});
		return tmpValuesToDisplay;
	};

	// нужно вывести актуальные значения свойств на страницу
	// propID - id свойства
	// valueIDs - возможные значения свойства при текущих условиях
	// valueSelectedID - id значения свойства, которое было выбрано ранее
	// после вывода активным будет оно, либо первое в списке
	self._displayPropValues = function(propID,valueIDs,valueSelectedID){
		var propBlock = $(self.UI.offers.block,self).filter('[data-id="'+propID+'"]');
		propBlock.html('');


		if(self.settings['PROPS'][propID]['VALUES_SORTED'] !== undefined && self.settings['PROPS'][propID]['VALUES_SORTED'].length > 0)
		{
			var propAllValues = self.settings['PROPS'][propID]['VALUES_SORTED'];

			var selectedID = false;
			//if($.inArray(valueSelectedID,valueIDs) > -1)
			selectedID = valueSelectedID;

			var i = 0;
			$.each(propAllValues,function(index,value){
				if($.inArray(value,valueIDs) > -1)
				{
					if(!selectedID && !i)
						selectedID = value;
					propBlock.append(self._getPropValueHtml(propID,value));
				}
				else{
					propBlock.append(self._getPropValueHtml(propID,value,true));
				}
				i++;
			});

			self._selectProp(propID,selectedID);
			self.settings.checkedProps[propID] = selectedID;
		}
	};

	self._displayAllValues = function(){
		if(self.settings['PROPS_SORTED'] == undefined || self.settings['PROPS_SORTED'].length <= 0)
			return false;

		$.each(self.settings['PROPS_SORTED'],function(i,propID){
			var propBlock = $(self.UI.offers.block,self).filter('[data-id="'+propID+'"]');
			propBlock.html('');

			if(self.settings['PROPS'][propID]['VALUES_SORTED'] !== undefined && self.settings['PROPS'][propID]['VALUES_SORTED'].length > 0)
			{
				var propAllValues = self.settings['PROPS'][propID]['VALUES_SORTED'];

				$.each(propAllValues,function(index,value){
					propBlock.append(self._getPropValueHtml(propID,value));
				});
			}
		});
	};

	// функция формирует html-код значения свойства
	// propID - id свойства
	// valueID - id значения свойства
	// boolSelected - будет ли это значение выбрано
	self._getPropValueHtml = function(propID,valueID,disabled){

		var tmpHtml = '',
				thisValue = self.settings['PROPS'][propID]['VALUES'][valueID],
				classList = "list__item js-product-offer-prop-item";

		if(disabled)
			classList += ' disabled';

		if(self.settings['PROPS'][propID]['TYPE'] == 'color')
		{
			if(thisValue['LIGHT'])
				classList += ' white';
			else
				classList += ' black';

			tmpHtml = '<li title="'+thisValue['NAME']+'" data-id="'+valueID+'" class="'+classList+'">';

			if(thisValue['PICTURE'] !== undefined)
				tmpHtml += '<a  style="background-image: url('+thisValue['PICTURE']+')"></a>';

			tmpHtml += '</li>';
		}
		else
		{
			var eu = ' - ',
					us = ' - ',
					foot = ' - ';

			if(self.settings.LIST_SIZES[thisValue['NAME']] !== undefined)
			{
				if(self.settings.LIST_SIZES[thisValue['NAME']]["EU"] != "")
					eu = self.settings.LIST_SIZES[thisValue['NAME']]["EU"];
				if(thisValue['NAME'] != "")
					us = thisValue['NAME'];
				if(self.settings.LIST_SIZES[thisValue['NAME']]["FOOT"] != "")
					foot = self.settings.LIST_SIZES[thisValue['NAME']]["FOOT"];
			}
			tmpHtml = '<li data-id="'+valueID+'" class="'+classList+'"  data-size-eu="'+eu+'" data-size-us="'+us+'" data-size-cm="'+foot+'" title="'+thisValue['DISPLAY']+'"><a><span>'+thisValue['DISPLAY']+'</span></a></li>';
		}
		return tmpHtml;
	};

	self._selectProp = function(propID,valueID){
		var propBlock = $(self.UI.offers.block,self).filter('[data-id="'+propID+'"]'),
				type = propBlock.data("type");

		propBlock
				.find(self.UI.offers.item).removeClass('active')
				.filter('[data-id="'+valueID+'"]').addClass('active')
				.trigger("mouseenter"); //заполняем блок js-selectors-total

		if(self.settings.PROPS[propID] !== undefined)
		{
			var propCode = self.settings.PROPS[propID]["CODE"];
			if(self.settings.PROPS[propID]["VALUES"][valueID] !== undefined)
			{
				var displayValue = self.settings.PROPS[propID]["VALUES"][valueID]["NAME"];
				if(self.settings.PROPS[propID]["VALUES"][valueID]["DISPLAY"])
					displayValue = self.settings.PROPS[propID]["VALUES"][valueID]["DISPLAY"];
				$(self.UI.props+propCode,self).text(displayValue);
			}
		}
	};

	/*
	 * Обновляет инфу о товаре на странице
	 * */
	self._changeProperties = function(offerID,noChangeImages){
		if(offerID > 0)
		{
			//цены

			self.data('productId',offerID).data('basketProps',self.settings['OFFERS'][offerID]['BASKET_PROPS']);

			var price = 0, discount = 0;
			if(self.settings['OFFERS'][offerID]['PRICE']['VALUE'] !== undefined)
			{
				//цена товара есть
				price = self.settings['OFFERS'][offerID]['PRICE']['PRINT_VALUE'];

				$(self.UI.props+'OLD_PRICE',self).html(price+' <span class="cur">q</span>');

				if(self.settings['OFFERS'][offerID]['PRICE']['DISCOUNT_VALUE'] !== undefined)
				{
					//скидка тоже есть (мю тоже обычной ценой)
					discount = self.settings['OFFERS'][offerID]['PRICE']['PRINT_DISCOUNT_VALUE'];
					$(self.UI.props+'PRICE',self).html(discount+' <span class="cur">q</span>');

					if(price != discount) {
						//если не равны - это действительно скидка
						$(".js-product-discount-block",self).show();
						$(".js-product-price-block",self).hide();
					}
					else {
						//равны - скидки на самом деле нет
						$(".js-product-discount-block",self).hide();
						$(".js-product-price-block",self).show();
					}
				}
			}


			/*if(!$.isEmptyObject(self.settings['OFFERS'][offerID]['DISPLAY_PROPERTIES']))
			 {
			 $.each(self.settings['OFFERS'][offerID]['DISPLAY_PROPERTIES'],function(index,prop){
			 if(prop['VALUE'] != '')
			 $(self.UI.props+index).text(prop['VALUE']);
			 });
			 }*/
		}


		self._manageBasketButton();


		// слайдер
		if(noChangeImages !== true && self.settings['SLIDER'][self.settings.selectedColor] !== undefined)
		{
			self._itemSliderSetAutoHeight();
			self._destroyGallerySlider();

			if(self.swiper.slides !== undefined)
			{
				setTimeout(function(){
					$.each(self.settings['SLIDER'][self.settings.selectedColor]["DETAIL"],function(index,image){

						var slideHtml = '<div class="swiper-slide" data-value="'+image["ID"]+'"><img id="'+image["ID"]+'" src="'+image['SRC']+'" alt="" ';
						if(!index)
							slideHtml += ' onload="imgLoaded(\'detail\')"';
						slideHtml += '></div>';
						self.swiper.appendSlide(slideHtml);
					});
				},200);

			}

			if(self.settings['SLIDER'][self.settings.selectedColor]["PREVIEW"] !== undefined)
			{
				var previewBlock = $(self.UI.props+'PREVIEW_PICTURE',self),
						previewWidth = previewBlock.outerWidth()-0.5;

				previewBlock.css({width:previewWidth,height:previewWidth})
						.html('<img src="'+self.settings['SLIDER'][self.settings.selectedColor]["PREVIEW"]+'" alt="" onload="imgLoaded(\'preview\')">');
			}
			else
				$(self.UI.props+'PREVIEW_PICTURE',self).html("");



		}

		//артикул
		if(self.settings['ARTNUMBER'][self.settings.selectedColor] !== undefined)
		{
			$(self.UI.props+'ARTNUMBER',self).text(self.settings['ARTNUMBER'][self.settings.selectedColor]);
		}
		else
			$(self.UI.props+'ARTNUMBER',self).text("");
	};

	/* РАБОТА С КОЛИЧЕСТВОМ */


	/*
	 * Обновляет значение количества в инпуте
	 * */
	self._selectQuantity = function(obj){
		var quantity = parseInt(obj.data("value"));

		quantity = self._checkQuantity(quantity);

		$(self.UI.quantity.input,self).val(quantity).change();
	};

	/*
	 * Проверяет, доступно ли такое количество товара для покупки
	 * */
	self._checkQuantity = function(quantity){
		quantity = parseInt(quantity);

		if(self.settings["OFFERS"][self.settings.checkedOffer] !== undefined)
		{
			var selectedOfferMaxQuantity = self.settings["OFFERS"][self.settings.checkedOffer]["MAX_QUANTITY"];

			if(quantity > selectedOfferMaxQuantity)
				quantity = selectedOfferMaxQuantity;
		}

		return quantity;
	};

	/*
	 * Помечает выбранное количество в попапе
	 * */
	self._visualSelectQuantity = function(quantity){
		quantity = self._checkQuantity(quantity);

		quantity = quantity ? quantity : 1;

		$(self.UI.quantity.input,self).val(quantity);
		$(self.UI.quantity.selector,self).find(self.UI.quantity.item)
				.filter('[data-value="'+quantity+'"]')
				.addClass("active");

		$(self.UI.quantity.display,self).text(quantity);
	};

	/*
	 * Обновляет селектор количества
	 * */
	self._setQuantityControl = function(maxQuantity){
		if(maxQuantity > self.settings.defaultMaxQuantity)
			maxQuantity = self.settings.defaultMaxQuantity;

		if(maxQuantity > 0)
		{

			var selectorHtml = "";

			for(var i = maxQuantity; i >= 1; i--)
			{
				selectorHtml += '<li class="list__item js-quantity-selector-item" data-value="'+i+'"><a>'+i+'</a></li>';
			}

			$(self.UI.quantity.selector,self).html(selectorHtml)
					.closest(".js-selectors-item").removeClass("js-disabled");

			self._visualSelectQuantity(1);
		}
		else {
			$(self.UI.quantity.selector,self).closest(".js-selectors-item").addClass("js-disabled");
			self._visualSelectQuantity(0);
		}

	};

	/* КОРЗИНА */


	/*
	 * Сохраняет содержимое корзины после добавления
	 * @public
	 * */
	self.refreshBasketContents = function(bContent,noUpdate){
		return this.each(function(){
			self.settings.inBasket = $.extend(self.settings.inBasket, bContent);

			if(!noUpdate)
				self._manageBasketButton();
		});
	};

	/*
	 * Обновляет статус корзины
	 * */
	self._manageBasketButton = function(){
		var offerID = self.settings.checkedOffer,
				basketButton = $(self.UI.basket.button,self);

		if(offerID > 0 && !self.settings["OFFERS"][offerID]["CAN_RESERVED"]) {
			$(self.UI.basket.blockInShops,self).hide();
		}

		if(offerID > 0 && self.settings["OFFERS"][offerID]["CAN_BUY"])
		{
			$(self.UI.notAvailable,self).hide();
			$(self.UI.basket.blockInShops,self).removeClass('single-block');
			$(self.UI.basket.block,self).css('display','inline-block');
			if(self.settings.inBasket[offerID] !== undefined && parseInt(self.settings.inBasket[offerID]) > 0)
			{
				if(!basketButton.hasClass(self.UI.basket.cAdded))
					basketButton.addClass(self.UI.basket.cAdded);
				//.removeClass(self.UI.basket.cActive);

				basketButton.find(self.UI.basket.title).html('в корзине');
			}
			else
			{
				if(basketButton.hasClass(self.UI.basket.cAdded))
					basketButton.removeClass(self.UI.basket.cAdded);
				//.addClass(self.UI.basket.cActive);

				$(self.UI.basket.quantity,self)
						.data('check',self.settings['OFFERS'][offerID]['CHECK_QUANTITY'])
						.data('max',self.settings['OFFERS'][offerID]['MAX_QUANTITY'])
						.val(1);

				basketButton.find(self.UI.basket.title).html('В корзину');
			}
		}
		else {
			//$(self.UI.notAvailable,self).text("Нет в наличии на складе").show();
			$(self.UI.basket.block,self).hide();


			if(self.settings["OFFERS"][offerID]["CAN_RESERVED"]) {
				$(self.UI.basket.blockInShops,self).addClass('single-block');
			}

			if($(window).width() < 768 ){
				$(self.UI.basket.blockInShops,self).css("display", "block");
			} else {
				$(self.UI.basket.blockInShops,self).css("display", "inline-block");
			}
		}

	};

	/* OTHER */

	/*
	* Получает инфу о наличии в розничных магазинах
	* */
	self._getShops = function () {
		var size = "",
			artnumber = "";

		if(self.settings.selectedColor !== undefined)
		{
			artnumber = self.settings["ARTNUMBER"][self.settings.selectedColor];
		}


		$.each(self.settings["PROPS"],function(propId,arProp){
			if(arProp["CODE"] == "SIZES_SHOES" || arProp["CODE"] == "SIZES_CLOTHES")
			{
				size = arProp["VALUES"][parseInt(self.settings["checkedProps"][propId])]["NAME"];
			}
		});

		$.post(
			"/ajax/order_reserved.php",
			{
				id: self.settings.checkedOffer,
				check: 'Y'
			}
		).done(function (count) {
			if(count > 0) {
				$('.js-quick-reserve').removeClass('disabled');
				$('.js-quick-reserve').find('.js-product-basket-title').text('Забронировать в магазине');
			} else {
				$('.js-quick-reserve').addClass('disabled');
				$('.js-quick-reserve').find('.js-product-basket-title').text('Нет товара в магазинах');
			}
		});


		$.post(
			"/ajax/get_shops.php",
			{
				artnumber : artnumber,
				size : size
			}
		).done(function(data) {
			if (data.html){
				$('#js-shops-container').html(data.html);
			}
		});
	}

	/**
	 * наименование кнопки и блока не много тугое, но менять лень
	 * @param obj
	 * @private
	 */
	self._reserveClick = function (obj) {
		ga('send', 'pageview', '/virtual/shop_check');
		var	productID = self.settings.checkedOffer,
			prodQuantity = $(self.UI.quantity.input,self).val();

		$.post("/ajax/order_reserved.php", {id: productID, quantity : 1})
		.done(function (data) {
			$("#js-order-reserved").html(data);
			$(obj).owOpenModal();
		});
	}

	/*
	* Быстрый заказ
	* */
	self._buyOneClick = function(obj)
	{
		obj.owOpenModal();
		var	productID = self.settings.checkedOffer,
			prodQuantity = $(self.UI.quantity.input,self).val(),
			openBlock = obj.data("block");

		try { rrApi.addToBasket(productID)} catch(e) {};

		//получаем верстку формы
		$.post(
			"/ajax/buy_one_click_form.php",
			{
				id : productID,
				quantity : prodQuantity
			}
		).done(function(data)
		{
			var oneClickBlock = $("#"+openBlock);
			if(oneClickBlock.length > 0)
			{
				oneClickBlock.html(data.html);

				hidePlaceholder();
				//oneClickBlock.owCloseModal();
				oneClickBlock.find("#phone").mask("+79999999999");

				$("#js-quick-order-container").formAjax({},{
					ajax_name: "ow_quick_form_ajax",
					url: "/ajax/buy_one_click.php",
					validate: true,
					dataType: "json",
					validateOptions: {
						ignore: ''
					},
					callbacks: {
						onSuccess: function(result){
							oneClickBlock.find(".js-popup-close").click();
							$("#js-quick-order-result-opener").owOpenModal();
						}
					}
				});
			}
		});
	};

	/*
	* Обновляет цвет в ссылке (пока только цвет)
	* */
	self._updateUrl = function(propId,valueId){
		if(self.settings["PROPS"][propId] !== undefined &&
			self.settings["PROPS"][propId]["VALUES"][valueId] !== undefined)
		{
			$.manageURL({color_ref: self.settings["PROPS"][propId]["VALUES"][valueId]["COLOR"]},true);
		}
	};


	if( typeof method == 'string' && method[0] != '_' && typeof self[method] == 'function' )
	{
		return self[method].apply(this, Array.prototype.slice.call(arguments, 1));
	}
	else if( typeof method === 'object' || ! method )
		return self.init.apply(this, arguments);



}}(jQuery));