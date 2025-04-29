<?php

defined('TYPO3') or die();

call_user_func(function () {
    \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addStaticFile(
        'skip_to_content',
        'Configuration/TypoScript/',
        'Skip To Content (Add after your Site Package)'
    );
});
