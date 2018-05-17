<?php date_default_timezone_set('America/Sao_Paulo'); ?>
Vendedor {{ Auth::user()->name }} logou às <?php echo date('H:i'); ?> dia <?php echo date('d/m/Y'); ?>
