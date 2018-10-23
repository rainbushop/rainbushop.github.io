$(document).ready(function() {

	//set thoi gian cho no chay
	thoigian = setInterval(function(){
		var sau = $('.active').next();
		var vitri = $('.xanh').index()+1;
		//xu li nut phai
		if(vitri == $('.button-dot ul li').length)
		{
			vitri=0;
		}
		$('.button-dot ul li').removeClass('xanh');
		$('.button-dot ul li:nth-child('+(vitri+1)+')').addClass('xanh');

		//xu li slide
		if(sau.length == 0 )
		{
			$('.active').addClass('diquatrai').one('webkitAnimationEnd', function(event) {
			/* Act on the event */
			$('.diquatrai').removeClass('diquatrai').removeClass('active');

			$('.slideanh .slideanhimg:first-child').addClass('divaotrai').one('webkitAnimationEnd', function(event) {
				/* Act on the event */

				$('.divaotrai').addClass('active').removeClass('divaotrai');
			});
		});;

		}


		$('.active').addClass('diquatrai').one('webkitAnimationEnd', function(event) {
			/* Act on the event */
			
			$('.diquatrai').removeClass('diquatrai');
		});;
		sau.addClass('divaotrai').one('webkitAnimationEnd', function(event) {
			/* Act on the event */
			$('.active').removeClass('active');
			$('.divaotrai').addClass('active').removeClass('divaotrai');
		});;
	},4000)
	// nút right
	$('.right').click(function(event) {
		/* Act on the event */
		// xoa chuyen dong khi click vao
		clearInterval(thoigian);
		var sau = $('.active').next();
		var vitri = $('.xanh').index()+1;
		//xu li nut phai
		if(vitri == $('.button-dot ul li').length)
		{
			vitri=0;
		}
		$('.button-dot ul li').removeClass('xanh');
		$('.button-dot ul li:nth-child('+(vitri+1)+')').addClass('xanh');

		//xu li slide
		console.log(sau.length);

		if(sau.length == 0 )
		{
			$('.active').addClass('diquatrai').one('webkitAnimationEnd', function(event) {
			/* Act on the event */
			$('.diquatrai').removeClass('diquatrai').removeClass('active');

			$('.slideanh .slideanhimg:first-child').addClass('divaotrai').one('webkitAnimationEnd', function(event) {
				/* Act on the event */

				$('.divaotrai').addClass('active').removeClass('divaotrai');
			});
		});;

		}


		$('.active').addClass('diquatrai').one('webkitAnimationEnd', function(event) {
			/* Act on the event */
			
			$('.diquatrai').removeClass('diquatrai');
		});;
		sau.addClass('divaotrai').one('webkitAnimationEnd', function(event) {
			/* Act on the event */
			$('.active').removeClass('active');
			$('.divaotrai').addClass('active').removeClass('divaotrai');
		});;
	});
	// nut pre
	$('.left').click(function(event) {
		/* Act on the event */
		clearInterval(thoigian);
		var truoc = $('.active').prev();
		var vitri = $('.xanh').index()+1;
		//xu li nut trai
		if(vitri == 1)
		{
			vitri = $('.button-dot ul li').length +1;
		}
		$('.button-dot ul li').removeClass('xanh');
		$('.button-dot ul li:nth-child('+(vitri-1)+')').addClass('xanh');

		if(truoc.length == 1){
		$('.active').addClass('diquaphai').one('webkitAnimationEnd', function(event) {
			/* Act on the event */
			$('.diquaphai').removeClass('diquaphai').removeClass('active');

			truoc.addClass('divaophai').one('webkitAnimationEnd', function(event) {
				/* Act on the event */
				$('.divaophai').addClass('active').removeClass('divaophai');
			});
		});;
	}else {
		$('.active').addClass('diquaphai').one('webkitAnimationEnd', function(event) {
			/* Act on the event */
			$('.diquaphai').removeClass('diquaphai').removeClass('active');

			$('.slideanh .slideanhimg:last-child').addClass('divaophai').one('webkitAnimationEnd', function(event) {
				/* Act on the event */
				$('.divaophai').addClass('active').removeClass('divaophai');
			});
		});;
		
	}
	});
	// jquery cho nút chấm
	$('.button-dot ul li').click(function(event) {
		clearInterval(thoigian);
		/* Act on the event */

		// add class button-dot
		$('.button-dot ul li').removeClass('xanh');
		$(this).addClass('xanh');
		var present = $(this).index() +1;

		//chuyen anh 
		//cho silde hien tai bien mat
		$('.active').addClass('diquaphai').one('webkitAnimationEnd', function(event) {
			/* Act on the event */
			$('.diquaphai').removeClass('diquaphai').removeClass('active');

			$('.slideanh .slideanhimg:nth-child('+present+')').addClass('divaophai').one('webkitAnimationEnd', function(event) {
				/* Act on the event */

				$('.divaophai').addClass('active').removeClass('divaophai');
			});
		});;
	});




});







