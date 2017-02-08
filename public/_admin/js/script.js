(function (Utils, undefined) {

	var token = $('meta[name="token"]').attr('content');
	var routes = {
		api: $('meta[name="api"]').attr('content')
	};

	$.ajaxSetup({ headers: { 'X-CSRF-Token' : token }});

	Utils.ajax = function(url,data,method){
		var url = url ? url : "";
		var data = data ? data : {};
		var method = method ? method : "GET";
        var dfd = $.Deferred();
		var promisse = {
			done:function(data){
                dfd.resolve(data);
            },
			fail:function (error) {
				dfd.reject("Erro na execução");
			},
			always:function (data) {
                dfd.notify(data);
			}
		};

		$.ajax({
			url:routes.api +'/'+ url,
			data:data,
			method:method,
			success:promisse.done,
			fail:promisse.fail,
			always:promisse.always
		});


        return dfd.promise();
	}

	Utils.sendmail = function () {
		$('[data-mail="send"]').click(send);
		$('[data-mail="test"]').click(test);

		function send($event){
            var button = $(this);
        }

		function test() {
            var button = $(this);
            var pass = false;
			button.text('Testando ....');

			Utils.ajax("mail/test",null,null).then(success,error);

			function success(data) {
				console.log(data);
				reseButton('Sucesso');
            }

            function error(data) {
                reseButton('Error');
                console.log(err);
            }

            setTimeout(function(){
                if(!pass){
                    reseButton('Erro ao enviar email');
                }
            },2500);

            function reseButton($msg) {
                button.text($msg);
                setTimeout(function (e) {
                    button.text('Testar');
                },3000)
            }
        }



    }


	Utils.kcfinder = function()
	{

	}

	Utils.dateElements = function()
	{
		$('[data-datepicker="datepicker"]').datepicker({
		    format: 'dd/mm/yyyy'
		});
	}
	Utils.iconPicker = function()
	{
			$('.iconpicker').selectpicker({
				  // style: 'btn-info',
				  // size: 4
			});

	}
	Utils.ckeditor = function()
	{
		if (typeof CKEDITOR !== "undefined") {
			 $('[data-ckeditor]').ckeditor({
				 filebrowserImageBrowseUrl: '/laravel-filemanager?type=Images',
				 filebrowserImageUploadUrl: '/laravel-filemanager/upload?type=Images&_token='+token,
				 filebrowserBrowseUrl: '/laravel-filemanager?type=Files',
				 filebrowserUploadUrl: '/laravel-filemanager/upload?type=Files&_token='+token
			 });
		}
	}
	Utils.datatable = function()
	{
		$('.datatable').dataTable();
	}

	Utils.multipleUploader = function()
	{
		var filesTosend = 0;
		console.log('Create Multple uploader');
		$('[data-fileupload-multiple]').fileupload({
	        dataType: 'json',
	        autoupload:false,
	        singleFileUploads:false,
	        maxNumberOfFiles: 5,
	        add: function (e, data) {

	        	console.log('Arquivo adicionado')
	        	console.log(data)
	        	console.log(data.files)
	        	var component = $(this).closest('[data-uploader-component]');
	        	var filesContainer = component.find('.files');
	        	var filetemplate = component.find('[data-file-template]').html();
	        	// $(filesContainer).html('');
	        	$.each(data.files, function(index, file) {
	        		filesTosend++;
	        		console.log(file);
	        		var template = $(filetemplate).clone();
	        		$(template).find('.titulo').text(file.name);
			    	if (data.files[index].type == 'image/png' || 
			    		data.files[index].type == 'image/jpeg'|| 
			    		data.files[index].type == 'image/jpg' || 
			    		data.files[index].type == 'image/gif') 
			    	{
		        		var reader = new FileReader();
					    reader.onload = function(e) {
		    				$(template).find('.preview').html('<img height="35" src="'+e.target.result+'"  />');
					    }
		        		reader.readAsDataURL(data.files[index]);
			    	}else{
			    		$(template).find('.preview ').html('<i class="fa fa-file grey"></i>');
			    	}
	        		$(filesContainer).append(template);
	        	});
	          	console.log(data.form)
                var form = $(this).closest('form');
                $(form).submit(function(e){
                	filesTosend ? e.preventDefault() : false;
                	filesTosend ? data.submit() : false;
                	
                });
	        },
	        done: function (e, data) {
	           	var result = data._response.result;
	           	console.log(data, result);

	           	result.redirect ? window.location.href=result.redirect :false;
	        	// filesTosend < 1 ? $(data.form).submit() :false;
	        }
	    })
	    .on('fileuploadprogressall', function (e, data) {
	        var progress = parseInt(data.loaded / data.total * 100, 10);
	        $('#progress .progress-bar').css(
	            'width',
	            progress + '%'
	        );
	    })
	}

	Utils.limitchars = function()
	{
		function limit(item){
			var value = $(item).val();
			console.log(value, value.length)
			value.length > 400 ? $(item).css('border-color','red').val(value.substr(0,400))
			:false;
		}
		$('textarea[name="descricao"]').bind('paste keypress keydown keyup change focus blur',function(){
			limit($(this))
		})
	

	}
	Utils.uploader = function()
	{
		$('[data-fileupload]').fileupload({
	        dataType: 'json',
	        add: function (e, data) {
	            data.context = $('<button/>').text('Upload')
                var form = $(this).closest('form');
                $(form).submit(function(e){
                	e.preventDefault();
                	data.submit();
                });
	        },
	        done: function (e, data) {
	           
	        	window.location.reload();
	        }
	    })
	    .on('fileuploadadd', function (e, data) {
	    	console.log(data)
	        data.context = $('<div/>').appendTo('#files');
	        $.each(data.files, function (index, file) {
	            var node = $('<p/>')
	                    .append($('<span/>').text(file.name));
	            if (!index) {
	                node
	                    .append('<br>')
	                   
	            }
	            node.appendTo(data.context);
	        });
	    })
	    .on('fileuploadprogressall', function (e, data) {
	        var progress = parseInt(data.loaded / data.total * 100, 10);
	        $('#progress .progress-bar').css(
	            'width',
	            progress + '%'
	        );
	    }).on('fileuploadfail', function (e, data) {
	        $.each(data.files, function (index) {
	            var error = $('<span class="text-danger"/>').text('File upload failed.');
	            $(data.context.children()[index])
	                .append('<br>')
	                .append(error);
	        });
	    });
	}

	Utils.delete = function()
	{
		function del(route,row)
		{
			$.ajax({
				url: route,
				type: 'DELETE',
				dataType: 'json'
			})
			.done(function() {
				row.css('color','red').hide('slow');
			})
			.fail(function() {
				alert('Erro ao deletar');
			})
			.always(function() {
				console.log("complete");
			});
			
		}
		$('body').on('click', '[data-del-item]', function(event) {
			event.preventDefault();
			confirm('Corfime para deletar este item') ?
			del($(this).data().url,$(this).closest('[data-item-row]')):false
		});


	}

	Utils.init = function()
	{
		$(document).ready(function() {
			Utils.kcfinder();
			Utils.ckeditor();
			Utils.uploader();
			Utils.multipleUploader();
			Utils.datatable();
			Utils.delete();
			Utils.limitchars();
			Utils.dateElements();
			Utils.iconPicker();
			Utils.sendmail();
		});
	}



	window.Utils = Utils;

	return{
		init:Utils.init()
	}

})(Utils = window.Utils || {}); 