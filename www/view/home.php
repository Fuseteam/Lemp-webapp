<?php
    $form=new model\form('columns',array('Name'=>'text','Type'=>'text'));
?>
<form id="form" class="form element-block" method="POST" action="ajax">
    <div class="form-fields">
    <?=$form->formInputFields()?>
    '</div>
    <input class="btn btn-dark my-2 my-sm-0 save-btn" data-table="form" value="save" type="submit">
    <input class="btn btn-secondary my-2 my-sm-0 reset-btn" value="reset" type="reset">
</form>
<div class="table-buttons">
    <button class="btn btn-secondary my-2 my-sm-0 button" data-table="form" value="select">show latest data</button>
    <button class="btn btn-secondary my-2 my-sm-0 button" value="print">pdf</button>
    <button class="btn btn-secondary my-2 my-sm-0 button" data-table="form" value="destroy">clear</button>
</div>
