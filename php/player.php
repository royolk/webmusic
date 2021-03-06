﻿<?php
	include "./include/headerplayer.php";
?>

<body>
	<?php
		include "./include/menuphp.php";
	?>
	<a id="logo">
        	<img src="../img/imgcool.gif" alt="Logo Tuto menu latéral jQuery" title="Logo Tuto menu latéral jQuery" class="title"/>
        </a>
        <a href="javascript:;" class="menu_btn"></a>       
        <div style="height:30px"></div>
        <!-- debut des articles -->
        <div id="articles">
            <!-- wrapper for the whole component --> <!-- conteneur du player audio -->
   	<div id="componentWrapper">
        
		<div class="playerHolder">
                 
                  <div class="player_controls">
                  	  <!-- previous -->
                      <div class="controls_prev"><img src='../img/prev.png' width='40' height='40' alt='controls_prev'/></div>
                      <!-- pause/play -->
                      <div class="controls_toggle"><img src='../img/play.png' width='50' height='50' alt='controls_toggle'/></div>
                      <!-- next -->
                      <div class="controls_next"><img src='../img/next.png' width='40' height='40' alt='controls_next'/></div>
                      
                 	  <!-- volume -->
                      <div class="player_volume"><img src='../img/volume.png' width='33' height='33' alt='player_volume'/></div>
                      <div class="volume_seekbar">
                         <div class="volume_bg"></div>
                         <div class="volume_level"></div>
                      </div>
                      
                      <!-- loop -->
                      <div class="player_loop"><img src='../img/loop_on.png' width='33' height='33' alt='player_loop'/></div>
                      <!-- shuffle -->
                      <div class="player_shuffle"><img src='../img/shuffle.png' width='33' height='33' alt='player_shuffle'/></div>
                  </div>
                  
                  <!-- progress -->
                  <div class="player_progress">
                      <div class="progress_bg"></div>
                      <div class="load_progress"></div>
                      <div class="play_progress"></div>
                  </div>
                 
                  <!-- song name -->
                  <div class="player_mediaName_Mask">
                 	  <div class="player_mediaName">Artist Name - Artist Title</div>
                  </div>
                  
                  <!-- song time -->
                  <div class="player_mediaTime">
                  	  <!-- current time and total time are separated so you can change the design if needed. -->
                  	  <div class="player_mediaTime_current">0:00&nbsp;-&nbsp;</div><div class="player_mediaTime_total">0:00</div>
                  </div>
                  
                  <!-- volume tooltip -->
                  <div class="player_volume_tooltip">
                      <div class="player_volume_tooltip_value">0</div>
                  </div>
                  
                  <!-- progress tooltip -->
                  <div class="player_progress_tooltip">
                    <div class="player_progress_tooltip_value">0:00&nbsp;/&nbsp;0:00</div>
                  </div>
             
		</div>
              
		<div class="playlistHolder">
                 <div class="componentPlaylist">
                	 <!-- playlist_inner: container for scroll -->
                     <div class="playlist_inner">
                     
                     	 <!-- List of playlists. NO EXTENSION for music file names! -->
                     
                         <!-- Playlist -->
                         <ul id='playlist1' data-type='local'>
                             <li class= "playlistItem" data-path="../audio/01-Latasha_Lee-Get_Away" ><a class="playlistNonSelected" href='#'>Latasha Lee - Get Away</a></li>
                             <li class= "playlistItem" data-path="../audio/02-Fall_Walk_Run-You_Are_You" ><a class="playlistNonSelected" href='#'>Fall Walk Run - You Are You</a></li>
                             <li class= "playlistItem" data-path="../audio/03-Cavashawn-Out_Of_My_Mind" ><a class="playlistNonSelected" href='#'>Cavashawn - Out Of My Mind</a></li>
                             <li class= "playlistItem" data-path="../audio/04-Cavashawn-Just_Because" ><a class="playlistNonSelected" href='#'>Cavashawn - Just Because</a></li>
                             <li class= "playlistItem" data-path="../audio/05-Mari_Huertas_Millan-Contigo" ><a class="playlistNonSelected" href='#'>Mari Huertas Millan - Contigo</a></li>
                             <li class= "playlistItem" data-path="../audio/06-Mari_Huertas_Millan-Solo_es_tiempo" ><a class="playlistNonSelected" href='#'>Mari Huertas Millan - Solo es tiempo</a></li>
                             <li class= "playlistItem" data-path="../audio/07-Mari_Huertas_Millan-Dime" ><a class="playlistNonSelected" href='#'>Mari Huertas Millan - Dime</a></li>  
                             <li class= "playlistItem" data-path="../audio/08-Mari_Huertas_Millan-Perdida_en_tu_mirada" ><a class="playlistNonSelected" href='#'>Mari Huertas Millan - Perdida en tu mirada</a></li>
                             <li class= "playlistItem" data-path="../audio/09-Mari_Huertas_Millan-Vamos_con_el_sol" ><a class="playlistNonSelected" href='#'>Mari Huertas Millan - Vamos con el sol</a></li>
                             <li class= "playlistItem" data-path="../audio/10-Mari_Huertas_Millan-Perseguir_un_sueo" ><a class="playlistNonSelected" href='#'>Mari Huertas Millan - Perseguir un sueo</a></li>  
                         </ul>
                         
                       
                     </div>
                 </div>
		</div>
             
             <!-- for parsing podcast feeds -->
             <div class="feedParser"></div>
         <!-- font calculations -->
       		 <div class="fontMeasure"></div>
    	</div>
       <!-- End of wrapper for the whole component --> <!-- fin du conteneur du player audio -->
            
    	</div><!-- #articles -->
		
        
    </div><!-- #page -->
	
</body>
</html>
