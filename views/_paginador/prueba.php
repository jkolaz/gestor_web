<?php if(isset($this->_paginacion)): ?>

<?php if($this->_paginacion['primero']): ?>
	
	<a href="<?php echo $link . $this->_paginacion['primero']; ?>">Primero</a>
	
<?php else: ?>
	
	<!--<span class="disabled">&#xf053;</span>
        <span class="current">1</span>-->

<?php endif; ?>

&nbsp;

<?php if($this->_paginacion['anterior']): ?>
	
	<a href="<?php echo $link . $this->_paginacion['anterior']; ?>">Anterior</a>
	
<?php else: ?>
	
	<span class="current">Anterior</span>

<?php endif; ?>

&nbsp;

<?php for($i = 0; $i < count($this->_paginacion['rango']); $i++): ?>
	
	<?php if($this->_paginacion['actual'] == $this->_paginacion['rango'][$i]): ?>
	
<span class="current"><?php echo $this->_paginacion['rango'][$i]; ?></span>
	
	<?php else: ?>
		
		<a href="<?php echo $link . $this->_paginacion['rango'][$i]; ?>">
			<?php echo $this->_paginacion['rango'][$i]; ?>
		</a>&nbsp;
	
	<?php endif; ?>
	
<?php endfor; ?>


&nbsp;

<?php if($this->_paginacion['siguiente']): ?>
	
	<a href="<?php echo $link . $this->_paginacion['siguiente']; ?>">Siguiente</a>
	
<?php else: ?>
	
        <!--<span class="current">Siguiente</span>-->

<?php endif; ?>

&nbsp;

<?php if($this->_paginacion['ultimo']): ?>
	
	<a href="<?php echo $link . $this->_paginacion['ultimo']; ?>">Ultimo</a>
	
<?php else: ?>
	
        <span class="current">Ultimo</span>

<?php endif; ?>
	
<?php endif; ?>