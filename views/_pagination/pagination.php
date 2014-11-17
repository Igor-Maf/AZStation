<?php if(isset($this->_paginacion)): ?>
    <?php if($this->_paginacion['primero']): ?>
        <a href="<?php echo $link . $this->_paginacion['primero']; ?>">&Lt;</a></li>
    <?php else: ?>
        <span>&Lt;</span>
    <?php endif; ?>

    <?php if($this->_paginacion['anterior']): ?>
        <a href="<?php echo $link . $this->_paginacion['anterior']; ?>">&lt;</a>
    <?php else: ?>
        <span>&lt;</span>
    <?php endif; ?>

    <?php foreach ($this->_paginacion['rango'] as $_rango): ?>
        <?php if ($this->paginacion['actual'] == $_rango): ?>
            <span class="actual"><?php echo $_rango; ?></span>
        <?php else: ?>
            <a href="<?php echo $link . $_rango; ?>"><?php echo $_rango; ?></a>
        <?php endif; ?>
    <?php endforeach; ?>
        

    <?php if($this->_paginacion['siguiente']): ?>
        <a href="<?php echo $link . $this->_paginacion['siguiente']; ?>">&gt;</a>
    <?php else: ?>
        <span>&gt;</span>
    <?php endif; ?>

    <?php if($this->_paginacion['ultimo']): ?>
        <a href="<?php echo $link . $this->_paginacion['ultimo']; ?>">&Gt;</a>
    <?php else: ?>
        <span>&Gt;</span>
    <?php endif; ?>
<?php endif; ?>