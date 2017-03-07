function textComment() {
    $('.js-reviews-item').each(function () {
        var H = $(this).find('.js-reviews-text').height();
        var heightText = $(this).find('.js-reviews-text-inner').height();

        if (heightText > H) {
            $(this).addClass('overflow');
            $(this).find('.js-reviews-more').show().on('click', function () {
                var heightTextAfterClick = $(this).siblings('.js-reviews-text').height();
                $(this).children().toggle();
                $(this).closest('.js-reviews-item').toggleClass('overflow');
                if (heightTextAfterClick == H) {
                    $(this).siblings('.js-reviews-text').height(heightText);
                } else {
                    $(this).siblings('.js-reviews-text').height(H);
                }
            });
        }
    });
}

(function ($) {

    $.fn.reviewsPageNav=function(method,params){

        var self = this;

        self.init = function(params){
            return this.each(function() {

                self.UI = $.extend({
                    showNext: "#js-reviews-show-more",
                    wrapper: ".js-reviews-wrapper",
                    reviewTemplate: $("#reviewTemplate").html()

                },params.UI);

                self.options = $.extend(true,{
                    curPage: 1, //текущая страница
                    maxPage: 1, //максимальная страница
                    pageSize: 10, //кол-во элементов на странице
                    firstPageSize: 3, //кол-во элементов на первой странице
                    itemsCount: 1, //всего элементов
                    items: [],
                    callbacks: {
                        onPageChange: function(curPage,pageSize){} //обработчик после изменения номера страницы
                    }
                },params.opts);

                self._updateOptions();
                textComment();

                //обработчик клика по следующей странице
                $(self.UI.showNext,self).click(function(e){
                    e.preventDefault();
                    self._next();
                });
            });
        };

        self._getPagesLeftCount = function(){
            return (self.options.itemsCount - self.options.firstPageSize - self.options.pageSize * (self.options.curPage - 1));
        };

        /**
         * Переход на следующую страницу
         * @param {DOM} pageObj - DOM-элемент нажатой кнопки
         */
        self._next = function(pageObj){
            if(self.options.maxPage > self.options.curPage)
            {
                self.options.curPage++;

                self._displayItems();
                self.options.callbacks.onPageChange(self.options.curPage,self.options.pageSize);
            }

            if(self.options.maxPage == self.options.curPage)
            {
                $(self.UI.showNext,self).fadeOut(function(){
                    $(this).remove();
                });
            }
            else {
                if(self.options.maxPage - self.options.curPage == 1){
                    self._changeButtonText();
                }
            }
        };

        self._changeButtonText = function(){
            var itemsLeft = self._getPagesLeftCount();
            if(itemsLeft > self.options.pageSize)
                itemsLeft = self.options.pageSize;
            $(self.UI.showNext,self).text("Показать еще "+itemsLeft+pluralName(itemsLeft,[" отзыв"," отзыва"," отзывов"]));
        };

        /**
         * Пересчет значений (н-р, максимальной страницы после изменения количества элементов на странице)
         */
        self._updateOptions = function(){
            self.options.itemsCount = self.options.items.length;
            self.options.maxPage = Math.ceil((self.options.itemsCount - self.options.firstPageSize) / self.options.pageSize) + 1;

            if(self.options.curPage > self.options.maxPage)
                self.options.curPage = self.options.maxPage;

            self._changeButtonText();
        };

        /**
         * Вывод элементов
         */
        self._displayItems = function(){
            var content = $(self.UI.wrapper,self),
                tmpProducts = {
                    ITEMS : []
                },
                posPageStart = (self.options.curPage - 2) * self.options.pageSize + self.options.firstPageSize,
                posPageEnd =  (self.options.curPage - 1) * self.options.pageSize + self.options.firstPageSize - 1;
            if(posPageEnd >= self.options.items.length)
                posPageEnd = self.options.items.length - 1;

            for (var i = posPageStart; i <= posPageEnd; i++) {
                if(self.options.items[i] !== undefined)
                {
                    self.options.items[i]["displayRating"] = self.options.stars.active.repeat(self.options.items[i]["rating"]) + self.options.stars.default.repeat(5 -self.options.items[i]["rating"]);
                }
                    tmpProducts.ITEMS.push(self.options.items[i]);
            };

            if(tmpProducts.ITEMS.length > 0)
            {
                content.append(Mustache.render(self.UI.reviewTemplate, tmpProducts));
                textComment();
            }
        };


        if( typeof method == 'string' && method[0] != '_' && typeof self[method] == 'function' )
            return self[method].apply(this, Array.prototype.slice.call(arguments, 1));
        else if( typeof method === 'object' || ! method )
            return self.init.apply(this, arguments);

    };

}(jQuery));


function reviewsUpdateBlock()
{


    $.ajax({
        data: {"js_reviews_update_ajax" : "Y"},
        type: "POST",
        url: window.location.pathname,
        dataType: "html",
        success: function(result){
            $("#js-product-reviews-block").html(result);
        },
        error: function(e,error){

        }
    });
}