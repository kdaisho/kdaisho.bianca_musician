var bigsrc = new Array();
	bigsrc[2] = '<iframe width="100%" height="450" scrolling="no" frameborder="no" src="https://w.soundcloud.com/player/?url=https%3A//api.soundcloud.com/tracks/184079152&amp;auto_play=false&amp;hide_related=false&amp;show_comments=true&amp;show_user=true&amp;show_reposts=false&amp;visual=true"></iframe>';
	bigsrc[1] = '<iframe width="100%" height="450" scrolling="no" frameborder="no" src="https://w.soundcloud.com/player/?url=https%3A//api.soundcloud.com/tracks/184045112&amp;auto_play=false&amp;hide_related=false&amp;show_comments=true&amp;show_user=true&amp;show_reposts=false&amp;visual=true"></iframe>';
	bigsrc[0] = '<iframe width="100%" height="450" scrolling="no" frameborder="no" src="https://w.soundcloud.com/player/?url=https%3A//api.soundcloud.com/tracks/184045111&amp;auto_play=false&amp;hide_related=false&amp;show_comments=true&amp;show_user=true&amp;show_reposts=false&amp;visual=true"></iframe>';
	

$(document).ready(function() {

	function SVGMenu(el, options){
		this.el = el;
		this.init();
	}

	SVGMenu.prototype.init = function() {
		this.trigger = this.el.querySelector( 'button.menu__handle' );
		this.shapeEl = this.el.querySelector( 'div.morph-shape' );

		var s = Snap( this.shapeEl.querySelector( 'svg' ) );
		this.pathEl = s.select( 'path' );
		this.paths = {
			reset : this.pathEl.attr( 'd' ),
			open : this.shapeEl.getAttribute( 'data-morph-open' ),
			close : this.shapeEl.getAttribute( 'data-morph-close' )
		};

		this.isOpen = false;

		this.initEvents();
	};

	SVGMenu.prototype.initEvents = function() {
		this.trigger.addEventListener( 'click', this.toggle.bind(this) );
	};

	SVGMenu.prototype.toggle = function() {
		var self = this;

		if( this.isOpen ) {
			classie.remove( self.el, 'menu--anim' );
			setTimeout( function() { classie.remove( self.el, 'menu--open' );	}, 250 );
		}
		else {
			classie.add( self.el, 'menu--anim' );
			setTimeout( function() { classie.add( self.el, 'menu--open' );	}, 250 );
		}
		this.pathEl.stop().animate( { 'path' : this.isOpen ? this.paths.close : this.paths.open }, 350, mina.easeout, function() {
			self.pathEl.stop().animate( { 'path' : self.paths.reset }, 800, mina.elastic );
		} );
		
		this.isOpen = !this.isOpen;
	};

	new SVGMenu( document.getElementById( 'menu' ) );

	/******** Home Page FadeIn Effect ********/

	$('.home').fadeIn(1800);

	/******* Click to Fetch Music ********/

	$('.get_music').click(function(e){
		e.preventDefault();
		pos = $(this).data("pos");
		$('.media').html(bigsrc[pos]);
		$('.media').fadeIn();

		// For Displaying Play Buttons as Switches

		$('.get_music').removeClass('off');
		$('.song_title').removeClass('off');
   		$(this).addClass('off');
   		$('.song_title', this).addClass('off');
	});


	/******** Form Popup **********/

	$('.contact_link').click(function(e){
		e.preventDefault();
		$('.showcase').fadeIn(600);
		$('.drape').fadeIn(600);
		$('input').fadeIn(600);
		$('textarea').fadeIn(600);
	});

	$('.close').click(function(){
		$('.showcase').fadeOut(600);
		$('.drape').fadeOut(600);
		$('input').fadeOut(100);
		$('textarea').fadeOut(100);

	});

	$('.drape').click(function(){
		$('.showcase').fadeOut(600);
		$('.drape').fadeOut(600);
		$('input').fadeOut(100);
		$('textarea').fadeOut(100);
	});


	
	/********* Form Validation **********/


	$('.submit').click(function(e){
		e.preventDefault();

		var name = $('#name').val();
		var email = $('#email').val();
		var message = $('#message').val();

		var error = false;

		if(name.length < 3){
			$('#name').val('','');
			$('#name').attr('placeholder','Entrez un nom valid');
			$('#name').css('border','1px solid red');
			error = true;
		}else{
			$('#name').css('border','none');
			error = false;
		}

		
		function validateEmail(e){
			var filter = /^[\w\-\.\+]+\@[a-zA-Z0-9\.\-]+\.[a-zA-z0-9]{2,4}$/;
			if(filter.test(e)){
				return true;
			}
			else{
				return false;
			}
		
		}	

		if(validateEmail(email) == false){
			$('#email').val('','');
			$('#email').attr('placeholder','Entrez un courriel valid');
			$('#email').css('border','1px solid red');
		}else{
			$('#email').css('border','none');
		}

		if(error == false){
			$('#name').css('border','none');
			$('#name').attr('placeholder','');
			$('#email').css('border','none');
			$('#email').attr('placeholder','');
		};

		if(error == false){
			$.ajax({
				url:'getEmail.php',
				type:'POST',
				data:{
					Name:name,
					Email:email,
					Message:message
				},

				success:function(response){
					$('#form').html(response);
					$('.byebye').css('display', 'block');
				}

			});
		
		}
		
		$('.byebye').click(function(){
			$('.showcase').fadeOut(600);
			$('.drape').fadeOut(600);
			$('input').fadeOut(100);
			$('textarea').fadeOut(100);
		
		});
	

	});

});