<?php

$class = 'form-captcha';
$class .= $this->getElement('required') ? 'form-is-required ' : '';
$notice = $this->getElement('notice') != '' ? '<p class="help-block">' . $this->getElement('notice') . '</p>' : '';

$class_group = trim('form-group ' . $class . $this->getWarningClass());
$class_control = trim('form-control');

?>
<div class="<?php echo $class_group ?>">
    <label class="uk-form-label" for="<?php echo $this->getFieldId() ?>"><?php echo $this->getLabelStyle($this->getElement(1)) ?>
    <div class="input-group">
        <span class="input-group-addon uk-margin-top"><img id="<?php echo $this->getFieldId() ?>-captcha" src="<?php echo $link ?>" onclick="javascript:this.src='<?php echo $link ?>&'+Math.random();" alt="CAPTCHA" /></span>
        <input class="form-control uk-input uk-margin-small-top" type="text" name="<?php echo $this->getFieldName() ?>" id="<?php echo $this->getFieldId() ?>" value="" maxlength="5" size="5" />
        <span class="input-group-btn"><a class="btn btn-default" href="javascript:void();" onclick="document.getElementById('<?php echo $this->getFieldId() ?>-captcha').src='<?php echo $link ?>&'+Math.random(); return false;">Reload</a></span>
    </div>
    </label>
    <?php echo $notice ?>
</div>
