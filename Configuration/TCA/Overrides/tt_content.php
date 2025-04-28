<?php

defined('TYPO3') or die();

call_user_func(function () {
    $key = 'skiptocontent_skipper';

    // Adds the content element to the "Type" dropdown
    \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addTcaSelectItem(
        'tt_content',
        'CType',
        [
            'label' => 'LLL:EXT:skip_to_content/Resources/Language/locallang.xlf:ctype.skipper',
            'value' => $key,
            'group' => 'default',
        ],
        'textmedia',
        'after',
    );

    $GLOBALS['TCA']['tt_content']['types'][$key] = [
        'showitem' => '
            header;Not shown in frontend,
        ',
    ];
});
