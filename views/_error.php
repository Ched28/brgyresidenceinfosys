<?php

/**
 * @var $exception \Exception
 */
?>
<div class="err-msg d-flex text-center p-5 m-auto flex-column">
<div>
   <i class="fa-solid fa-person-military-pointing" style="font-size: 10em"></i>
</div>
    <br>
    <br>
    <div>

<h1><?php echo $exception->getCode() ?> -  <?php echo $exception->getMessage()?></h1>
    </div>
</div>