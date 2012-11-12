<?php if (is_allowed('Settings', 'edit')): ?>
<div id="section-nav">
<?php
    $navArray = array(
        array(
            'label' => __('General'),
            'uri' => url('settings/edit-settings')
        ),
        array(
            'label' => __('Security'),
            'uri' => url('settings/edit-security'),
            'resource' => 'Security',
            'privilege' => 'edit'
        ),
        array(
            'label' => __('Search'),
            'uri' => url('settings/edit-search')
        ),
        array(
            'label' => __('Element Sets'),
            'uri' => url('element-sets'),
            'resource' => 'ElementSets',
            'privilege' => 'browse'
        ),
    );
    echo nav($navArray, 'admin_navigation_settings');
?>
</div>
<?php endif ?>
