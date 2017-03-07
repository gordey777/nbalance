(function ($) {$.fn.manageLinkProfile=function(method,params){

    var self = this;

    self.init = function(params){
        return this.each(function() {
        
            self.UI = $.extend({
            	steps: {
            		email: '#js-ow-sal-step2',
            		password: '#js-ow-sal-step3'
            	},
            	submit: ".js-ow-sal-submit",
            	error: ".js-ow-sal-error",
            	result: "#js-ow-result-message"

            },params.ui);
        
            self.options = $.extend({
            	
            },params.opts);

            self.userFields = {};

            self.checkAjax = null;


			BX.addCustomEvent('registerExternalSuccess', function(data){
				window.location = window.location;
			});
			BX.addCustomEvent('registerExternalFail', function(data){
				self.userFields = data;
				$('#js-social-link').addClass("show");
                $("body").toggleClass('oppened');

                if(data.EMAIL !== undefined && data.EMAIL != "")
                    $(".js-ow-sal-email").val(data.EMAIL);
			});

            $(self.UI.steps.email,self).find("form").validate({
                submitHandler: function(){
                    self._stepEmail();
                },
                errorPlacement: function(error, element) {
                    error.appendTo( element.siblings(".js-input-error") );
                    element.closest(".js-field-block").addClass("error");
                }
            });

            $(self.UI.steps.password,self).find("form").validate({
                submitHandler: function(){
                    self._stepPassword();
                },
                errorPlacement: function(error, element) {
                    error.appendTo( element.siblings(".js-input-error") );
                    element.closest(".js-field-block").addClass("error");
                }
            });
        });
    };

    self._stepEmail = function(){
    	var _self = $(self.UI.steps.email,self),
    		iEmail = $(".js-ow-sal-email",_self);

    	var data = {
    		ow_sal_check_email: 'Y',
            sessid: BX.bitrix_sessid()
    	};

    	data[iEmail.attr("name")] = iEmail.val();

    	var request_params = {
            data : data,
            before : function(){
                $(self.UI.error,_self).hide();
				iEmail.removeClass("error");
				$(self.UI.submit,_self).addClass("dotted");
            },
            onSuccess : function(result){
            	$(self.UI.submit,_self).removeClass("dotted");

            	if (result.status == 'error') {

					$(self.UI.error,_self).html("<span class=\"error\">"+result.message+"</span>").show();
					iEmail.addClass("error").closest(".js-field-block").addClass("error");

				} else {

					self.userFields["EMAIL"] = data[iEmail.attr("name")];

					_self.hide();
					$(self.UI.steps.password,self).show()
						.find(self.UI.result).html(result.message);

					self.userFields["EMAIL"] = data.ow_sal_email;
					if(result.status == "user_exists")
						$(self.UI.steps.password,self).find(".js-ow-sal-link-to-user").val("Y");
				}
            },
            onError : function(e,error){
            	$(self.UI.submit,_self).removeClass("dotted");
                $(self.UI.error,_self).html("Приносим свои извинения. Сервис временно недоступен").show();
            }
        };
        
        self._ajaxRequest(request_params);
    };

    self._stepPassword = function(){
    	var _self = $(self.UI.steps.password,self),
    		iPass = $(".js-ow-sal-password",_self);

    	var data = {
            ow_sal_link: 'Y',
            sessid: BX.bitrix_sessid(),
            ow_sal_link_to_user: _self.find(".js-ow-sal-link-to-user").val(),
            arFields: self.userFields
    	};

    	data[iPass.attr("name")] = iPass.val();

    	var request_params = {
            data : data,
            before : function(){
                $(self.UI.error,_self).hide();
				iPass.removeClass("error");
				$(self.UI.submit,_self).addClass("dotted");
            },
            onSuccess : function(result){
            	$(self.UI.submit,_self).removeClass("dotted");

            	if (result.status == 'error') {
					$(self.UI.error,_self).html("<span class=\"error\">"+result.message+"</span>").show();
					iPass.addClass("error").closest(".js-field-block").addClass("error");
				} else if(result.status == "refresh") {
					window.location = window.location;
				}
            },
            onError : function(e,error){
            	$(self.UI.submit,_self).removeClass("dotted");
                $(self.UI.error,_self).html("Приносим свои извинения. Сервис временно недоступен").show();
            }
        };
        
        self._ajaxRequest(request_params);
    };

    self._ajaxRequest = function(request_params){
        if(self.checkAjax != null)
            self.checkAjax.abort();

    	request_params.before();

    	self.checkAjax = $.ajax({
            data: request_params.data,
            url: '/bitrix/components/oneway/socserv.auth.linkprofile/ajax.php',
            type: "POST",
            dataType: "json",
            success: function(result){
            	request_params.onSuccess(result);
            },
            error: function(e,error){
            	request_params.onError(e,error);
            }
        });
    };

    if( typeof method == 'string' && method[0] != '_' && typeof self[method] == 'function' ) 
        return self[method].apply(this, Array.prototype.slice.call(arguments, 1));
    else if( typeof method === 'object' || ! method ) 
       return self.init.apply(this, arguments);

}}(jQuery));

