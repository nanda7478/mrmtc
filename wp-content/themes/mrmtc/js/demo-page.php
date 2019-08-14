<?php
/*
 Display Template Name: Demo Page
*/
 get_header();
 ?>
 <style>
 .room-carousel-nav {
  background-color: rgba(0, 0, 0, 0.85);
  display: flex;
  transition: transform 350ms ease 0s, -webkit-transform 350ms ease 0s;
}
.room-carousel-nav .btn-close {
  display: block !important;
}
.room-carousel-nav .btn-close {
  background-color: rgba(0, 0, 0, 0.85);
  border: 0 none;
  border-top-left-radius: 0.25rem;
  border-top-right-radius: 0.25rem;
  color: #fff;
  cursor: pointer;
  display: none;
  line-height: 2;
  padding: 0;
  position: absolute;
  right: 26px;
  width: 42px;
}
body.room-content-hide .room-content {
  opacity: 0;
  transform: translate3d(0px, 10px, 0px);
  visibility: hidden;
}

body.room-content-hide .room-carousel-nav {
  transform: translate3d(-50%, 0px, 0px);
}

.room-carousel-nav {
  border-top-left-radius: 0.25rem;
  bottom: 0;
  left: 50%;
  max-width: 100%;
  padding-left: 15px;
  padding-right: 15px;
  position: fixed;
  transform: translate3d(-50%, 100%, 0px);
  width: 1140px;
  z-index: 10;
}
 </style>
 <script type='text/javascript' src='http://code.jquery.com/jquery-1.7.1.js'></script>
 <script type="text/javascript">
 	$(document).ready(function(){

 		$('#hide_room_content').click(function(){

 			$('body').addClass('room-content-hide');
 		})
 	})

 	$(document).ready(function(){

 		$('#toggle_room_content').click(function(){

 			$('body').removeClass('room-content-hide');
 		})
 	})
 </script>
<main class="container">
<div class="room-carousel swiper-container swiper-container-fade swiper-container-horizontal">
<div class="swiper-wrapper">
<div class="swiper-slide swiper-slide-active" style="width: 1226px; opacity: 1; transform: translate3d(0px, 0px, 0px);"><img src="http://www.viroth-villa.com/wp-content/uploads/2018/06/VIROTHS_2018_W_013.jpg" class="img-cover" alt="" srcset="http://www.viroth-villa.com/wp-content/uploads/2018/06/VIROTHS_2018_W_013.jpg 1800w, http://www.viroth-villa.com/wp-content/uploads/2018/06/VIROTHS_2018_W_013-300x200.jpg 300w, http://www.viroth-villa.com/wp-content/uploads/2018/06/VIROTHS_2018_W_013-768x512.jpg 768w, http://www.viroth-villa.com/wp-content/uploads/2018/06/VIROTHS_2018_W_013-1024x683.jpg 1024w, http://www.viroth-villa.com/wp-content/uploads/2018/06/VIROTHS_2018_W_013-600x400.jpg 600w" sizes="(max-width: 1800px) 100vw, 1800px" width="1800" height="1201">
</div>
</div>
<span class="swiper-notification" aria-live="assertive" aria-atomic="true">
</span>
</div>
<div class="room-carousel-nav">
<div class="room-title">
<div class="title">Deluxe Double or Twin Room</div>
<div class="sub-title">King size or Twin bed</div>
</div>
<div class="room-thumbnails">
<ul class="list-rooms dragscroll">
<li>
<a href="#">
<img src="http://www.viroth-villa.com/wp-content/uploads/2018/06/VIROTHS_2018_W_013-80x60.jpg" class="attachment-80x60 size-80x60" alt="" width="80" height="60">
</a>
</li>
</ul>
</div> 
<button class="btn-close" id="toggle_room_content"><i class="icon far fa-angle-up"></i></button>
</div>
<div class="room-container">
<div class="room-content">
<div class="room-detail">
<h1 class="room-title font-mavenpro">Deluxe Double or Twin Room</h1>
<div class="row gutters-10">
<div class="col-md-3 d-none d-lg-block">
<div class="room-thumbnail">
 <img src="http://www.viroth-villa.com/wp-content/uploads/2018/06/VIROTHS_2018_P_013-600x400.jpg" class="attachment-photo size-photo" alt="" srcset="http://www.viroth-villa.com/wp-content/uploads/2018/06/VIROTHS_2018_P_013-600x400.jpg 600w, http://www.viroth-villa.com/wp-content/uploads/2018/06/VIROTHS_2018_P_013-300x200.jpg 300w, http://www.viroth-villa.com/wp-content/uploads/2018/06/VIROTHS_2018_P_013-768x512.jpg 768w, http://www.viroth-villa.com/wp-content/uploads/2018/06/VIROTHS_2018_P_013-1024x683.jpg 1024w" sizes="(max-width: 600px) 100vw, 600px" width="600" height="400">
 </div>
 </div>
 <div class="col-12 col-md-8 col-lg-5">
 <div class="room-description">
 <p>Deluxe rooms offer 60’s-inspired design, polished cement &amp; tiled floors, the finest linen, and an elegant terrazzo bathroom. Rooms are available with king size bed or twin Beds.</p>
 <p>Each room is tastefully decorated with vintage ceramics and objects d’art from Cambodia.</p>
 </div>
 </div>
 <div class="col-12 col-md-4 col-lg-4">
 <div class="room-features">
 <h2 class="title font-mavenpro">Room Features</h2>
 <ul>
 <li>LCD TV 32"</li>
 <li>Complimentary WIFI</li>
 <li>Air-conditioning</li>
 </ul>
 </div>
 </div>
 </div>
 </div>
  <button class="btn-close d-none d-lg-block" id="hide_room_content"><i class="fal fa-times"></i> Hide content</button>
  </div>
  </div>
  </main>

 <?php
 get_footer();
 ?>