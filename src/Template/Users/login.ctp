<div class="index large-4 medium-4 large-offset medium-offset-4 columns">
    <div class="panel">
        <h2 class="text-center">Login</h2>
        <?= $this->Form->create();?>
        <?= $this->Form->input('user')?>
        <?= $this->Form->input('password', array('type' => 'password'))?>
        <?= $this->Form->submit('Login', array('class' => 'button'))?>
        <?= $this->Form->end();?>
    </div>
    
</div>