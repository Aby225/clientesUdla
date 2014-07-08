    <!--<div class="slider-bootstrap"><!-- start slider -->
    	<!--<div class="slider-wrapper theme-default">
            <div id="slider-nivo" class="nivoSlider">
                <img src="<?php echo Yii::app()->theme->baseUrl;?>/img/slider/flickr/s10.jpg" data-thumb="<?php echo Yii::app()->theme->baseUrl;?>/img/slider/flickr/s10.jpg" alt="" title="" />
                <img src="<?php echo Yii::app()->theme->baseUrl;?>/img/slider/flickr/s11.jpg" data-thumb="<?php echo Yii::app()->theme->baseUrl;?>/img/slider/flickr/s11.jpg" alt="" title="" />
            </div>
        </div>

    </div>--> <!-- /slider -->
    
    
    <div class="shout-box">
        <div class="shout-text">
          <h1>Bienvenid@</h1>
         
        </div>

    </div>

<div class="shout-text1">
  <?php $u = new User;
        $u->save(false);

  ?>
  <h1><?php echo CHtml::link('Contestar Encuesta', array('votingHistory/create', 'pId'=>18, 'uId'=>$u->primaryKey));?></h1>
  
</div>


    	<!--<div class="row-fluid">-->
        
    
        
    <script type="text/javascript" src="<?php echo Yii::app()->theme->baseUrl;?>/js/nivo-slider/jquery.nivo.slider.pack.js"></script>
    
     <script type="text/javascript">
    $(function() {
        $('#slider-nivo').nivoSlider({
			effect: 'boxRandom',
			manualAdvance:false,
			controlNav: false
			});
    });
    </script> <!--<script type="text/javascript">
    $(document).ready(function() {
        $('#slider-nivo2').nivoSlider();
    });
    </script>-->