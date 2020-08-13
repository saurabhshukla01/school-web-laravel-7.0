$(document).ready(function () {

	// Check Admin Password is Correct or not
	$("#current_pwd").keyup(function(){

		var current_pwd = $("#current_pwd").val();
		//alert(current_pwd);
		$.ajax({
			type:'post',
			url:'/admin/check-current-pwd',
			data:{current_pwd:current_pwd},
			success:function(resp){
				//alert(resp);
				if(resp=="false"){
					$("#chkCurrentPwd").html("<font color=red> Current Password Is Incorrect </font>");
				}else if(resp=="true"){
					$("#chkCurrentPwd").html("<font color=green> Current Password Is Correct </font>");
				}
			},error:function(){
				alert("Error");
			}
		});
	});


	// Update Status in Event Category Table Active or Inactive
	//$(".updateEventCategoryStatus").click(function(e){
	$(document).on("click",".updateEventCategoryStatus",function(e){
		//var status = $(this).text();
		var status = $(this).children("i").attr("status");
		//alert(status); return false;
		var eventCategory_id = $(this).attr("eventCategory_id");
		// alert(status +"&"+eventCategory_id);
		if(eventCategory_id){
			$.ajax({
				type:'post',
				url:'/admin/update-event-category-status',
				data:{status:status,eventCategory_id:eventCategory_id},
				success:function(resp){
					// alert(resp['status']);
					// alert(resp['eventCategory_id']);
					if(resp['status']==0){
						$("#eventCategory-"+eventCategory_id).html("<i class='fas fa-toggle-off' aria-hidden='true' title='Inactive' status='Inactive'></i>");
					}else if(resp['status']==1){
						$("#eventCategory-"+eventCategory_id).html("<i class='fas fa-toggle-on' aria-hidden='true' title='Active' status='Active'></i>");
					}
				},error:function(){
					alert("Error");
				}
			});
		}
	});


	// Update Status in Event Table Active or Inactive
	//$(".updateEventStatus").click(function(e){
	$(document).on("click",".updateEventStatus",function(e){
		//var status = $(this).text();
		var status = $(this).children("i").attr("status");
		//alert(status); return false;
		var event_id = $(this).attr("event_id");
		// alert(status +"&"+event_id);
		if(event_id){
			$.ajax({
				type:'post',
				url:'/admin/update-event-status',
				data:{status:status,event_id:event_id},
				success:function(resp){
					// alert(resp['status']);
					// alert(resp['event_id']);
					if(resp['status']==0){
						$("#event-"+event_id).html("<i class='fas fa-toggle-off' aria-hidden='true' title='Inactive' status='Inactive'></i>");
					}else if(resp['status']==1){
						$("#event-"+event_id).html("<i class='fas fa-toggle-on' aria-hidden='true' title='Active' status='Active'></i>");
					}
				},error:function(){
					alert("Error");
				}
			});
		}
	});


	// Update Status in News Category Table Active or Inactive
	//$(".updateNewsCategoryStatus").click(function(e){
	$(document).on("click",".updateNewsCategoryStatus",function(e){
		//var status = $(this).text();
		var status = $(this).children("i").attr("status");
		//alert(status); return false;
		var newsCategory_id = $(this).attr("newsCategory_id");
		//alert(status +"&"+newsCategory_id);
		if(newsCategory_id){
			$.ajax({
				type:'post',
				url:'/admin/update-news-category-status',
				data:{status:status,newsCategory_id:newsCategory_id},
				success:function(resp){
					// alert(resp['status']);
					// alert(resp['newsCategory_id']);
					if(resp['status']==0){
						$("#newsCategory-"+newsCategory_id).html("<i class='fas fa-toggle-off' aria-hidden='true' title='Inactive' status='Inactive'></i>");
					}else if(resp['status']==1){
						$("#newsCategory-"+newsCategory_id).html("<i class='fas fa-toggle-on' aria-hidden='true' title='Active' status='Active'></i>");
					}
				},error:function(){
					alert("Error");
				}
			});
		}
	});


	// Update Status in News Table Active or Inactive
	//$(".updateNewsStatus").click(function(e){
	$(document).on("click",".updateNewsStatus",function(e){
		//var status = $(this).text();
		var status = $(this).children("i").attr("status");
		//alert(status); return false;
		var news_id = $(this).attr("news_id");
		// alert(status +"&"+news_id);
		if(news_id){
			$.ajax({
				type:'post',
				url:'/admin/update-news-status',
				data:{status:status,news_id:news_id},
				success:function(resp){
					// alert(resp['status']);
					// alert(resp['news_id']);
					if(resp['status']==0){
						$("#news-"+news_id).html("<i class='fas fa-toggle-off' aria-hidden='true' title='Inactive' status='Inactive'></i>");
					}else if(resp['status']==1){
						$("#news-"+news_id).html("<i class='fas fa-toggle-on' aria-hidden='true' title='Active' status='Active'></i>");
					}
				},error:function(){
					alert("Error");
				}
			});
		}
	});


	// Update Status in Subject Category Table Active or Inactive
	//$(".updateSubjectCategoryStatus").click(function(e){
	$(document).on("click",".updateSubjectCategoryStatus",function(e){
		//var status = $(this).text();
		var status = $(this).children("i").attr("status");
		//alert(status); return false;
		var subjectCategory_id = $(this).attr("subjectCategory_id");
		// alert(status +"&"+subjectCategory_id);
		if(subjectCategory_id){
			$.ajax({
				type:'post',
				url:'/admin/update-subject-category-status',
				data:{status:status,subjectCategory_id:subjectCategory_id},
				success:function(resp){
					// alert(resp['status']);
					// alert(resp['subjectCategory_id']);
					if(resp['status']==0){
						$("#subjectCategory-"+subjectCategory_id).html("<i class='fas fa-toggle-off' aria-hidden='true' title='Inactive' status='Inactive'></i>");
					}else if(resp['status']==1){
						$("#subjectCategory-"+subjectCategory_id).html("<i class='fas fa-toggle-on' aria-hidden='true' title='Active' status='Active'></i>");
					}
				},error:function(){
					alert("Error");
				}
			});
		}
	});


	// Update Status in Staff Table Active or Inactive
	//$(".updateStaffStatus").click(function(e){
	$(document).on("click",".updateStaffStatus",function(e){
		//var status = $(this).text();
		var status = $(this).children("i").attr("status");
		//alert(status); return false;
		var staff_id = $(this).attr("staff_id");
		// alert(status +"&"+staff_id);
		if(staff_id){
			$.ajax({
				type:'post',
				url:'/admin/update-staff-status',
				data:{status:status,staff_id:staff_id},
				success:function(resp){
					// alert(resp['status']);
					// alert(resp['staff_id']);
					if(resp['status']==0){
						$("#staff-"+staff_id).html("<i class='fas fa-toggle-off' aria-hidden='true' title='Inactive' status='Inactive'></i>");
					}else if(resp['status']==1){
						$("#staff-"+staff_id).html("<i class='fas fa-toggle-on' aria-hidden='true' title='Active' status='Active'></i>");
					}
				},error:function(){
					alert("Error");
				}
			});
		}
	});


	// Update Status in School Category Table Active or Inactive
	//$(".updateSchoolCategoryStatus").click(function(e){
	$(document).on("click",".updateSchoolCategoryStatus",function(e){
		//var status = $(this).text();
		var status = $(this).children("i").attr("status");
		//alert(status); return false;
		var schoolCategory_id = $(this).attr("schoolCategory_id");
		// alert(status +"&"+schoolCategory_id);
		if(schoolCategory_id){
			$.ajax({
				type:'post',
				url:'/admin/update-school-category-status',
				data:{status:status,schoolCategory_id:schoolCategory_id},
				success:function(resp){
					// alert(resp['status']);
					// alert(resp['schoolCategory_id']);
					if(resp['status']==0){
						$("#schoolCategory-"+schoolCategory_id).html("<i class='fas fa-toggle-off' aria-hidden='true' title='Inactive' status='Inactive'></i>");
					}else if(resp['status']==1){
						$("#schoolCategory-"+schoolCategory_id).html("<i class='fas fa-toggle-on' aria-hidden='true' title='Active' status='Active'></i>");
					}
				},error:function(){
					alert("Error");
				}
			});
		}
	});


	// Update Status in Gallary Table Active or Inactive
	//$(".updateGallaryStatus").click(function(e){
	$(document).on("click",".updateGallaryStatus",function(e){
		//var status = $(this).text();
		var status = $(this).children("i").attr("status");
		//alert(status); return false;
		var gallary_id = $(this).attr("gallary_id");
		// alert(status +"&"+gallary_id);
		if(gallary_id){
			$.ajax({
				type:'post',
				url:'/admin/update-gallary-status',
				data:{status:status,gallary_id:gallary_id},
				success:function(resp){
					// alert(resp['status']);
					// alert(resp['gallary_id']);
					if(resp['status']==0){
						$("#gallary-"+gallary_id).html("<i class='fas fa-toggle-off' aria-hidden='true' title='Inactive' status='Inactive'></i>");
					}else if(resp['status']==1){
						$("#gallary-"+gallary_id).html("<i class='fas fa-toggle-on' aria-hidden='true' title='Active' status='Active'></i>");
					}
				},error:function(){
					alert("Error");
				}
			});
		}
	});




	/*
	// Confirm Deletion of Record
	$(".confirmDelete").click(function(){
		var name = $(this).attr("name");
		if(confirm("Are You Sure to delete this "+name+"?")){
			return true;
		}
		return false;
	}); 
	*/

	/*
	// Confirm Deletion with SweatAlert 
	$(".confirmDelete").click(function(){
		var record = $(this).attr("record");
		var recordid = $(this).attr("recordid");
		Swal.fire({
		  title: 'Are you sure?',
		  text: "You won't be able to revert this!",
		  icon: 'warning',
		  showCancelButton: true,
		  confirmButtonColor: '#3085d6',
		  cancelButtonColor: '#d33',
		  confirmButtonText: 'Yes, delete it!'
		}).then((result) => {
		  if (result.value) {
		    window.location.href="/admin/delete-"+record+"/"+recordid;
		  }
		});
	});
	*/

	// Confirm Deletion with SweatAlert 
	$(document).on("click",".confirmDelete",function(e){
	 	/* your code here after selected Any data and search as well as datasearching 
	 	after click any where call swaetalert box with help of jquery. */
	 	
	 	var record = $(this).attr("record");
		var recordid = $(this).attr("recordid");
		//alert(record+recordid);
		Swal.fire({
		  title: 'Are you sure?',
		  text: "You won't be able to revert this!",
		  icon: 'warning',
		  showCancelButton: true,
		  confirmButtonColor: '#3085d6',
		  cancelButtonColor: '#d33',
		  confirmButtonText: 'Yes, delete it!'
		}).then((result) => {
		  if (result.value) {
		    window.location.href="/admin/delete-"+record+"/"+recordid;
		  }
		});

	});


	//Logout working with SweatAlert  (response return , confirmLogout class)
	$(".confirmLogout").click(function(){
		var response = $(this).attr("response");
		Swal.fire({
		  title: 'Are you sure ?',
		  text: "You won't be able to revert this!",
		  icon: 'warning',
		  showCancelButton: true,
		  confirmButtonColor: '#3085d6',
		  cancelButtonColor: '#d33',
		  confirmButtonText: 'Yes, Logout !'
		}).then((result) => {
		  if (result.value) {
		    window.location.href="/admin/"+response;
		  }
		});
	});

	// Products Attributes Add/Remove Script

    var maxField = 10; //Input fields increment limitation
    var addButton = $('.add_button'); //Add button selector
    var wrapper = $('.field_wrapper'); //Input field wrapper
    var fieldHTML = '<div class="mt-2 ml-2"><input type="text" name="size[]" placeholder="Size" style="width:100px;" required="">&nbsp;<input type="text" name="sku[]" placeholder="SKU" style="width:100px; required=""">&nbsp;<input type="number" name="price[]" placeholder="Price" style="width:100px;" required="">&nbsp;<input type="number" name="stock[]" placeholder="Stock" style="width:100px;" required=""><a href="javascript:void(0);" class="remove_button">&nbsp;&nbsp;<span class="text-danger"><i class="fas fa-trash"></i></span></a></div>'; //New input field html 
    var x = 1; //Initial field counter is 1
    
    //Once add button is clicked
    $(addButton).click(function(){
        //Check maximum number of input fields
        if(x < maxField){ 
            x++; //Increment field counter
            $(wrapper).append(fieldHTML); //Add field html
        }
    });
    
    //Once remove button is clicked
    $(wrapper).on('click', '.remove_button', function(e){
        e.preventDefault();
        $(this).parent('div').remove(); //Remove field html
        x--; //Decrement field counter
    });


})
