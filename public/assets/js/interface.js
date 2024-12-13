( function($) {
	'use strict';
  $(function(e) {
	  
  /*------------------------------------------------------------------
	  Testimonial Slider
	  -------------------------------------------------------------------*/
	  var owl = $("#testimonial-slider");
	  owl.owlCarousel({
		itemsCustom : [
		  [0, 1],
		  [450, 1],
		  [550, 1],
		  [767, 1],
		  [991, 2],
		],
		loop: true,
		nav : true,
		navigation : false,
		autoPlay  : 3000
	  });
	  
	  
  /*------------------------------------------------------------------
	  Testimonial Slider 2
	  -------------------------------------------------------------------*/
	  var owl = $("#testimonial-slider-2");
	  owl.owlCarousel({
		itemsCustom : [
		  [0, 1],
		  [450, 1],
		  [550, 2],
		  [767, 2],
		  [991, 3],
		],
		loop: true,
		nav : true,
		navigation : false,
		autoPlay  : 3000
	  });
	  
	  
	  
  /*------------------------------------------------------------------
	  Trending Slider
	  -------------------------------------------------------------------*/
	  var owl = $("#trending_slider");
	  owl.owlCarousel({
		itemsCustom : [
		  [0, 1],
		  [450, 1],
		  [550, 1],
		  [700, 3],
		],
		loop: true,
		nav : true,
		navigation : false,
		autoPlay  : 3000
	  });
  
  
  /*------------------------------------------------------------------
	  Popular Brands
	  -------------------------------------------------------------------*/
	  var owl = $("#popular_brands");
	  owl.owlCarousel({
		itemsCustom : [
		  [0, 2],
		  [450, 2],
		  [550, 2],
		  [700, 3],
		  [1024, 4],
		  [1200, 5],
		],
		loop: true,
		nav : true,
		navigation : false,
		autoPlay  : 3000
	  });
  
  
  /*------------------------------------------------------------------
	  Listing Image Slider { Style 1}
	  -------------------------------------------------------------------*/
	  var owl = $("#listing_img_slider");
	  owl.owlCarousel({
		itemsCustom : [
		  [0, 1],
		  [450, 1],
		  [700, 2],
		  [1024, 3],
		  [1200, 3],
		],
		loop: true,
		nav: true,
		navigation : true,
		pagination: false,
		autoPlay  : 3000
	  });
  
  
  
  /*------------------------------------------------------------------
	  Listing Image Slider { Style 2}
	  -------------------------------------------------------------------*/
	  $('.listing_images_slider').slick({
		slidesToShow: 1,
		slidesToScroll: 1,
		arrows: false,
		fade: true,
		asNavFor: '.listing_images_slider_nav'
	  });
	  $('.listing_images_slider_nav').slick({
		slidesToShow: 4,
		slidesToScroll: 1,
		asNavFor: '.listing_images_slider',
		dots: false,
		centerMode: true,
		focusOnSelect: true
	  });
  
  /*------------------------------------------------------------------
	  Price-Range
	  -------------------------------------------------------------------*/
	  $("#price_range").slider({});
	  $("#price_range1").slider({});
	  $("#price_range_advance").slider({});
  
  /*------------------------------------------------------------------
	  Search-button
	  -------------------------------------------------------------------*/
	  $("#search_toggle").click(function(){
		  $("#header-search-form").slideToggle();
	  });
	  
  
  
  /*------------------------------------------------------------------
	  Filter-Form
	  -------------------------------------------------------------------*/
	  $("#filter_toggle").click(function(){
		  $("#filter_form").slideToggle();
	  });
	  
	  
	  
  /*------------------------------------------------------------------
	  Other-info
	  -------------------------------------------------------------------*/
	  $("#other_info").click(function(){
		  $("#info_toggle").slideToggle();
	  });
	  
	  
	  
  /*------------------------------------------------------------------
	  back to top
	  -------------------------------------------------------------------*/
   var top = $('#back-top');
	  top .hide();
	  $(window).scroll(function () {
		  if ($(this).scrollTop() > 100) {
			  top .fadeIn();
		  } else {
			  top .fadeOut();
		  }
	  });
	  $('#back-top a').on('click', function(e) {
		  $('body,html').animate({
			  scrollTop: 0
		  }, 800);
		  return false;
	  });
	   
	  $(document).on( "click, mouseover", '.slider.slider-horizontal', function(e) {
		  $('.tooltip.tooltip-main.top').css( 'opacity', 1 );
	  });
  
  });
  })(jQuery);
  
  var Recaptha_site_key = '6Lelfz8pAAAAACqlLPmmHfFHdygkQrij8B_kuIlE';
  var html_element_id, html_element_2_id, html_element_3_id, html_element_4_id, html_element_5_id, html_element_6_id;
  var onloadCallback = function () {
	if($('#html_element').is(':empty')) {
	  html_element_id = grecaptcha.render('html_element', {
		'sitekey': Recaptha_site_key, 
		'theme': 'light'
	  });
	}
  
	if($('#schedule_html_element').is(':empty')) {
	  html_element_2_id = grecaptcha.render('schedule_html_element', {
		'sitekey': Recaptha_site_key, 
		'theme': 'light'
	  });
	}
  
	if($('#make_offer_element').is(':empty')) {
	  html_element_3_id = grecaptcha.render('make_offer_element', {
		'sitekey': Recaptha_site_key, 
		'theme': 'light'
	  });
	}
  
	if($('#email_frnd_element').is(':empty')) {
	  html_element_4_id = grecaptcha.render('email_frnd_element', {
		'sitekey': Recaptha_site_key, 
		'theme': 'light'
	  });
	}
  
	if($('#reqst_info_element').is(':empty')) {
	  html_element_5_id = grecaptcha.render('reqst_info_element', {
		'sitekey': Recaptha_site_key, 
		'theme': 'light'
	  });
	}
  
	if($('#mgs_dealer_element').is(':empty')) {
	  html_element_6_id = grecaptcha.render('mgs_dealer_element', {
		'sitekey': Recaptha_site_key, 
		'theme': 'light'
	  });
	}
  }
  
  $("#ContactUsForm").submit(function(e) {
	  e.preventDefault();
	  var name      = $("#full_name").val();
	  var address   = $("#email_address").val();
	  var phone_no  = $("#phone_number").val();
	  var mgs_cntnt = $("#contact_message").val();
	  var response  = grecaptcha.getResponse( html_element_id );
  
	  $('#full_name_error').empty();
	  $('#femail_addr_error').empty();
	  $('#phone_no_error').empty();
	  $('#contct_mgs_error').empty();
	  $('#recaptcha-field_error').fadeOut();
  
	  $('#full_name').removeClass('validation-error');
	  $('#email_address').removeClass('validation-error');
	  $('#phone_number').removeClass('validation-error');
	  $('#contact_message').removeClass('validation-error');
	  
	  if ( name == "" ) {
		  $('#full_name').addClass('validation-error');
		 $("#full_name_error").append('<span class="error" style="color:red;">Please enter your full name</span>');
	  } else if ( address == '' ) {
		  $('#email_address').addClass('validation-error');
	  $("#femail_addr_error").append('<span class="error" style="color:red;">Please enter your email</span>');
	  } else if ( phone_no == '' ) {
		  $('#phone_number').addClass('validation-error');
	  $("#phone_no_error").append('<span class="error" style="color:red;">Please enter your phone no.</span>');
	  } else if ( mgs_cntnt == '' ) {
		  $('#contact_message').addClass('validation-error');
		 $("#contct_mgs_error").append('<span class="error" style="color:red;">Please Enter message</span>');
	  } else if ( response.length == 0 ) {
		  var error = true;
	  $('#recaptcha-field_error').fadeIn(500);
		 e.preventDefault();
		 return false;
	  } else {
		  $("#error_message").html("").hide();
		  $.ajax({
			  type: "GET",
			  url: "contact.php",
			  data: "name="+name+"&address="+address+"&phone_no="+phone_no+"&mgs_cntnt="+mgs_cntnt,
			  success: function(data){
				  $('#success_message').show();
				  $('#success_message').fadeIn().html('Message sent successfully!');
				  document.getElementById("ContactUsForm").reset();
				  setTimeout(function() {
					  $('#success_message').fadeOut("slow");
				  }, 2000 );
			  }
		  });
	  }
  });
  
  $(document).on( "click", '#ScheduleTestDriveFormBtn', function(e) {
	  e.preventDefault();
  
	  var name      = $("#s_full_name").val();
	  var address   = $("#s_email_address").val();
	  var phone_no  = $("#s_phone_number").val();
	  var bst_time  = $("#s_best_time").val();
	  var bst_date  = $("#s_best_date").val();
	  var mgs_cntnt = $("#s_contact_message").val();
	  var FormName  = $("#ScheduleFormName").val();
	  var response  = grecaptcha.getResponse( html_element_2_id ); 
  
	  $('#s_full_name_error').empty();
	  $('#s_femail_addr_error').empty();
	  $('#s_phone_no_error').empty();
	  $('#s_best_time_error').empty();
	  $('#s_best_date_error').empty();
	  $('#s_contct_mgs_error').empty();
	  $('#s_recaptcha-field_error').fadeOut();
  
	  $('#s_full_name').removeClass('validation-error');
	  $('#s_email_address').removeClass('validation-error');
	  $('#s_phone_number').removeClass('validation-error');
	  $('#s_best_time').removeClass('validation-error');
	  $('#s_best_date').removeClass('validation-error');
	  $('#s_contact_message').removeClass('validation-error');
  
	  if ( name == "" ) {
		  $('#s_full_name').addClass('validation-error');
		 $("#s_full_name_error").append('<span class="error" style="color:red;">Please enter your full name</span>');
	  } else if ( address == '' ) {
		  $('#s_email_address').addClass('validation-error');
	  $("#s_femail_addr_error").append('<span class="error" style="color:red;">Please enter your email</span>');
	  } else if ( phone_no == '' ) {
		  $('#s_phone_number').addClass('validation-error');
	  $("#s_phone_no_error").append('<span class="error" style="color:red;">Please enter your phone no.</span>');
	  } else if ( bst_time == '' ) {
		  $('#s_best_time').addClass('validation-error');
		 $("#s_best_time_error").append('<span class="error" style="color:red;">Please select time</span>');
	  } else if ( bst_date == '' ) {
		  $('#s_best_date').addClass('validation-error');
		 $("#s_best_date_error").append('<span class="error" style="color:red;">Please select date</span>');
	  } else if ( mgs_cntnt == '' ) {
		  $('#s_contact_message').addClass('validation-error');
		 $("#s_contct_mgs_error").append('<span class="error" style="color:red;">Please Enter message</span>');
	  } else if ( response.length == 0 ) {
		  var error = true;
	  $('#s_recaptcha-field_error').fadeIn(500);
		 e.preventDefault(); 
		 return false;
	  }  else {
		  $("#sche_error_message").html("").hide();
		  $.ajax({
			  type: "GET",
			  url: "contact.php",
			  data: "name="+name+"&address="+address+"&phone_no="+phone_no+"&bst_time="+bst_time+"&bst_date="+bst_date+"&mgs_cntnt="+mgs_cntnt+"&FormName="+FormName,
			  success: function(data){
				  $('#sche_success_message').show();
				  $('#sche_success_message').fadeIn().html('Schedule message sent successfully!');
				  document.getElementById("ScheduleTestDriveForm").reset();
				  setTimeout(function() {
					  $('#sche_success_message').fadeOut("slow");
				  }, 2000 );
			  }
		  });
	  }
  
  });
  
  
  $("#MakeAnOfferForm").submit(function(e) {
	  e.preventDefault();
	  var name      = $("#MakeAnOfferForm #m_full_name").val();
	  var address   = $("#MakeAnOfferForm #m_email_address").val();
	  var phone_no  = $("#MakeAnOfferForm #m_phone_number").val();
	  var ofr_price = $("#MakeAnOfferForm #m_offer_price").val();
	  var mgs_cntnt = $("#MakeAnOfferForm #m_contact_message").val();
	  var FormName  = $("#MakeAnOfferForm #OfferFormName").val();
	  var response  = grecaptcha.getResponse( html_element_3_id );
  
	  $('#MakeAnOfferForm #m_full_name_error').empty();
	  $('#MakeAnOfferForm #m_femail_addr_error').empty();
	  $('#MakeAnOfferForm #m_phone_no_error').empty();
	  $('#MakeAnOfferForm #m_ofr_price_error').empty();
	  $('#MakeAnOfferForm #m_contct_mgs_error').empty();
	  $('#recaptcha-mao_error').fadeOut();
  
	  $('#MakeAnOfferForm #m_full_name').removeClass('validation-error');
	  $('#MakeAnOfferForm #m_email_address').removeClass('validation-error');
	  $('#MakeAnOfferForm #m_phone_number').removeClass('validation-error');
	  $('#MakeAnOfferForm #m_offer_price').removeClass('validation-error');
	  $('#MakeAnOfferForm #m_contact_message').removeClass('validation-error');
	  
	  if ( name == "" ) {
		  $('#MakeAnOfferForm #m_full_name').addClass('validation-error');
		 $("#MakeAnOfferForm #m_full_name_error").append('<span class="error" style="color:red;">Please enter your full name</span>');
	  } else if ( address == '' ) {
		  $('#MakeAnOfferForm #m_email_address').addClass('validation-error');
	  $("#MakeAnOfferForm #m_femail_addr_error").append('<span class="error" style="color:red;">Please enter your email</span>');
	  } else if ( phone_no == '' ) {
		  $('#MakeAnOfferForm #m_phone_number').addClass('validation-error');
	  $("#MakeAnOfferForm #m_phone_no_error").append('<span class="error" style="color:red;">Please enter your phone no.</span>');
	  } else if ( ofr_price == '' ) {
		  $('#MakeAnOfferForm #m_offer_price').addClass('validation-error');
		 $("#MakeAnOfferForm #m_ofr_price_error").append('<span class="error" style="color:red;">Please select time</span>');
	  } else if ( mgs_cntnt == '' ) {
		  $('#MakeAnOfferForm #m_contact_message').addClass('validation-error');
		 $("#MakeAnOfferForm #m_contct_mgs_error").append('<span class="error" style="color:red;">Please Enter message</span>');
	  } else if ( response.length == 0 ) {
		  var error = true;
	  $('#recaptcha-mao_error').fadeIn(500);
		 e.preventDefault();
		 return false;
	  } else {
		  $("#mao-error_message").html("").hide();
		  $.ajax({
			  type: "GET",
			  url: "contact.php",
			  data: "name="+name+"&address="+address+"&phone_no="+phone_no+"&ofr_price="+ofr_price+"&mgs_cntnt="+mgs_cntnt+"&FormName="+FormName,
			  success: function(data){
				  $('#mao-success_message').show();
				  $('#mao-success_message').fadeIn().html('Offer sent successfully!');
				  document.getElementById("MakeAnOfferForm").reset();
				  setTimeout(function() {
					  $('#mao-success_message').fadeOut("slow");
				  }, 2000 );
			  }
		  });
	  }
  });
  
  $("#EmailToAFriendForm").submit(function(e) {
	  e.preventDefault();
	  var name      = $("#EmailToAFriendForm #e_full_name").val();
	  var address   = $("#EmailToAFriendForm #e_email_address").val();
	  var frnd_eml  = $("#EmailToAFriendForm #e_frnd_email_address").val();
	  var mgs_cntnt = $("#EmailToAFriendForm #e_contact_message").val();
	  var FormName  = $("#EmailToAFriendForm #FriendEmailFormName").val();
	  var response  = grecaptcha.getResponse( html_element_4_id );
  
	  $('#EmailToAFriendForm #e_full_name_error').empty();
	  $('#EmailToAFriendForm #e_femail_addr_error').empty();
	  $('#EmailToAFriendForm #e_friend_addr_error').empty();
	  $('#EmailToAFriendForm #e_contct_mgs_error').empty();
	  $('#recaptcha-mao_error').fadeOut();
  
	  $('#EmailToAFriendForm #e_full_name').removeClass('validation-error');
	  $('#EmailToAFriendForm #e_email_address').removeClass('validation-error');
	  $('#EmailToAFriendForm #e_frnd_email_address').removeClass('validation-error');
	  $('#EmailToAFriendForm #e_contact_message').removeClass('validation-error');
  
	  if ( name == "" ) {
		  $('#EmailToAFriendForm #e_full_name').addClass('validation-error');
		 $("#EmailToAFriendForm #e_full_name_error").append('<span class="error" style="color:red;">Please enter your full name</span>');
	  } else if ( address == '' ) {
		  $('#EmailToAFriendForm #e_email_address').addClass('validation-error');
	  $("#EmailToAFriendForm #e_femail_addr_error").append('<span class="error" style="color:red;">Please enter your email</span>');
	  } else if ( frnd_eml == '' ) {
		  $('#EmailToAFriendForm #e_frnd_email_address').addClass('validation-error');
	  $("#EmailToAFriendForm #e_friend_addr_error").append('<span class="error" style="color:red;">Please enter friend\'s email</span>');
	  } else if ( mgs_cntnt == '' ) {
		  $('#EmailToAFriendForm #e_contact_message').addClass('validation-error');
		 $("#EmailToAFriendForm #e_contct_mgs_error").append('<span class="error" style="color:red;">Please Enter message</span>');
	  } else if ( response.length == 0 ) {
		  var error = true;
	  $('#recaptcha-mao_error').fadeIn(500);
		 e.preventDefault();
		 return false;
	  } else {
		  $("#etaf-error_message").html("").hide();
		  $.ajax({
			  type: "GET",
			  url: "contact.php",
			  data: "name="+name+"&address="+address+"&frnd_eml="+frnd_eml+"&mgs_cntnt="+mgs_cntnt+"&FormName="+FormName,
			  success: function(data){
				  $('#etaf-success_message').show();
				  $('#etaf-success_message').fadeIn().html('Offer sent successfully!');
				  document.getElementById("EmailToAFriendForm").reset();
				  setTimeout(function() {
					  $('#etaf-success_message').fadeOut("slow");
				  }, 2000 );
			  }
		  });
	  }
  });
  
  $("#RequestMoreInfoForm").submit(function(e) {
	  e.preventDefault();
	  var name      = $("#RequestMoreInfoForm #r_full_name").val();
	  var address   = $("#RequestMoreInfoForm #r_email_address").val();
	  var phone_no  = $("#RequestMoreInfoForm #r_phone_number").val();
	  var mgs_cntnt = $("#RequestMoreInfoForm #r_contact_message").val();
	  var response  = grecaptcha.getResponse( html_element_5_id );
  
	  $('#RequestMoreInfoForm #r_full_name_error').empty();
	  $('#RequestMoreInfoForm #r_femail_addr_error').empty();
	  $('#RequestMoreInfoForm #r_phone_no_error').empty();
	  $('#RequestMoreInfoForm #r_contct_mgs_error').empty();
	  $('#recaptcha-rminfo_error').fadeOut();
  
	  $('#RequestMoreInfoForm #r_full_name').removeClass('validation-error');
	  $('#RequestMoreInfoForm #r_email_address').removeClass('validation-error');
	  $('#RequestMoreInfoForm #r_phone_number').removeClass('validation-error');
	  $('#RequestMoreInfoForm #r_contact_message').removeClass('validation-error');
	  
	  if ( name == "" ) {
		  $('#RequestMoreInfoForm #r_full_name').addClass('validation-error');
		 $("#RequestMoreInfoForm #r_full_name_error").append('<span class="error" style="color:red;">Please enter your full name</span>');
	  } else if ( address == '' ) {
		  $('#RequestMoreInfoForm #r_email_address').addClass('validation-error');
	  $("#RequestMoreInfoForm #r_femail_addr_error").append('<span class="error" style="color:red;">Please enter your email</span>');
	  } else if ( phone_no == '' ) {
		  $('#RequestMoreInfoForm #r_phone_number').addClass('validation-error');
		 $("#RequestMoreInfoForm #r_phone_no_error").append('<span class="error" style="color:red;">Please enter friend email</span>');
	  } else if ( mgs_cntnt == '' ) {
		  $('#RequestMoreInfoForm #r_contact_message').addClass('validation-error');
		 $("#RequestMoreInfoForm #r_contct_mgs_error").append('<span class="error" style="color:red;">Please Enter message</span>');
	  } else if ( response.length == 0 ) {
		  var error = true;
	  $('#recaptcha-rminfo_error').fadeIn(500);
		 e.preventDefault();
		 return false;
	  } else {
		  $("#rminfo-error_message").html("").hide();
		  $.ajax({
			  type: "GET",
			  url: "contact.php",
			  data: "name="+name+"&address="+address+"&phone_no="+phone_no+"&mgs_cntnt="+mgs_cntnt,
			  success: function(data){
				  $('#rminfo-success_message').show();
				  $('#rminfo-success_message').fadeIn().html('Request sent successfully!');
				  document.getElementById("RequestMoreInfoForm").reset();
				  setTimeout(function() {
					  $('#rminfo-success_message').fadeOut("slow");
				  }, 2000 );
			  }
		  });
	  }
  });
  
  $("#NewsletterForm").submit(function(e) {
	  e.preventDefault();
	  var nls_email = $("#NewsletterForm #nl_email_address").val();
	  var FormName  = $("#NewsletterForm #FormName").val();
  
	  $('#NewsletterForm #nl_email_address_error').empty();
	  $('#NewsletterForm #nl_email_address').removeClass('validation-error');
	  
	  if ( nls_email == "" ) {
		  $('#NewsletterForm #nl_email_address').addClass('validation-error');
		 $("#NewsletterForm #nl_email_address_error").append('<span class="error" style="color:red;">Please enter your full email</span>');
	  } else {
		  $("#nls-error_message").html("").hide();
		  $.ajax({
			  type: "GET",
			  url: "contact.php",
			  data: "nls_email="+nls_email+"&FormName="+FormName,
			  success: function(data){
				  $('#nls-success_message').show();
				  $('#nls-success_message').fadeIn().html('Mail sent successfully!');
				  document.getElementById("NewsletterForm").reset();
				  setTimeout(function() {
					  $('#nls-success_message').fadeOut("slow");
				  }, 2000 );
			  }
		  });
	  }
  });