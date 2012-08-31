<?php if (!defined('APPLICATION')) exit();
?>
<style type="text/css">
.Configuration {
   margin: 0 20px 20px;
   background: #f5f5f5;
   float: left;
}
.ConfigurationForm {
   padding: 20px;
   float: left;
}
#Content form .ConfigurationForm ul {
   padding: 0;
}
#Content form .ConfigurationForm input.Button {
   margin: 0;
}
.ConfigurationHelp {
   border-left: 1px solid #aaa;
   margin-left: 340px;
   padding: 20px;
}
.ConfigurationHelp strong {
    display: block;
}
.ConfigurationHelp img {
   width: 99%;
}
.ConfigurationHelp a img {
    border: 1px solid #aaa;
}
.ConfigurationHelp a:hover img {
    border: 1px solid #777;
}
input.CopyInput {
   font-family: monospace;
   color: #000;
   width: 240px;
   font-size: 12px;
   padding: 4px 3px;
}
#Form_Secret {
   width: 280px;
}
#Form_ApplicationID {
   width: 120px;  
}
</style>
<h1><?php echo $this->Data('Title'); ?></h1>
<?php
echo $this->Form->Open();
echo $this->Form->Errors();
?>
<div class="Info">
   <?php echo T('Accounts9 Connect allows users to sign in using their Accounts9 account.', 'Accounts9 Connect allows users to sign in using their Accounts9 account. <b>You must register your application with Accounts9 for this plugin to work.</b>'); ?>
</div>
<div class="Configuration">
   <div class="ConfigurationForm">
      <ul>
         <li>
            <?php
               echo $this->Form->Label('Application ID', 'ApplicationID');
               echo $this->Form->TextBox('ApplicationID');
            ?>
         </li>
         <li>
            <?php
               echo $this->Form->Label('Application Secret', 'Secret');
               echo $this->Form->TextBox('Secret');
            ?>
         </li>
      </ul>
      <?php echo $this->Form->Button('Save', array('class' => 'Button SliceSubmit')); ?>
   </div>
</div>
<?php 
   echo $this->Form->Close();
