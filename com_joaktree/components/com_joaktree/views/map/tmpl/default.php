<?php 
// no direct access
defined('_JEXEC') or die('Restricted access');  

JHtml::_('formbehavior.chosen', 'select');

?>


<?php if ($this->map->params['service'] == 'staticmap') { ?>	 
	<div id="jt-content">
		<?php if ($this->lists['userAccess']) { ?> 	
			<img 
				id="<?php echo $this->lists[ 'mapHtmlId' ]; ?>" 
				src="<?php echo $this->mapview; ?>" 
				alt="<?php echo JText::_( 'JT_NOACCESS' ); ?>"
			/>
			<?php echo $this->lists[ 'uicontrol' ]; ?>

		<?php } else { ?>
			<!-- user has NO access to information -->
			<div class="jt-content-th" >
				<div class="jt-noaccess"><?php echo JText::_( 'JT_NOACCESS' ); ?></div>
			</div>
		<?php } ?>
				
		<div class="jt-stamp"><?php echo $this->lists[ 'CR' ]; ?></div>
		
	</div><!-- jt-content -->
<?php } ?>

<?php if ($this->map->params['service'] == 'interactivemap') { ?>
	<?php $width  = ($this->map->params['width']) ? 'width: '.(int) $this->map->params['width'].'px; ' : '';?>
	<?php $height = 'height: '.(int) $this->map->params['height'].'px; '; ?>
	<div style="<?php echo $width; ?> <?php echo $height; ?>">
		<iframe 
		    id="<?php echo $this->lists[ 'mapHtmlId' ]; ?>"
			src="<?php echo $this->lists[ 'href' ]; ?>" 
			height="<?php echo (int) $this->map->params['height'];?>px"
			style="border:1px solid #dddddd;"
		>
		</iframe>
	</div>	 
	<div><?php echo $this->lists[ 'uicontrol' ]; ?></div>
	<div class="jt-stamp"><?php echo $this->lists[ 'CR' ]; ?></div>
<?php } ?>

<?php echo JHtml::_('form.token'); ?>	
	