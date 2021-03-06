<?php 

return [
    'cash_flow' => [
        'index' => [
            'title' => 'Cash Flow',
            'page_title' => 'Cash Flow',
            'page_title_desc' => '',
        ],
    ],
    'cash' => [
        'index' => [
            'title' => 'Cash',
            'page_title' => 'Cash',
            'page_title_desc' => '',
            'header' => [
                'title' => 'Cash Lists',
            ],
            'table' => [
                'header' => [
                    'code' => 'Code',
                    'name' => 'Name',
                    'is_default' => 'Is Default',
                    'status' => 'Status',
                    'type' => '',
                ],
            ],
        ],
        'create' => [
            'title' => 'Cash',
            'page_title' => 'Cash',
            'page_title_desc' => '',
            'header' => [
                'title' => 'Create Cash',
            ],
        ],
        'edit' => [
            'title' => 'Cash',
            'page_title' => 'Cash',
            'page_title_desc' => '',
            'header' => [
                'title' => 'Edit Cash',
            ],
        ],
        'show' => [
            'title' => 'Cash',
            'page_title' => 'Cash',
            'page_title_desc' => '',
            'header' => [
                'title' => 'Show Cash',
            ],
        ],
        'field' => [
            'type' => 'Type',
            'code' => 'Code',
            'name' => 'Name',
            'is_default' => 'Is Default',
            'status' => 'Status',
        ],
    ],
    'cost' => [
        'category' => [
            'index' => [
                'title' => 'Cost Category',
                'page_title' => 'Cost Category',
                'page_title_desc' => '',
                'header' => [
                    'title' => 'Cost Category List',
                ],
                'table' => [
                    'header' => [
                        'group' => 'Group',
                        'name' => 'Name',
                    ],
                ],
            ],
            'create' => [
                'title' => 'Cost Category',
                'page_title' => 'Cost Category',
                'page_title_desc' => '',
                'header' => [
                    'title' => 'Create Cost Category',
                ],
            ],
            'field' => [
                'group' => 'Group',
                'name' => 'Name',
            ],
            'edit' => [
                'title' => 'Cost Category',
                'page_title' => 'Cost Category',
                'page_title_desc' => '',
                'header' => [
                    'title' => 'Edit Cost Category',
                ],
            ],
            'show' => [
                'title' => 'Cost Category',
                'page_title' => 'Cost Category',
                'page_title_desc' => '',
                'header' => [
                    'title' => 'Show Cost Category',
                ],
            ],
        ],
        'index' => [
            'title' => 'Cost',
            'page_title' => 'Cost',
            'page_title_desc' => '',
            'header' => [
                'title' => 'Cost List',
            ],
            'table' => [
                'header' => [
                    'date' => 'Date',
                    'source_account' => 'Source Account',
                    'cost_category' => 'Cost Category',
                    'amount' => 'Amount',
                    'remarks' => 'Remarks',
                ],
            ],
        ],
        'create' => [
            'title' => 'Cost',
            'page_title' => 'Cost',
            'page_title_desc' => '',
            'header' => [
                'title' => 'Create Cost',
            ],
        ],
        'field' => [
            'date' => 'Date',
            'name' => 'Name',
            'source_account' => 'Source Account',
            'category' => 'Category',
            'amount' => 'Amount',
            'remarks' => 'Remarks',
        ],
        'edit' => [
            'title' => 'Cost',
            'page_title' => 'Cost',
            'page_title_desc' => '',
        ],
    ],
    'revenue' => [
        'category' => [
            'index' => [
                'title' => 'Revenue Category',
                'page_title' => 'Revenue Category',
                'page_title_desc' => '',
                'header' => [
                    'title' => 'Revenue Category Lists',
                ],
                'table' => [
                    'header' => [
                        'group' => 'Group',
                        'name' => 'Name',
                    ],
                ],
            ],
            'create' => [
                'title' => 'Revenue Category',
                'page_title' => 'Revenue Category',
                'page_title_desc' => '',
                'header' => [
                    'title' => 'Create Revenue Category',
                ],
            ],
            'field' => [
                'group' => 'Group',
                'name' => 'Name',
            ],
            'edit' => [
                'title' => 'Revenue Category',
                'page_title' => 'Revenue Category',
                'page_title_desc' => '',
                'header' => [
                    'title' => 'Edit Revenue Category',
                ],
            ],
            'show' => [
                'title' => 'Revenue Category',
                'page_title' => 'Revenue Category',
                'page_title_desc' => '',
                'header' => [
                    'title' => 'Show Revenue Category',
                ],
            ],
        ],
        'index' => [
            'title' => 'Revenue',
            'page_title' => 'Revenue',
            'page_title_desc' => '',
            'header' => [
                'title' => 'Revenue Lists',
            ],
            'table' => [
                'header' => [
                    'date' => 'Date',
                    'destination_account' => 'Destination Account',
                    'cost_category' => 'Cost Category',
                    'amount' => 'Amount',
                    'remarks' => 'Remarks',
                ],
            ],
        ],
        'edit' => [
            'title' => 'Revenue',
            'page_title' => 'Revenue',
            'page_title_desc' => '',
            'header' => [
                'title' => 'Edit Revenue',
            ],
            'field' => [
                'date' => 'Date',
                'name' => 'Name',
                'source_account' => 'Source Account',
                'category' => 'Category',
                'amount' => 'Amount',
                'remarks' => 'Remarks',
            ],
        ],
        'field' => [
            'date' => 'Date',
            'name' => 'Name',
            'source_account' => 'Source Account',
            'category' => 'Category',
            'amount' => 'Amount',
            'remarks' => 'Remarks',
        ],
        'create' => [
            'page_title' => 'Revenue',
            'page_title_desc' => 'Revenue',
            'header' => [
                'title' => 'Create Revenue',
            ],
            'field' => [
                'date' => 'Date',
                'name' => 'Name',
                'source_account' => 'Source Account',
                'category' => 'Category',
                'amount' => 'Amount',
                'remarks' => 'Remarks',
            ],
        ],
    ],
    'capital' => [
        'deposit' => [
            'title' => 'Deposit',
            'page_title' => 'Deposit',
            'page_title_desc' => '',
            'header' => [
                'title' => 'Capital Deposit',
            ],
            'field' => [
                'date' => 'Date',
                'destination_account' => 'Destination Account',
                'amount' => 'Amount',
                'remarks' => 'Remarks',
            ],
            'index' => [
                'title' => 'Deposit',
                'page_title' => 'Deposit',
                'page_title_desc' => '',
                'header' => [
                    'title' => 'Capital Deposit Lists',
                ],
                'table' => [
                    'header' => [
                        'date' => 'Date',
                        'destination_account' => 'Destination Account',
                        'amount' => 'Amount',
                        'remarks' => 'Remarks',
                    ],
                ],
            ],
        ],
        'withdrawal' => [
            'title' => 'Withdrawal',
            'page_title' => 'Withdrawal',
            'page_title_desc' => '',
            'header' => [
                'title' => 'Capital Withdrawal',
            ],
            'field' => [
                'date' => 'Date',
                'source_account' => 'Source Account',
                'amount' => 'Amount',
                'remarks' => 'Remarks',
            ],
            'index' => [
                'title' => 'Withdrawal',
                'page_title' => 'Withdrawal',
                'page_title_desc' => '',
                'header' => [
                    'title' => 'Capital Withdrawal Lists',
                ],
                'table' => [
                    'header' => [
                        'date' => 'Date',
                        'source_account' => 'Source Account',
                        'amount' => 'Amount',
                        'remarks' => 'Remarks',
                    ],
                ],
            ],
        ],
    ],
];